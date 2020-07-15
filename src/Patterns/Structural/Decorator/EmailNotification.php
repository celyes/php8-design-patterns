<?php

namespace Patterns\Structural\Decorator;

use Patterns\Structural\Decorator\Interfaces\Notification;

class EmailNotification implements Notification 
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
        
    }
    public function getMessage()
    {
        return $this->notification->getMessage() . " in your mailbox!";
    }
    public function getChannel()
    {
        return $this->notification->getChannel() . " E-Mail";
    }
    public function send(){
        return $this->notification->send() . " via email";
    }
}
