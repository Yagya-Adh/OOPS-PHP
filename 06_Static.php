<?php
// 1) Example::
// Static ::
// class Clas
// {
//     public $num2 = 100;
//     static  public $num = 10;
//     public function __construct()
//     {
//     }
//     static function fun1()
//     {
//         //only static variable is access not $this
//         self::$num;
//         echo "<h4>Tesing.</h4>";
//     }
// }

// // No need to create object to access static varriable and method
// // staic value
// echo Clas::$num;
// // echo self::Clas;
// // staic function call
// echo Clas::fun1();




// 2)Example

class Add
{
    static public $add = 100;

    static function funi()
    {
        return self::$add++;
    }
}


Add::$add;
echo "<br/>";
echo Add::funi();

echo "<hr>";
class Country
{

    public  $phone;
    public static $name = "Nepal";
    public static function dispCountryState($x, $contact)
    {

        echo $phone = $contact;
        echo "<h3>" . $x . "<br>";
        echo  "<h3>" . self::$name;
    }


    public function tel($c)
    {
        echo "<h3> " . $this->phone = $c . " </h3>";
    }
}

$desh = new Country;

$desh->tel($con = 984563210);



/*   $desh->dispCountryState(); */


echo "<h2>" . Country::dispCountryState($sir = "David", $co = 9845803170);
echo "<h1>" . Country::$name;
