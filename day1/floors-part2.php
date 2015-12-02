<?php

$data = file_get_contents("input.txt");

$instructions = str_split($data);

$currentFloor = 0;
foreach($instructions as $pos => $inst) {
  if($inst == "(") {
    $currentFloor++;
  } else if($inst == ")") {
    $currentFloor--;
  }

  if($currentFloor == -1) {
    echo $pos + 1;
    exit();
  }
}

echo $currentFloor;

?>
