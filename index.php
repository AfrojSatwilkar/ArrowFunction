<?php
echo "Welcome to Employee Wage Problem <br>";

$IS_PRESENT = 1;
$IS_ABSENT = 2;
$WAGE_PER_HR = 20;
$EMP_HRS;
$num = rand(0,2);

if ($num == $IS_PRESENT) 
    $EMP_HRS = 8;
elseif($num == $IS_ABSENT)
    $EMP_HRS = 4;
else
    $EMP_HRS = 0;

$TotalWageInDay = $WAGE_PER_HR * $EMP_HRS;
echo "Total Wage in day : " . $TotalWageInDay;
?>