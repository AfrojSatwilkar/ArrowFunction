<?php
trait Company {
    public function setCompany($company) {
        echo "Company : " . $company . "\n";
    }
}

trait Type {
    public function setType($type) {
        echo "Type : " . $type . "\n";
    }
}

trait Name {
    public function setName($name) {
        echo "Name : " . $name . "\n";
    }
}

class Car {
    use Company, Name;
}

class Bike {
    use Company, Type, Name;
}

echo "Car details : \n";
$car = new Car();
$car->setCompany("BMW");
$car->setName("BMW X7");

echo "Bike details : \n";
$bike = new Bike();
$bike->setCompany("HONDA");
$bike->setType("Sport bike");
$bike->setName("Honda Grom")
?>