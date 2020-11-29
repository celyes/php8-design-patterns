<?php

namespace Patterns\Creational\Singleton;

use Exception;

final class Singleton
{
    /**
     * hold an instance of the class
     * @var instance
     * */
    private static $instance = null;

    private function __construct()
    {
        return;
    }
    /**
     * return an instance of the class
     * @method getInstance 
     * @return Singleton
     * */
    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}
