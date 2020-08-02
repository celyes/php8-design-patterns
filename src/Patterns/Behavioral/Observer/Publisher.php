<?php

namespace Patterns\Behavioral\Observer;

use Patterns\Behavioral\Observer\Interfaces\Observable;
use Patterns\Behavioral\Observer\Interfaces\Observer;

class Publisher implements Observable
{

    protected $subscribers = [];

    protected function notify(string $event)
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->onEventAdded($event);
        }
    }
    public function attach(Observer $subscriber)
    {
        $this->subscribers[] = $subscriber;
    }

    public function getSubsribers()
    {
        return $this->subscribers;
    }
    public function addEvent(string $event)
    {
        $this->notify($event);
    }
}
