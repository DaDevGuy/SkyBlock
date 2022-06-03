<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\session;


use pocketmine\player\Player;
use Skyblocks\DaDevGuy\event\session\SessionCloseEvent;
use Skyblocks\DaDevGuy\event\session\SessionOpenEvent;
use Skyblocks\DaDevGuy\SkyBlock;

class SessionManager {

    /** @var SkyBlock */
    private $plugin;

    /** @var Session[] */
    private $sessions = [];

    public function __construct(SkyBlock $plugin) {
        $this->plugin = $plugin;
        $plugin->getServer()->getPluginManager()->registerEvents(new SessionListener($this), $plugin);
    }

    public function getPlugin(): SkyBlock {
        return $this->plugin;
    }

    /**
     * @return Session[]
     */
    public function getSessions(): array {
        return $this->sessions;
    }

    /**
     * @param Player $player
     * @return Session
     */
    public function getSession(Player $player): Session {
        if(!$this->isSessionOpen($player)) {
            $this->openSession($player);
        }
        return $this->sessions[$player->getName()];
    }

    public function isSessionOpen(Player $player): bool {
        return isset($this->sessions[$player->getName()]);
    }

    public function getOfflineSession(string $username): ?OfflineSession {
        return new OfflineSession($this, $username);
    }

    /**
     * @param Player $player
     */
    public function openSession(Player $player): void {
        $this->sessions[$username = $player->getName()] = new Session($this, $player);
        (new SessionOpenEvent($this->sessions[$username]))->call();
    }

    /**
     * @param Player $player
     */
    public function closeSession(Player $player): void {
        if(isset($this->sessions[$username = $player->getName()])) {
            $session = $this->sessions[$username];
            $session->save();
            (new SessionCloseEvent($session))->call();
            unset($this->sessions[$username]);
            if($session->hasIsland()) {
                $session->getIsland()->tryToClose();
            }
        }
    }

}