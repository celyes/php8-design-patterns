<?php

namespace Patterns\Behavioral\Command\Interfaces;

interface Commandable 
{
    public function volume_up(): string;
    public function volume_down(): string;
}