<?php
echo "Welcome to Employee Wage Problem <br>";

class EmpWage {

    public $IS_FULL_TIME = 1;
    public $IS_PART_TIME = 2;
    public $IS_ABSENT = 0;
    public $WAGE_PER_HR = 20;
    public $MAX_WORKING_DAYS = 22;
    public $MAX_HRS_IN_MONTH = 100;
    public $EMP_HRS;

    function calculateEmployeeWage() {
        
        $TOTAL_WORKING_DAYS = 0;
        $TOTAL_EMP_HRS = 0;
        while ($TOTAL_WORKING_DAYS < $this->MAX_WORKING_DAYS && $TOTAL_EMP_HRS < $this->MAX_HRS_IN_MONTH) {
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

        $TOTAL_SALARY = $this->WAGE_PER_HR * $TOTAL_EMP_HRS;
        echo "Total Salary :" .$TOTAL_SALARY;
    }
}

$wage = new EmpWage();
$wage->calculateEmployeeWage();
?>