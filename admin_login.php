	<div id="regf" class="lgf" style="display:block;" >
		<center>
		<fieldset class="lgff" >
		<div id="warning" class="warning" ><center></center></div>
		<legend  >Login</legend>

			<table cellpadding="5" cellspacing="5">
			<tr>		
			<td><label>CollegeID:</label></td>
			<td><input type="text" class="text"  id="collegeid" name="colgid" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
			</tr>
			<tr>		
			<td><input type="text" id="temp" style="display:none;"></td></tr>
			<tr>
			<td><label>Password:</label></td>
			<td><input type="password"  id="lpassword" name="lpass" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
			</tr>
			</table>
			<input type="submit" id="loginsb" name="logsub" value="submit" style="text-transform:uppercase;color:#fff;text-decoration:none;background-color:#0087c1;-moz-border-radius:3px;-webkit-border-radius:3px;border:1px solid #0087c1;float:middle;padding:4px 11px 11px 11px;height:30px;width:80px;textshadow: 1px 1px 0 #0a5482;cursor: pointer;margin-right: 100px;vertical-align: middle;" onclick="adm_login()">
		</fieldset>
		</center>
	</div>

