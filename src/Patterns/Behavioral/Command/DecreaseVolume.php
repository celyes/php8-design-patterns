<?php

namespace Patterns\Behavioral\Command;

use Patterns\Behavioral\Command\Interfaces\Command;
use Patterns\Behavioral\Command\Interfaces\Commandable;

class DecreaseVolume implements Command
{
    public function __construct(protected Commandable $receiver)
    {}
    
    public function execute(): string
    {
        return $this->receiver->volume_down();
    }
}
