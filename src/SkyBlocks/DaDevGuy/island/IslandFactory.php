<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\island;


use pocketmine\level\Level;
use Skyblocks\DaDevGuy\event\island\IslandCreateEvent;
use Skyblocks\DaDevGuy\event\island\IslandDisbandEvent;
use Skyblocks\DaDevGuy\island\generator\IslandGenerator;
use Skyblocks\DaDevGuy\session\Session;
use Skyblocks\DaDevGuy\SkyBlock;
use Skyblocks\DaDevGuy\utils\message\MessageContainer;

class IslandFactory {

    public static function createIslandWorld(string $identifier, string $type): Level {
        $skyblock = SkyBlock::getInstance();

        $generatorManager = $skyblock->getGeneratorManager();
        if($generatorManager->isGenerator($type)) {
            $generator = $generatorManager->getGenerator($type);
        } else {
            $generator = $generatorManager->getGenerator("Basic");
        }

        $server = $skyblock->getServer();
        $server->generateLevel($identifier, null, $generator);
        $server->loadLevel($identifier);
        $level = $server->getLevelByName($identifier);
        /** @var IslandGenerator $generator */
        $level->setSpawnLocation($generator::getWorldSpawn());

        return $level;
    }

    public static function createIslandFor(Session $session, string $type): void {
        $identifier = uniqid("sb-");
        $islandManager = SkyBlock::getInstance()->getIslandManager();

        $islandManager->openIsland($identifier, [$session->getOfflineSession()], true, $type,
            self::createIslandWorld($identifier, $type), 0);

        $session->setIsland($island = $islandManager->getIsland($identifier));
        $session->setRank(RankIds::FOUNDER);
        $session->setLastIslandCreationTime(microtime(true));
        $session->getPlayer()->teleport($island->getSpawnLocation());

        $session->save();
        $island->save();

        (new IslandCreateEvent($island))->call();
    }

    public static function disbandIsland(Island $island): void {
        foreach($island->getLevel()->getPlayers() as $player) {
            $player->teleport($player->getServer()->getDefaultLevel()->getSpawnLocation());
        }
        foreach($island->getMembers() as $offlineMember) {
            $onlineSession = $offlineMember->getOnlineSession();
            if($onlineSession != null) {
                $onlineSession->setIsland(null);
                $onlineSession->setRank(RankIds::MEMBER);
                $onlineSession->save();
                $onlineSession->sendTranslatedMessage(new MessageContainer("ISLAND_DISBANDED"));
            } else {
                $offlineMember->setIslandId(null);
                $offlineMember->setRank(RankIds::MEMBER);
                $offlineMember->save();
            }
        }
        $island->setMembers([]);
        $island->save();
        SkyBlock::getInstance()->getIslandManager()->closeIsland($island);
        (new IslandDisbandEvent($island))->call();
    }

}