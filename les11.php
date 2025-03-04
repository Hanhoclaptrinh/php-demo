<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="les11.php" method="post">
        <input type="radio" name="credit_card" id="" value="visa">Visa <br>
        <input type="radio" name="credit_card" id="" value="master_card">Master Card <br>
        <input type="radio" name="credit_card" id="" value="american_express">American Express <br>
        <input type="submit" name="confirm" value="Select">
    </form>
</body>

</html>

<?php
// radio button
if (isset($_POST["confirm"])) {
    
    $credit_card = null;

    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
    }

    switch ($credit_card) {
        case "visa":
            echo "Da chon phuong thuc thanh toan Visa <br>";
            break;
        case "master_card":
            echo "Da chon phuong thuc thanh toan Master Card <br>";
            break;
        case "american_express":
            echo "Da chon phuong thuc thanh toan American Express <br>";
            break;
        default:
        echo "Vui long chon phuong thuc thanh toan <br>";
            break;
    }
}
?>