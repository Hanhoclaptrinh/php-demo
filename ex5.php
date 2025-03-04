<?php
class Student {
    private $name, $age, $gender, $grade;
    
    function __construct($name, $age, $gender, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->grade = $grade;
    }

    function displayInfor() {
        echo "Name: $this->name <br>";
        echo "Age: $this->age <br>";
        echo "Gender: $this->gender <br>";
        echo "Grade: $this->grade <br>";
    }
}

$student1 = new Student("John Doe", 18, true, 9);
$student2 = new Student("Sally", 20, false, 10);
$student1->displayInfor();
$student2->displayInfor();
?>