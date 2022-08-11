<?php

namespace Patterns\Behavioral\Command\Interfaces;

interface Commandable
{
    public function volumeUp(): string;
    public function volumeDown(): string;
}
