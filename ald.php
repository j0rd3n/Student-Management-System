<?php
session_start();
include("dbconfig.php");
$clgid=$_SESSION["clgid"];
$sid=$_GET["sid"];
$a=mysql_query("select * from student where cid='$clgid' and sid='$sid';")or die(mysql_error());
$yn=mysql_num_rows($a);
?>
<script type="text/javascript">
</script>
<?php
$f=mysql_fetch_array($a);
$bn=$f['batch'];
$yr=$f['year'];
$brnch=$f['branch'];
$sem=$f['sem'];
$b=mysql_query("select sub from btdet where cid='$clgid' and btno='$bn' and year='$yr' and sem='$sem' and branch='$brnch';")or die(mysql_error());
$f=mysql_fetch_array($b);
$subarray=explode(",",$f["sub"]);
$nofssub=count($subarray);
?>
<script type="text/javascript">
document.getElementById("nfe").style.visibility="hidden";
function checks(a)
{
	if(a=="End Sem")
	{
		document.getElementById("nfe").style.visibility="hidden";
		}
	else
		document.getElementById("nfe").style.visibility="visible"
}
</script>
<table cellspacing="1" cellpadding="5" id="ast">
	<tr>
	<td><h4>Batch</h4></td><td>: <?php echo $bn?></td>
	</tr>
	<tr>
	<td><h4>Year</h4></td><td>: <?php echo $yr?></td>
	</tr>
	<tr>
	<td><h4>Branch</h4></td><td>: <?php echo $brnch?></td>
	</tr>
	<tr>
	<td><h4>Sem</h4></td><td>: <?php echo $sem?></td>
	</tr>
	<tr>
	<td><h4>Exam Type</h4></td><td>:<select name="extp" id="examtype" onChange="checks(this.value)"><option value="select">select</option><option value="Weekly">Weekly</option><option value="Monthly">Monthly</option><option value="End Sem">End Sem</option></select></td>
	</tr>
	<tr id="nfe">
	<td><h4>No.of Exam</h4></td><td>:<input name="nfem" id="nofem" type="text"></td>
	</tr>
	<tr>
	<input type="text" value="<?php echo $nofssub;?>" id="nofsub" name="nfsubs" style="display:none;">
	</tr>
	<tr>
	<td><h4>Subject:</h4></td>
	<?php
	for($i=0;$i<$nofssub;$i++)
	{
		if($subarray[$i]!=" ")
	?>
		<td><center><input type="text"  name="<?php echo 'subj'.$i;?>" value="<?php echo $subarray[$i]; ?>" style="display:none"><?php echo $subarray[$i]; ?></center></td>
	<?php
	}
	?>
	</tr>
	<tr>
	<td><h4>Marks:</h4></td>
	<?php
	$sb="subs";
	$sbn="subject";
	for($i=0;$i<$nofssub;$i++)
	{
		if($subarray[$i]!=" ")
	?>
		<td><input type="text" id="<?php echo $sb.$i; ?>" name="<?php echo $sbn.$i; ?>" ></td>
	<?php
	}
	?>
	</tr>
</table>
<?php
?>
</select>
</td>
