<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\utils\message;


use Skyblocks\DaDevGuy\SkyBlock;

class MessageContainer {

    /** @var string */
    private $id;

    /** @var array */
    private $args;

    public function __construct(string $id, array $arguments = []) {
        $this->id = $id;
        $this->args = $arguments;
    }

    public function __toString(): string {
        return $this->getMessage();
    }

    public function getId(): string {
        return $this->id;
    }

    public function getArgs(): array {
        return $this->args;
    }

    public function getMessage(): string {
        return SkyBlock::getInstance()->getMessageManager()->getMessage($this);
    }

}