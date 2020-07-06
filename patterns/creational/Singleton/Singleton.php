<?php 

namespace Patterns\Creational\Singleton;

use Exception;

class Singleton {

    private static $instance = null;

    protected function __construct() {}
    
    protected function __clone() { }
    
    protected function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

    public static function getInstance(): Singleton 
    {

        $subclass = static::class;

        if(static::$instance === null) {

            static::$instance = new static();

        }
        
        return static::$instance;
    }
}