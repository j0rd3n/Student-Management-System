<?php
include("dbconfig.php");
$uc=$_GET["q"];
$aa=mysql_query("select * from student where sname like '%$uc%'") or die(mysql_error());
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
		$response=$response.$fs["sname"]."<br>";
	}
}
else{
	for($i=0;$i<mysql_num_rows($aa);$i++)
	{
		$fs=mysql_fetch_array($aa);
		$response=$response."<h4 title=\"".$fs["sid"]."\" onclick=\"search_box(this.title)\" style=\"cursor:pointer;\">".$fs["sname"]." -".$fs["sid"]."</h4>";
	}

}
echo $response;
?>
