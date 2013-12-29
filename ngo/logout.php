<?php
session_start();
unset($_SESSION["n_id"]);
unset($_SESSION["userName"]);
session_destroy();
header("Location:login.html");
?>