<?php declare (strict_types = 1);

namespace Tests\Unit\Behavioral;

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

        $this->tv = new Telivision();
        $this->increaseVolume = new IncreaseVolume($this->tv);
        $this->decreaseVolume = new DecreaseVolume($this->tv);
        $this->remote = new RemoteControl();
    }
    public function testChannelCanBeChanged()
    {
        $this->assertEquals('Volume is up', $this->remote->invoke($this->increaseVolume));
        $this->assertEquals('Volume is down', $this->remote->invoke($this->decreaseVolume));
    }
}
