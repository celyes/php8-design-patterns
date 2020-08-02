<?php declare (strict_types = 1);

namespace Tests\Unit\Behavioral;

use Patterns\Behavioral\Observer\Publisher;
use Patterns\Behavioral\Observer\Subscribers\EmailNotifier;
use Patterns\Behavioral\Observer\Subscribers\SlackNotifier;
use PHPUnit\Framework\TestCase;

final class ObserverTest extends TestCase
{

    protected $publisher;
    protected $emailNotifier;
    protected $slackNotifier;
    protected function setUp(): void
    {
        parent::setUp();
        $this->publisher = new Publisher;
        $this->emailNotifier = new EmailNotifier;
        $this->slackNotifier = new SlackNotifier;
    }

    public function testIfSubscribersAreAddedCorrectly()
    {
        $this->publisher->attach($this->emailNotifier);
        $this->publisher->attach($this->slackNotifier);

        $this->assertCount(2, $this->publisher->getSubsribers(), 'Events are not added correctly');
    }
    public function testIfOnEventAddedIsWorking()
    {
        $this->assertEquals('Example event - emails', $this->emailNotifier->onEventAdded('Example event'));
        $this->assertEquals('Example event - slack', $this->slackNotifier->onEventAdded('Example event'));
    }
}
