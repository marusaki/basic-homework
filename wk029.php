<?php 
function partition(&$array, $left, $right) {
    $pivot = $array[$right];
    $i = $left -1;

    echo "pivot:" . $pivot . " i:" . $i . "<br>";

    for ($j = $left; $j < $right; $j++) {
          if(($array[$j] < $pivot)){
            $i++;
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;

            echo "for i=" . $i ." j=" .$j ." " . print_r($array) . "<br>" ;

          }
    }
    echo "before　" . print_r($array) . "<br>" ;
    $temp = $array[$i + 1];
    $array[$i + 1] = $array[$right];
    $array[$right] = $temp;
    echo "after　" . print_r($array) . "<br>" ;
    return ($i + 1);
}

function quicksort(&$array, $left, $right) {
    if($left < $right) {
        $pivotIndex = partition($array, $left, $right);
        quicksort($array,$left,$pivotIndex -1 );
        quicksort($array,$pivotIndex, $right);
    }
}

// A utility function to 
// print an array of size n 
function printArray(&$arr, $n) 
{ 
    for ($i = 0; $i < $n; $i++) 
        echo $arr[$i]." "; 
    echo "\n"; 
} 

$arr = array(8, 7, 6, 1, 0, 9, 2); 
quicksort($arr, 0,count($arr) -1);
printArray($arr, sizeof($arr)); 
