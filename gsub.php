<?php
session_start();
$cid=$_SESSION["clgid"];
$bn=$_GET["bn"];
$yr=$_GET["yr"];
$sm=$_GET["sem"];
include("dbconfig.php");
$a=mysql_query("select sub from btdet where cid='$cid' and btno='$bn' and sem='$sm';")or die(mysql_error());
$f=mysql_fetch_array($a);
$subarray=explode(",",$f["sub"]);
$nofssub=count($subarray);
?>
<script type="text/javascript">
document.getElementById("nofsubs").value="<?php echo $nofssub;?>";
</script>
<table cellspacing="10" cellpadding="10">
<tr>
<td>Type</td><td>:<select><option>select</option><option>Weekend</option><option>Monthly</option><option>EndSem</option></select></td>
</tr>
<tr>
<td>No</td><td>:<input type="text"></td>
</tr>
<tr>
<td>Subject:</td>
<?php
for($i=0;$i<$nofssub;$i++)
{
	if($subarray[$i]!=" ")
?>
	<td><center><?php echo $subarray[$i]; ?></center></td>
<?php
}
?>
</tr>
<tr>
<td>Marks:</td>
<?php
for($i=0;$i<$nofssub;$i++)
{
	if($subarray[$i]!=" ")
?>
	<td><input type="text" value="<?php echo $subarray[$i].''; ?>" id="<?php echo $subarray[$i]; ?>" ></td>
<?php
}
?>
</tr>
</table>
<input type="submit" value="SUBMIT" id="loginsb" name="entrresub">
