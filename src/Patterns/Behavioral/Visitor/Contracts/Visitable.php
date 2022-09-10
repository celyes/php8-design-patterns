<?php

namespace Patterns\Behavioral\Visitor\Contracts;

use Patterns\Behavioral\Visitor\Contracts\Visitor;

interface Visitable
{
    public function accept(Visitor $visitor): string;
}
