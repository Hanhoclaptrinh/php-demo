<?php
include("database.php");
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Registration Form</h2>
        <label for="">Username</label>
        <input type="text" name="username" placeholder="John Smith" required> <br><br>
        <label for="">Password</label>
        <input type="password" name="password" required> <br><br>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="example@gmail.com" required> <br><br>
        <label for="">Website</label>
        <input type="url" name="website"> <br><br>
        <label for="">Comment</label>
        <textarea name="comment" style="width: 25rem; height: 10rem;" placeholder="Write something ..."></textarea> <br><br>
        <label for="">Gender</label>
        <input type="radio" name="gender" id="">Male
        <input type="radio" name="gender" id="">Female
        <input type="radio" name="gender" id="">Other
        <br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    if (empty($username)) {
        echo "Please enter your username <br>";
    } elseif (empty($password)) {
        echo "Please enter your password <br>";
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter your email <br>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO userinfo (username, pass_word, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $hashed_password, $email);

        if ($stmt->execute()) {
            echo "Successfully added a new user <br>";
        } else {
            echo "Error: " . $stmt->error . "<br>";
        }

        $stmt->close();
    }
}
mysqli_close($conn);
?>