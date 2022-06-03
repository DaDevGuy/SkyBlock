<?php

declare(strict_types=1);

namespace Skyblocks\DaDevGuy\command\presets;


use Skyblocks\DaDevGuy\command\IslandCommand;
use Skyblocks\DaDevGuy\command\IslandCommandMap;
use Skyblocks\DaDevGuy\session\Session;
use Skyblocks\DaDevGuy\session\SessionLocator;
use Skyblocks\DaDevGuy\SkyBlock;
use Skyblocks\DaDevGuy\utils\Invitation;
use Skyblocks\DaDevGuy\utils\message\MessageContainer;

class InviteCommand extends IslandCommand {

    /** @var SkyBlock */
    private $plugin;

    public function __construct(IslandCommandMap $map) {
        $this->plugin = $map->getPlugin();
    }

    public function getName(): string {
        return "invite";
    }

    public function getAliases(): array {
        return ["inv"];
    }

    public function getUsageMessageContainer(): MessageContainer {
        return new MessageContainer("INVITE_USAGE");
    }

    public function getDescriptionMessageContainer(): MessageContainer {
        return new MessageContainer("INVITE_DESCRIPTION");
    }

    public function onCommand(Session $session, array $args): void {
        if($this->checkOfficer($session)) {
            return;
        } elseif(!isset($args[0])) {
            $session->sendTranslatedMessage(new MessageContainer("INVITE_USAGE"));
            return;
        } elseif(count($session->getIsland()->getMembers()) >= $session->getIsland()->getSlots()) {
            $island = $session->getIsland();
            $next = $island->getNextCategory();
            if($next != null) {
                $session->sendTranslatedMessage(new MessageContainer("ISLAND_IS_FULL_BUT_YOU_CAN_UPGRADE", [
                    "next" => $next
                ]));
            } else {
                $session->sendTranslatedMessage(new MessageContainer("ISLAND_IS_FULL"));
            }
            return;
        }
        $player = $this->plugin->getServer()->getPlayer($args[0]);
        if($player == null) {
            $session->sendTranslatedMessage(new MessageContainer("NOT_ONLINE_PLAYER", [
                "name" => $args[0]
            ]));
            return;
        }
        $playerSession = SessionLocator::getSession($player);
        if($this->checkClone($session, $playerSession)) {
            return;
        } elseif($playerSession->hasIsland()) {
            $session->sendTranslatedMessage(new MessageContainer("CANNOT_INVITE_BECAUSE_HAS_ISLAND", [
                "name" => $player->getName()
            ]));
            return;
        }
        Invitation::send($session, $playerSession);
    }

}