<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * Description : Factory
 *          
 * By using static we  dont need to create object of a class thats why we use 
 * static object to instant set the class
 */


class emp
{
    private $id;
    private $salary;
    private $dob;

    public function __construct($id, $salary, $dob)
    {
        $this->id = $id;
        $this->salary = $salary;
        $this->dob = $dob;
    }

    public function getEmpDetaile()
    {

        return $this->id . ' - ' . $this->salary . ' - ' . $this->dob . "<br/>";
    }
}


class empFactory
{
    public static function createEmp($id, $salary, $dob)
    {

        return new emp($id, $salary, $dob);
    }
}



// $obj = empFactory::createEmp(1, "25k", "April 8th 1996");
// echo "<pre>";
// print_r($obj);
// echo "</pre>"; 
//also , we can call the getEmpDetail method of emp class


$obj = empFactory::createEmp(1, "25k", "April 8th 1996");
echo "<pre>";
print_r($obj->getEmpDetaile());
echo "</pre>";


$obj = empFactory::createEmp(2, "45k", "April 8th 1996");
echo "<pre>";
print_r($obj->getEmpDetaile());
echo "</pre>";
