<?php
echo strpos("Hello world","world") . "<br>"; //6
echo strpos("Hello world","cat"). "<br>"; //""
echo var_dump(strpos("Hello world","cat")) . "<br>"; //false -> ""
echo strpos("Hello world","ll"). "<br>"; //2
echo strpos("Hello world","l") . "<br>"; //2

echo "***<br>";

$x="5985" + 100;
var_dump(is_numeric($x));//true
echo "$x <br>";
$y='5985';
var_dump(is_numeric($y));//true

echo "<br>**te*<br>";

$z = "110";
$x="$z";
var_dump(is_numeric($x));//true
echo "<br>";
$y='$z';
var_dump(is_numeric($y));//false


echo "<br>***<br>";

$x = 23465.768;//floatをintにキャスト→小数点以下削除
$int_cast = (int)$x;
echo $int_cast . "<br>";

$x = "23465.768";//stringをintにキャスト→小数点以下削除
$int_cast = (int)$x;
echo $int_cast . "<br>";

echo "***<br>";

echo min(0,150,30,20,-8,-200) . "<br>";
echo max(0,150,30,20,-8,-200) . "<br>";
echo round(0.60) . "<br>";//6を切り上げ
echo round(0.49) . "<br>";//4を切り捨て

echo "***<br>";

//定数
define("GREETING", "Welcome to W3Schools.com!",false);//大文字小文字区別する
echo GREETING . "<br>";
// echo Greeting . "<br>"; //->error
define("GREETING1", "Welcome to W3Schools.com!",true);//大文字小文字区別しない
echo GREETING1 . "<br>";

echo "***<br>";
$x = 100;  
$y = 50;
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}

?>