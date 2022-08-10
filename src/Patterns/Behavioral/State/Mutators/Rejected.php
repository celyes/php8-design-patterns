<?php

namespace Patterns\Behavioral\State\Mutators;

class Rejected implements StateInterface
{
    public function status(): string
    {
        return "rejected";
    }
}
