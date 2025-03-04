<?php
class Vehicle
{
    public $brand;
    public  $model;
    public $year;
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    public function display() {
        echo "Brand: {$this->brand} <br>";
        echo "Model: {$this->model} <br>";
        echo "Year: {$this->year} <br>";
    }
}

$car = new Vehicle("Toyota", "Corolla", 2020);
$car->display();
