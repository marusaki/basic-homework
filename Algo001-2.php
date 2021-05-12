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

function maximumPairTotal($arr)
{
    echo "Output:" . ($arr[sizeof($arr) -1] + $arr[sizeof($arr) -2]) . "<br>";
}

function printArray(&$arr)
{
    echo "Input:";
    foreach($arr as $val) {
        echo $val . " ";
    }
    echo "<br>";
}

$arr = array(0, 2, 1, 9, 7);
printArray($arr);
quicksort($arr, 0, count($arr) - 1);
maximumPairTotal($arr);

$arr = array(4, 11, 13, 6, 2);
printArray($arr);
quicksort($arr, 0, count($arr) - 1);
maximumPairTotal($arr);

$arr = array(5, 1, 6, 3, 7, 0, 2, 4, 10);
printArray($arr);
quicksort($arr, 0, count($arr) - 1);
maximumPairTotal($arr);
?>
