<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Decorator\EmailNotification;
use Patterns\Structural\Decorator\SlackNotification;
use Patterns\Structural\Decorator\SimpleNotification;
use Patterns\Structural\Decorator\Interfaces\Notification;

final class DecoratorTest extends TestCase 
{
    private Notification $notification;
    public function setUp(): void
    {
        parent::setUp();
        $this->notification = new SimpleNotification();
    }

    public function testSimpleNotificationClass(): void
    {
        $this->assertEquals("New message", $this->notification->getMessage());
        $this->assertEquals("Sent via", $this->notification->getChannel());
        $this->assertEquals("Notification sent", $this->notification->send());
    } 

    public function testSlackNotificationClass(): void
    {
        $slack = new SlackNotification($this->notification);
        $this->assertEquals("New message in Slack!", $slack->getMessage());
        $this->assertEquals("Sent via Slack", $slack->getChannel());
        $this->assertEquals("Notification sent via Slack", $slack->send());
    }

    public function testEmailNotificationClass(): void
    {
        $email = new EmailNotification($this->notification);
        $this->assertEquals("New message in your mailbox!", $email->getMessage());
        $this->assertEquals("Sent via E-Mail", $email->getChannel());
        $this->assertEquals("Notification sent via email", $email->send());
    } 
} 