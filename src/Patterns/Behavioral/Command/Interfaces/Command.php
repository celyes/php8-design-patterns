<?php 

namespace Patterns\Behavioral\Command\Interfaces;

interface Command 
{
    public function execute(): string;
}