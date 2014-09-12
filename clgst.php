<?php
session_start();
include("dbconfig.php");
$id=$_SESSION["clgid"];
$a=mysql_query("select * from college where cid='$id';") or die(mysql_error());
if(mysql_num_rows($a)>0)
{
$o=mysql_query("select * from student where cid='$id';")or die(mysql_error());
?>
<div class="block_content">
	<form action="" method="post">
	
		<table id="ast" cellpadding="0" cellspacing="0" width="100%" class="sortable" style="font-size:12;text-align:right;">
		
			<thead>
				<tr>
					<th><input type="checkbox" class="check_all" /></th>
					<th><h4>ID</h4></th>
					<th><h4>Name</h4></th>
					<th><h4>Gender<h4></th>
					<th><h4>Ph</h4></th>
				</tr>
			</thead>
			<tbody>
								
<?php
for($i=0;$i<mysql_num_rows($o);$i++)
{
	$odata=mysql_fetch_array($o);
	?>
			<tr id="<?php echo $odata['sid'].'tr';?>">
				<td><input type="checkbox" /></td>
				<td><a href="profile.php?id=<?php echo $odata['sid'];?>" id="<?php echo $odata['sid'];?>" rel="facebox" ><?php echo $odata['sid'];?></a></td>
				<td><?php echo $odata['sname'];?></td>
				<td><?php echo $odata['sgender'];?></td>
				<td><?php echo $odata['sph'];?></td>
			</tr>	
<?php
}
echo "</table></div>";
}
?>

