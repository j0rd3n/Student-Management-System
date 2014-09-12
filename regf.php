<html>
<script type="text/javascript">
function reg()
{
alert("sdf");
}
</script>
<center>
<fieldset id="regf">
	<legend  >Registration</legend>
	<form  action="" method="post">

		<table>
		<tr>		
		<td><label>CollegeID:</label></td>
		<td><input type="text" class="text"  name="collegeid"></td>
		</tr>
		<tr>		
		<td><label>CollegeName:</label></td>
		<td><input type="text" class="text"  name="collegename"></td>
		</tr>
		<tr>
		<td><label>Password:</label></td>
		<td><input type="password"  name="password"></td>
		</tr>
		<tr>		
		<td><label>Email:</label></td>
		<td><input type="email" class="text"  name="email"></td>
		</tr>
		<tr>		
		<td><label>Ph no:</label></td>
		<td><input type="text" class="text"  name="phno"></td>
		</tr>
		<tr>
		<td><label>Address:</label></td>
		<td><textarea name="address" rows=5 cols=30></textarea></td>
		</tr>
		</table>
		<input type="submit" id="loginsb" name="logsub" onclick="reg()" value="submit">
	</form>
</fieldset>
</center>
</html>
