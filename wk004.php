<?php
function myTest(){
    static $x = 0;
    echo "$x <br>";
    $x++;
}

myTest();
mytest();
myTest();
?>