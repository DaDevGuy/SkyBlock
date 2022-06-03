<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\island\generator\presets;

use pocketmine\block\VanillaBlocks;
use pocketmine\world\generator\object\Tree;
use pocketmine\math\Vector3;
use Skyblocks\DaDevGuy\island\generator\IslandGenerator;

class OPIsland extends IslandGenerator {

    public function getName(): string {
        return "OP";
    }

    public function generateChunk(int $chunkX, int $chunkZ): void {
        $chunk = $this->level->getChunk($chunkX, $chunkZ);
        $chunk->setGenerated();
        if($chunkX == 0 && $chunkZ == 0) {
            for($x = 0; $x < 16; $x++) {
                for($z = 0; $z < 16; $z++) {
                    $chunk->setBlock($x, 0, $z, VanillaBlocks::BEDROCK());
                    for($y = 1; $y <= 3; $y++) {
                        $chunk->setBlock($x, $y, $z, VanillaBlocks::STONE());
                    }
                    $chunk->setBlock($x, 4, $z, VanillaBlocks::DIRT());
                    $chunk->setBlock($x, 5, $z, VanillaBlocks::GRASS());
                }
            }
            Tree::growTree($this->level, 8, 6, 8, $this->random, 0);
            $chunk->setBlock(10, 6, 8, VanillaBlocks::CHEST());
            $chunk->setX($chunkX);
            $chunk->setZ($chunkZ);
            $this->level->setChunk($chunkX, $chunkZ, $chunk);
        }
    }

    public static function getWorldSpawn(): Vector3 {
        return new Vector3(8, 7, 10);
    }

    public static function getChestPosition(): Vector3 {
        return new Vector3(10, 6, 8);
    }

}