<?php
session_start();
$cid=$_SESSION["clgid"];
$bn=$_GET["bn"];
include("dbconfig.php");
$a=mysql_query("select * from btdet where cid='$cid' and btno='$bn';")or die(mysql_error());
$yn=mysql_num_rows($a);
?>
<script type="text/javascript">
function sdyr(a)
{
	document.getElementById("seml").style.display="block";
	var b=document.getElementById("bn").value;
	$.post("gs.php?bn="+b+"&yr="+a,function(data)
	{
		$("#sem").html(data);
	});
}
</script>
<td>:<input type="text" id="bn" name="yearv" value="<?php echo $bn;?>" style="display:none;">
<select id="yrs" onChange="sdyr(this.value)">
<option>select</option>
<?php
for($i=0;$i<$yn;$i++)
{
	$f=mysql_fetch_array($a);
?>
	<option value="<?php echo $f['year']  ?>"><?php echo $f["year"]  ?></option>
<?php
}
?>
</select>
</td>
