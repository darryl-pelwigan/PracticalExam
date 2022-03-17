<?php 

  $string = 'Car';
  echo reverseText($string);

  function reverseText($text) {
    $txtArr = str_split($text);
    $resultArr = [];
    for ($i= count($txtArr) - 1; $i >= 0; $i--) { 
      array_push($resultArr, $txtArr[$i]);
    }

    return implode($resultArr);
  }

?>