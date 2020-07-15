<?php

namespace Patterns\Structural\Decorator\Interfaces;

interface Notification
{
    public function getMessage();
    public function getChannel();
    public function send();
}
