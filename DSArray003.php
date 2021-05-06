<?php
$arr = array(
    array(5, 12, 17, 9, 13), 
    array(13, 4, 8, 14, 1),
    array(9, 5, 3, 17, 21),
);

$sum = 0;
$min = $arr[0][0];
$max = $arr[0][0];

foreach ($arr as $row) {
    foreach ($row as $col) {
        $sum += $col;

        if ($min > $col){
            $min = $col;
        }

        if ($max < $col){
            $max = $col;
        }
    }
}

echo (int)($sum / (count($arr,1) - count($arr))) . "\n";
echo $sum . "\n";
echo $min . "\n";
echo $max . "\n";

?>