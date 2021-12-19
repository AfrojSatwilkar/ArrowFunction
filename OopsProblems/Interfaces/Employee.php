<?php

interface Employee {
    function showDetails();
}

class Profile implements Employee {
	
    // instance veriable
	Public $name;
	Public $position;

	function __construct($name, $position) {
		$this->name=$name;
		$this->position=$position;
	}	

	function showDetails() {
		echo $this->name . " : ";
		echo "Your position is " . $this->position . "\n";
	}
}

// Object
$employee1 = new Profile("Afroj", "developer");
$employee1->showDetails();
	
$employee2 = new Profile("Prafulla", "Manager");
$employee2->showDetails();

?>
