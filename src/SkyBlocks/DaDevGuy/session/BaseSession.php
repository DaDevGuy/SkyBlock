<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\session;


use Skyblocks\DaDevGuy\island\RankIds;
use Skyblocks\DaDevGuy\provider\Provider;

abstract class BaseSession {

    /** @var SessionManager */
    protected $manager;

    /** @var Provider */
    protected $provider;

    /** @var string */
    protected $lowerCaseName;

    /** @var string|null */
    protected $islandId = null;

    /** @var bool */
    protected $inChat = false;

    /** @var int */
    protected $rank = false;

    /** @var float|null */
    protected $lastIslandCreationTime;

    public function __construct(SessionManager $manager, string $name) {
        $this->manager = $manager;
        $this->lowerCaseName = strtolower($name);
        $this->provider = $manager->getPlugin()->getProvider();
        $this->provider->loadSession($this);
    }

    public function getLowerCaseName(): string {
        return $this->lowerCaseName;
    }

    public function getIslandId(): ?string {
        return $this->islandId;
    }

    public function isInChat(): bool {
        return $this->inChat;
    }

    public function getRank(): int {
        return $this->rank;
    }

    public function hasLastIslandCreationTime(): bool {
        return $this->lastIslandCreationTime != null;
    }

    public function getLastIslandCreationTime(): ?float {
        return $this->lastIslandCreationTime;
    }

    public function setIslandId(?string $identifier): void {
        $this->islandId = $identifier;
    }

    public function setInChat(bool $inChat = true): void {
        $this->inChat = $inChat;
    }

    public function setRank(int $rank = RankIds::MEMBER): void {
        $this->rank = $rank;
    }

    public function setLastIslandCreationTime(?float $lastIslandCreationTime): void {
        $this->lastIslandCreationTime = $lastIslandCreationTime;
    }

    public function save(): void {
        $this->provider->saveSession($this);
    }

}