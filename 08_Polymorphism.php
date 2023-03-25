<?php
#Polymorphism = multiple form .or, different form.
// ways to do :::::::::::::::::::::::::::::::::::
//  1 Abstract Class
//  2 Interface



//  1 Abstract Class

// abstract class class1
// {
//     abstract function start();
// }
// class Class2 extends class1
// {
//     function start()
//     {
//         echo "<h3>Batsman</h3>";
//     }
// }
// class Calss3 extends class1
// {
//     function start()
//     {
//         echo "<h4>Baller</h4>";
//     }
// }
// $obj = new Calss3;
// $obj->start();
// $o = new Class2;
// $o->start();



//  2 Interface


interface class1
{
    function start();
}

class Class2 implements class1
{
    function start()
    {
        echo "<h3>Batsman</h3>";
    }
}

class Calss3 implements class1
{
    function start()
    {
        echo "<h4>Baller</h4>";
    }
}

$obj = new Calss3;
$obj->start();


$o = new Class2;
$o->start();
