<?php

// class  User
// {
//     private $name;
//     private $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }


//     //get
//     public function getName()
//     {
//         return $this->name;
//     }


//     public function getAge()
//     {
//         return $this->age;
//     }

//     //set

//     public function setName($name)
//     {
//         return $this->name = $name;
//     }
//     public function setAge($age)
//     {
//         return $this->age = $age;
//     }
// }



// $user = new User(" Yagye ", 27);

// //name
// $user->setName(" Ananda "); //setter
// echo $user->getName();      //getter


// //age
// $user->setAge(10); //setter
// echo $user->getAge();      //getter



/**
 *   But we are using  Magic Methods  
 *  in order to minize repeatation of objects 
 * 
 *  
 */


class  User
{


    private $name;
    private $age;



    public function __construct($name, $age)
    {



        $this->name = $name;
        $this->age = $age;
    }


    //magic methods


    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }


    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            return $this->$property = $value;
        }
        return $this;
    }
}



$user = new User('Dan', 24);

// echo $user->__get('name');

echo $user->__set('name', ' Everest ');

echo $user->__set('age', '10');
