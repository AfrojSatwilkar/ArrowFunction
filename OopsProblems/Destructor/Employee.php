<?php

class Employee {
	
    // instance veriable
	Public $name;
	Public $position;

	function __construct($name, $position) {
		$this->name=$name;
		$this->profile=$position;
	}	

    /* Destructor */
	function __destruct() {
		echo $this->name . " : ";
		echo "Your position is " . $this->profile . "\n";
	}
}

// Object
$employee1 = new Employee("Afroj", "developer");
$employee2 = new Employee("Prafulla", "Manager");

?>
