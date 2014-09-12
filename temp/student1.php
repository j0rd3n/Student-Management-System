<?php
include("dbconfig.php");
session_start();
$sid=$_SESSION["stu_id"];
$nn=mysql_query("select * from student where sid='$sid';");
$s_prof=mysql_query("select * from stu_prof where sid='$sid';");
$stu_profile=mysql_fetch_array($s_prof);
$name=mysql_fetch_array($nn);
$_SESSION["cid"]=$name['cid'];
$cid=$_SESSION["cid"];
$_SESSION["stu_name"]=$name['sname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title><?php echo $_SESSION["stu_id"]." | ".$_SESSION["stu_name"]; ?></title>
<meta charset="utf-8">
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/student.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/student.js"></script>
<script type="text/javascript">
var s=1;
function r(x,id)
{
		var id1=id;
		if(x>0)
		{
			var l=[0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1];
			document.getElementById(id1).style.opacity=l[x];x--;
			setTimeout("r("+x+",'"+id1+"')",100);
		}
		else
			{
			document.getElementById(id1).style.visibility="hidden";
			var h=document.getElementById(id).scrollHeight;
			a(id1,h);
			}

}
function a(id,v)
{
	if(v>0)
		{
		document.getElementById(id).style.height=v+"px";v=v-10;
		setTimeout("a('"+id+"',"+v+")",20);
		}
	else
	{

			document.getElementById(id).style.height=0;
			document.getElementById(id).style.display="none";
		
	}
}
function show_updates()
{
	document.getElementById("inside").style.display="block";
	document.getElementById("are").style.display="none";
	document.getElementById("results").style.display="none";
	document.getElementById("send_requests").style.display="none";
	document.getElementById("profile").style.display="none";
	document.getElementById("acadamic").style.display="none";
	$.post("stu_updates.php",function(data)
		{
			$("#inside").html(data);
		});
}
function show_results(a)
{
	document.getElementById("results_view").style.display='block';
	$.post("view_result.php?a="+a,function(data)
		{
			$("#results_view").html(data);
		});
}

</script>
<style>
.request{
	padding: 10px 0px 10px 40px;
	margin: 10px 0;
	font-weight: bold;
	overflow: hidden;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	}
.requestinfo {
	position:relative;
	top:10px;
	padding: 10px 0px 10px 40px;
	border: 1px solid #bbdbe0;
	width:500px;
	background: #ecf9ff url(./images/info.gif) 12px 12px no-repeat;
	color: #0888c3;
	}
.requestclose {
	position:relative;
	right:10px;top:0px;
	display: block;
	float: right;
	width: 50px;
	height: 50px;
	background: url(./images/close.png) 12px 12px no-repeat;
	margin-top: 2px;
	cursor: pointer;
	opacity: 0.7;
	}
#allrequests{
	top:40%;
	list-style: none;
}
</style>

<!--[if lt IE 7]>
     <link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
        ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');
     </script>
