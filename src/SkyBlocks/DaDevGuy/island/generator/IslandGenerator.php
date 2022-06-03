<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\island\generator;


use pocketmine\world\generator\Generator;
use pocketmine\math\Vector3;

abstract class IslandGenerator extends Generator {

    /** @var array */
    protected $settings;

    public function __construct(array $settings = []) {
        $this->settings = $settings;
    }

    public function getSettings(): array {
        return $this->settings;
    }

    public function getSpawn(): Vector3 {
        return new Vector3(0, 0, 0);
    }

    public function populateChunk(int $chunkX, int $chunkZ): void {
        return;
    }

    public abstract static function getWorldSpawn(): Vector3;

    public abstract static function getChestPosition(): Vector3;

}