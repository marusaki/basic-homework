<?php
function bubbleSort(&$arr){ // &:関数内でその引数を変更可能とする
    $n = sizeof($arr);
    for($i = 0; $i < $n; $i++){
        echo $i . " ";
        for($j = 0;$j < $n - $i -1; $j++){
            if ($arr[$j] > $arr[$j + 1]){
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
        }
    }
}


function bubbleSortB(&$arr){ // &:関数内でその引数を変更可能とする
    $n = sizeof($arr);
    for($i = 0; $i < $n; $i++){
        echo $i . " ";
        $swapped = False;
        for($j = 0;$j < $n - $i -1; $j++){
            if ($arr[$j] > $arr[$j + 1]){
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
                $swapped = True;
            }
        }
        if ($swapped == False){
            break;
        }
    }
}

$arr = array(5,3,1,9,8,2,4,7);

$len = sizeof($arr); 
bubbleSort($arr);

echo "Sorted array : \n";
for ($i = 0;$i < $len; $i++){
    echo $arr[$i]. " ";
}
echo "<br>";

$arr = array(5,3,1,9,8,2,4,7);

//最適化して余計に回さない方法
bubbleSortB($arr);

echo "Sorted array : \n";
foreach($arr as $val){
    echo $val . " ";
}

?>