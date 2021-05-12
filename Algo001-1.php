<?php
function bubbleSort(&$arr) 
{ 
    $n = sizeof($arr); 
  
    // Traverse through all array elements 
    for($i = 0; $i < $n; $i++) 
    { 
        $swapped = False; 
  
        // Last i elements are already 
        // in place 
        for ($j = 0; $j < $n - $i - 1; $j++) 
        { 
              
            // traverse the array from 0 to 
            // n-i-1. Swap if the element  
            // found is greater than the 
            // next element 
            if ($arr[$j] > $arr[$j+1]) { 
                $t = $arr[$j]; 
                $arr[$j] = $arr[$j+1]; 
                $arr[$j+1] = $t; 
                $swapped = True; 
            } 
        } 
  
        // IF no two elements were swapped 
        // by inner loop, then break 
        if ($swapped == False) {
            break; 
        }
    } 
} 

function showArray($data) 
{
    echo "Output: " . ( $data[sizeof($data) - 1] + $data[sizeof($data) - 2] ) . "<br>";
}

// Driver code to test above 
$arr = array(0, 2, 1, 9, 7); 
bubbleSort($arr);
showArray($arr);

$arr = array(4, 11, 13, 6, 2); 
bubbleSort($arr);
showArray($arr);

$arr = array(5, 1, 6, 3, 7, 0, 2, 4, 10); 
bubbleSort($arr);
showArray($arr);

?> 
