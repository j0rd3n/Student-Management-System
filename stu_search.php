<?php
include("dbconfig.php");
$uc=$_GET["q"];
$aa=mysql_query("select * from student where sid like '%$uc%'") or die(mysql_error());
$response="";
?>
<script type="text/javascript">

</script>
<?php
if(mysql_num_rows($aa)>10)
{
	for($i=0;$i<10;$i++)
	{
		$fs=mysql_fetch_array($aa);
		$response=$response.$fs["sid"]."<br>";
	}
}
else{
	for($i=0;$i<mysql_num_rows($aa);$i++)
	{
		$fs=mysql_fetch_array($aa);
		$response=$response."<a title=\"".$fs["sid"]."\" onclick=\"action1(this.title)\" style=\"cursor:pointer;\">".$fs["sid"]." -".$fs["sname"]."</a><br>";
	}

}
echo $response;
?>
