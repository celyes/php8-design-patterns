<?php

namespace Patterns\Structural\Facade;

use Patterns\Structural\Facade\Submodules\Drive;

class DriveFacade implements Facade
{
    public function __construct(protected Drive $drive)
    {
    }

    public function startAction(): void
    {
        $this->drive
        ->getInAndBuckleUp()
        ->insertIgnitionKey()
        ->shiftToNeutral()
        ->twistIgnitionKey()
        ->shiftIntoFirst()
        ->accelerate();
    }


    public function finishAction(): void
    {
        $this->drive
        ->findAParkingSpot()
        ->parkIntoSpot()
        ->reverseTwistIgnitionKey();
    }
}
