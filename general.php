<?php
session_start();

if($_SESSION["SmS"]=="sms")
{
$clgid=$_SESSION["clgid"];
include("dbconfig.php");
$c=mysql_query("select * from college where cid='$clgid';");
$cd=mysql_fetch_array($c);
$cname=$cd["cname"];
$cemail=$cd["cemail"];
$cph=$cd["cph"];
$cwst=$cd["cwebsite"];
$cadd=$cd["cadd"];
$bt=mysql_query("select distinct(btno) from btdet where cid='$clgid';")or die(mysql_error());
$nbt=mysql_num_rows($bt);
?>
	<h2>Updates</h2>
	<form action="" method="post">
		<table cellspacing="5" cellpadding="5">
			<tr>
			<td>Subject</td><td>:<input type="text" name="usub" style="width:300px;"></td>
			</tr>
			<tr>
			<td>Information:</td><td><textarea name="uinfo" rows=10 cols=35></textarea></td>
			</tr>
			<tr>
				<td colspan=2><center><input type="submit" id="loginsb" name="cginfsb" value="submit"></center></td>
			</tr>
		</table>
	</form>
<?php
}
?>
