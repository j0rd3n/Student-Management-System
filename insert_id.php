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
	<h2>Insert An Id</h2>
	<form action="" method="post" >
		<table cellspacing="5" cellpadding="5">
			<tr>
			<td>Many Id's paste separate with (,)</td><td>:<textarea name="mids"></textarea></td>
			</tr>
			<tr>
				<td colspan=2><center><input type="submit" id="loginsb" name="inidsb" value="submit"></center></td>
			</tr>
		</table>
	</form>
<?php
}
?>
