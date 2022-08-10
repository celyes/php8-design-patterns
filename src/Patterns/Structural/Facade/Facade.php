<?php

namespace Patterns\Structural\Facade;

use Patterns\Structural\Facade\Submodules\Drive;

interface Facade
{
    public function startAction(): void;
    public function finishAction(): void;
}