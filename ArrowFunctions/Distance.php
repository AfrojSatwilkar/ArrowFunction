<?php

$distance = fn($pointX1, $pointX2, $pointY1, $pointY2) => sqrt(pow($pointX2 - $pointX1, 2) + pow($pointY2 - $pointY1, 2));

$pointX1 = readline("point X1 : ");
$pointX2 = readline("point X2 : ");
$pointY1 = readline("point Y1 : ");
$pointY2 = readline("point Y2 : ");

echo "Euclidean distance is : " . $distance($pointX1, $pointX2, $pointY1, $pointY2);
?>