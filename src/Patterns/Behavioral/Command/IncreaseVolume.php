<?php

namespace Patterns\Behavioral\Command;

use Patterns\Behavioral\Command\Interfaces\Command;

class IncreaseVolume implements Command
{
    protected $receiver;
    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    }
    public function execute(): string
    {
        return $this->receiver->volumeup();
    }
}