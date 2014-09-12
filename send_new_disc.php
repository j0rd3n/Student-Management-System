<?php
session_start();
$sid=$_SESSION["stu_id"];
$cid=$_SESSION["cid"];
$subject=$_GET["sj"];
$msg=$_GET["msg"];
include("dbconfig.php");
$a=mysql_query("select * from discussions where subject='$subject';")or die(mysql_error());
if($subject=="")
{
	echo "please specify subject for your discussion";
}
else if($msg=="")
{
	echo "please give some message to your discussion";

}
else if(mysql_num_rows($a)>0)
{
	echo "please specify another subject for your discussion";
}
else
{
	mysql_query("insert into discussions(cid,sid,subject,message) values('$cid','$sid','$subject','$msg');")or die(mysql_error());
	echo "Your discussion sent successfully";
?>
	<script type="text/javascript">
	document.getElementById("subject").value="";
	document.getElementById("message").value="";
	</script>
<?php
}
?>
