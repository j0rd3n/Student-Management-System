<?php
session_start();
$cid=$_SESSION["clgid"];
include("dbconfig.php");
$uc=$_GET["q"];
$a=mysql_query("select sid from student where cid='$cid' and sid  like '%$uc%';")or die(mysql_error());
$response="";
?>
<script type="text/javascript">

</script>
<?php
if(mysql_num_rows($a)>10)
{
	for($i=0;$i<10;$i++)
	{
		$fs=mysql_fetch_array($a);
		$response=$response.$fs["sid"]."<br>";
	}
}
else{
	for($i=0;$i<mysql_num_rows($a);$i++)
	{
		$fs=mysql_fetch_array($a);
		$response=$response."<a title=\"".$fs["sid"]."\" onclick=\"action(this.title)\" style=\"cursor:pointer;\">".$fs["sid"]."</a><br>";
	}

}
echo $response;
?>
