<?php
class Company {    
    public function getCompany($company) {
        echo "Company : " . $company;
    }    
}

class Car extends Company {

    public function carName($carName, $company) {       
        echo "Car Name : " . $carName . "\n";
        parent :: getCompany($company);
    }
}

class Brand extends Car {
    public $carName;
    public $company;
    public $brandName;
    public function __construct($brandName, $company, $carName) {
        $this->brandName = $brandName;
        $this->company = $company;
        $this->carName = $carName;
    }

    public function carDetails() {
        echo "Brand name : " . $this->brandName . "\n";
        parent :: carName($this->carName, $this->company);
    }
}

$Nano = new Brand("car","TATA", "Nano");
$Nano->carDetails();

?>