<?php
#1) if child class has no property, methods , constructor as parent then::

// class Class1
// {
//     public function __construct()
//     {
//         echo "I am from nepal";
//     }
// }
// class Class2 extends Class1
// {
// }
// $a = new Class2();


#2) if child class has similar property, methods , constructor as parent then::
class Class1
{
    public $name = "YAGYA";
    public function __construct()
    {
        echo "I am from nepal";
    }

    public function fun1()
    {
        return  $this->name;
    }
}
class Class2 extends Class1
{
    public function __construct()
    {
        echo " Hence, similary property /method /constructor 
         cant be transfered from parent to child if they content it.But, proerty/ method/ constructor of class called is invoked  <br/>";
    }
}

$a = new Class2();
echo $a->fun1();
// Hence, similary property /method /constructor  cant be transfered from parent to child.




#3) Example of similary property of parent and child


// class Class1
// {
//     public $name = "Laptop1";
//     public function __construct()
//     {
//         echo "Only this class1 property is available";
//     }

//     public function fun1()
//     {
//         return  $this->name;
//     }
// }
// class Class2 extends Class1
// {
//     public $name = "Laptop2";
//     public function __construct()
//     {
//         echo " Only this class2 property is available . <br/>";
//     }

//     public function fun1()
//     {
//         return  $this->name;
//     }
// }
// $a = new Class2();
// echo $a->fun1();


#Example 4)
#######Important### 
/* You must return your parent method to access parent 
 method into child class as following example
*/


class E
{
    public function co()
    {
        return "Aeromax";
    }
}
class D extends E
{

    public function mo()
    {
        return $this->co();
    }
}


// $a = new D;
// echo $a->mo();
