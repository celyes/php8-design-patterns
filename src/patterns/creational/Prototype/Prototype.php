<?php 

namespace Patterns\Creational\Prototype;

abstract class Prototype {

    private $model; 

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