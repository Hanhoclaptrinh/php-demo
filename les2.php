<?php 
    // variable: string, integer, float, boolean
    echo "Variable in PHP <br>";

    // string
    $name = "Pitou Code";
    $slog = "Dont try with me";
    $email = "demo2004@gmail.com";

    // integer
    $age = 21;
    $weight = 60;
    
    
    // float
    $gpa = 3.4;
    $height = 1.65;
    $cur_balance = 12.5;
    $bmi = null;
    
    // boolean
    $isStudent = true; // 1 for true and none for false

    echo "Name: {$name} --- {$age} years old --- {$gpa} GPA<br>";
    echo "Student status: {$isStudent} <br>";
    echo "Height: {$height}m <br>";
    echo "Weight: {$weight}kg <br>";
    echo "BMI: " . ($weight / ($height * $height)) . " <br>";
    echo "My slog: {$slog} <br>";
    echo "Current Balance: \${$cur_balance}B <br>";
    echo "Contact me: {$email} <br>";
?>