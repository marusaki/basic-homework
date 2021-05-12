<?php
function partition(&$array, $left, $right)
{
    $pivot = $array[$right];
    $i = $left -1;
    for ($j = $left; $j < $right; $j++) {
        if ($array[$j] < $pivot) {
            $i++;
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
    $temp = $array[$i + 1];
    $array[$i + 1] = $array[$right];
    $array[$right] = $temp; 
    return ($i + 1);
}

function quicksort(&$array, $left, $right)
{
    if ($left < $right) {
        $pivotindex = partition($array, $left, $right);
        quicksort($array, $left, $pivotindex - 1);
        quicksort($array, $pivotindex, $right);
    }
}

$arr1 = array(11, 7, 1);
$arr2 = array(4, 6, 2);
$k = 3;

quicksort($arr1, 0, count($arr1) - 1);
quicksort($arr2, 0, count($arr2) - 1);

for($i = 0; $i < $k; $i++) {
    echo "[" . $arr1[0] . "," . $arr2[$i] . "]<br>";
}

?>