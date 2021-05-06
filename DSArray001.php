<?php

function Calc($arr){
    Average($arr);
    Total($arr);
    Minimum($arr);
    Maximum($arr);
    echo "<br>";

}

function Average($arr){
    $ave = 0;
    for($i = 0 ;$i < sizeof(($arr)); $i++){
        $ave += $arr[$i];
    }
    echo $ave / sizeof($arr) . "\n";
}

function Total($arr){
    $sum = 0;
    for($i = 0 ;$i < sizeof(($arr)); $i++){
        $sum += $arr[$i];
    }
    echo $sum . "\n";
}

function Minimum($arr){
    echo min($arr) . "\n";
}

function Maximum($arr){
    echo max($arr) . "\n";
}

$arr = array(5,12,17,9,3);
Calc($arr);
$arr = array(13,4,8,14,1);
Calc($arr);
$arr = array(9,5,3,7,21);
Calc($arr);

?>