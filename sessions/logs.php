<?php
$_SESSION['username'] = "brahm";
$_SESSION['password'] = "gaur";
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();
?>