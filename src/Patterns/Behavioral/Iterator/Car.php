<?php

namespace Patterns\Behavioral\Iterator;

class Car 
{
    private $manufacturer;
    private $model;

    public function __construct(string $manufacturer, string $model)
    {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
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
