<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["userName"]);
session_destroy();
header("Location:homepage.php");
?>