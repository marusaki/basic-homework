<?php
$arra = array(1,2,3,4,5);
$arrb = array(4,5,3,2,10);

for ($i = 0; $i < sizeof($arra); $i++) {
    $arrc[$i] = $arra[$i] + $arrb[$i];
    echo $arrc[$i] . "\n"; 
}

?>