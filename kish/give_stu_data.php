<?php
include("dbconfig.php");
$sid=$_GET['sid'];
$q=mysql_query("select * from student where sid='$sid'") or die(mysql_error());
$st_data=mysql_fetch_array($q);
$cid=$st_data['cid'];
$c=mysql_query("select * from college where cid='$cid'") or die(mysql_error());
$co=mysql_fetch_array($c);
?>
	<h3>Student <span>Information</span></h3><br>
	<table id="ast" style="width:80%;" cellpadding="5" cellspacing="5">
	<tr>
		<th><h4>Student Id</h4></th><th><?php echo $st_data['sid']?></th>
	</tr>
	<tr>
		<th><h4>College Name</h4></th><th><?php echo $co['cname']?></th>
	</tr>
	<tr>
		<th><h4>College Phone No</h4></th><th><?php echo $co['cph']?></th>
	</tr>
	<tr>
		<th><h4>Student Name</h4></th><th><?php echo $st_data['sname']?></th>
	</tr>
	<tr>
		<th><h4>Student Batch</h4></th><th><?php echo $st_data['batch']?></th>
	</tr>
	<tr>
		<th><h4>Current year</h4></th><th><?php echo $st_data['year']?></th>
	</tr>
	<tr>
		<th><h4>Branch</h4></th><th><?php echo $st_data['branch']?></th>
	</tr>
	<tr>
		<th><h4>Current Sem</h4></th><th><?php echo $st_data['sem']?></th>
	</tr>

