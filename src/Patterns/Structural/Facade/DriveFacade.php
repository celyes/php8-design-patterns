<?php

namespace Patterns\Structural\Facade;

use Patterns\Structural\Facade\Submodules\Drive;

class DriveFacade
{
    private $drive;

    public function __construct(Drive $drive)
    {
        $this->drive = $drive;
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
        ->reversetwistIgnitionKey();
    }
}
