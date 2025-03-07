<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="">Name</label>
        <input type="text" name="name"><br>
        <label for="">Age</label>
        <input type="number" name="age"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    // isset kiểm tra 1 giá trị có phải là null hay không (nếu null thì return false)
    // empty kiểm tra 1 giá trị có phải là rỗng hay không (nếu rỗng thì return true)
    $name = $_POST['name'];
    $age = $_POST['age'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["name"]) && !empty($_POST["age"])) {
            echo "Your name: ". $name. ", Your age: ". $age;
        }
    }
?>