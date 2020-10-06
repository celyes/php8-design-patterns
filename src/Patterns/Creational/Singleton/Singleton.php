<?php

namespace Patterns\Creational\Singleton;

use Exception;

final class Singleton
{

    private static $instance = null;

    private function __construct()
    {
        return;
    }
    
    private function __clone()
    {
        return;
    }
    
    private function __wakeup()
    {
        return;
    }

    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}
