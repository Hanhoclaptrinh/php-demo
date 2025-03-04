<?php
// OOP in PHP
echo "OOP - Object Oriented Programming <br>";

// class
class User
{
    // properties
    public $name;
    public $age;
    public $email;
    public $password;

    // constructor: a function that is called when a new object is created
    // public function __construct() {
    //     echo "constructor called <br>";
    // }

    public function __construct($name, $age, $email, $password)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->password = $password;
    }

    // method: a function that belong to a class
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

// init an object
// $user1 = new User();
// $user1->set_name('Ming');
// $user1->age = 25;
// $user1->email = 'john@example.com';
// $user1->password = '123456';

// $user2 = new User();
// $user2->set_name('Hoang');

// print_r($user1);
// echo "<br>";
// print_r($user2);

// echo "{$user1->get_name()} <br> {$user2->get_name()}";

// $user1 = new User("PitouCode", 22, "pitoucode@gmail.com", "pitoudeptrai2004");
// $user2 = new User("Cameron Harrison", 67, "iksigo@haeciuf.kn", "speed");

// print_r($user1);
// echo "<br>";
// print_r($user2);
// echo "User1's email: $user1->email <br> User2's email: $user2->email";

// inheritance
class Employee extends User
{
    private $salary;
    private $title;

    public function __construct($name, $age, $email, $password, $salary, $title) {
        parent::__construct($name, $age, $email, $password);
        $this->salary = $salary;
        $this->title = $title;
    }

    function get_salary() {
        return $this->salary;
    }

    function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee("John Doe", 35, "johndoe@example.com", "johndoe123", 50000, "Manager");
echo $employee1->get_title();
