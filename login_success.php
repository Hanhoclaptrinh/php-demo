<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nha ca den tu chau Phi</title>
</head>

<body>
    <form action="login_success.php" method="post">
        <input type="submit" value="Logout" name="logout" width="7rem" height="3rem">
    </form>
</body>

</html>

<?php
session_start();

echo "<h1>Username: " . $_SESSION["uid"] . "</h1>";

if (isset($_POST["logout"])) {
    $_SESSION["logout_message"] = "Dang xuat thanh cong!";
    session_destroy();
    header("Location: session_login.php");
    exit();
}
?>