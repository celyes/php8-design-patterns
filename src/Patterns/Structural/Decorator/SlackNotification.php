<?php

namespace Patterns\Structural\Decorator;

use Patterns\Structural\Decorator\Interfaces\Notification;

class SlackNotification implements Notification 
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
        
    }
    public function getMessage()
    {
        return $this->notification->getMessage() . " in Slack!";
    }
    public function getChannel()
    {
        return $this->notification->getChannel() . " Slack";
    }
    public function send(){
        return $this->notification->send() . " via Slack";
    }
}
