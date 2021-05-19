<?php
 
function MaxHeapify(&$data, $heapSize, int $index) {
   // $left = ($index + 1) * 2 - 1;
   // $right = ($index + 1) * 2;
   $left = $index * 2 + 1;
   $right = $index * 2 + 2;
   $largest = 0;
 
   //親と子の値を見比べて大きい方の配列のインデックス番号をlargestに持っておく
   if ($left < $heapSize && $data[$left] > $data[$index])
      $largest = $left;
   else
      $largest = $index;
 
   if ($right < $heapSize && $data[$right] > $data[$largest])
      $largest = $right;
 
   if ($largest != $index)
   {
      //親とlargestのインデックス番号が違う場合データの入れ替えを行う。
      $temp = $data[$index];
      $data[$index] = $data[$largest];
      $data[$largest] = $temp;
      print_r($data);
      echo "<br>";
      
      //データの入れ替えを行ったので子側の入れ替えが必要か再度MaxHeapfyを回す
      MaxHeapify($data, $heapSize, $largest);
   }
}
 
function HeapSort(&$data, $count) {
   $heapSize = $count;
   
   //子ありのノードのみ入れ替え処理を先にする
   for ($p = $heapSize / 2 - 1; $p >= 0; $p--){
      MaxHeapify($data, $heapSize, $p);
   }
 
   for ($i = $count - 1; $i > 0; $i--)
   {
      //data[0]が最大値となるので配列の最後のdata[heapsize]と入れ替える
      $temp = $data[$i];
      $data[$i] = $data[0];
      $data[0] = $temp;
      print_r($data);
      echo "<br>";
 
      $heapSize--; //最大の値は配列の最後に移動させたのでもう触らない
      MaxHeapify($data, $heapSize, 0);
   }
}
 
// $array = array(20,43,65,88,11,33,56,74,2);
// HeapSort($array,9);
$array = array(20,43,65,88,11,33,56,74);
HeapSort($array,8);
print_r($array);
 
?>