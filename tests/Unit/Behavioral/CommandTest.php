<?php declare (strict_types = 1);

namespace Tests\Unit\Behavioral;

use Patterns\Behavioral\Command\Television;
use Patterns\Behavioral\Command\IncreaseVolume;
use Patterns\Behavioral\Command\DecreaseVolume;
use Patterns\Behavioral\Command\RemoteControl;
use PHPUnit\Framework\TestCase;

final class CommandTest extends TestCase
{
    protected $tv;
    protected $increaseVolume;
    protected $decreaseVolume;
    protected $remote;
    public function setUp(): void
    {
        parent::setUp();

        $this->tv = new Television();
        $this->increaseVolume = new IncreaseVolume($this->tv);
        $this->decreaseVolume = new DecreaseVolume($this->tv);
        $this->remote = new RemoteControl();
    }

    public function testVolumeCanBeIncreased()
    {
        $this->assertEquals('Volume is up', $this->remote->invoke($this->increaseVolume));
    }

    public function testVolumeCanBeDecreased()
    {
        $this->assertEquals('Volume is down', $this->remote->invoke($this->decreaseVolume));
    }
}
