<?php

namespace Patterns\Structural\Facade\Submodules;

class Drive
{
    public function getInAndBuckleUp(): self
    {
        return $this;
    }
    
    public function insertIgnitionKey(): self
    {
        return $this;
    }

    public function shiftToNeutral(): self
    {
        return $this;
    }

    public function twistIgnitionKey(): self
    {
        return $this;
    }

    public function shiftIntoFirst(): self
    {
        return $this;
    }

    public function accelerate(): void
    {
        echo "Driving...";
    }

    // stop
    public function findAParkingSpot(): self
    {
        return $this;
    }

    public function parkIntoSpot(): self
    {
        return $this;
    }

    public function reverseTwistIgnitionKey(): void
    {
        echo "Car is parked now...";
    }
}
