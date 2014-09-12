<script type=text/javascript>

</script>
	<div id="regff" style="display:block;">
			<fieldset id="regf" >
			<div id="cwarning" class="warning" ></div>
			<legend  >Registration</legend>

				<table cellpadding="5" cellspacing="5">
				<tr>		
				<td><label>CollegeID:</label></td>
				<td><input type="text" class="text"  id="regcollegeid" name="clgid"  onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}" ></td>
				</tr>
				<tr>
				<input type="text" id="tempcc" style="display:none;" value="sdfs">
				</tr>
				<tr>		
				<td><label>CollegeName:</label></td>
				<td><input type="text" class="text"  id="regcollegename" name="clgname" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>
				<td><label>Password:</label></td>
				<td><input type="password"  id="cregpassword" name="cpass" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>		
				<td><label>Confirm-password:</label></td>
				<td><input type="password"   id="cregcpassword"  onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>		
				<td><label>Email:</label></td>
				<td><input type="email" class="text"  id="cemail" name="cemail" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>		
				<td><label>Website:</label></td>
				<td><input type="text" class="text"  id="wsit" name="website" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>		
				<td><label>Ph no:</label></td>
				<td><input type="text" class="text"  id="cphno" name="cph" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>
				<td><label>Address:</label></td>
				<td><textarea id="address" rows=5 cols=30 name="cadd" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></textarea></td>
				</tr>
				</table>
				<center><input type="submit" id="loginsb" name="regsub"  value="submit" style="text-transform:uppercase;color:#fff;text-decoration:none;background-color:#0087c1;-moz-border-radius:3px;-webkit-border-radius:3px;border:1px solid #0087c1;float:middle;padding:4px 11px 11px 11px;height:30px;width:80px;textshadow: 1px 1px 0 #0a5482;cursor: pointer;margin-right: 100px;vertical-align: middle;" onclick="registervalid1()"></center>
			</form>
			</fieldset>
		
	</div>

