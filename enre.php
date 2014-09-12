<?php
session_start();
if($_SESSION["SmS"]=="sms")
{
$clgid=$_SESSION["clgid"];
include("dbconfig.php");
$c=mysql_query("select * from college where cid='$clgid';")or die(mysql_error());
$cd=mysql_fetch_array($c);
$cname=$cd["cname"];
$cemail=$cd["cemail"];
$cph=$cd["cph"];
$cwst=$cd["cwebsite"];
$cadd=$cd["cadd"];
$bt=mysql_query("select distinct(btno) from btdet where cid='$clgid';")or die(mysql_error());
$nbt=mysql_num_rows($bt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Management System</title>
<meta charset="utf-8">
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
<style>
select{
width:70%;background:#fff;border:1px solid green;color:#454545;line-height:1.2em;height:30px;font-family:Helvetica;font-weight:bold;padding:3px 3px 3px 5px;-moz-border-radius:3px;-webkit-border-radius:3px;
}
</style>
<script type="text/javascript">
function validre()
{
	var stid=document.getElementById("studentid").value;
	if(stid==null||stid=="")
	{
		alert("please select id number");return false;
	}
	var extp=document.getElementById("examtype").value;
	var nfem=document.getElementById("nofem").value;
	var nofsub=document.getElementById("nofsub").value;
	var su="subs";var count1=0;
	if(extp=="select")
	{
		alert("please select exam type");return false;
	}
	if(extp!="End Sem")
	{
		if(nfem==null||nfem=="")
			{
				alert("please enter number of exam");return false;
			}
	}
	for(var i=0;i<nofsub;i++)
	{
		var sub=document.getElementById(su+i).value;
		if(sub==null||sub=="")
		{
			alert("please enter the sub marks");return false;
			}
		else
			count1++;
	}
	if(count1==nofsub)
	{
		return true;
		}
	else
		return true;
	
}
function sdbtno(a)
{
	$.post("gy.php?bn="+a,function(data)
	{
		$("#yr").html(data);
	});
	document.getElementById("yrl").style.display="block";
}
var xmlHttp;
function seastu(str)
{
	if(str.length==0)
	{ 
		document.getElementById("results").innerHTML="";
		document.getElementById("results").style.border="0px";
		return;
	}
	document.getElementById("results").style.display="block";
	xmlHttp=GetXmlHttpObject()
	if(xmlHttp==null)
	{
		alert("Browser does not support HTTP Request");
		return;
	} 
	var url="sresults.php";
	url=url+"?q="+str;
	xmlHttp.onreadystatechange=stateChanged ;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}
function stateChanged() 
{ 
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{
		document.getElementById("results").
		innerHTML=xmlHttp.responseText;
		document.getElementById("results").
		style.border="1px solid #A5ACB2";
	} 
}
function GetXmlHttpObject()
{
	var xmlHttp=null;
	try
	{
		// Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
	}
	catch(e)
	{
		// Internet Explorer
		try
		{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e)
		{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}
</script>
	<div id="er">
		<form action=''enre.php" method="post" onsubmit="return validre()">
			<table cellspacing="10" cellpadding="10">
				<tr>
				<td><h4>Student Id</h4></td><td>:<input type="text" id="studentid" name="restdid" onkeyup="seastu(this.value)"><div id="results"></div></td>
				</tr>
			</table>
			<div id="detl">
			</div>
			<input type="submit" value="submit"  id="loginsb" name="enresb">	
		</form>
	</div>
<?php
}
else
{
	echo <<<gt
	<script type="text/javascript">
	window.location.href="index.php";
	</script>
gt;
}
?>
