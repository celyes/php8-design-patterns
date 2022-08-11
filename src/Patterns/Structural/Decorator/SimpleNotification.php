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

    public function getMessage(): string
    {
        return "New message";
    }

    /**
     * get notification channel
     *
     * @return  string  notification channel
     */

    public function getChannel(): string
    {
        return "Sent via";
    }

    /**
     * send notification
     *
     * @return  string  a phrase to show that notification is sent
     */

    public function send(): string
    {
        return "Notification sent";
    }
}
