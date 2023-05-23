<?php




/* Class callable : demo 1 */
class myClass
{

    static function mymethod()
    {
        echo "<h1>Daily i eat rice</h1>";
    }
}


call_user_func(array('myClass', 'mymethod'));
echo "<br/>";


//or we can use this [] instead of array()
call_user_func(['myClass', 'mymethod']);
echo "<br/>";



//or we can use this    instead of [] and  array()
call_user_func('myClass::mymethod');
echo "<br/>";



//also we can pass  an object direct like this
$ob = new myClass();
call_user_func(array($ob, 'mymethod'));
?>

<style>
    * {
        color: red;
    }

    .h1 {
        color: green;

    }
</style>

<h1 class="h1">
    Some interesting callable function and class

</h1>