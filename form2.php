<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kind of animal</h1><br>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="checkbox" name="cat" id="">cat <br>
        <input type="checkbox" name="dog" id="">dog <br>
        <input type="checkbox" name="bird" id="">bird <br>
        <input type="checkbox" name="bear" id="">bear <br>
        <input type="checkbox" name="fish" id="">fish <br>
        <input type="checkbox" name="lion" id="">lion <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    // checkbox
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $animal => $checked) {
            if ($checked) {
                echo $animal. " is checked <br>";
            }
        }
        echo "<br>";
        echo "You selected: ". count($_POST). " animals <br>";
    }
?>