<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "testphpdb";
$conn = "";

try {
    // chuoi ket noi voi co so du lieu
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
    );
} catch (mysqli_sql_exception) {
    echo "Could not connect to server <br><hr>";
}
