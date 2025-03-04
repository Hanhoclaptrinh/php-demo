<!-- session -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="les17.php" method="post">
        <label for="">Username:</label><br>
        <input type="text" name="uid"><br>
        <label for="">Password:</label><br>
        <input type="password" name="pass"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
    session_start();

    if (isset($_POST["login"])) {
        if (!empty($_POST["uid"]) && !empty($_POST["pass"])) {
            $_SESSION["uid"] = $_POST["uid"];     
            $_SESSION["pass"] = $_POST["pass"];
            header("Location: home.php");
            exit();
        } else {
            echo "Missing username or password <br>";
        }
    }
?>