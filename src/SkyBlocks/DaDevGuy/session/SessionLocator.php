<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\session;


use pocketmine\Player;
use Skyblocks\DaDevGuy\SkyBlock;

class SessionLocator {

    public static function getSession(Player $player): Session {
        return SkyBlock::getInstance()->getSessionManager()->getSession($player);
    }

    public static function getOfflineSession(string $username): OfflineSession {
        return SkyBlock::getInstance()->getSessionManager()->getOfflineSession($username);
    }

    public static function isSessionOpen(Player $player): bool {
        return SkyBlock::getInstance()->getSessionManager()->isSessionOpen($player);
    }

}