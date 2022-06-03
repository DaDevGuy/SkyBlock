<?php

declare(strict_types=1);

namespace Skyblocks\DaDevGuy\session;




class OfflineSession extends BaseSession {

    public function getOnlineSession(): ?Session {
        $player = $this->manager->getPlugin()->getServer()->getPlayerExact($this->lowerCaseName);
        if($player != null) {
            return $this->manager->getSession($player);
        }
        return null;
    }

}