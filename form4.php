<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>City Selection</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <select name="city" id="">
            <option value="">Select City</option>
            <option value="Hanoi">Hanoi</option>
            <option value="Hochiminh City">Hochiminh City</option>
            <option value="Danang">Danang</option>
            <option value="Hue">Hue</option>
            <option value="Hai Phong">Hai Phong</option>
        </select>
        <button type="submit">Send</button>
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["city"]) && !empty($_POST["city"])) {
            echo "You selected: ". $_POST["city"];
        } else {
            echo "Please select a city";
        }
    }
?>