<?php
function factorialOfNumber($n)
{
  $value  = $n;
  for($x = $n, $x <= 1; --$x;){
    $value *=$x;
  }
  return $value;
}

echo "10! = " . factorialOfNumber(10);
?>
