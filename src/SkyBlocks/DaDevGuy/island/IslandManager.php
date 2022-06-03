<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\island;


use pocketmine\world\World;
use Skyblocks\DaDevGuy\event\island\IslandOpenEvent;
use Skyblocks\DaDevGuy\event\island\IslandCloseEvent;
use Skyblocks\DaDevGuy\SkyBlock;

class IslandManager {

    /** @var SkyBlock */
    private $plugin;

    /** @var Island[] */
    private $islands = [];

    public function __construct(SkyBlock $plugin) {
        $this->plugin = $plugin;
        $plugin->getServer()->getPluginManager()->registerEvents(new IslandListener($this), $plugin);
    }

    public function getPlugin(): SkyBlock {
        return $this->plugin;
    }

    /**
     * @return Island[]
     */
    public function getIslands(): array {
        return $this->islands;
    }

    public function getIsland(string $identifier): ?Island {
        return $this->islands[$identifier] ?? null;
    }

    public function getIslandByLevel(World $level): ?Island {
        return $this->getIsland($level->getName());
    }

    public function openIsland(string $identifier, array $members, bool $locked, string $type, World $level, int $blocksBuilt): void {
        $this->islands[$identifier] = new Island($this, $identifier, $members, $locked, $type, $level, $blocksBuilt);
        (new IslandOpenEvent($this->islands[$identifier]))->call();
    }

    public function closeIsland(Island $island): void {
        $island->save();
        $server = $this->plugin->getServer();
        (new IslandCloseEvent($island))->call();
        $server->unloadLevel($island->getWorld());
        unset($this->islands[$island->getIdentifier()]);
    }

}