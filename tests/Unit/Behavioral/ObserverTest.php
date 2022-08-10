<?php declare (strict_types = 1);

namespace Tests\Unit\Behavioral;

use PHPUnit\Framework\TestCase;
use Patterns\Behavioral\Observer\Publisher;
use Patterns\Behavioral\Observer\Interfaces\Observer;
use Patterns\Behavioral\Observer\Interfaces\Observable;
use Patterns\Behavioral\Observer\Subscribers\EmailNotifier;
use Patterns\Behavioral\Observer\Subscribers\SlackNotifier;

final class ObserverTest extends TestCase
{

    protected Observable $publisher;
    protected Observer $emailNotifier;
    protected Observer $slackNotifier;

    protected function setUp(): void
    {
        parent::setUp();
        $this->publisher = new Publisher;
        $this->emailNotifier = new EmailNotifier;
        $this->slackNotifier = new SlackNotifier;
    }

    public function testIfSubscribersAreAddedCorrectly(): void
    {
        $this->publisher->attach($this->emailNotifier);
        $this->publisher->attach($this->slackNotifier);

        $this->assertCount(2, $this->publisher->getSubscribers(), 'Events are not added correctly');
    }

    public function testIfOnEventAddedIsWorking(): void
    {
        $this->assertEquals('Example event - emails', $this->emailNotifier->onEventAdded('Example event'));
        $this->assertEquals('Example event - slack', $this->slackNotifier->onEventAdded('Example event'));
    }
}
