<?php

namespace Patterns\Creational\Builder\Models;

abstract class Creature
{
    /**
     * @var array<mixed> $data
     */
    private array $data = [];

    public function setProperty(mixed $key, mixed $value): void
    {
        $this->data[$key] = $value;
    }
}
