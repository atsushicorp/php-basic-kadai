<?php 
 
$scores = [80,60,55,40,100,25,80,95,30,60];
$sum = 0;

foreach($scores as $value){
  global $sum;
  $sum += $value;
}

echo "平均点は{$sum / count($scores)}です。";

?>