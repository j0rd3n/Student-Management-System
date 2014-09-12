<?php
include("dbconfig.php");
$cid=$_GET['cid'];
$q=mysql_query("select * from college where cid='$cid'") or die(mysql_error());
$data=mysql_fetch_array($q);
$q1=mysql_query("select * from stu_acadamic where cid='$cid' order by srank asc") or die(mysql_error());
?>
<table id="ast" style="border:2px solid #008cc4;width:80%;" cellpadding="5" cellspacing="5">
<tr>
	<th>College Details</th><th>
</tr>
<tr>
	<td><h4>College Name</h4></td><td><a style="font-weight:bold;"><?php echo $data['cname'];?></a></td>
</tr>
<tr>
	<td><h4>Contact Number</h4></td><td><a style="font-weight:bold;"><?php echo $data['cph'];?></a></td>
</tr>
<tr>
	<td><h4>College Websit</h4></td><td><a style="font-weight:bold;"><?php echo $data['cwebsite'];?></a></td>
</tr>
<tr>
	<td><h4>College Address</h4></td><td><a style="font-weight:bold;"><?php echo $data['cadd'];?></a></td>
</tr>
</table><br>

<?php
if (mysql_num_rows($q1)>10)
{
?>
	<h3>Current Students <span>Progress</span></h3><br>
	<table id="ast" style="width:80%;" cellpadding="5" cellspacing="5">
	<tr>
		<th><h4>Student Id</h4></th><th><h4>Student Name</h4></th><th><h4>Student Batch</h4></th><th><h4>Current year</h4></th><th><h4>Branch</h4></th><th><h4>Current Sem</h4></th><th><h4>Rank</h4></th><th><h4>Student EAA</h4></th>
	</tr>
<?php
	for ($i=0;$i<10;$i++)
	{
		$st_data=mysql_fetch_array($q1);?>
		<td><?php echo $st_data['sid']; ?></td><td><?php echo $st_data['sname']; ?></td><td><?php echo $st_data['sbatch']; ?></td><td><?php echo $st_data['year']; ?></td><td><?php echo $st_data['sbranch']; ?></td><td><?php echo $st_data['curr_sem']; ?></td><td><?php echo $st_data['srank']; ?></td><td><?php echo $st_data['eaa']; ?></td>
	</tr>

	<?php
	}
}
else if(mysql_num_rows($q1)>=1)
{?>
	<h3>Current Students <span>Progress</span></h3><br>
	<table id="ast" style="width:100%;" cellpadding="5" cellspacing="5">
	<tr>
		<th>Student Id</th><th>Student Name</th><th>Student Batch</th><th>Current year</th><th>Branch</th><th>Current Sem</th><th>Rank</th><th>Student EAA</th>
	</tr>
<?php
	while($st_data=mysql_fetch_array($q1))
	{?>
		<td><?php echo $st_data['sid']; ?></td><td><?php echo $st_data['sname']; ?></td><td><?php echo $st_data['sbatch']; ?></td><td><?php echo $st_data['year']; ?></td><td><?php echo $st_data['sbranch']; ?></td><td><?php echo $st_data['curr_sem']; ?></td><td><?php echo $st_data['srank']; ?></td><td><?php echo $st_data['eaa']; ?></td>
	</tr>
	<?php
	}
}
?>
