<?php

namespace Patterns\Structural\Decorator;

use Patterns\Structural\Decorator\Interfaces\Notification;

class SlackNotification implements Notification
{
    /**
     * [__construct description]
     *
     * @param   Notification  $notification  Notification object
     *
     * @return  void
     */
    public function __construct(private Notification $notification)
    {
    }

    /**
     * get notification message
     *
     * @return  string  notification message
     */

    public function getMessage(): string
    {
        return $this->notification->getMessage() . " in Slack!";
    }

    /**
     * get notification channel
     *
     * @return  string  notification channel
     */

    public function getChannel(): string
    {
        return $this->notification->getChannel() . " Slack";
    }

    /**
     * send notification
     *
     * @return  string  a phrase to show that notification is sent
     */

    public function send(): string
    {
        return $this->notification->send() . " via Slack";
    }
}
