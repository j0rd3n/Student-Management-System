<?php
session_start();
include("dbconfig.php");
$clgid=$_SESSION["clgid"];
$bn=$_GET["bn"];
$yr=$_GET["yr"];
$a=mysql_query("select * from btdet where cid='$clgid' and btno='$bn' and year='$yr';")or die(mysql_error());
$yn=mysql_num_rows($a);
?>
<script type="text/javascript">
function sdsem(a)
{
	document.getElementById("subl").style.display="block";
	var b=document.getElementById("bn").value;
	var y=document.getElementById("yer").value;
	$.post("gsub.php?bn="+b+"&yr="+y+"&sem="+a,function(data)
	{
		$("#subl").html(data);
	});
}
</script>
<td>:<input type="text" id="bn" name="semv" value="<?php echo $bn;?>" style="display:none;"><input type="text" id="yer" value="<?php echo $yr;?>" style="display:none;">
<select id="semister" onChange="sdsem(this.value)">
<option>select</option>
<?php
for($i=0;$i<$yn;$i++)
{
	$f=mysql_fetch_array($a);
?>
	<option value="<?php echo $f['sem']  ?>"><?php echo $f["sem"]  ?></option>
<?php
}
?>
</select>
</td>
