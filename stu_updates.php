<?php
session_start();
include("dbconfig.php");
$cid=$_SESSION["cid"];
$col=mysql_query("select * from college_updates where cid='$cid' order by sno desc;")or die(mysql_error());
	if (mysql_num_rows($col)>=1)
	{
?>
		<div id="allrequests">
		<?php
		for($i=0;$i<mysql_num_rows($col);$i++)
		{
			$ff=mysql_fetch_array($col);
		?>
			<div id="wrngif<?php echo $i;?>1" class="requestinfo">
				<div id="wrngif<?php echo $i;?>"  class="requestclose" onclick="r(9,this.id+'1')"></div>
				<form action='' method="post" onsubmit="return validresp()">
					<table cellpadding="5" cellpadding="5">
					<tr>
					<td >College Name</td><td style="color:#ff7b01;"><input type="text" id="sd" name="sid" value="<?php echo $ff['cname'];?>" style="display:none;"><?php echo $ff["cname"];?></td>
					</tr>
					<tr>
					<td>Date</td><td style="color:#ff7b01;"><?php echo $ff["date"];?></td>
					</tr>
					<tr>
					<td>Subject</td><td style="color:#ff7b01;"><?php echo $ff["subject"];?></td>
					</tr>
					<tr>
					<td>Content</td><td style="color:#ff7b01;"><?php echo $ff['info'];?></td>
					</tr>
					</table>
			</div>
		</div>  
			<br>	
		<?php
	
		}
		?>
	<?php
		}
?>
