<?php

class Animal {
    public function makeSound() {
        return "Some generic sound";
    }
}

// Derived class Dog overrides makeSound()
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

// Derived class Cat overrides makeSound()
class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Example usage
$dog = new Dog();
echo $dog->makeSound() . "\n"; // Outputs: Woof!

$cat = new Cat();
echo $cat->makeSound() . "\n"; // Outputs: Meow!
?>
