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
            printArray($array);
        }
    }
    $temp = $array[$i + 1];
    $array[$i + 1] = $array[$right];
    $array[$right] = $temp; 
    printArray($array);
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

function printArray(&$arr)
{
    foreach($arr as $val) {
        echo $val . " ";
    }
    echo "<br>";
}

//$arr = array(12, 11, 13, 5, 6);
$arr = array(8, 7, 6, 1, 0, 9, 2);
printArray($arr);
quicksort($arr, 0, count($arr) - 1);
printArray($arr);

?>