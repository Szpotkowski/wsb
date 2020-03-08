<?php
$potega=2**10;
echo $potega, "<br>";
//systemy liczbowe
$int=10;
$hex=0xA;
$oct=012;//2*8^0+2*8^1
$bin=0b1011;
echo $int,"<br>";
echo $hex,"<br>";
echo $oct,"<br>";
echo $bin,"<br>";

//echo phpinfo()

//operatory

$x=0b1010;
echo $x,"<br>"; //10
$x = $x>>1;
echo $x,"<br>"; //20

//równe oraz identyczne

$x=1;
$y=1.0;
if ($x == $y)
echo "Równe<br>";
else
echo "Różne<br>";

if ($x === $y)
echo "Identyczne<br>";
else
echo "Nieidentyczne<br>";

echo gettype($x),"<br>";
echo gettype($y),"<br>";

//operator rzutowania danych

$text = "123ssd";
$x = (int) $text;
echo $x, "<br>";
echo gettype($x);

$text = 10;
$x = (unset)$text;
echo "\$text: $text <br>";
echo "\$x: $x<br>";
echo gettype($text),"<br>";
echo gettype($x),"<br>";

//

echo $_SERVER['SERVER_PORT'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['DOCUMENT_ROOT'],"<br>";

$fileLocal  = $_SERVER['DOCUMENT_ROOT'];
$fileLocal .= $_SERVER['SCRIPT_NAME'];

echo $fileLocal, "<hr>";

//stałe - nazwa stałej z dużej litery
define("NAME", "Janusz");
echo NAME;

define("SURNAME", "Kowal", true);
echo SURNAME, "<br>";

echo PHP_VERSION;
?>
