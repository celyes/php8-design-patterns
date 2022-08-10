<?php

namespace Patterns\Behavioral\Command\Interfaces;

interface Device
{
    public function invoke(Command $command): string;
}
