<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\utils\message;


use Skyblocks\DaDevGuy\SkyBlock;
use Skyblocks\DaDevGuy\utils\Utils;

class MessageManager {

    /** @var string[] */
    private $messages;

    public function __construct(SkyBlock $plugin) {
        $this->messages = json_decode(file_get_contents($plugin->getDataFolder() . "messages.json"), true);
    }

    /**
     * @return string[]
     */
    public function getMessages(): array {
        return $this->messages;
    }

    public function getMessage(MessageContainer $container): string {
        $identifier = $container->getId();
        $message = $this->messages[$identifier] ?? "Message ($identifier) not found";
        $message = Utils::translateColors($message);
        foreach($container->getArgs() as $arg => $value) {
            $message = str_replace("{" . $arg . "}", $value, $message);
        }
        return $message;
    }

    public function addMessage(string $identifier, string $message): void {
        $this->messages[$identifier] = $message;
    }

}