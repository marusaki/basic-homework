<?php
 
function MaxHeapify(&$data, $heapSize, int $index) {
   $left = ($index + 1) * 2 - 1;
   $right = ($index + 1) * 2;
   $largest = 0;
 
   if ($left < $heapSize && $data[$left] > $data[$index])
      $largest = $left;
   else
      $largest = $index;
 
   if ($right < $heapSize && $data[$right] > $data[$largest])
      $largest = $right;
 
   if ($largest != $index)
   {
      $temp = $data[$index];
      $data[$index] = $data[$largest];
      $data[$largest] = $temp;
 
      MaxHeapify($data, $heapSize, $largest);
   }
}
 
function HeapSort(&$data, $count) {
   $heapSize = $count;
 
   for ($p = $heapSize / 2; $p >= 0; $p--)
      MaxHeapify($data, $heapSize, $p);
 
   for ($i = $count - 1; $i > 0; $i--)
   {
      $temp = $data[$i];
      $data[$i] = $data[0];
      $data[0] = $temp;
 
      $heapSize--;
      MaxHeapify($data, $heapSize, 0);
   }
}
 
$array = array(20,43,65,88,11,33,56,74,2);
HeapSort($array,9);
print_r($array);
 
?>
