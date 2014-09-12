	<div id="slgf" class="lgf" style="display:block;" >
		<center>
		<fieldset class="lgff" >
		<div id="stulogin"></div>
		<div id="warningsl" class="warning" style="display:none;"><center></center></div>
		<legend  >Login</legend>
			<div id="stlgn">
			<table cellpadding="5" cellspacing="5">
			<tr>		
			<td><label>Student ID:</label></td>
			<td><input type="text" class="text"  id="studentid" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
			</tr>
			<tr>
			<td><label>Password:</label></td>
			<td><input type="password"  id="stpassword" onBlur="if(this.value==''){this.style.border='2px solid red';} else {this.style.border='1px solid green';}"></td>
			</tr>
			</table>
			<input type="submit" id="stsubmit" name="logstusub"  value="submit"  onclick="loginstudent()">
			
		<button onclick="stu_register()" id="stsubmit" style="float:right;position:absolute;top:73%;right:20%;">REGISTER</button></div>
		</fieldset>
		</center>
	</div>
