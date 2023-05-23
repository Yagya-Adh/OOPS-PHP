<?php

echo "<h1>Method Chaining</h1>";
echo "Basic of Chaining";

class Abc
{

    public $a = 1;

    public function A()
    {
        echo "Method A";
        // echo ++$this->a . "<br/>";
        return $this; // if we reurn $this from here than method B() will able to access $ObjS
    }
    public function B()
    {
        echo "Method B";
        // echo ++$this->a . "<br/>";
        return $this;  //similarly here too return $this
    }

    public function C()
    {
        echo "Method C";

        // echo ++$this->a . "<br/>";
        return $this; //similarly here too return $this
    }
}


$ObjS = new Abc();

$ObjS->A()
    ->B()
    ->C();


//Example 2:
echo "<h1>Method Chaining example 2</h1>";
class Uploader
{
    private $result;
    public function afterSave($result)
    {
        $this->result = $result;
        return $this;
    }

    public function calculateResult()
    {
        return $this->result * 4;
    }
}


$a = new Uploader();
$result = 10;
echo $a->afterSave($result)->calculateResult();
