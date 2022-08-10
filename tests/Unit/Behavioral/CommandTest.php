<?php declare (strict_types = 1);

namespace Tests\Unit\Behavioral;

use PHPUnit\Framework\TestCase;
use Patterns\Behavioral\Command\Television;
use Patterns\Behavioral\Command\RemoteControl;
use Patterns\Behavioral\Command\DecreaseVolume;
use Patterns\Behavioral\Command\IncreaseVolume;
use Patterns\Behavioral\Command\Interfaces\Device;
use Patterns\Behavioral\Command\Interfaces\Command;
use Patterns\Behavioral\Command\Interfaces\Commandable;

final class CommandTest extends TestCase
{
    protected Commandable $tv;
    protected Command $increaseVolume;
    protected Command $decreaseVolume;
    protected Device $remote;
    public function setUp(): void
    {
        parent::setUp();

        $this->tv = new Television();
        $this->increaseVolume = new IncreaseVolume($this->tv);
        $this->decreaseVolume = new DecreaseVolume($this->tv);
        $this->remote = new RemoteControl();
    }

    public function testVolumeCanBeIncreased(): void
    {
        $this->assertEquals('Volume is up', $this->remote->invoke($this->increaseVolume));
    }

    public function testVolumeCanBeDecreased(): void
    {
        $this->assertEquals('Volume is down', $this->remote->invoke($this->decreaseVolume));
    }
}
