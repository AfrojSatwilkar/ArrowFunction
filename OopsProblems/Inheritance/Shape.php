<?php 
class Shape {
    private $area;
    private $circumference;

    public function getArea($radius) {
        $area = 3.1416 * pow($radius,2);
        return $area;
    }

    public function getCircumference($radius) {
        $circumference = 2 * 3.1416 * $radius;
        return $circumference;
    }
}

class Circle extends Shape {
    public $radius;

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return $this->getArea($this->radius);
    }

    public function calculateCircumference() {
        return $this->getCircumference($this->radius);
    }
}

$shape = new Circle();
$shape->setRadius(15);
echo "Area of Circle : " . $shape->calculateArea();
echo "\n";
echo "Circumference of Circle : " . $shape->calculateCircumference();

?>