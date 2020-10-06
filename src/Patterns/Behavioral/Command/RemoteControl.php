<?php

namespace Patterns\Behavioral\Command;

class RemoteControl
{
    public function invoke($command)
    {
        return $command->execute();
    }
}