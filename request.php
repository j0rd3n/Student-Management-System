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
$re=mysql_query("select * from stu_requests where cid='$clgid' and status='-';")or die(mysql_error());
$nre=mysql_num_rows($re);
?>
<div id="allrequests">
<?php
for($i=0;$i<$nre;$i++)
{
	$ff=mysql_fetch_array($re);
?>
	<div id="wrngif<?php echo $i;?>1" class="requestinfo">
		<div id="wrngif<?php echo $i;?>"  class="requestclose" onclick="r(9,this.id+'1')"></div>
		<form action='' method="post" onsubmit="return validresp()">
			<table cellpadding="5" cellpadding="5">
			<tr>
			<td >Sid</td><td style="color:#ff7b01;"><input type="text" id="sd" name="sid" value="<?php echo $ff['sid'];?>" style="display:none;"><?php echo $ff["sid"];?></td>
			</tr>
			<tr>
			<td>Subject</td><td style="color:#ff7b01;"><?php echo $ff["sub"];?></td>
			</tr>
			<tr>
			<td>Request</td><td style="color:#ff7b01;"><?php echo $ff["reqs"];?></td>
			</tr>
			<tr>
			<td>Response</td><td style="color:#ff7b01;"><textarea id="response" name="ad_response"></textarea></td>
			</tr>
			</table>
			<input type="submit" name="accept"  id="loginsb" value="ACCEPT"><input type="submit" name="decline" id="loginsb" value="Decline">
		</form>
	</div>
	<br>	
<?php
	
}
?>
</div>
<?php
}
?>

