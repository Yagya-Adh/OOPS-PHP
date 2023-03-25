<?php



// Abstract means Incomplete .
// Abstract class contains atleast one abstract function.
// abstract function is declared but not implemented .
// Abstract class could not create object.
// Abstract class, child class must contain abstract function.

# use abstract as Keyword .


abstract class Bank
{
    abstract function id_card(); //only abstract function
}


class nic extends Bank
{
    public function __construct()
    {
        $this->id_card();
    }

    public function id_card()
    {

        echo "<h3>Abstract is mandatory to declear in there child";
    }
}

$NIC = new nic();
echo "<br><h4>" . $NIC->id_card();
