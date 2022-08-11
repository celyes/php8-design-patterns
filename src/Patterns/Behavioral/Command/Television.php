<?php

namespace Patterns\Behavioral\Command;

use Patterns\Behavioral\Command\Interfaces\Commandable;

class Television implements Commandable
{
    public function volumeUp(): string
    {
        return "Volume is up";
    }

    public function volumeDown(): string
    {
        return "Volume is down";
    }
}
