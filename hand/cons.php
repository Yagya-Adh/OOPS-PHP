<?php


class COS
{
    const CAT = 'CAT';
    private $Temple;


    public static $BIKE = 'BIKE';
}
//1
/* variable or, non-static property */
$ob = new COS();
echo "<pre>";
print_r($ob);
echo "</pre>";


//2
/* constant or, static property */
echo "constant or, static property";
$co = COS::CAT;
echo "<pre>";
print_r($co);
echo "</pre>";


//3
/* constant or, static property */
echo "constant or, static property";
$co = COS::$BIKE;
echo "<pre>";
print_r($co);
echo "</pre>";


class Buf extends COS
{
    public $n;


    public function __construct()
    {
        echo "I have a " . parent::$BIKE . "<br/>";
    }

    public function show()
    {
        echo "IM a   " . COS::$BIKE . "<br/>";

        echo $this->n = COS::$BIKE . "<br/>";
    }
}



$buf = new Buf;
// echo "<pre>";
// print_r($buf);
// echo "</pre>";

// echo $buf->show() . "<br/>";

echo   $buf->show();
