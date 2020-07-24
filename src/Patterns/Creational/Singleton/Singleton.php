<?php

namespace Patterns\Creational\Singleton;

use Exception;

final class Singleton
{

    private static $instance = null;

    private function __construct()
    {
        // hide the contructor
    }
    
    private function __clone()
    {
        // disable cloning
    }
    
    private function __wakeup()
    {
        // disable unserialization
    }

    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}
