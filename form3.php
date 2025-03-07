<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Gender Selection</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="other">Other</label>
        <input type="radio" id="other" name="gender" value="other">
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["gender"])) {
        echo "Your selected gender is: " . $_POST["gender"];
    } else {
        echo "No gender selected.";
    }
}
?>