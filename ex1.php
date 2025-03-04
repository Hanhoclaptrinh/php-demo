<?php
echo "Rectangle <br>";

class Rectangle
{
    public $length;
    public $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function area()
    {
        return $this->length * $this->width;
    }

    public function perimeter()
    {
        return 2 * ($this->length + $this->width);
    }
}

class Circle
{
    public $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
    public function circumference()
    {
        return 2 * pi() * $this->radius;
    }
}

abstract class Shape
{
    abstract protected function area();
    abstract protected function perimeter();
    public function getArea()
    {
        return $this->area();
    }
    public function getPerimeter()
    {
        return $this->perimeter();
    }
}

class Triangle extends Shape
{
    public $base;
    public $height;
    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }
    protected function area()
    {
        return 0.5 * $this->base * $this->height;
    }
    protected function perimeter()
    {
        return $this->base + $this->base + sqrt(pow($this->base, 2) + pow($this->height, 2));
    }
}

class Square extends Shape
{
    public $side;
    public function __construct($side)
    {
        $this->side = $side;
    }
    protected function area()
    {
        return pow($this->side, 2);
    }
    protected function perimeter()
    {
        return 4 * $this->side;
    }
}

$rec = new Rectangle(5, 10);
echo "Area: " . $recrec->$area() . "<br>";
echo "Area: " . $rec->$perimeter() . "<br>";
$cir = new Circle(4);
echo "Area: " . $cir->area() . "<br>";
echo "Circumference: " . $cir->circumference() . "<br>";
$tri = new Triangle(3, 4);
echo "Area: " . $tri->getArea() . "<br>";
echo "Perimeter: " . $tri->getPerimeter() . "<br>";
$squ = new Square(5);
echo "Area: " . $squ->getArea() . "<br>";
echo "Perimeter: " . $squ->getPerimeter() . "<br>";
