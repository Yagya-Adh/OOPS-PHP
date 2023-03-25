<?php

#Trait  
#Example 1)::::::::::::::::::



// trait class1
// {
//     function fun1()
//     {
//         echo "Fun1";
//     }
// }

// class class2 extends class1
// {
//     use class1;
//     function fun2()
//     {
//         echo "Func2";
//     }
// }


// class Class3 extends Class2
// {
//     function fun3()
//     {
//         echo "Fun3";
//     }
// }

// class Class4 extends Class3
// {
//     function fun4()
//     {
//         echo "Fun4";
//     }
// }

// $Obj = new class3;
// $Obj->fun1();
// $Obj->fun2();




#Example 2)::::::::::::::::::

// trait t1
// {
//     function func1()
//     {
//         echo "T1:Func1";
//     }
// }
// trait t2
// {
//     function func2()
//     {
//         echo "T2:Func2";
//     }
// }

// class Class1
// {
//     use t1, t2;
// }
// $ob = new Class1;
// echo $ob->func1();



// #Example 3):::With same trait function and class function:::::::::::::::

// trait t1
// {
//     function func1()
//     {
//         echo "T1:Func1";
//     }
// }

// trait t2
// {
//     function func2()
//     {
//         echo "T2:Func2";
//     }
// }
// class Class1
// {
//     use t1, t2;
//     public function func2()
//     {
//         echo "function with Same:name as trait-name so class function is given prefer";
//     }
// }
// $ob = new Class1;
// echo $ob->func2();


#Example 4):::With two same trait function :::::::::::::::

trait t1
{
    function func1()
    {
        echo "<h3> T1:Func1";
    }
}

trait t2
{
    function func1()
    {
        echo " <h3> T2:Func2";
    }
}
class Class1
{
    use t1, t2 {

        t1::func1 insteadof t2;

        t2::func1 as F2; //here aliasing the name if you want to call t2 function also
    }
    // public function func1()
    // {
    //     echo "function with Same:name as trait-name so class function is given prefer";
    // }
}
$ob = new Class1;

echo $ob->func1() . "<br>";

echo  $ob->F2();
