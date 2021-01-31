<?php

namespace Patterns\Behavioral\Iterator;

class Car
{
    public function __construct(private string $manufacturer, private string $model)
    {
    }
    
    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getFullModel(): string
    {
        return $this->manufacturer . ' ' . $this->model;
    }
}