<![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
</head>
<body id="page1">
<div class="wrap">
   <!-- header -->
   <header>
      <div class="container">
         <h1><a href="student.php">Student's site</a></h1>
         <nav>
            <ul id="tabs">
               <li id="homec" title="home" class="current"><a id="home" title="home" href="student.php" onclick="cls(this.id)" class="m1">College</a></li>
               <li id="collegec" title="college" class="not"><a id="college" title="college" href="#" class="m2" onclick="cls(this.id),show_profile()">Profile</a></li>
               <li id="studentc" title="student" class="not"><a id="student" title="student" href="#" class="m3" onclick="cls(this.id),send_request()">Requests</a></li>
               <li id="adminsc" title="admins" class="last"><a  id="admins" title="admins" href="#" class="m5" onclick="cls(this.id),show_acadamic()">Acadamic</a></li>
               <li id="logoutc" title="logout" class="last"><a  id="logout" title="logout" href="logout.php" class="m5" onclick="cls(this.id)">Logout</a></li>

            </ul>
         </nav>
         <form action="" id="search-form">
            <fieldset>
            <div class="rowElem">
               <input type="text">
               <a href="#" onClick="document.getElementById('search-form').submit()">Search</a></div>
            </fieldset>
         </form>
      </div>
   </header>
   <div class="container">
      <!-- aside -->
      <aside>
	
         <h3>Categories</h3>
         <ul class="categories">
            <li><span><a href="#">Programs</a></span></li>
            <li><span><a href="#" onclick="show_profile()">Student Info</a></span></li>
            <li><span><a href="#" onclick="give_result()">Results</a></span></li>
            <li><span><a href="#" onclick="show_updates()">College Updates</a></span></li>
            <li><span><a href="#" onclick="show_acadamic()">Acadamic Information</a></span></li>
            <li><span><a href="#">Basic Information</a></span></li>
            <li><span><a href="#">Vacancies</a></span></li>
            <li class="last"><span><a href="#">Calendar</a></span></li>
         </ul>
	
         <form action="" id="newsletter-form" style="display:none;">
            <fieldset>
            <div class="rowElem">
               <h2>Newsletter</h2>
		<input type="text" value="Enter Username" onFocus="if(this.value=='Enter Username'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Username'}" >
		<input type="password" value="******" onFocus="if(this.value=='******'){this.value=''}" onBlur="if(this.value==''){this.value='******'}" >
               <div class="clear"><a href="#" class="fleft">Unsubscribe</a><a href="#" class="fright" onClick="document.getElementById('newsletter-form').submit()">Submit</a></div>
            </div>
            </fieldset>
         </form>
         <h2>College<span> Updates</span></h2>
<?php
	$col=mysql_query("select * from college_updates where cid='$cid' order by sno desc;")or die(mysql_error());
	if (mysql_num_rows($col)>=2)
	{
		for ($i=0;$i<2;$i++)
		{
			$r=mysql_fetch_array($col);?>
		         <ul class="news">
	        	    <li><strong><?php echo $r['date']; ?></strong>
	        	       <h4><a href="#"><?php echo $r['subject'];?></a></h4>
	        	       <?php echo $r['info']; ?></li>
        		    
	        	 </ul>      
<?php				
		}
	}
	else if(mysql_num_rows($col)==1)
	{
		$r=mysql_fetch_array($col);
		?>
         <ul class="news">
            <li><strong><?php echo $r['date']; ?></strong>
               <h4><a href="#"><?php echo $r['subject'];?></a></h4>
               <?php echo $r['info']; ?></li>
            
         </ul>  
		<?php
	}
?>
	</aside>
      <!-- content -->
	
      <section id="content">
	<div id="warning" style="display:none;background-color:#8DCEDE;color:red;"><center></center></div>
	<div id="profile" class="lgf" style="display:none;height:100%" >
	<h2 align=center><?php echo $_SESSION["stu_name"];?>'s <span>profile page</span></h2>
		<center>
		<fieldset class="profile_fieldset" >
		<legend  >Profile view</legend>


			<table cellpadding="10" cellspacing="5" align=left width="650">
			<tr>		
				<td><h4>Your ID</h4></td>
				<td><label>: <?php echo $_SESSION["stu_id"];?></label></td>
				<td align=center></td>

			</tr>
			<tr>
				<td><h4>Your Name</h4></td>
				<td><label>: <?php echo $name['sname'];?></label></td>
				<td align=center><h4>Avatar</h4></td>
			</tr>
			<tr>
				<td><h4>Father Name</h4></td>
				<td><label>: <?php echo $name['sfname'];?></label></td>
				<td rowspan=8><div style="background:#50F6FF;border:1px solid blue;width:260px;height:230px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px"><img src="users/<?php echo $_SESSION['stu_id'];?>" style="position:relative;top:5px;bottom:5px;left:5px;right:5px;width:250px;height:220px;border:1px solid blue"></div></td>
			</tr>
			<tr>
				<td><h4>Interests</h4></td>
				<td><label>: <?php echo $stu_profile['interests'];?></label></td>
			</tr>
			<tr>
				<td><h4>Achievements</h4></td>
				<td><label>: <?php echo $stu_profile['achievements'];?></label></td>
			</tr>
			<tr>
				<td><h4>Roll Model</h4></td>
				<td><label>: <?php echo $stu_profile['rollmodel'];?></label></td>
			</tr>
			<tr>
				<td><h4>Date of birth</h4></td>
				<td><label>: <?php echo $stu_profile['sdob'];?></label></td>
			</tr>
			<tr>
				<td><h4>Email Id</h4></td>
				<td><label>: <?php echo $name['semail'];?></label></td>
			</tr>
			<tr>
				<td><h4>Phone number</h4></td>
				<td><label>: <?php echo $name['sph'];?></label></td>
			</tr>
			<tr>
				<td><h4>Address</h4></td>
				<td><label>: <?php echo $name['sadd'];?></label></td>
			</tr>
			</table>


		</fieldset>
		<input type="submit" id="loginsb"   value="Edit your Profile" onclick="show_editmenu()">
		</center>
	</div>
	<div id="send_requests" class="lgf" style="display:none;">
		<h2 align=center>Your ID: <span><?php echo $_SESSION["stu_id"];?></span></h2>
		<center>
		<div id="show_message1" style="display:block;background-color:#0087C1;width:250px;height:50px;color:#fff;opacity:0"><b><br>Please Enter Subject</b></div>
		<div id="show_message2" style="display:none;background-color:#0087C1;width:250px;height:50px;color:#fff;opacity:0"><b><br>Please Enter Your Request</b></div>
		<fieldset class="profile_fieldset1" >
		<legend>Send Requests</legend>
		<form action="" method=post onsubmit="return valid_request()">


			<table cellpadding="10" cellspacing="5" align=left width=600>
			<tr>		
				<td><h4>Your ID</h4></td>
				<td><label>: <?php echo $_SESSION["stu_id"];?></label></td>
				<td></td>

			</tr>
			<tr>
				<td><h4>Subject</h4></td>
				<td colspan=2><label>: </label><input type=text name="subject" id=subject></td>
			</tr>
			<tr>		
				<td><h4>Request</h4></td>
				<td colspan=2><label>: </label><textarea style="width:100%;" rows=10 name="request" id="request"></textarea></td>

			</tr>

			<tr><td colspan=3 align=center>
				<input type="submit" id="reqsub" name="reqsub"  value="Send Your Request"></td>
			</tr>
			</table>
		</form>
		</fieldset>
		</center>

	</div>
	<div id="updates" onclick="show_response()">
	<?php
	$q=mysql_query("select * from stu_requests where cid='$name[0]' and sid='$sid'") or die(mysql_error());
	$status=mysql_fetch_array($q);
	if ($status['status']!='-' && mysql_num_rows($q)==1)
		echo "<blink><a style='font-weight:bold'>Updates:</a><label> You got a response from the admin</label></blink>";
	?>
	</div>
	<div id="inside" style="display:block;margin:5%;">
	<h2 align=center>Hi...  <span><?php echo $_SESSION["stu_name"];?></span></h2>
	<p><a>* </a><label>This is the homepage of the student.</label></p>
	<p><a>* </a><label>In the <a>PROFILE</a> link student's Profile is shown. Students can edit thier profile.</label></p>
	<p><a>* </a><label>Acadamic data of the student is shown in <a>ACADAMIC</a> link or Acadamic Information in the &nbsp;categories.</label></p>
	<p><a>* </a><label>If any kind of data is updated wrong, student can send a request about his problem to the admin by <a>REQUEST</a> link.</label></p>
	<p><a>* </a><label>For the results click on Results in the categories.</label></p>
	<p><a>* </a><label>Students can see the <a>college updates</a> also.</label></p>
	<p><a>* </a><label>Student can logout from the page by logout option.</label></p>
	</div>
	<div id="are">
	<div id="results" style="display:none"></div>
	<div id="results_view" style="display:none"></div></div>
		<center>
		<div id="acadamic" style="display:none"><h3><a><?php echo $_SESSION["stu_name"];?>'s&nbsp;&nbsp;Acadamic Data</a></h3>
		<table width="50%" id=ast>
			<?php
			$rr=mysql_query("select * from stu_acadamic where cid='$name[0]' and sid='$sid'");
			$s_aca=mysql_fetch_array($rr);
			?>
			<tr>
				<td><h4>College ID</h4></td><td><label><?php echo $s_aca['cid']; ?></label></td>
			</tr>
			<tr>
				<td><h4>Your ID</h4></td><td><label><?php echo $s_aca['sid']; ?></label></td>
			</tr>
			<tr>
				<td><h4>Name</h4></td><td><label><?php echo $s_aca['sname']; ?></label></td>
			</tr>
			<tr>
				<td><h4>University</h4></td><td><label><?php echo $s_aca['cuniversity']; ?></label></td>
			</tr>
			<tr>
				<td><h4>Batch</h4></td><td><label><?php echo $s_aca['sbatch']; ?></label></td>
			</tr>
			<tr>
				<td><h4>Branch</h4></td><td><label><?php echo $s_aca['sbranch']; ?></label></td>
			</tr>
			<tr>
				<td><h4>Year</h4></td><td><label><?php echo $s_aca['year']; ?></label></td>
			</tr>
			<tr>
				<td><h4>Current Semester</h4></td><td><label><?php echo $s_aca['curr_sem']; ?></label></td>
			</tr>
			<tr>
				<td><h4>Your Rank</h4></td><td><label><?php echo $s_aca['srank']; ?></label></td>
			</tr>
			<tr>
				<td><h4>EAA</h4></td><td><label><?php echo $s_aca['eaa']; ?></label></td>
			</tr>
		</table>
		<p><h4><s1 style="color:#ff7b01">Note* :</s1> If you got anything wrong send a request to your college administrator</h4></p>
		</div>
		</center>

	</center>
         
         <!-- footer -->
      </section>
      
   </div>
   	<footer >
	   <div class="container">
	      <div class="inside">
		 <div class="wrapper">
		    <div class="fleft">24/7 Customer Service <span>8.800.146.56.7</span></div>
		    <div class="aligncenter">Web Site designed by<a rel="nofollow" href="about_us.php" class="new_window"> Sapient team</a><br>
               <a href="http://www.templates.com/product/3d-models/" class="new_window">3D Models+</a> provided by Templates.com</div>
         </div>
	      </div>
	   </div>
	</footer><!-- end footer -->
</div>
<!-- wrap -->


<script type="text/javascript"> Cufon.now(); </script>
	<div  id="blackk" onclick="close_w()"></div>
	<div id="editp" style="">
		<div id="edit_top">Edit your Profile<input type=button  value=X id=edit_close onclick="close_w()"></div>
		<div style="position:absolute;top:0%;background:#0087C1;height:100%;width:2px;"></div>
		<div style="position:absolute;right:0%;top:0%;background:#0087C1;height:100%;width:2px;"></div>
		<div style="position:absolute;bottom:0%;left:0%;background:#0087C1;height:2px;width:100%;"></div>
		<div id="edit_body">
			<table id="edit_table">
			<form action="" method=post onsubmit="return valid_edit()" enctype="multipart/form-data">
				<tr><th  align="center" colspan=4 height="40px">Your ID: <?php echo $_SESSION["stu_id"]; ?></tr>
				<tr>
					<td><b>Name</b></td><td><input type=text name=ed_name id=ednm value="<?php echo $name['sname']?>" readonly="readonly"></td>
					<td><b>Father Name</b></td><td><input type=text name=ed_fname id=edfnm value="<?php echo $name['sfname']?>"></td>
				</tr>
				<tr>
					<td><b>Eamil Id</b></td><td><input type=text name=ed_email id=edemail value="<?php echo $name['semail']?>"></td>
					<td><b>Phone No</b></td><td><input type=text name=ed_phn id=edphn value="<?php echo $name['sph']?>"></td>
				</tr>
				<tr>
					<td><b>RollModel</b></td><td><input type=text name=ed_rm id=edrm value="<?php echo $stu_profile['rollmodel']?>"></td>
					<td><b>Date of Birth</b></td><td><input type=text name=ed_dob id=eddob value="<?php echo $stu_profile['sdob']?>"></td>
				</tr>
				<tr>
					<td><b>Adress</b></td><td><textarea name=ed_ad id=edad><?php echo $name['sadd']?></textarea></td>
					<td><b>Password</b></td><td><textarea name=ed_pass id=edgo><?php echo $name['spass']?></textarea></td>
				</tr>
				<tr>
					<td><b>Interests</b></td><td><textarea name=ed_int id=edint><?php echo $stu_profile['interests']?></textarea></td>
					<td><b>Achievements</b></td><td><textarea name=ed_ach id=edach><?php echo $stu_profile['achievements']?></textarea></td>
				</tr>
				<tr>
					<td  align=left>
					<b>Avatar</b></td>
    					<td colspan=2><input type="file" size="24" id="BrowserHidden" onchange="getElementById('FileField').value = getElementById('BrowserHidden').value;" name="file"/>

					   <input type="text" id=FileField style="background:url(images/upload.png) no-repeat right;width:270px;height:24px;cursor:default;"></td>
					<td><div id="ed_error"></div></td>
				</tr>
			</table>
		</div>
		<div id="edit_footer"><input type=submit value=Edit id=edit_but name="ed_sub">&nbsp;&nbsp;<input type=button value=Cancel id=edit_cancel onclick="close_w()"></div>
			</form>
	</div>

<div  id="blackk1" onclick="close_w1()" style="position:fixed;top:0%;left:0%;width:100%;height:100%;background:#000;opacity:0;display:none"></div>
<div id="sq_err1" style="position:fixed;left:25%;top:25%;display:none;width:50%;height:50%;background:#fff;">
		<div id="edit_top" style="height:8%;"><b>Requests</b><input type=button  value=X id=edit_close onclick="close_w1()" style="height:8%;"></div>
		<div style="position:absolute;top:0%;background:#0087C1;height:100%;width:2px;"></div>
		<div style="position:absolute;right:0%;top:0%;background:#0087C1;height:100%;width:2px;"></div>
		<div style="position:absolute;bottom:0%;left:0%;background:#0087C1;height:2px;width:100%;"></div>
		<center><div id="sq_content" style="width:70%;margin-top:1%"></div></center>
		<div id="edit_footer"><input type=button value=Close id=edit_cancel onclick="close_w1()"></div>
</div>
<form action='' method='post'>
<div  id="blackk2" onclick="close_w2()" style="position:fixed;top:0%;left:0%;width:100%;height:100%;background:#000;opacity:0;display:none"></div>
<div id="response_box" style="position:fixed;left:25%;top:20%;display:none;width:50%;height:50%;background:#fff;">
		<div id="edit_top" style="height:8%;"><b>Response</b></div>
		<div style="position:absolute;top:0%;background:#0087C1;height:100%;width:2px;"></div>
		<div style="position:absolute;right:0%;top:0%;background:#0087C1;height:100%;width:2px;"></div>
		<div style="position:absolute;bottom:0%;left:0%;background:#0087C1;height:2px;width:100%;"></div>
		<center><div id="resp_box_content" style="width:70%;margin-top:1%">
		<table cellpadding=5>
			<tr><td><h4><b>Your Id</b></h4></td><td><a><?php echo $status['sid'];?></a></td></tr>
			<tr><td><h4>Subject</h4></td><td><a><?php echo $status['sub'];?></a></td></tr>
			<tr><td><h4>Request</h4></td><td><label><?php echo $status['reqs'];?></label></td></tr>
			<tr><td><h4>Response</h4></td><td><label><?php echo $status['response'];?></label></td></tr>
			<tr><td><h4>Note:</h4></td><td><a>You should have to click on cacel otherwise you can't send another request</a></td></tr>
			
			</table>
		</div></center>
		<div id="edit_footer"><input type=submit value=Cancel id=edit_cancel name="cancel_response"></div>
</form>
</body>
</html>
<?php
if (isset($_REQUEST["ed_sub"]))
{
	$name4=$_POST["ed_fname"];
	$name6=$_POST["ed_email"];
	$name7=$_POST["ed_phn"];
	$name8=$_POST["ed_ad"];
	$stuprof3=$_POST["ed_rm"];
	$stuprof6=$_POST["ed_dob"];
	$stuprof7=$_POST["ed_pass"];
	$stuprof1=$_POST["ed_int"];
	$stuprof2=$_POST["ed_ach"];
	$ffname=$_FILES["file"]["name"];
	if (($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/png"))
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			$_FILES['file']['name']=$_SESSION["stu_id"];
			move_uploaded_file($_FILES["file"]["tmp_name"],"users/". $_FILES["file"]["name"]);

		}
	}

	mysql_query("update stu_prof set interests='$stuprof1',achievements='$stuprof2',rollmodel='$stuprof3',sdob='$stuprof6' where sid='$sid'") or die(mysql_error());
	mysql_query("update student set sfname='$name4',semail='$name6',sph='$name7',sadd='$name8',spass='$stuprof7' where sid='$sid' and cid='$cid'") or die(mysql_error());
	mysql_query("update stu_acadamic set eaa='$stuprof7' where cid='$cid' and sid='$sid'") or die(mysql_error());
}
if (isset($_REQUEST["reqsub"]))
{
	$sid=$_SESSION["stu_id"];
	$sub=$_POST["subject"];
	$req=$_POST["request"];
	$req1=str_replace(array("\r\n","\n"),"<br>",$req);
	$cid=$_SESSION["cid"];
	echo "<script type=text/javascript>show_blackk();</script>";
	echo "<script type=text/javascript>";
	if (mysql_query("insert into stu_requests values('$cid','$sid','$sub','$req','No','-');")==0)
	{
		echo "document.getElementById('sq_content').innerHTML='<table><tr><td><h4><b>Your Id</b></h4></td><td><a>$sid</a></td></tr><tr><td><h4>Subject</h4></td><td><a>$sub</a></td></tr><tr><td><h4>Request</h4></td><td><label>&nbsp;&nbsp;$req1</label></td></tr></table><div><h4>You are not suppose to send another request untill you got response for previous one</h4></div>'";
		echo "</script>";
	}
	else
	{
		echo "document.getElementById('sq_content').innerHTML='<table><tr><td><h4><b>Your Id</b></h4></td><td><a>$sid</a></td></tr><tr><td><h4>Subject</h4></td><td><a>$sub</a></td></tr><tr><td><h4>Request</h4></td><td><label>&nbsp;&nbsp;".$req."</label></td></tr></table><div><h4>Your Request has been sent to admin. You will get the response soon</h4></div>'";
		echo "</script>";
	}
}
if (isset($_REQUEST["cancel_response"]))
{
	mysql_query("delete from sms.stu_requests where stu_requests.cid='$name[0]' and stu_requests.sid='$sid'") or die(mysql_error());
}

?>
