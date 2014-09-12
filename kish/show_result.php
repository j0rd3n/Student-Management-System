<?php
session_start();?>
<html>
<?php
include("dbconfig.php");
$cid=$_SESSION["cid"];
$sid=$_SESSION["stu_id"];
$qq=mysql_query("select * from stu_acadamic where cid='$cid' and sid='$sid'");
$data=mysql_fetch_array($qq);
$table_name=$data['cid'].$data['sbatch'].$data['year'].$data['curr_sem'].$data['sbranch'];
$_SESSION["tabname"]=$table_name;
$q=mysql_query("select distinct(dtype) from $table_name;");
echo "<center>";
echo "<h4 style='font-size:20px;'>Select Results below <select style='background:#fff;border:1px solid green;width:100px;height:25px;font-weight:bold;text-align:center;' name='type' onChange=show_results(this.value)><option>select</option>";
while ($types=mysql_fetch_array($q))
{
	$type=$types['dtype'];
	$ex_type=mysql_query("select * from $table_name where cid='$cid' and sid='$sid' and dtype='$type'") or die(mysql_error());
	$exx_type=mysql_fetch_array($ex_type);
	echo "<option value='$type'>".$type."</option>";
}
echo "</select></h4></center>";
?>

