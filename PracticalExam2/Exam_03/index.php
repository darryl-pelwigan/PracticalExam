<?php 

checkFibonacciNumber(10);

function checkFibonacciNumber($number) {
  $num1 = 0;
  $num2 = 1;
  $endNumber = 3;
  $tempResult = [];

  for ($i=0; $i <= $number ; $i++) { 
    if($i == 0 || $i == 1) {
      array_push($tempResult, $i);
      continue;
    }
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
    if($num3 > 10) break;
    if($endNumber <= 10) {
      array_push($tempResult, $num3);
    }
    $endNumber++;
  }

  $result = array_unique($tempResult);

  for ($i=1; $i <= $number ; $i++) { 
    if(in_array($i, $result)) {
      echo $i. ' is a Fibonacci Number <br>';
    } else {
      echo $i. ' is not a Fibonacci Number <br>';
    }
  }

}

?>