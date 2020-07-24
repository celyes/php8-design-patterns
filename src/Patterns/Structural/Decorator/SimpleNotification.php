<?php

namespace Patterns\Structural\Decorator;

use Patterns\Structural\Decorator\Interfaces\Notification;

class SimpleNotification implements Notification
{
    
    /**
     * get notification message
     *
     * @return  string  notification message
     */

    public function getMessage()
    {
        return "New message";
    }

    /**
     * get notification channel
     *
     * @return  string  notification channel
     */

    public function getChannel()
    {
        return "Sent via";
    }
    
    /**
     * send notification
     *
     * @return  string  a phrase to show that notification is sent
     */
    
    public function send()
    {
        return "Notification sent";
    }
}
