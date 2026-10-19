<?php
abstract class Shape {
    abstract public function area();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return round(M_PI * $this->radius * $this->radius, 2);
    }
}

new Circle(5);
echo "Diện tích hình tròn là: " . (new Circle(5))->area() . "<br>";

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return round($this->width * $this->height, 2);
    }
}

new Rectangle(4, 6);
echo "Diện tích hình chữ nhật là: " . (new Rectangle(4, 6))->area() . "<br>";
