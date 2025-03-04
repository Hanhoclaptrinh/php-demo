<!-- connect php to mysql -->
<?php
// 1. MySQLi Extension
// 2. PDO (PHP Data Objects)

include("database.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect("localhost", "username", "password", "database");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user = "User3";
$pass = "hoicobatocbencon";
$hash = password_hash($pass, PASSWORD_DEFAULT);

// insert value into database
$query = "insert into users (user, pass) values ('$user', '$hash')";

try {
    mysqli_query($conn, $query);
    echo "User is registed";
} catch (mysqli_sql_exception $e) {
    echo "Could not registed: " . $e->getMessage();
} finally {
    mysqli_close($conn);
}

?>