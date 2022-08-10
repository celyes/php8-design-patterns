<?php declare (strict_types = 1);

namespace Tests\Unit\Behavioral;

use Patterns\Behavioral\Iterator\Car;
use Patterns\Behavioral\Iterator\CarsList;
use PHPUnit\Framework\TestCase;

final class IteratorTests extends TestCase
{

    public function testIfCanIterateOverCarList(): void
    {
        $carsList = new CarsList();
        $carsList->add(new Car("Mercedes", "A45S AMG"));
        $carsList->add(new Car("Audi", "RS3"));
        $carsList->add(new Car("Volkswagen", "Golf R"));
        $cars = [];

        foreach ($carsList as $car) {
            $cars[] = $car->getFullModel();
        }

        $this->assertSame(
            [
                "Mercedes A45S AMG",
                "Audi RS3",
                "Volkswagen Golf R",
            ],
            $cars
        );
    }

    public function testIfCanAddNewCarsToTheList(): void
    {
        $carsList = new CarsList();
        $carsList->add(new Car("Mercedes", "A45S AMG"));
        $this->assertCount(1, $carsList);
    }

    public function testIfCanRemoveCarsFromTheList(): void
    {
        $car = new Car("Mercedes", "A45S AMG");
        $carsList = new CarsList();
        $carsList->add($car);
        $carsList->removeCar($car);
        $this->assertCount(0, $carsList);
    }
}
