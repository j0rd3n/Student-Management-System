<?php
session_start();
include("dbconfig.php");
if($_SESSION["SmS"]=="sms")
{
$sid=$_SESSION["stu_id"];
$nn=mysql_query("select * from student where sid='$sid';");
$s_prof=mysql_query("select * from stu_prof where sid='$sid';");
$stu_profile=mysql_fetch_array($s_prof);
$name=mysql_fetch_array($nn);
$_SESSION["cid"]=$name['cid'];
$cid=$_SESSION["cid"];
$_SESSION["stu_name"]=$name['sname'];
?>
<script type="text/javascript">
function sndisc()
{
	$.post("new_discussion.php",function(data)
		{
			$("#d_forum").html(data);
		});
}
function vdisc()
{
	$.post("view_discussions.php",function(data)
		{
			$("#d_forum").html(data);
		});
}
</script>

	<div>
	<input type="button" class=".sbtn" value="Start New Discussion" onclick="sndisc()" style="text-transform:uppercase;color:#fff;text-decoration:none;background-color:#0087c1;-moz-border-radius:3px;-webkit-border-radius:3px;border:1px solid #0087c1;float:middle;padding:4px 11px 11px 11px;height:30px;text-shadow: 1px 1px 0 #0a5482;cursor: pointer;margin-right: 100px;vertical-align: middle;"><input type="button" value="View Discussions" style="text-transform:uppercase;color:#fff;text-decoration:none;background-color:#0087c1;-moz-border-radius:3px;-webkit-border-radius:3px;border:1px solid #0087c1;float:middle;padding:4px 11px 11px 11px;height:30px;text-shadow: 1px 1px 0 #0a5482;cursor: pointer;margin-right: 100px;vertical-align: middle;" onclick="vdisc()">
	</div>
	<div id="d_forum" style="position:relative;top:50px;">
	</div>
<?php
}
?>
