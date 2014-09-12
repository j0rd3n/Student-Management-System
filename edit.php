<?php
session_start();
if($_SESSION["SmS"]=="sms")
{
$clgid=$_SESSION["clgid"];
include("dbconfig.php");
$c=mysql_query("select * from college where cid='$clgid';");
$cd=mysql_fetch_array($c);
$cname=$cd["cname"];
$cemail=$cd["cemail"];
$cph=$cd["cph"];
$cwst=$cd["cwebsite"];
$cadd=$cd["cadd"];
?>
      <!-- aside -->
 
<div id="mdff" >
		<fieldset id="mdflf">
		<legend>Modifications</legend>
		<div id="warning2" class="warning" style="display:none;"><center></center></div>
		<button id="edit" onclick="edit()">Edit</button>
		<form action='' method="post" onsubmit="return validmdf()">
			<table  cellpadding="5" cellspacing="5">
			<tr>
			<td> <label>ID</label></td><td>:</td><td><input type="text" id="mid" class="inp" value="<?php echo $clgid;?>" readonly="readonly"> </td>
			</tr>
			<tr>
			<td><label>Name</label></td><td>:</td><td><input type="text" id="mname" class="inp" value="<?php echo $cname;?>" readonly="readonly"> </td>
			</tr>
			<tr>
			<td><label>Email</label></td><td>:</td><td><input type="text" id="memail" name="mmail" class="inp" value="<?php echo $cemail;?>" readonly="readonly"> </td>
			</tr>
			<tr>
			<td><label>Ph no</label></td><td>:</td><td><input type="text" id="mph" name="mphn" class="inp" value="<?php echo $cph;?>" readonly="readonly"> </td>
			</tr>
			<tr>
			<td><label>Website</label></td><td>:</td><td><input type="text" id="mws" name="mwst" class="inp" value="<?php echo $cwst;?>" readonly="readonly"> </td>
			</tr>
			<tr>
			<td><label>Address</label></td><td>:</td><td><input type="text" id="madd" name="mad" class="inp" value="<?php echo $cadd;?>" readonly="readonly"> </td>
			</tr>
			</table>
			<input type="submit" value="submit"   id="mdsub" name="msub" style="display:none;">
		</form>
		</fieldset>
<?php
}
else
echo "sdf";
?>
