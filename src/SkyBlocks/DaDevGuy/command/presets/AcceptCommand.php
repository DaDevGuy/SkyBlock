<?php
declare(strict_types=1);

namespace Skyblocks\DaDevGuy\command\presets;


use Skyblocks\DaDevGuy\command\IslandCommand;
use Skyblocks\DaDevGuy\session\Session;
use Skyblocks\DaDevGuy\utils\message\MessageContainer;

class AcceptCommand extends IslandCommand {

    public function getName(): string {
        return "accept";
    }

    public function getAliases(): array {
        return ["acc"];
    }

    public function getUsageMessageContainer(): MessageContainer {
        return new MessageContainer("ACCEPT_USAGE");
    }

    public function getDescriptionMessageContainer(): MessageContainer {
        return new MessageContainer("ACCEPT_DESCRIPTION");
    }

    public function onCommand(Session $session, array $args): void {
        if($session->hasIsland()) {
            $session->sendTranslatedMessage(new MessageContainer("NEED_TO_BE_FREE"));
            return;
        }

        $invitation = null;
        if(isset($args[0]) and $session->hasInvitationFrom($args[0])) {
            $invitation = $session->getInvitationFrom($args[0]);
        } else {
            $invitation = $session->getLastInvitation();
        }

        if($invitation != null) {
            $invitation->accept();
        } else {
            $session->sendTranslatedMessage(new MessageContainer("ACCEPT_USAGE"));
        }
    }

}