<?php
session_start();
unset($_SESSION["SmS"]);
header("location:index.php");
?>
