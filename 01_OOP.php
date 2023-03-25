<?php

// Class, Constructor, Destructor
class Apple
{
    public function __construct()
    {
        echo "Hello Apple <br>";
    }


    public function King()
    {
        echo "King method <br>";
    }

    public function __destruct()
    {
        echo "Destructor Is Called <br>";
    }
}
$n = new Apple();
$n->King();
