<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\island\generator;

use pocketmine\level\generator\GeneratorManager as GManager;
use pocketmine\permission\Permission;
use pocketmine\permission\PermissionManager;
use Skyblocks\DaDevGuy\island\generator\presets\BasicIsland;
use Skyblocks\DaDevGuy\island\generator\presets\LostIsland;
use Skyblocks\DaDevGuy\island\generator\presets\OPIsland;
use Skyblocks\DaDevGuy\island\generator\presets\PalmIsland;
use Skyblocks\DaDevGuy\island\generator\presets\ShellyGenerator;
use Skyblocks\DaDevGuy\SkyBlock;

class IslandGeneratorManager {

    /** @var SkyBlock */
    private $plugin;

    /** @var IslandGenerator[]|string[] */
    private $generators = [];

    /**
     * GeneratorManager constructor.
     * @param SkyBlock $plugin
     */
    public function __construct(SkyBlock $plugin) {
        $this->plugin = $plugin;
        $this->registerDefaultGenerators();
    }

    /**
     * Returns the name of all the generators
     *
     * @return string[]
     */
    public function getGenerators(): array {
        return array_keys($this->generators);
    }

    /**
     * @param string $name
     * @return null|string|IslandGenerator
     */
    public function getGenerator(string $name): ?string {
        return $this->generators[strtolower($name)] ?? null;
    }

    public function isGenerator(string $name): bool {
        return isset($this->generators[strtolower($name)]);
    }

    public function registerGenerator(string $name, string $class): void {
        GManager::addGenerator($class, $name, true);
        if(isset($this->generators[$name])) {
            $this->plugin->getLogger()->debug("Overwriting generator: $name");
        }
        $this->generators[$name] = $class;
        $this->registerGeneratorPermission($name);
    }

    private function registerGeneratorPermission(string $name): void {
        PermissionManager::getInstance()->addPermission(new Permission("skyblock.island." . $name, "",
            Permission::DEFAULT_TRUE));
    }

    private function registerDefaultGenerators(): void {
        $this->registerGenerator("basic", BasicIsland::class);
        $this->registerGenerator("op", OPIsland::class);
        $this->registerGenerator("shelly", ShellyGenerator::class);
        $this->registerGenerator("palm", PalmIsland::class);
        $this->registerGenerator("lost", LostIsland::class);
    }

}