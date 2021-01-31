<?php

namespace Patterns\Behavioral\Command;

use Patterns\Behavioral\Command\Interfaces\Command;

class IncreaseVolume implements Command
{

    public function __construct(protected $receiver)
    {
    }
    public function execute(): string
    {
        return $this->receiver->volumeup();
    }
}
