<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\command;


use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\Player;
use pocketmine\plugin\Plugin;
use Skyblocks\DaDevGuy\command\presets\AcceptCommand;
use Skyblocks\DaDevGuy\command\presets\BlocksCommand;
use Skyblocks\DaDevGuy\command\presets\CategoryCommand;
use Skyblocks\DaDevGuy\command\presets\ChatCommand;
use Skyblocks\DaDevGuy\command\presets\CooperateCommand;
use Skyblocks\DaDevGuy\command\presets\CreateCommand;
use Skyblocks\DaDevGuy\command\presets\DemoteCommand;
use Skyblocks\DaDevGuy\command\presets\DenyCommand;
use Skyblocks\DaDevGuy\command\presets\DisbandCommand;
use Skyblocks\DaDevGuy\command\presets\FireCommand;
use Skyblocks\DaDevGuy\command\presets\HelpCommand;
use Skyblocks\DaDevGuy\command\presets\InviteCommand;
use Skyblocks\DaDevGuy\command\presets\JoinCommand;
use Skyblocks\DaDevGuy\command\presets\BanishCommand;
use Skyblocks\DaDevGuy\command\presets\LeaveCommand;
use Skyblocks\DaDevGuy\command\presets\LockCommand;
use Skyblocks\DaDevGuy\command\presets\MembersCommand;
use Skyblocks\DaDevGuy\command\presets\PromoteCommand;
use Skyblocks\DaDevGuy\command\presets\SetSpawnCommand;
use Skyblocks\DaDevGuy\command\presets\TransferCommand;
use Skyblocks\DaDevGuy\command\presets\VisitCommand;
use Skyblocks\DaDevGuy\session\SessionLocator;
use Skyblocks\DaDevGuy\SkyBlock;
use Skyblocks\DaDevGuy\utils\message\MessageContainer;

class IslandCommandMap extends Command implements PluginIdentifiableCommand {

    /** @var SkyBlock */
    private $plugin;

    /** @var IslandCommand[] */
    private $commands = [];

    public function __construct(SkyBlock $plugin) {
        $this->plugin = $plugin;
        parent::__construct("isle", "SkyBlock command", "Usage: /is", [
            "island",
            "is",
            "isle",
            "sb",
            "skyblock"
        ]);
        $plugin->getServer()->getCommandMap()->register("skyblock", $this);
    }

    /**
     * @return SkyBlock|Plugin
     */
    public function getPlugin(): Plugin {
        return $this->plugin;
    }

    /**
     * @return IslandCommand[]
     */
    public function getCommands(): array {
        return $this->commands;
    }

    public function getCommand(string $alias): ?IslandCommand {
        $alias = strtolower($alias);
        foreach($this->commands as $key => $command) {
            if(in_array($alias, $command->getAliases()) or $alias == strtolower($command->getName())) {
                return $command;
            }
        }
        return null;
    }

    public function registerCommand(IslandCommand $command): void {
        $this->commands[strtolower($command->getName())] = $command;
    }

    public function unregisterCommand(string $commandName): void {
        $name = strtolower($commandName);
        if(isset($this->commands[$name])) {
            unset($this->commands[$name]);
        }
    }

    public function registerDefaultCommands(): void {
        $this->registerCommand(new HelpCommand($this));
        $this->registerCommand(new CreateCommand($this));
        $this->registerCommand(new JoinCommand());
        $this->registerCommand(new LockCommand());
        $this->registerCommand(new ChatCommand());
        $this->registerCommand(new VisitCommand($this));
        $this->registerCommand(new LeaveCommand());
        $this->registerCommand(new MembersCommand());
        $this->registerCommand(new InviteCommand($this));
        $this->registerCommand(new AcceptCommand());
        $this->registerCommand(new DenyCommand());
        $this->registerCommand(new DisbandCommand($this));
        $this->registerCommand(new BanishCommand($this));
        $this->registerCommand(new FireCommand($this));
        $this->registerCommand(new PromoteCommand());
        $this->registerCommand(new DemoteCommand());
        $this->registerCommand(new SetSpawnCommand());
        $this->registerCommand(new TransferCommand($this));
        $this->registerCommand(new CategoryCommand());
        $this->registerCommand(new BlocksCommand());
        $this->registerCommand(new CooperateCommand($this));
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): void {
        if(!$sender instanceof Player) {
            $sender->sendMessage("Please, run this command in game");
            return;
        }

        $session = SessionLocator::getSession($sender);
        if(isset($args[0]) and $this->getCommand($args[0]) != null) {
            $this->getCommand(array_shift($args))->onCommand($session, $args);
        } else {
            $session->sendTranslatedMessage(new MessageContainer("TRY_USING_HELP"));
        }
    }

}