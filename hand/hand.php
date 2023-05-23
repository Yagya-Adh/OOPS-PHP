<?php

echo "<h1> German_Shepherd </h1>";


class German_Shepherd
{
    /* constants */

    const HAS_HEART = true;
    const HAS_TAIL = true;

    /* variables */


    public $eye_color = "Brown";
    public $dob = "03 Jan, 2012";
    public $dose_shed = true;
    public $kingdom = "Mammalia";
    public $phylum = "Vertibrate";
    public $genus = "Canin";
    public $family = "Carnivara";
    public $breed = "German Shephered Dog";
    public $spicies = "Canis Lupus";
    public $fur_color = "Black and Tan";


    /* methods */

    public function bark()
    {
        echo "I' m barking";
    }
    public function walk()
    {
        echo "I'm walking";
    }
    public function sleep($energy_level)
    {
        if ($energy_level < 40) {
            echo "I'm sleeping";
            echo "I dont sleep";
        }
    }


    public function get_eye_color()
    {
        return $this->eye_color;
    }



    public function does_shed()
    {
        return ($this->dose_shed) ? "Yes" : "No";
    }




    public function get_scientific_classification()
    {
        return [
            'Dog Breed' => $this->breed,
            'Body Color ' => $this->fur_color,
            'Eye Color' => $this->eye_color,
            'Phylum' => $this->phylum,
            // so on
        ];
    }
}


$gs_dog = new German_Shepherd();

echo $gs_dog->bark() . "<br/>";
echo $gs_dog->get_eye_color() . "<br/>";

/* ternary operation return  object  */
echo "Does the German Shepard Shed? " . $gs_dog->does_shed() . "<br/><br/><br/>";

/* array returning object */
// echo "<pre>";
// print_r($gs_dog->get_scientific_classification());
// echo "</pre>";

//or

foreach ($gs_dog->get_scientific_classification() as $key => $dog) {
    echo  $key . ': ' .  $dog . "<br/>";
}

/* 





*/

echo "<br/>";
echo "<br/>";
echo "<h1> Car </h1>";

class Car
{
    const HAS_HEADLIGHT = true;
    const HAS_TAIL_IGHT = true;
    const HAS_TURN_SIGNAL = true;


    /*  class property */
    public $color;
    public $make;
    public $model = "s7";

    public $year;
    public $fuel_type = 93;
    public $hp;
    public $torque;
    public $transmission = "6 Speed Manual";
    public $yvehicle_typeear = "Coupe";
    public $weight = "Coupe";
    public $weight_um;
    public $length;



    public  $car_on;

    public function turOn()
    {
        // echo "Im on";
        if ($this->car_on) {
            return "the  " . $this->make . " has already on.";
        }
        $this->car_on = true;
        return $this->make .   " " . $this->model . " has been turned on.";
    }



    public function turOff()
    {
        // echo "Im off";


        if ($this->car_on) {
            $this->car_on = false;
            return $this->make .   " " . $this->model . " has been turned off.";
        }
        return "the  " . $this->make . " has already on.";
    }


    public function drive()
    {
        // echo "Im  drive";


        if ($this->car_on) {
            return "Im driving";
        } else {
            return "You got to turn me on";
        }
    }
}

/* only prints  object property  not the method in side class */
$car = new Car();
// echo "<pre>";
// print_r($car);
// echo "</pre>";




$car->make = "Subaru";
$car->model = "WRX STi";

// echo $car->drive();


class Bee extends Car
{

    public static $bike = "Harly";
    public $all;
    public function show()
    {
        // echo "<pre>";
        // print_r($this);
        // echo "</pre>";
        echo self::$bike . "<br/>"; //static property can be access from non-static method 
        echo  $this->all; //non-static  property only  access from non-static method
    }


    public static function disp()
    {
        //but non-static property cant get acces inside  of static method
        // $this->all;

        echo self::$bike;
    }
}

$bee = new Bee();
// $bee->show();
$bee->all = "two";
echo $bee->show() . "<br/>";
Bee::disp();



echo "<h1> Apple</h1>";


class AppleDevice
{
    public $ram = '1GB';
    public $inch = '4 inch';
    public $space = '16GB';
    public $color = 'Silver';



    public $owner;

    public function getSpecification()
    {
        echo 'This is  iphone ram' . $this->ram . "<br/>";
    }

    public function setOwnerName($owner)
    {
        if (strlen($this->owner) < 3) {
            echo "Owner name can not be less then 3 char." . $owner;
        }

        if (strlen($this->owner) >= 3) {
            echo "Owner name is greater then 3 char." . $owner;
        }
    }
}


$iphone7 = new AppleDevice();

$iphone7->ram;
$iphone7->inch;
$iphone7->space;
$iphone7->color;
$iphone7->getSpecification();

echo  "<pre>";
print_r($iphone7);
echo  "<pre>";
$iphone7->owner = "me";
$iphone7->setOwnerName($iphone7->owner);
