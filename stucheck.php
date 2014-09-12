<?php
include("dbconfig.php");
$uc=$_GET["q"];
$cgd=$_GET["cd"];
$a=mysql_query("select * from student where cid='$cgd' and sid='$uc';")or die(mysql_error());
$response="";
if(mysql_num_rows($a)!=0)
{
	
		$response="user already exist";
}
echo $response;
?>
