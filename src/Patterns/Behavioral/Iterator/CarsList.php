<?php

namespace Patterns\Behavioral\Iterator;

use Countable;
use Iterator;

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
            if ($car->getFullModel() === $carToRemove->getFullModel()) {
                unset($this->cars[$key]);
            }
        }
        $this->cars = array_values($this->cars);
    }
    public function count(): int
    {
        return count($this->cars);
    }

    public function current(): mixed
    {
        return $this->cars[$this->index];
    }
    public function key(): int
    {
        return $this->index;
    }
    public function next(): void
    {
        $this->index++;
    }
    public function rewind(): void
    {
        $this->index = 0;
    }
    public function valid(): bool
    {
        return isset($this->cars[$this->index]);
    }
}
