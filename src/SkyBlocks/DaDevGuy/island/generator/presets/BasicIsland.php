<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\island\generator\presets;


use pocketmine\block\VanillaBlocks;
use pocketmine\level\generator\object\Tree;
use pocketmine\math\Vector3;
use Skyblocks\DaDevGuy\island\generator\IslandGenerator;

class BasicIsland extends IslandGenerator {

    public function getName(): string {
        return "Basic";
    }

    public function generateChunk(int $chunkX, int $chunkZ): void {
        $chunk = $this->level->getChunk($chunkX, $chunkZ);
        $chunk->setGenerated();
        if($chunkX == 0 && $chunkZ == 0) {
            for($x = 6; $x < 12; $x++) {
                for($z = 6; $z < 12; $z++) {
                    $chunk->setBlock($x, 61, $z, VanillaBlocks::DIRT());
                    $chunk->setBlock($x, 62, $z, VanillaBlocks::DIRT());
                    $chunk->setBlock($x, 63, $z, VanillaBlocks::GRASS());
                }
            }
            for($airX = 9; $airX < 12; $airX++) {
                for($airZ = 9; $airZ < 12; $airZ++) {
                    $chunk->setBlock($airX, 61, $airZ, VanillaBlocks::AIR());
                    $chunk->setBlock($airX, 62, $airZ, VanillaBlocks::AIR());
                    $chunk->setBlock($airX, 63, $airZ, VanillaBlocks::AIR());
                }
            }
            Tree::growTree($this->level, 11, 64, 6, $this->random, 0);
            $chunk->setBlock(8, 64, 7, VanillaBlocks::CHEST());
            $chunk->setX($chunkX);
            $chunk->setZ($chunkZ);
            $this->level->setChunk($chunkX, $chunkZ, $chunk);
        }
        if($chunkX == 4 and $chunkZ == 0) {
            for($x = 6; $x < 11; $x++) {
                for($z = 6; $z < 11; $z++) {
                    for($y = 60; $y < 65; $y++) {
                        $chunk->setBlock($x, $y, $z, VanillaBlocks::SAND());
                    }
                }
            }
            $chunk->setBlock(8, 65, 8, VanillaBlocks::CACTUS());
        }
    }

    public static function getWorldSpawn(): Vector3 {
        return new Vector3(7, 66, 7);
    }

    public static function getChestPosition(): Vector3 {
        return new Vector3(8, 64, 7);
    }

}
