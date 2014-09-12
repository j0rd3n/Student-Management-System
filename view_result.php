<?php
session_start();
include("dbconfig.php");
$type=$_GET['a'];
$sid=$_SESSION["stu_id"];
$cid=$_SESSION["cid"];
$m=mysql_query("select sname from stu_acadamic where cid='$cid' and sid='$sid'");
$nam=mysql_fetch_array($m);
?>
<br><table style="border:2px solid #008cc4;width:80%;" cellpadding="5" cellspacing="5">
<tr style="border:1px solid blue;">
	<td style="border:1px solid blue;"><a style='font-weight:bold'>You ID</a></td><td><h4><?php echo $sid; ?></h4></td>
</tr>
<tr style="border:1px solid blue;">
	<td style="border:1px solid blue;"><a style='font-weight:bold'>Your Name</a></td><td><h4><?php echo $nam['sname']; ?></h4></td>
</tr>
</table></br>
<?php
$table=$_SESSION['tabname'];
$va=mysql_query("select * from $table where type like '$type%' and sid='$sid'");
$vaa=mysql_query("select sub from btdet where table_name='$table'");
$subs=mysql_fetch_array($vaa);
$arr=explode(",",$subs['sub']);
if ($type!='select')
{
	?>
	<br><h3><span><?php echo $type;?></span> Examinations Results</h3>
	<table style="border:2px solid #008cc4;width:80%;" cellpadding="5" cellspacing="5" border='1px'>
	<tr align=center ><th><h4><?php echo $type;?></h4></th>
	<?php
	for ($i=0;$i<count($arr);$i++)
		echo "<th><h4>".$arr[$i]."</h4></th>";
	echo "<th style='height:27px;'><h4>Total</h4></th></tr>";
	$i=1;
	while ($r=mysql_fetch_array($va))
	{
		echo "<tr align=center >";
		echo "<td><label>".$type.$i++."</label></td>";
		for ($j=0;$j<count($arr);$j++)
		{
			$sub_name=$arr[$j];
			echo "<td>".$r[$sub_name]."</td>";
		}
		$total=$r['total'];
		echo "<td>$total</td></tr>";
	}
	echo "</table>";
}
?>
