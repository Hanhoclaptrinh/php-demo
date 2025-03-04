<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is homepage <br>
    <a href="les17.php">Click here to go to login page</a> <br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>

</html>

<?php
session_start();

echo "Username: " . $_SESSION["uid"] . "<br>";
echo "Password: " . $_SESSION["pass"] . "<br>";

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: les17.php");
}
?>