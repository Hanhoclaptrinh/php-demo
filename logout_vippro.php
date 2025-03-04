<?php
session_start();
session_destroy();
setcookie("uid", "", time() - 3600, "/");
setcookie("pass", "", time() - 3600, "/");
header("Location: login_vippro.php");
exit();
?>