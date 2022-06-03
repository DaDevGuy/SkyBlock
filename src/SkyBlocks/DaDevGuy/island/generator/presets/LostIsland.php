<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\island\generator\presets;


use pocketmine\block\VanillaBlocks as VB;
use pocketmine\math\Vector3;
use Skyblocks\DaDevGuy\island\generator\IslandGenerator;

class LostIsland extends IslandGenerator {

    public function getName(): string {
        return "Lost";
    }

    public function generateChunk(int $chunkX, int $chunkZ): void {
        $chunk = $this->level->getChunk($chunkX, $chunkZ);
        $chunk->setGenerated();
        if($chunkX == 0 && $chunkZ == 0) {
            $chunk->setBlock(11, 34, 9, VB::GRASS());
            $chunk->setBlock(11, 35, 9, VB::OAK_FENCE());
            $chunk->setBlock(11, 32, 8, VB::DIRT());
            $chunk->setBlock(11, 33, 8, VB::DIRT());
            $chunk->setBlock(11, 34, 8, VB::GRASS());
            $chunk->setBlock(11, 35, 8, VB::OAK_FENCE());
            $chunk->setBlock(11, 33, 7, VB::DIRT());
            $chunk->setBlock(11, 34, 7, VB::GRASS());
            $chunk->setBlock(11, 35, 7, VB::OAK_FENCE());
            $chunk->setBlock(10, 33, 10, VB::DIRT());
            $chunk->setBlock(10, 34, 10, VB::ICE());
            $chunk->setBlock(10, 32, 9, VB::STONE());
            $chunk->setBlock(10, 33, 9, VB::STONE());
            $chunk->setBlock(10, 34, 9, VB::COBBLESTONE());
            $chunk->setBlock(10, 31, 8, VB::STONE());
            $chunk->setBlock(10, 32, 8, VB::STONE());
            $chunk->setBlock(10, 33, 8, VB::DIRT());
            $chunk->setBlock(10, 34, 8, VB::SAND());
            $chunk->setBlock(10, 32, 7, VB::STONE());
            $chunk->setBlock(10, 33, 7, VB::DIRT());
            $chunk->setBlock(10, 34, 7, VB::GRAVEL());
            $chunk->setBlock(10, 35, 7, VB::OAK_FENCE());
            $chunk->setBlock(10, 33, 6, VB::DIRT());
            $chunk->setBlock(10, 34, 6, VB::GRASS());
            $chunk->setBlock(10, 35, 6, VB::OAK_FENCE());
            $chunk->setBlock(9, 34, 11, VB::GRASS());
            $chunk->setBlock(9, 32, 10, VB::STONE());
            $chunk->setBlock(9, 33, 10, VB::DIRT());
            $chunk->setBlock(9, 34, 10, VB::ICE());
            $chunk->setBlock(9, 31, 9, VB::STONE());
            $chunk->setBlock(9, 32, 9, VB::STONE());
            $chunk->setBlock(9, 33, 9, VB::DIRT());
            $chunk->setBlock(9, 34, 9, VB::ICE());
            $chunk->setBlock(9, 30, 8, VB::STONE());
            $chunk->setBlock(9, 31, 8, VB::STONE());
            $chunk->setBlock(9, 32, 8, VB::STONE());
            $chunk->setBlock(9, 33, 8, VB::DIRT());
            $chunk->setBlock(9, 34, 8, VB::GRAVEL());
            $chunk->setBlock(9, 31, 7, VB::STONE());
            $chunk->setBlock(9, 32, 7, VB::STONE());
            $chunk->setBlock(9, 33, 7, VB::DIRT());
            $chunk->setBlock(9, 34, 7, VB::OAK_FENCE());
            $chunk->setBlock(9, 32, 6, VB::STONE());
            $chunk->setBlock(9, 33, 6, VB::DIRT());
            $chunk->setBlock(9, 34, 6, VB::GRAVEL());
            $chunk->setBlock(9, 35, 6, VB::OAK_FENCE());
            $chunk->setBlock(9, 33, 5, VB::DIRT());
            $chunk->setBlock(9, 34, 5, VB::ICE());
            $chunk->setBlock(8, 32, 11, VB::DIRT());
            $chunk->setBlock(8, 33, 11, VB::DIRT());
            $chunk->setBlock(8, 34, 11, VB::ICE());
            $chunk->setBlock(8, 31, 10, VB::STONE());
            $chunk->setBlock(8, 32, 10, VB::STONE());
            $chunk->setBlock(8, 33, 10, VB::DIRT());
            $chunk->setBlock(8, 34, 10, VB::ICE());
            $chunk->setBlock(8, 30, 9, VB::STONE());
            $chunk->setBlock(8, 31, 9, VB::STONE());
            $chunk->setBlock(8, 32, 9, VB::STONE());
            $chunk->setBlock(8, 33, 9, VB::DIRT());
            $chunk->setBlock(8, 34, 9, VB::ICE());
            $chunk->setBlock(8, 30, 8, VB::STONE());
            $chunk->setBlock(8, 31, 8, VB::STONE());
            $chunk->setBlock(8, 32, 8, VB::STONE());
            $chunk->setBlock(8, 33, 8, VB::DIRT());
            $chunk->setBlock(8, 34, 8, VB::ICE());
            $chunk->setBlock(8, 30, 7, VB::STONE());
            $chunk->setBlock(8, 31, 7, VB::STONE());
            $chunk->setBlock(8, 32, 7, VB::STONE());
            $chunk->setBlock(8, 33, 7, VB::DIRT());
            $chunk->setBlock(8, 34, 7, VB::GRAVEL());
            $chunk->setBlock(8, 31, 6, VB::STONE());
            $chunk->setBlock(8, 32, 6, VB::STONE());
            $chunk->setBlock(8, 33, 6, VB::DIRT());
            $chunk->setBlock(8, 34, 6, VB::SAND());
            $chunk->setBlock(8, 32, 5, VB::DIRT());
            $chunk->setBlock(8, 33, 5, VB::DIRT());
            $chunk->setBlock(8, 34, 5, VB::GRAVEL());
            $chunk->setBlock(7, 33, 11, VB::DIRT());
            $chunk->setBlock(7, 34, 11, VB::ICE());
            $chunk->setBlock(7, 32, 10, VB::STONE());
            $chunk->setBlock(7, 33, 10, VB::DIRT());
            $chunk->setBlock(7, 34, 10, VB::ICE());
            $chunk->setBlock(7, 31, 9, VB::STONE());
            $chunk->setBlock(7, 32, 9, VB::STONE());
            $chunk->setBlock(7, 33, 9, VB::DIRT());
            $chunk->setBlock(7, 34, 9, VB::ICE());
            $chunk->setBlock(7, 30, 8, VB::STONE());
            $chunk->setBlock(7, 31, 8, VB::STONE());
            $chunk->setBlock(7, 32, 8, VB::STONE());
            $chunk->setBlock(7, 33, 8, VB::DIRT());
            $chunk->setBlock(7, 34, 8, VB::ICE());
            $chunk->setBlock(7, 33, 8, VB::DIRT());
            $chunk->setBlock(7, 31, 7, VB::STONE());
            $chunk->setBlock(7, 32, 7, VB::STONE());
            $chunk->setBlock(7, 33, 7, VB::DIRT());
            $chunk->setBlock(7, 34, 7, VB::OAK_FENCE());
            $chunk->setBlock(7, 32, 6, VB::STONE());
            $chunk->setBlock(7, 33, 6, VB::DIRT());
            $chunk->setBlock(7, 34, 6, VB::GRAVEL());
            $chunk->setBlock(7, 34, 5, VB::GRASS());
            $chunk->setBlock(6, 32, 10, VB::DIRT());
            $chunk->setBlock(6, 33, 10, VB::DIRT());
            $chunk->setBlock(6, 34, 10, VB::GRASS());
            $chunk->setBlock(6, 32, 9, VB::STONE());
            $chunk->setBlock(6, 33, 9, VB::DIRT());
            $chunk->setBlock(6, 34, 9, VB::GRASS());
            $chunk->setBlock(6, 31, 8, VB::STONE());
            $chunk->setBlock(6, 32, 8, VB::STONE());
            $chunk->setBlock(6, 33, 8, VB::DIRT());
            $chunk->setBlock(6, 34, 8, VB::DIRT());
            $chunk->setBlock(6, 35, 8, VB::HAY_BALE());
            $chunk->setBlock(6, 32, 7, VB::STONE());
            $chunk->setBlock(6, 33, 7, VB::DIRT());
            $chunk->setBlock(6, 34, 7, VB::SAND());
            $chunk->setBlock(6, 32, 6, VB::DIRT());
            $chunk->setBlock(6, 33, 6, VB::DIRT());
            $chunk->setBlock(6, 34, 6, VB::GRASS());
            $chunk->setBlock(5, 33, 9, VB::DIRT());
            $chunk->setBlock(5, 34, 9, VB::DIRT());
            $chunk->setBlock(5, 35, 9, VB::HAY_BALE());
            $chunk->setBlock(5, 32, 8, VB::DIRT());
            $chunk->setBlock(5, 33, 8, VB::DIRT());
            $chunk->setBlock(5, 34, 8, VB::DIRT());
            $chunk->setBlock(5, 35, 8, VB::HAY_BALE());
            $chunk->setBlock(5, 36, 8, VB::HAY_BALE());
            $chunk->setBlock(5, 33, 7, VB::DIRT());
            $chunk->setBlock(5, 34, 7, VB::DIRT());
            $chunk->setBlock(5, 35, 7, VB::OAK_LOG());
            $chunk->setBlock(5, 36, 7, VB::OAK_LOG());
            $chunk->setBlock(5, 37, 7, VB::OAK_LOG());
            $chunk->setBlock(5, 38, 7, VB::OAK_LOG());
            $chunk->setBlock(5, 39, 7, VB::OAK_LOG());
            $chunk->setBlock(5, 40, 7, VB::OAK_LOG());
            $chunk->setBlock(5, 41, 7, VB::OAK_LEAVES());
            $chunk->setBlock(5, 38, 6, VB::OAK_LEAVES());
            $chunk->setBlock(5, 39, 6, VB::OAK_LEAVES());
            $chunk->setBlock(5, 40, 6, VB::OAK_LEAVES());
            $chunk->setBlock(5, 41, 6, VB::OAK_LEAVES());
            $chunk->setBlock(6, 38, 7, VB::OAK_LEAVES());
            $chunk->setBlock(6, 39, 7, VB::OAK_LEAVES());
            $chunk->setBlock(6, 40, 7, VB::OAK_LEAVES());
            $chunk->setBlock(6, 41, 7, VB::OAK_LEAVES());
            $chunk->setBlock(5, 38, 8, VB::OAK_LEAVES());
            $chunk->setBlock(5, 39, 8, VB::OAK_LEAVES());
            $chunk->setBlock(5, 40, 8, VB::OAK_LEAVES());
            $chunk->setBlock(5, 41, 8, VB::OAK_LEAVES());
            $chunk->setBlock(4, 38, 7, VB::OAK_LEAVES());
            $chunk->setBlock(5, 39, 8, VB::OAK_LEAVES());
            $chunk->setBlock(5, 40, 8, VB::OAK_LEAVES());
            $chunk->setBlock(5, 41, 8, VB::OAK_LEAVES());
            $chunk->setBlock(7, 38, 7, VB::OAK_LEAVES());
            $chunk->setBlock(7, 39, 7, VB::OAK_LEAVES());
            $chunk->setBlock(7, 40, 7, VB::OAK_LEAVES());
            $chunk->setBlock(6, 38, 8, VB::OAK_LEAVES());
            $chunk->setBlock(6, 39, 8, VB::OAK_LEAVES());
            $chunk->setBlock(6, 40, 8, VB::OAK_LEAVES());
            $chunk->setBlock(5, 38, 9, VB::OAK_LEAVES());
            $chunk->setBlock(5, 39, 9, VB::OAK_LEAVES());
            $chunk->setBlock(5, 40, 9, VB::OAK_LEAVES());
            $chunk->setBlock(4, 38, 8, VB::OAK_LEAVES());
            $chunk->setBlock(4, 39, 8, VB::OAK_LEAVES());
            $chunk->setBlock(4, 40, 8, VB::OAK_LEAVES());
            $chunk->setBlock(3, 38, 7, VB::OAK_LEAVES());
            $chunk->setBlock(3, 39, 7, VB::OAK_LEAVES());
            $chunk->setBlock(3, 40, 7, VB::OAK_LEAVES());
            $chunk->setBlock(4, 38, 6, VB::OAK_LEAVES());
            $chunk->setBlock(4, 39, 6, VB::OAK_LEAVES());
            $chunk->setBlock(4, 40, 6, VB::OAK_LEAVES());
            $chunk->setBlock(5, 38, 5, VB::OAK_LEAVES());
            $chunk->setBlock(5, 39, 5, VB::OAK_LEAVES());
            $chunk->setBlock(5, 40, 5, VB::OAK_LEAVES());
            $chunk->setBlock(6, 38, 6, VB::OAK_LEAVES());
            $chunk->setBlock(6, 39, 6, VB::OAK_LEAVES());
            $chunk->setBlock(6, 40, 6, VB::OAK_LEAVES());
            $chunk->setBlock(7, 39, 8, VB::OAK_LEAVES());
            $chunk->setBlock(7, 38, 6, VB::OAK_LEAVES());
            $chunk->setBlock(6, 39, 5, VB::OAK_LEAVES());
            $chunk->setBlock(4, 38, 5, VB::OAK_LEAVES());
            $chunk->setBlock(4, 39, 5, VB::OAK_LEAVES());
            $chunk->setBlock(3, 38, 6, VB::OAK_LEAVES());
            $chunk->setBlock(3, 39, 8, VB::OAK_LEAVES());
            $chunk->setBlock(4, 39, 9, VB::OAK_LEAVES());
            $chunk->setBlock(6, 38, 9, VB::OAK_LEAVES());
            $chunk->setBlock(4, 39, 7, VB::OAK_LEAVES());
            $chunk->setBlock(4, 40, 7, VB::OAK_LEAVES());
            $chunk->setBlock(4, 41, 7, VB::OAK_LEAVES());
            $chunk->setBlock(6, 35, 9, VB::CHEST());
            $chunk->setX($chunkX);
            $chunk->setZ($chunkZ);
            $this->level->setChunk($chunkX, $chunkZ, $chunk);
        }
    }

    public static function getWorldSpawn(): Vector3 {
        return new Vector3(10, 35, 9);
    }

    public static function getChestPosition(): Vector3 {
        return new Vector3(6, 35, 9);
    }

}