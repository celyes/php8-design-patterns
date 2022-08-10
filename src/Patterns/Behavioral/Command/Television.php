<?php

namespace Patterns\Behavioral\Command;

use Patterns\Behavioral\Command\Interfaces\Commandable;

class Television implements Commandable
{
    public function volume_up(): string
    {
        return "Volume is up";
    }

    public function volume_down(): string
    {
        return "Volume is down";
    }
}
