<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Facade\DriveFacade;
use Patterns\Structural\Facade\Submodules\Drive;

final class FacadeTest extends TestCase 
{
    private $drivingExperience;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->drivingExperience = new DriveFacade(new Drive());
    }

    public function testStartDrivingFunction()
    {
        $this->expectOutputString('Driving...');
        $this->drivingExperience ->startDriving();
    }

    public function testParkingAndStoppingFunction()
    {
        $this->expectOutputString('Car is parked now...');
        $this->drivingExperience->park();
    }
} 