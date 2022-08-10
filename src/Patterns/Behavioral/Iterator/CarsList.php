<?php

namespace Patterns\Behavioral\Iterator;

use Iterator;
use Countable;
use Patterns\Behavioral\Iterator\Car;

class CarsList implements Countable, Iterator
{
    /**
     * @var array<Car> $cars
     */
    private array $cars = [];

    /**
     * @var int $index
     */
    private int $index = 0;

     /**
     * @param Car $car
     * @return void
     */
    public function add(Car $car): void
    {
        $this->cars[] = $car;
    }

     /**
     * @param Car $carToRemove
     * @return void
     */
    public function removeCar(Car $carToRemove)
    {
        foreach ($this->cars as $key => $car) {
            if ($car->getFullModel() === $carToRemove->getFullModel()) {
                unset($this->cars[$key]);
            }
        }
        $this->cars = array_values($this->cars);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->cars);
    }

     /**
     * @return Car
     */
    public function current(): Car
    {
        return $this->cars[$this->index];
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->index;
    }

    /**
     * @return void
     */
    public function next(): void
    {
        $this->index++;
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        $this->index = 0;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->cars[$this->index]);
    }
}
