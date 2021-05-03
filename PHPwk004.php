<?php
function Primalitycheck($n){
    if ($n === 0 || $n === 1 || $n === 2){
        return "is";
    }
    for($x = 2;$x < $n; $x++){
        if ($n % $x === 0){
            return "is not";
            break;
        }
        if ($x === $n-1){
            return "is";
        }
    }
}

$n = 30; //n
for($x = 1;$x <= $n; $x++){
    if(Primalitycheck($x) === "is"){
        echo $x . "<br>";
    }
}

?>