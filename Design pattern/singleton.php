<?php


/**
 * Description : Singleton impelementation example
 *                
 *        (should have these)  
 *              -private static  variable
 *              -private constructor
 *              -public static method return class singleton instance 
 * 
 */

class Singleton
{
    private static $instance = null;
    private function __construct()
    {
        echo "Connected";
    }

    public static function ShowInstance()
    {

        if (self::$instance = null) {

            self::$instance = new static();
        } else {

            echo "Already connected";
        }

        return self::$instance;
    }
}

$obj = Singleton::ShowInstance();

$obj = Singleton::ShowInstance();
