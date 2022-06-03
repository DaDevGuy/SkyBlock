<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\session;


use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\player\PlayerQuitEvent;

class SessionListener implements Listener {

    /** @var SessionManager */
    private $manager;

    public function __construct(SessionManager $manager) {
        $this->manager = $manager;
    }

    public function onLogin(PlayerLoginEvent $event): void {
        $player = $event->getPlayer();
        $this->manager->openSession($player);
    }

    public function onQuit(PlayerQuitEvent $event): void {
        $player = $event->getPlayer();
        $this->manager->closeSession($player);
    }

}