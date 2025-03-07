<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Textarea</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <textarea name="message" id="" placeholder="Viet con cac gi do di em">
        </textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["message"]) && !empty($_POST["message"])) {
            echo nl2br($_POST["message"]);
        }
    }
?>