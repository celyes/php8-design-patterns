<?php

namespace Patterns\Behavioral\State\Mutators;

class Published implements StateInterface
{
    public function status()
    {
        return "published";
    }
}
