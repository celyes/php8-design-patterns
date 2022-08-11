<?php

namespace Patterns\Behavioral\Observer;

use Patterns\Behavioral\Observer\Interfaces\Observable;
use Patterns\Behavioral\Observer\Interfaces\Observer;

class Publisher implements Observable
{
    /**
     * @var array<Observer> $subscribers
     */
    protected $subscribers = [];

    protected function notify(string $event): void
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->onEventAdded($event);
        }
    }

    /**
     * @param Observer $subscriber
     * @return void
     */
    public function attach(Observer $subscriber): void
    {
        $this->subscribers[] = $subscriber;
    }

    /**
     * @return array<Observer>
     */
    public function getSubscribers(): array
    {
        return $this->subscribers;
    }

    /**
     * @return void
     */
    public function addEvent(string $event): void
    {
        $this->notify($event);
    }
}
