<?php 

$date1 = '2019-05-31';
$date2 = '2018-04-05';
echo checkDiffDates($date1, $date2);

function checkDiffDates($dateFrom, $dateTo){
  $date1 = new DateTime($dateFrom);
  $date2 = new DateTime($dateTo);
  $diff = $date1->diff($date2);

  return $diff->y.' year, '.$diff->m. ' months, '.$diff->d.' days';
}

?>