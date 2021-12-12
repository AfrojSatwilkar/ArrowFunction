<?php
echo "Welcome to Employee Wage Problem <br>";

class EmpWage {

    public $IS_FULL_TIME = 1;
    public $IS_PART_TIME = 2;
    public $IS_ABSENT = 0;
    public $EMP_HRS;

    function calculateEmployeeWage($company, $WAGE_PER_HR, $MAX_WORKING_DAYS, $MAX_HRS_IN_MONTH) {

        $TOTAL_WORKING_DAYS = 0;
        $TOTAL_EMP_HRS = 0;
        while ($TOTAL_WORKING_DAYS < $MAX_WORKING_DAYS && $TOTAL_EMP_HRS < $MAX_HRS_IN_MONTH) {
            $num = rand(0, 2);
            switch ($num) {
                case 1:
                    $EMP_HRS = 8;
                    break;
                case 2:
                    $EMP_HRS = 4;
                    break;
                default:
                    $EMP_HRS = 0;
            }

            $TOTAL_EMP_HRS = $TOTAL_EMP_HRS + $EMP_HRS;
            $TOTAL_WORKING_DAYS++;
        }

        $TOTAL_SALARY = $WAGE_PER_HR * $TOTAL_EMP_HRS;
        echo "Total Employee wage for company " . $company . " is : " .$TOTAL_SALARY;
    }
}

$wage = new EmpWage();
$wage->calculateEmployeeWage("D-Mart",20,22,100);
echo "<br>";
$wage->calculateEmployeeWage("Star Home",15,26,120);
?>