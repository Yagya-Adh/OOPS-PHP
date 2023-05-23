<?php




/* demo 1 */

function fun()
{

    echo "Hi my name is fun";
}

function para($callback)
{
    return  call_user_func($callback);
}
para("fun"); //we actually pass function name to be used into inside the callback function 







/* demo 2 */

// passing a arriable into a callable function with a  annynomous function  
function my_cow($callback)
{
    call_user_func($callback);
}
$myVal = function () {
    echo "<h2>i  am  callable variable</h2>";
}; // we must use ; semi-colon for every annynomous functions and varriable

my_cow($myVal);



/* demo 3 */
//Direct passing annynomous function inside a Callable function.
function mcow($callback)
{

    call_user_func($callback);
}



mcow(
    function () {
        echo "<h1> Hi im am back </h1>";
    }
);






?>


<h1>
    Some interesting callable function and class

</h1>