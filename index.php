<?php
echo "Welcome to Employee Wage Problem <br>";

$WAGE_PER_HR = 20;
$EMP_HRS;
$num = rand(0,2);

switch($num){
    case 1 :
        $EMP_HRS = 8;
        break;
    case 2 :
        $EMP_HRS = 4;
        break;
    default :
        $EMP_HRS = 0;
}

$TotalWageInDay = $WAGE_PER_HR * $EMP_HRS;
echo "Total Wage in day : " . $TotalWageInDay;
?>