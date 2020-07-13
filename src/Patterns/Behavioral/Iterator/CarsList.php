<?php

namespace Patterns\Behavioral\Iterator;

use Countable, Iterator;

class CarsList implements Countable, Iterator
{

    private array $cars = [];
    private int $index = 0; 

    public function add(Car $car)
    {
        $this->cars[] = $car;
    }

    public function removeCar(Car $carToRemove)
    {
        foreach ($this->cars as $key => $car) {
           if($car->getFullModel() === $carToRemove->getFullModel()){
               unset($this->cars[$key]);
           }
        }
        $this->cars = array_values($this->cars);
    }
    public function count()
    {
        return count($this->cars);
    }

    public function current()
    {
        return $this->cars[$this->index];
    }
    public function key()
    {
        return $this->index;
    }
    public function next()
    {
        $this->index++;
    }
    public function rewind()
    {
        $this->index = 0;
    }
    public function valid()
    {
        return isset($this->cars[$this->index]);
    }
}
