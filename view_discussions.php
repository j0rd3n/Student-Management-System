<?php
session_start();
include("dbconfig.php");
$sid=$_SESSION["stu_id"];
$cid=$_SESSION["cid"];
$ds=mysql_query("select * from discussions;")or die(mysql_error());
$nrws=mysql_num_rows($ds);
?>
<script type="text/javascript">
function sendans(a)
{
	var usr_rsp=document.getElementById("user_response"+a).value;
	var sub_ansr=document.getElementById("sub_answer"+a).value;
	var sub_no=document.getElementById("sub_no"+a).value;
	var div=sub_ansr+'s'+sub_no;
	$.post("send_sub_ans.php?rsp="+usr_rsp+"&sub="+sub_ansr+"&a="+a,function(data)
		{
			$("#"+div).html(data);
		});
}
</script>
<div id="all_discussions">
<?php
for($i=0;$i<$nrws;$i++)
{
	$dsarray=mysql_fetch_array($ds);
	$subject=$dsarray["subject"];
	$message=$dsarray["message"];
	$ans=mysql_query("select * from answers where subject='$subject';")or die(mysql_error());
	$nfans=mysql_num_rows($ans);
?>
	<div id="<?php echo $subject.$i.'1' ?>" style="border:1px solid grey;-moz-border-radius:3px;border-radius:3px;">
		<div id="<?php echo $subject.$i;?>"  class="requestclose" onclick="r(9,this.id+'1')"></div>
		<table cellspacing=5 cellpadding=5>
			<tr><td><label><h4>Posted By :</h4></label></td><td><h4><input type="button" id="sbt" value="<?php echo $dsarray['sid']?>"></h4></td></tr>
			<tr><td><a>Subject</a></td><td>:<?php echo $subject; ?></td></tr>
			<tr><td><a>Query</a></td><td>:<?php echo $message;?></td></tr>
			<tr><td><h4>Answers:</h4></td><td></td></tr>
			<tr  >
			<td>
				<div id="<?php echo $subject.'s'.$i?>" >
				<table>
			<?php
			for($j=0;$j<$nfans;$j++)
			{
				$sans=mysql_fetch_array($ans);
			?>
			<tr><td><label><a><?php echo $sans["id"]; ?></a></label></td><td>&emsp;&emsp;&emsp;&emsp;</td><td>:<?php echo $sans["answer"] ?></td></tr>
			<?php
			}
			?>
				</table>
				</div>
			</td>
			</tr>
			<input type="text" id="sub_answer<?php echo $i;  ?>" value="<?php echo $subject;?>" style="display:none"><input type="text" id="sub_no<?php echo $i;  ?>" value="<?php echo $i;?>" style="display:none">
			<div>
			<tr><td>Your Response</td><td><textarea id="user_response<?php echo $i?>" rows=10 cols=30></textarea></td></tr>
			<tr><td><input type="submit" id="sbt" value="submit" onclick="sendans('<?php echo $i;?>')"></td><td></td></tr>
			</div>
		</table>
	</div>
	<br>
<?php
}
?>
</div>
