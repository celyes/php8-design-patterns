<?php

namespace Patterns\Structural\Decorator;

use Patterns\Structural\Decorator\Interfaces\Notification;

class EmailNotification implements Notification
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

    public function getMessage()
    {
        return $this->notification->getMessage() . " in your mailbox!";
    }

     /**
     * get notification channel
     *
     * @return  string  notification channel
     */

    public function getChannel()
    {
        return $this->notification->getChannel() . " E-Mail";
    }

    /**
     * send notification
     *
     * @return  string  a phrase to show that notification is sent
     */
    
    public function send()
    {
        return $this->notification->send() . " via email";
    }
}
