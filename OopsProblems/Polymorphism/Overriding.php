<?php

class Sweet {
	public $name = "MM";
	public function sweet() {
		echo $this->name . " Sweet Shop :\n";
	}
}

class Modak extends Sweet {
	public $name = "Modak";
	public function sweet() {
		echo $this->name . " is one of the most popular sweets in Maharashtra.\n";
	}
}

class Rasgulla extends Sweet {
	public $name = "Rasgulla";
	public function sweet() {
		echo $this->name . " Bengali sweet. \n";
	}
}

class Jalebi extends Sweet {
	public $name = "Jalebi";
	public function sweet() {
		echo $this->name . " is the national sweet of India. \n";
	}
}

$mmShop = new Sweet();
$mmShop->sweet();

$jalebi = new Jalebi();
$jalebi->sweet();

$modak = new Modak();
$modak->sweet();


?>