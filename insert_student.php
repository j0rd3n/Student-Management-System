<?php
include("dbconfig.php");
$cid=$_GET["cid"];
$sid=$_GET["sid"];
$sname=$_GET["sname"];
$spass=$_GET["pass"];
$scpass=$_GET["cpass"];
$sfname=$_GET["sfname"];
$sgender=$_GET["sgender"];
$semail=$_GET["semail"];
$sph=$_GET["sphn"];
$sadd=$_GET["sadd"];
$batch=$_GET["sbatch"];
$year=$_GET["syear"];
$sem=$_GET["ssem"];
$branch=$_GET["sbranch"];
$q=mysql_query("select sname from student where cid='$cid' and sid='$sid'");
$nn=mysql_fetch_array($q);
if ($cid=="")
	echo "please Enter college Id";
else if ($sid=="")
	echo "please Enter Student Id";
else if($sid!=""&& $nn["sname"]!="")
	{
	echo "User alreday existed";
	}
else if (mysql_num_rows($q)==0)
	echo "Not a valid Student Id";
else if ($sname=="")
	echo "Enter Student Name";
else if ($spass=="")
	echo "please Enter Password";
else if ($scpass=="")
	echo "please Enter Confirm Password";
else if ($spass!=$scpass)
	echo "Password does not match";
else if ($sfname=="")
	echo "please Enter Your Father Name";
else if ($batch=="")
	echo "Please Enter Batch";
else if ($year=="")
	echo "Please Enter year";
else if ($branch=="")
	echo "Please Enter Branch";
else if ($sem=="")
	echo "Please Enter Your sem";
else if ($sgender=="Select")
	echo "please Select Gender";
else if($semail=="")
	echo "Please Enter email address";
else if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$semail))
	echo "Please Enter valid email";

else if ($sph=="")
	echo "please Enter Phone number";
else if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $sph))
	echo "Please Enter valid phone number";
else if ($sadd=="")
	echo "please Enter Address";


else
	{
	mysql_query("update student set sname='$sname',spass='$spass',sfname='$sfname',sgender='$sgender',semail='$semail',sph='$sph',sadd='$sadd',batch='$batch',year='$year',sem='$sem',branch='$branch' where  sid='$sid' and cid='$cid';")or die(mysql_error());
mysql_query("insert into stu_acadamic(cid,sid,sname,sbatch,sbranch,curr_sem,year) values('$cid','$sid','$sname','$batch','$branch','$sem','$year');")or die(mysql_error());
mysql_query("insert into stu_prof(sid) values('$sid');")or die(mysql_error());
	copy("profile.jpg",'users/'.$sid);
	echo "Successfully registered";
?>
<script type=text/javascript>
	document.getElementById("regcid").value="";
	document.getElementById("regstuid").value="";
	document.getElementById("regstuname").value="";
	document.getElementById("sregpassword").value="";
	document.getElementById("sregcpassword").value="";
	document.getElementById("regstufname").value="";
	document.getElementById("reggender").value="";
	document.getElementById("semail").value="";
	document.getElementById("sphno").value="";
	document.getElementById("sbtn").value="";
	document.getElementById("syr").value="";
	document.getElementById("sbrnc").value="";
	document.getElementById("ssm").value="";
	document.getElementById("saddress").value="";
</script>
<?php
	}


?>
