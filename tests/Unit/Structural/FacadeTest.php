<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Facade\Facade;
use Patterns\Structural\Facade\DriveFacade;
use Patterns\Structural\Facade\Submodules\Drive;

final class FacadeTest extends TestCase 
{
    private Facade $drivingExperience;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->drivingExperience = new DriveFacade(new Drive());
    }

    public function testStartDrivingFunction(): void
    {
        $this->expectOutputString('Driving...');
        $this->drivingExperience->startAction();
    }

    public function testParkingAndStoppingFunction(): void
    {
        $this->expectOutputString('Car is parked now...');
        $this->drivingExperience->finishAction();
    }
} 