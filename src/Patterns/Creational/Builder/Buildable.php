<?php

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Models\Person;

interface Buildable
{
    public function create(): self;
    public function addName(string $name): self;
    public function addAge(int $age): self;
    public function addHobby(string $hobby): self;
    public function getPerson(): Person;
}
