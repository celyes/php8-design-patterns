<?php

namespace Patterns\Creational\Prototype;

abstract class VehiclePrototype
{

    private string $model;

    abstract public function __clone();

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }
}
