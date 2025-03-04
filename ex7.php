<?php
abstract class Animals
{
    abstract public function eat();
    abstract public function sleep();
    abstract public function sound();
}

class Dog extends Animals
{
    public function eat()
    {
        return "Dog eats bones.";
    }
    public function sleep()
    {
        return "Dog sleeps 12 hours.";
    }
    public function sound()
    {
        return "Woof Woof.";
    }
}

class Cat extends Animals
{
    public function eat()
    {
        return "Cat eats mice.";
    }
    public function sleep()
    {
        return "Cat sleeps 10 hours.";
    }
    public function sound()
    {
        return "Meow Meow.";
    }
}

class Bird extends Animals
{
    public function eat()
    {
        return "Bird eats nectar.";
    }
    public function sleep()
    {
        return "Bird sleeps 6 hours.";
    }
    public function sound()
    {
        return "Chirp Chirp.";
    }
}

$dog = new Dog();
$cat = new Cat();
$bird = new Bird();

echo $dog->eat() . "<br>";
echo $cat->eat() . "<br>";
echo $bird->eat() . "<br>";

echo $dog->sleep() . "<br>";
echo $cat->sleep() . "<br>";
echo $bird->sleep() . "<br>";

echo $dog->sound() . "<br>";
echo $cat->sound() . "<br>";
echo $bird->sound() . "<br>";
