<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\island\generator\presets;


use pocketmine\block\Block;
use pocketmine\math\Vector3;
use Skyblocks\DaDevGuy\island\generator\IslandGenerator;

class ShellyGenerator extends IslandGenerator {

    public function getName(): string {
        return "Shelly";
    }

    public function generateChunk(int $chunkX, int $chunkZ): void {
        $chunk = $this->level->getChunk($chunkX, $chunkZ);
        $chunk->setGenerated();
        if($chunkX == 0 && $chunkZ == 0) {
            $chunk->setBlock(11, 34, 9, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(11, 35, 9, \pocketmine\block\BlockLegacyIds::FENCE);
            $chunk->setBlock(11, 32, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(11, 33, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(11, 34, 8, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(11, 35, 8, \pocketmine\block\BlockLegacyIds::FENCE);
            $chunk->setBlock(11, 33, 7, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(11, 34, 7, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(11, 35, 7, \pocketmine\block\BlockLegacyIds::FENCE);
            $chunk->setBlock(10, 33, 10, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(10, 34, 10, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(10, 32, 9, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(10, 33, 9, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(10, 34, 9, \pocketmine\block\BlockLegacyIds::COBBLESTONE);
            $chunk->setBlock(10, 31, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(10, 32, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(10, 33, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(10, 34, 8, \pocketmine\block\BlockLegacyIds::SAND);
            $chunk->setBlock(10, 32, 7, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(10, 33, 7, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(10, 34, 7, \pocketmine\block\BlockLegacyIds::GRAVEL);
            $chunk->setBlock(10, 35, 7, \pocketmine\block\BlockLegacyIds::FENCE);
            $chunk->setBlock(10, 33, 6, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(10, 34, 6, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(10, 35, 6, \pocketmine\block\BlockLegacyIds::FENCE);
            $chunk->setBlock(9, 34, 11, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(9, 32, 10, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(9, 33, 10, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(9, 34, 10, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(9, 31, 9, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(9, 32, 9, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(9, 33, 9, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(9, 34, 9, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(9, 30, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(9, 31, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(9, 32, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(9, 33, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(9, 34, 8, \pocketmine\block\BlockLegacyIds::GRAVEL);
            $chunk->setBlock(9, 31, 7, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(9, 32, 7, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(9, 33, 7, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(9, 34, 7, \pocketmine\block\BlockLegacyIds::COBBLESTONE);
            $chunk->setBlock(9, 32, 6, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(9, 33, 6, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(9, 34, 6, \pocketmine\block\BlockLegacyIds::GRAVEL);
            $chunk->setBlock(9, 35, 6, \pocketmine\block\BlockLegacyIds::FENCE);
            $chunk->setBlock(9, 33, 5, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(9, 34, 5, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(8, 32, 11, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(8, 33, 11, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(8, 34, 11, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(8, 31, 10, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 32, 10, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 33, 10, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(8, 34, 10, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(8, 30, 9, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 31, 9, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 32, 9, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 33, 9, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(8, 34, 9, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(8, 30, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 31, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 32, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 33, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(8, 34, 8, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(8, 30, 7, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 31, 7, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 32, 7, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 33, 7, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(8, 34, 7, \pocketmine\block\BlockLegacyIds::GRAVEL);
            $chunk->setBlock(8, 31, 6, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 32, 6, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(8, 33, 6, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(8, 34, 6, \pocketmine\block\BlockLegacyIds::SAND);
            $chunk->setBlock(8, 32, 5, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(8, 33, 5, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(8, 34, 5, \pocketmine\block\BlockLegacyIds::GRAVEL);
            $chunk->setBlock(7, 33, 11, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(7, 34, 11, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(7, 32, 10, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(7, 33, 10, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(7, 34, 10, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(7, 31, 9, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(7, 32, 9, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(7, 33, 9, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(7, 34, 9, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(7, 30, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(7, 31, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(7, 32, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(7, 33, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(7, 34, 8, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(7, 33, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(7, 31, 7, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(7, 32, 7, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(7, 33, 7, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(7, 34, 7, \pocketmine\block\BlockLegacyIds::COBBLESTONE);
            $chunk->setBlock(7, 32, 6, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(7, 33, 6, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(7, 34, 6, \pocketmine\block\BlockLegacyIds::GRAVEL);
            $chunk->setBlock(7, 34, 5, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(6, 32, 10, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(6, 33, 10, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(6, 34, 10, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(6, 32, 9, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(6, 33, 9, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(6, 34, 9, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(6, 31, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(6, 32, 8, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(6, 33, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(6, 34, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(6, 35, 8, \pocketmine\block\BlockLegacyIds::CHEST);
            $chunk->setBlock(6, 32, 7, \pocketmine\block\BlockLegacyIds::STONE);
            $chunk->setBlock(6, 33, 7, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(6, 34, 7, \pocketmine\block\BlockLegacyIds::SAND);
            $chunk->setBlock(6, 32, 6, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(6, 33, 6, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(6, 34, 6, \pocketmine\block\BlockLegacyIds::GRASS);
            $chunk->setBlock(5, 33, 9, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(5, 34, 9, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(5, 35, 9, \pocketmine\block\BlockLegacyIds::HAY_BALE);
            $chunk->setBlock(5, 32, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(5, 33, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(5, 34, 8, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(5, 35, 8, \pocketmine\block\BlockLegacyIds::HAY_BALE);
            $chunk->setBlock(5, 36, 8, \pocketmine\block\BlockLegacyIds::HAY_BALE);
            $chunk->setBlock(5, 33, 7, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(5, 34, 7, \pocketmine\block\BlockLegacyIds::DIRT);
            $chunk->setBlock(5, 35, 7, \pocketmine\block\BlockLegacyIds::LOG);
            $chunk->setBlock(5, 36, 7, \pocketmine\block\BlockLegacyIds::LOG);
            $chunk->setBlock(5, 37, 7, \pocketmine\block\BlockLegacyIds::LOG);
            $chunk->setBlock(5, 38, 7, \pocketmine\block\BlockLegacyIds::LOG);
            $chunk->setBlock(5, 39, 7, \pocketmine\block\BlockLegacyIds::LOG);
            $chunk->setBlock(5, 40, 7, \pocketmine\block\BlockLegacyIds::LOG);
            $chunk->setBlock(5, 41, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 38, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 39, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 40, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 41, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 38, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 39, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 40, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 41, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 38, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 39, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 40, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 41, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 38, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 39, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 40, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 41, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(7, 38, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(7, 39, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(7, 40, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 38, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 39, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 40, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 38, 9, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 39, 9, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 40, 9, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 38, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 39, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 40, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(3, 38, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(3, 39, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(3, 40, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 38, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 39, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 40, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 38, 5, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 39, 5, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(5, 40, 5, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 38, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 39, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 40, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(7, 39, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(7, 38, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 39, 5, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 38, 5, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 39, 5, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(3, 38, 6, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(3, 39, 8, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 39, 9, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(6, 38, 9, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 39, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 40, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setBlock(4, 41, 7, \pocketmine\block\BlockLegacyIds::LEAVES);
            $chunk->setX($chunkX);
            $chunk->setZ($chunkZ);
            $this->level->setChunk($chunkX, $chunkZ, $chunk);
        }
    }

    public static function getWorldSpawn(): Vector3 {
        return new Vector3(8, 35, 10);
    }

    public static function getChestPosition(): Vector3 {
        return new Vector3(6, 35, 8);
    }

}