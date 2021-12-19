<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($gender, $name);
}

class ChildClass extends ParentClass {
  public function prefixName($gender, $name) {
    if ($gender == "male") {
      echo "Mr." . $name . "\n";
    } elseif ($gender == "female") {
      echo "Mrs." . $name . "\n";
    }
  }
}

$class = new ChildClass();
$class->prefixName("male", "Bhuvan bam");
$class->prefixName("female", "Prajakta Koli");
?>