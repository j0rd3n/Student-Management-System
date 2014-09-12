<?php
include("dbconfig.php");
$cid=$_GET["cid"];
$cname=$_GET["cname"];
$cpass=$_GET["cpass"];
$ccpass=$_GET["ccpass"];
$cemail=$_GET["cemail"];
$cwbst=$_GET["cwbst"];
$cph=$_GET["cph"];
$cadd=$_GET["cadd"];
$q=mysql_query("select cid from college where cid='$cid'");
if ($cid=="")
	echo "please Enter college Id";
else if($cid!=""&&mysql_num_rows($q)>0)
	{
	echo "User alreday existed";
	}
else if ($cname=="")
	echo "please Enter college name";
else if ($cpass=="")
	echo "please Enter Password";
else if ($cpass=="")
	echo "please Enter Confirm Password";
else if ($cpass!=$ccpass)
	echo "Password does not match";
else if ($cemail=="")
	echo "please Enter email address";
else if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$cemail))
	echo "Please Enter valid email";
else if ($cwbst=="")
	echo "please Enter webiste";
else if (!preg_match("/^www.\w+([\.-]?\w+)*.(\.\w{2,3})+$/",$cwbst))
	echo "Please enter valid website";
else if ($cph=="")
	echo "please Enter Phone number";
else if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $cph))
	echo "Please Enter valid phone number";
else if ($cadd=="")
	echo "please Enter Address";
else
	{
		$q=mysql_query("insert into college(cid,cname,cpass,cemail,cph,cadd,cwebsite) values('$cid','$cname','$cpass','$cemail','$cph','$cadd','$cwbst');")or die(mysql_error());
	echo "Successfully registered";
?>
<script type=text/javascript>
	document.getElementById("regcollegeid").value="";
	document.getElementById("regcollegename").value="";
	document.getElementById("cregpassword").value="";
	document.getElementById("cregcpassword").value="";
	document.getElementById("cemail").value="";
	document.getElementById("wsit").value="";
	document.getElementById("cphno").value="";
	document.getElementById("address").value="";
</script>
<?php
	}

?>
