<?php
session_start();
include("dbconfig.php");
$uc=$_GET["q"];
$aa=mysql_query("select * from college where cname like '%$uc%'") or die(mysql_error());
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
		$response=$response.$fs["cname"]."<br>";
	}
}
else{
	for($i=0;$i<mysql_num_rows($aa);$i++)
	{
		$fs=mysql_fetch_array($aa);
		$response=$response."<a title=\"".$fs["cid"]."\" onclick=\"action(this.title)\" style=\"cursor:pointer;\">".$fs["cname"]." -".$fs["cid"]."</a><br>";
	}

}
echo $response;
?>
