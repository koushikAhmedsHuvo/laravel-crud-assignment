<?php

class Shape {
    
    public function getArea() {
        return 0;
    }
}

// Circle class inherits from Shape
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle class inherits from Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

// Example usage
$circle = new Circle(5);
echo "Circle Area: " . $circle->getArea() . "\n";

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->getArea() . "\n";
?>
