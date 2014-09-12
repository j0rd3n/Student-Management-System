<?php
session_start();
include("dbconfig.php");
$cid=$_GET["cid"];
$pass=$_GET["pass"];
$q=mysql_query("select * from college where cid='$cid' and cpass='$pass'") or die(mysql_error());
if ($cid=="")
	echo "Enter college Id";
else if ($pass=="")
	echo "Enter Password";
else if(mysql_num_rows($q)==0)
	echo "Invalid credentails";
else
	{
		$_SESSION["clgid"]=$cid;
		$_SESSION["SmS"]="sms";
	?>
	<script type="text/javascript">window.location.href="admin.php";</script>
	<?php
	}

?>
