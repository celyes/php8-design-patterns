<?php

namespace Patterns\Behavioral\State\Mutators;

class Pending implements StateInterface
{
    public function status(): string
    {
        return "pending";
    }
}
