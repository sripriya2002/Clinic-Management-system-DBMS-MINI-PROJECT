<?php
session_start();
unset($_SESSION["Username"]);
unset($_SESSION["Password"]);
header("Location:index.php");

?>