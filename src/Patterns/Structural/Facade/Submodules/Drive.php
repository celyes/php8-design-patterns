<?php

namespace Patterns\Structural\Facade\Submodules;

class Drive
{
    public function getInAndBuckleUp()
    {
        return $this;
    }
    
    public function insertIgnitionKey()
    {
        return $this;
    }

    public function shiftToNeutral()
    {
        return $this;
    }

    public function twistIgnitionKey()
    {
        return $this;
    }

    public function shiftIntoFirst()
    {
        return $this;
    }

    public function accelerate()
    {
        echo "Driving...";
    }

    // stop
    public function findAParkingSpot()
    {
        return $this;
    }

    public function parkIntoSpot()
    {
        return $this;
    }

    public function reverseTwistIgnitionKey()
    {
        echo "Car is parked now...";
    }
}
