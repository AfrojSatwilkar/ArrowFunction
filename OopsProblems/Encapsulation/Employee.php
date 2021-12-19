<?php
class Employee {
    private $name;
    private $id;

    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }

    public function employeeDetails() {
        echo "Employee Name : " . $this->name . "\nEmployee id : " . $this->id;
    }
}

$emp = new Employee("Afroj", 001);
$emp->employeeDetails();


?>