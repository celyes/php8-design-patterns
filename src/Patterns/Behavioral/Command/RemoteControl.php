<?php

namespace Patterns\Behavioral\Command;

use Patterns\Behavioral\Command\Interfaces\Device;
use Patterns\Behavioral\Command\Interfaces\Command;

class RemoteControl implements Device
{
    public function invoke(Command $command): string
    {
        return $command->execute();
    }
}
