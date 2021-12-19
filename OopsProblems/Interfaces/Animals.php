<?php
// Interface definition
interface Animals {
    public function makeSound();
}

// Class definitions
class Cat implements Animals {
    public function makeSound() {
        echo "Cat : Meow \n";
    }
}

class Dog implements Animals {
    public function makeSound() {
        echo "Dog : Bark \n";
    }
}

class Mouse implements Animals {
    public function makeSound() {
        echo "Mouse : Squeak \n";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
echo "Animal sounds : \n";
foreach($animals as $animal) {
    $animal->makeSound();
}
?>