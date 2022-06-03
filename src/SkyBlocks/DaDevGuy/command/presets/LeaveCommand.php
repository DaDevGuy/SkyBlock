<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace Skyblocks\DaDevGuy\command\presets;


use Skyblocks\DaDevGuy\island\RankIds;
use Skyblocks\DaDevGuy\command\IslandCommand;
use Skyblocks\DaDevGuy\session\Session;
use Skyblocks\DaDevGuy\utils\message\MessageContainer;

class LeaveCommand extends IslandCommand {

    public function getName(): string {
        return "leave";
    }

    public function getUsageMessageContainer(): MessageContainer {
        return new MessageContainer("LEAVE_USAGE");
    }

    public function getDescriptionMessageContainer(): MessageContainer {
        return new MessageContainer("LEAVE_DESCRIPTION");
    }

    public function onCommand(Session $session, array $args): void {
        if($this->checkIsland($session)) {
            return;
        } elseif($session->getRank() == RankIds::FOUNDER) {
            $session->sendTranslatedMessage(new MessageContainer("FOUNDER_CANNOT_LEAVE"));
            return;
        }
        $session->setRank(RankIds::MEMBER);
        $session->setIsland(null);
        $session->setInChat(false);
        $session->sendTranslatedMessage(new MessageContainer("LEFT_ISLAND"));
    }

}