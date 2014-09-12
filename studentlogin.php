<?php
session_start();
$stid=$_GET["id"];
$stp=$_GET["pass"];
include("dbconfig.php");
if($stid=="")
{
	echo "please enter username";
}
else if($stp=="")
	echo "please enter password";
else{
	$s=mysql_query("select * from student where sid='$stid' and spass='$stp';")or die(mysql_error());
	if(mysql_num_rows($s)!=0)
	{
		$_SESSION["stu_id"]=$stid;
		$_SESSION["SmS"]="sms";
		echo <<<hea
		<script type="text/javascript">
		window.location.href="student.php";
		</script>
hea;
	}
	else{
		echo "invalid credentails";
	}
}
?>
