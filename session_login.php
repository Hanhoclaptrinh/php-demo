<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nha cai den tu chau Phi</title>
    <link rel="stylesheet" href="./login/style.css">
</head>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION["logout_message"])) {
            echo '<div class="message success">' . $_SESSION["logout_message"] . '</div>';
            unset($_SESSION["logout_message"]);
        }
        ?>
        <div class="form-box active" id="login-form">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <h2>Login</h2>
                <input type="text" name="uid" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>
            </form>
        </div>

        <div class="form-box" id="register-form">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <h2>Register</h2>
                <input type="text" name="uid" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="pass" placeholder="Password" required>
                <button type="submit" name="register">Register</button>
                <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login</a></p>
            </form>
        </div>
    </div>
</body>
<script src="./login/script.js"></script>

</html>

<?php
// $username = "Vinh Han";
// $password = "1";
// && ($_POST["uid"] === $username) && ($_POST["pass"] === $password) 
if (isset($_POST["login"])) {
    if ((!empty($_POST["uid"]) && !empty($_POST["pass"]))) {
        $_SESSION["uid"] = $_POST["uid"];
        $_SESSION["pass"] = $_POST["pass"];
        header("Location: login_success.php");
        exit();
    }
}
?>