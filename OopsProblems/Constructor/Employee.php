<?php

class Employee {
	
    // instance veriable
	Public $name;
	Public $position;

	function __construct($name, $position) {
		$this->name=$name;
		$this->profile=$position;
	}	

	function showDetails() {
		echo $this->name . " : ";
		echo "Your position is " . $this->profile . "\n";
	}
}

// Object
$employee1 = new Employee("Afroj", "developer");
$employee1->showDetails();
	
$employee2 = new Employee("Prafulla", "Manager");
$employee2->showDetails();

?>
