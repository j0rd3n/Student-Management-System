<?php
include("dbconfig.php");
$uid=$_GET["id"];
$pass=$_GET["p"];
$a=mysql_query("select * from college where cid='$uid';")or die(mysql_error());
$b=mysql_fetch_array($a);
if(mysql_num_rows($a)>0)
{
	if($pass!=$b["cpass"])
	{
		echo "password";
	}
	else{
		echo "correct";
		}
}
else{
	echo "doesnt";
}
?>
