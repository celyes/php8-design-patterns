<?php

namespace Patterns\Behavioral\Command;

class Television
{
    public function volumeup()
    {
        return "Volume is up";
    }

    public function volumedown()
    {
        return "Volume is down";
    }
}