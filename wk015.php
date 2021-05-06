<?php
$x = 75;
$y = 25;

function add($x,$y){
    return $z = $x + $y;
}

echo add($x,$y);
echo "<br> *** <br>";

$xx = 75;
$yy = 25;
function addition() {
  $GLOBALS['zz'] = $GLOBALS['xx'] + $GLOBALS['yy'];
}

addition();
echo $zz;

?>