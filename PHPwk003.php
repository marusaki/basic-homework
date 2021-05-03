<?php
function PrimalityTest($n){
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

for($x = 0;$x < 11; $x++){
    echo $x ." " . PrimalityTest($x) . " a Prime number<br>";
}
?>