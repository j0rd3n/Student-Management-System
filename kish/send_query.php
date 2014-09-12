<?php
session_start();
include("dbconfig.php");
$sid=$_SESSION["stu_id"];
$sub=$_POST["subject"];
$req=$_POST["request"];
$cid=$_SESSION["cid"];
mysql_query("insert into stu_requests values('$cid','$sid','$sub','$req','No');") or die("You will not suppose to send another request untill you get the response for previous one");
echo "Your request successfully sended......"."</br> You will get the response soon............";
?>
