<?php

$data = file_get_contents("input.txt");

$instructions = str_split($data);

$currentFloor = 0;
foreach($instructions as $inst) {
  if($inst == "(") {
    $currentFloor++;
  } else if($inst == ")") {
    $currentFloor--;
  }
}

echo $currentFloor;

?>
