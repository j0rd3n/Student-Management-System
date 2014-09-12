	<div id="sregff" style="display:block;">
			<fieldset id="regf" >
	
			<legend  >Student Registration</legend>


				<table cellpadding="5" cellspacing="5">
				<tr>		
				<td><label>CollegeID:</label></td>
				<td><input type="text" class="text"  id="regcid" name="rcid"  onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}" ></td>
				</tr>
				<tr>		
				<td><label>StudentID:</label></td>
				<td><input type="text" class="text"  id="regstuid" name="stuid"  onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}" ></td>
				</tr>
				<tr>		
				<td><label>StudentName:</label></td>
				<td><input type="text" class="text"  id="regstuname" name="stuname" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>
				<td><label>Password:</label></td>
				<td><input type="password"  id="sregpassword" name="spass" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>		
				<td><label>Confirm-password:</label></td>
				<td><input type="password"   id="sregcpassword"  onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';return validcpass();}"></td>
				</tr>
				<tr>		
				<td><label>StudentFatherName:</label></td>
				<td><input type="text" class="text"  id="regstufname" name="stufname" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>		
				<td><label>Batch:</label></td>
				<td><input type="text" class="text" name="sbatn" id="sbtn" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>		
				<td><label>Current Year:</label></td>
				<td><input type="text" class="text" name="syear" id="syr" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>		
				<td><label>Branch:</label></td>
				<td><input type="text" class="text" name="sbranch" id="sbrnc" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>		
				<td><label>Current Sem:</label></td>
				<td><input type="text" class="text" name="ssem" id="ssm" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
				</tr>
				<tr>		
				<td><label>Gender:</label></td>
				<td><select id="reggender" name="stugen" style="width:70%;background:#fff;border:1px solid green;color:#454545;line-height:1.2em;height:30px;font-family:Helvetica;font-weight:bold;padding:3px 3px 3px 5px;-moz-border-radius:3px;-webkit-border-radius:3px;"><option>Select</option><option>Male</option><option>Female</option></select></td>
				</tr>
				<tr>		
				<td><label>Email:</label></td>
				<td><input type="email" class="text"  id="semail" name="stuemail" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';return validemail(this.value);}"></td>
				</tr>
				<tr>		
				<td><label>Ph no:</label></td>
				<td><input type="text" class="text"  id="sphno" name="stuph" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';return validph(this.value);}"></td>
			</tr>
				</tr>
				<tr>
				<td><label>Address:</label></td>
				<td><textarea id="saddress" rows=5 cols=30 name="stuadd" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></textarea></td>
				</tr>
				</table>
			<div id="cwarning" class="warning" "><center></center></div>
				<center><input type="submit" id="rsb" name="strgsub"  value="submit" style="text-transform:uppercase;color:#fff;text-decoration:none;background-color:#0087c1;-moz-border-radius:3px;-webkit-border-radius:3px;border:1px solid #0087c1;float:middle;padding:4px 11px 11px 11px;height:30px;width:80px;textshadow: 1px 1px 0 #0a5482;cursor: pointer;margin-right: 100px;vertical-align: middle;" onclick="registervalid11()"></center>

			</fieldset>
		
	</div>

