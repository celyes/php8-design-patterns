<?php

namespace Patterns\Structural\Facade;

use Patterns\Structural\Facade\Submodules\Drive;

class DriveFacade
{

    public function __construct(protected Drive $drive)
    {
    }

    public function startDriving()
    {
        $this->drive
        ->getInAndBuckleUp()
        ->insertIgnitionKey()
        ->shiftToNeutral()
        ->twistIgnitionKey()
        ->shiftIntoFirst()
        ->accelerate();
    }
    public function park()
    {
        $this->drive
        ->findAParkingSpot()
        ->parkIntoSpot()
        ->reverseTwistIgnitionKey();
    }
}
