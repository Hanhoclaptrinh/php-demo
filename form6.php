<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form6.css">
</head>

<body>
    <h1>Form Tổng Hợp</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-section">
            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname" required><br>
        </div>

        <div class="form-section">
            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname" required><br><br>
        </div>

        <div class="form-section">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
        </div>

        <div class="form-section">
            <label for="gender">Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label><br>

            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label><br>
        </div>

        <div class="form-section">
            <label for="subjects">Subjects:</label><br>
            <input type="checkbox" name="subjects[]" value="Math">
            <label for="math">Math</label>

            <input type="checkbox" name="subjects[]" value="English">
            <label for="english">English</label>

            <input type="checkbox" name="subjects[]" value="Science">
            <label for="science">Science</label><br><br>
        </div>

        <div class="form-section">
            <label for="grade">Grade:</label>
            <select id="grade" name="grade" required>
                <option value="">Choose grade</option>
                <option value="IT">IT</option>
                <option value="E-Commerce">E-Commerce</option>
                <option value="Bussiness">Bussiness</option>
                <option value="Logistic">Logistic</option>
            </select><br><br>
        </div>

        <div class="form-section">
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br><br>
        </div>

        <button type="submit">Send</button>
    </form>
</body>

</html>

<?php
$pricePerCredit = 500000;
$totalPrice = 0;
$countCredit = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $grade = $_POST["grade"];
    $message = $_POST["message"];

    if (!empty($_POST["subjects"])) {
        $subjects = $_POST["subjects"];
        $countCredit = count($subjects) * 3; // mỗi môn học 3 tín chỉ
        $totalPrice = $pricePerCredit * $countCredit;
        
        echo "Subjects: " . implode(", ", $subjects) . "<br>";
    } else {
        echo "No subjects selected.<br>";
    }

    echo "First Name: " . $fname . "<br>";
    echo "Last Name: " . $lname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Grade: " . $grade . "<br>";
    echo "Message: " . $message . "<br>";
    echo "Total Price: " . $totalPrice . "<br>";
}
?>
