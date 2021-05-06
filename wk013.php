<?php
function mySort($arr){
    foreach($arr as $x => $y){
        echo "Key=" . $x . ", Value=" . $y;
        echo "<br>";
    }
}

$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"42");
mySort($age);
echo "<br>***<br>";

echo "<br>**asort**<br>";
asort($age);
mySort($age);

echo "<br><br>**arsort**<br>";
arsort($age);
mySort($age);

echo "<br><br>**ksort**<br>";
ksort($age);
mySort($age);

echo "<br><br>**krsort**<br>";
krsort($age);
mySort($age);
