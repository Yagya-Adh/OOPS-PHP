<?php

class Class1
{
    public $num; //Everyone can access this PUBLIC value
    private $num1;  //NO class and no external can access this PRIVATE value
    protected $num2;  //only other class can exten this PROTECTED value
    public $name;
    public function __construct()
    {
        $this->num = 100;
        $this->num1 = 2;
        $this->num2 = 4;

        // echo $this->name = "HELO.<br>";
    }

    public function getFun()
    {
        echo "<br/>" . $this->num1;
    }
}


$out = new Class1();

// echo "<br/>" . $out->num1 = 9; //but,

// echo  $out->getFun();




class Class2 extends Class1
{

    //public function getFun()
    // {
    //     // return $this->num;
    //     // return $this->num1;
    //     return $this->num2;
    //     echo "We can access this function outside the class";
    // }

    // private function getFun()
    // {
    //     return $this->num2;
    //     echo "We cant access this function outside the class";
    // }


    // protected function getFun()
    // {
    //     return $this->num2;
    //     echo "We cant access this function outside the class";
    // }
}

$er = new Class2();
echo $er->getFun();


echo "<br/> ACCESS ASSISSFIRE :: <br>PUBLIC <br>PROTECTED <br>PRIVATE ";


// public 
// protected
// private