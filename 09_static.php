<?php

echo "<h1> This Vs Self  : </h1>";





echo "<h1>This or, Non-static </h1>";
class IncVal
{
    public $a;
    public function getInc()
    {

        return $this->a++;
    }
}
$Inc = new IncVal();
$Inc->a = 1;
for ($i = 0; $i < 5; $i++) {
    echo 'Increace value is with THIS:' . $Inc->getInc() . "<br>";
}







echo "<h1> Self or, Static</h1>";
class IncreaseVal
{
    static $c;
    public static function getCount()
    {
        return self::$c++;
    }
}

IncreaseVal::$c = 1;
for ($i = 0; $i < 5; $i++) {
    echo 'Increace value is with SELF:' . IncreaseVal::getCount() . "<br>";
}
