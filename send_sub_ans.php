<?php
session_start();
include("dbconfig.php");
$sid=$_SESSION["stu_id"];
$cid=$_SESSION["cid"];
$response=$_GET["rsp"];
$subject=$_GET["sub"];
$a=$_GET["a"];
mysql_query("insert into answers(subject,id,answer) values('$subject','$sid','$response');")or die(mysql_error());
$sans=mysql_query("select * from answers where subject='$subject';")or die(mysql_error());
$nsans=mysql_num_rows($sans);
?>
<table>
<?php
for($k=0;$k<$nsans;$k++)
{
	$fet=mysql_fetch_array($sans);
?>
	<tr><td><a><?php echo $fet["id"]; ?></a></td><td>&emsp;&emsp;&emsp;&emsp;</td><td>:<?php echo $fet["answer"] ?></td></tr>
<?php
}
echo <<<sc
<script type="text/javascript">
document.getElementById("user_response"+'$a').value="";
</script>
sc;
?>
</table>
