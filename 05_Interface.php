<?php

###### -- PHP DO NOT SUPPORTS MULTIPLE INHERITANCES --#####
###### -- INTERFACE USE TO INHERIT MULTIPLE INHERETANCES--###



// Interface support multiple inheretance 
// Interface can only contain abstract function
// In Interface we can not define varible
// No constructor in Interface
// All function must be public



interface Class1
{
    public function test1(); //only public function
}
interface Class2
{
    public function test2(); //only public function
}

class Class3 implements Class1, Class2
{
    public function test1()
    {
        echo "<h2>Hi1 , Gas Cooking Food.<h2>";
    }
    public function test2()
    {
        echo "<h3>Hi2, Fry-Pan Cooking Food.</h3>";
    }
}

echo "<h2> Implementating the real life cooking food <h3> :Gas/ FryPan/ Food</h3><br/></h2><br>
<h3> :Gas/ FryPan/ Food</h3><br/>";
$c3 = new Class3;

echo $c3->test2();

echo $c3->test1();
