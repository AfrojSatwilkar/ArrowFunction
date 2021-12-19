<?php
class Cars {
    public $name;
    public $type;
    public $brand;

    /* Constructor */
    function __construct($name, $type, $brand) {
        $this->name = $name;
        $this->type = $type;
        $this->brand = $brand;
    }

    /* Destructor */
    function __destruct() {
        echo "Name : " . $this->name . "\n";
        echo "Type : " . $this->type . "\n";
        echo "Brand : " . $this->brand . "\n";
        echo "\n";
    }
}

$cars = new Cars("Urus", "SUV", "Lamborghini");
//echo $cars->carDetails() ."\n";

$cars = new Cars("Bentayga", "SUV", "Bentley");
//echo $cars->carDetails() ."\n";
?>