<?php
$a = [6, 2, 5, 10, 11, 1, 17, 20];

echo "max:" . max($a) . "<br>";
echo "min:" . min($a) . "<br>";

rsort($a);
echo "sortmax:" . $a[0] . "<br>";
echo "sortmin:" . $a[count($a) - 1] . "<br>";

?>