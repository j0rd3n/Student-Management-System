<?php
include("dbconfig.php");
if(isset($_REQUEST["logsub"]))
{
	$clgid=$_POST["colgid"];
	$pass=$_POST["lpass"];
	$l=mysql_query("select * from college where cid='$clgid';")or die(mysql_error());
	echo mysql_num_rows($l);
	$v=mysql_fetch_array($l);
	echo $v[2]."dskfjh";
	echo <<<q
	<script type="text/javascript">alert($pass);</script>
q;
	if($pass==$v["cpass"])
	{
		echo <<<s
		dskfjsdlfksdjf
		<script type="text/javascript">window.location.href="admin.php";</script>
s;
	}
	else
	{
		echo <<<sc
		sdfsdf	
		<script type="text/javascript">
		document.getElementById("warning").innerHTML="Username not exist";
		document.getElementById("warning").style.display="block";
		document.getElementById("warning").style.visibility="visible";
		document.getElementById("warning").style.opacity=1;
		document.getElementById("collegeid").focus();return false;
		</script>
sc;
	}
}
?>
