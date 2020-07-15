<?php

namespace Patterns\Structural\Decorator;

use Patterns\Structural\Decorator\Interfaces\Notification;

class SimpleNotification implements Notification 
{
    
    public function getMessage()
    {
        return "New message";
    }
    public function getChannel()
    {
        return "Sent via";
    }
    public function send(){
        return "Notification sent";
    }
}
