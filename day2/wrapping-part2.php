<?php

$data = file_get_contents("input.txt");

$rows = explode(PHP_EOL, $data);

$totalArea = 0;
foreach($rows as $boxDimensions) {

    if(!empty($boxDimensions)) {
        list($l, $w, $h) = explode("x", $boxDimensions);

        $area = (2 * $l * $w) + (2 * $w * $h) + (2 * $h * $l) + (min($l * $w, $w * $h, $h * $l));

        $totalArea += $area;
    }
}

echo $totalArea;

?>
