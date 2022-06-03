<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\session;


use pocketmine\player\Player;
use Skyblocks\DaDevGuy\SkyBlock;

class SessionLocator {

    public static function getSession(Player $player): Session {
        return Sky\pocketmine\block\BlockLegacyIds::getInstance()->getSessionManager()->getSession($player);
    }

    public static function getOfflineSession(string $username): OfflineSession {
        return Sky\pocketmine\block\BlockLegacyIds::getInstance()->getSessionManager()->getOfflineSession($username);
    }

    public static function isSessionOpen(Player $player): bool {
        return Sky\pocketmine\block\BlockLegacyIds::getInstance()->getSessionManager()->isSessionOpen($player);
    }

}