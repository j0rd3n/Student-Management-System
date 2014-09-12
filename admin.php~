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
<script type="text/javascript">
function insert_id()
{
	$.post("insert_id.php",function(data)
	{
		$("#content").html(data);
	});
}
function gif()
{
	$.post("general.php",function(data)
	{
		$("#content").html(data);
	});
}
function validresp()
{
	var resp=document.getElementById("response").value;
	if(resp==null||resp=="")
	{
		alert("please enter response");
		return false;
	}
	else
		return true;
}
function action(a)
{
	document.getElementById('studentid').value=a;
	document.getElementById('studentid').style.border="0px";
	document.getElementById('studentid').style.backgroundColor="transparent";
	document.getElementById('results').style.display='none';
	$.post("ald.php?sid="+a,function(data)
	{
		$("#detl").html(data);
	});
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
function req(a,b)
{
	$.post("request.php",function(data)
	{
		$("#content").html(data);
	});
}
function cb()
{
	$.post("c.php",function(data)
	{
		$("#content").html(data);
	});
}
function enre()
{
	$.post("enre.php",function(data)
	{
		$("#content").html(data);
	});
	document.getElementById("yrl").style.display="block";
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
         <h1><a href="index.php">Student's site</a></h1>
         <nav>
            <ul id="tabs">
               <li id="homec" title="home" class="current"><a id="home" title="home" href="admin.php" onclick="cls(this.id)" class="m1">College</a></li>
               <li id="collegec" title="college" class="not"><a id="college" title="college" href="#" class="m2" onclick="cls(this.id),cb()">Create Batch</a></li>
               <li id="studentc" title="student" class="not"><a id="student" title="student" href="#" class="m3" onclick="cls(this.id),req()">Requests</a></li>
               <li id="adminsc" title="admins" class="not"><a  id="admins" title="admins" href="#" class="m4" onclick="cls(this.id),enre()">Enter Results</a></li>
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
   <div class="container" id="tcontent">
      <!-- aside -->   
      <aside>
	
         <h3>Categories</h3>
         <ul class="categories">
            <li><span><a href="#" onclick="mdf()">Basic Information</a></span></li>
            <li><span><a href="#" onclick="gif()">Post An Update</a></span></li>
            <li><span><a href="#" onclick="clgst()">Student Info</a></span></li>            
            <li><span><a href="#" onclick="insert_id()">Insert Id</a></span></li>
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
         <h2>Fresh <span>News</span></h2>
         <?php
	$col=mysql_query("select * from college_updates order by sno desc;")or die(mysql_error());
	for ($i=0;$i<2;$i++)
	{
		$r=mysql_fetch_array($col);?>
	         <ul class="news">
        	    <li><strong><?php echo $r['date']; ?></strong>
        	       <h4><a href="#"><?php echo $r['subject'];?></a></h4>
        	       <?php echo $r['info']; ?></li>
		    
        	 </ul><br>      
	<?php
	}
	?>
      </aside>
      <!-- content -->
	
      <section id="content">
	</center>
         <div id="banner2">
            <h2>Student Management<ss>System <span>Since 2013</span></ss></h2>
         </div>
         <div id="desc1" class="inside">
		<div id="clgdet">
		<table  cellpadding="5" cellspacing="5">
			<tr>
			<td> <label>ID</label></td><td>:</td><td><?php echo $clgid;?> </td>
			</tr>
			<tr>
			<td><label>Name</label></td><td>:</td><td><?php echo $cname;?></td>
			</tr>
			<tr>
			<td><label>Email</label></td><td>:</td><td><?php echo $cemail;?></td>
			</tr>
			<tr>
			<td><label>Ph no</label></td><td>:</td><td><?php echo $cph;?></td>
			</tr>
			<tr>
			<td><label>Website</label></td><td>:</td><td><?php echo $cwst;?></td>
			</tr>
			<tr>
			<td><label>Address</label></td><td>:</td><td><?php echo $cadd;?></td>
			</tr>
			</table>

		</div>	
         </div>
         
      </section>
   </div>
</div>
<!-- footer -->
<footer>
   <div class="container">
      <div class="inside">
         <div class="wrapper">
            <div class="fleft">24/7 Customer Service <span>R.G.U.K.T</span></div>
            <div class="aligncenter">Web Site designed by<a rel="nofollow" href="about_us.php" class="new_window"> Sapient team</a><br>
               <a href="http://www.templates.com/product/3d-models/" class="new_window">3D Models+</a> provided by Templates.com</div>
         </div>
      </div>
   </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
<?php
	if(isset($_REQUEST["msub"]))
	{
		$mm=$_POST["mmail"];
		$mp=$_POST["mphn"];
		$mw=$_POST["mwst"];
		$ma=$_POST["mad"];
		$u=mysql_query("update college set cemail='$mm',cph='$mp',cwebsite='$mw',cadd='$ma' where cid='$clgid';")or die(mysql_error());
	}
	if(isset($_REQUEST["entrresub"]))
	{	
		$rsid=$_POST["restdid"];
		$btn=$_POST["batchn"];
		$yrv=$_POST["yearv"];
		$semv=$_POST["semv"];
	}
	if(isset($_REQUEST["enresb"]))
		{
			$siid=$_POST["restdid"];
			$adet=mysql_query("select * from student where cid='$clgid' and sid='$siid';")or die(mysql_error());
			$yn=mysql_num_rows($adet);
			$f=mysql_fetch_array($adet);
			$bn=$f['batch'];
			$yr=$f['year'];
			$brnch=$f['branch'];
			$sem=$f['sem'];
			$etp=$_POST["extp"];
			$table_name=$clgid.$bn.$yr.$sem.$brnch;
			echo $table_name;
			$nfem="";
			if($etp!="End Sem")
				$nfem=$_POST["nfem"];
			$nfsubs=$_POST["nfsubs"];
			$sub="subject";
			$subn="subj";
			$type=$etp.$nfem;
			$total=0;
			mysql_query("insert into $table_name(cid,sid,type,dtype) values('$clgid','$siid','$type','$etp');")or die(mysql_error());
			for($i=0;$i<$nfsubs;$i++)
			{
				$sma=$sub.$i;
				$sm=$_POST["$sma"];
				$total=$total+(int)$sm;
				$smna=$subn.$i;				
				$smn=$_POST["$smna"];
				mysql_query("update $table_name set $smn='$sm' where type='$type' and cid='$clgid' and sid='$siid';")or die(mysql_error());
			}
			mysql_query("update $table_name set total='$total' where type='$type' and cid='$clgid' and sid='$siid';")or die(mysql_error());
				
		}
	if(isset($_REQUEST["accept"]))
	{
		$sid=$_POST["sid"];
		$res=$_POST["ad_response"];
		if($res!=""||$res!=null)
			$m=mysql_query("update stu_requests set status='accept',response='$res' where sid='$sid' and cid='$clgid';")or die(mysql_error());
		else
			echo "	<script type='text/javascript'>alert('Not Updated please enter response');</script>";
	}
	if(isset($_REQUEST["decline"]))
	{
		$sid=$_POST["sid"];
		if($res!=""||$res!=null)
			$m=mysql_query("update stu_requests set status='decline',response='$res' where sid='$sid' and cid='$clgid';")or die(mysql_error());
		else
			echo "	<script type='text/javascript'>alert('Not Updated please enter response');</script>";
	}	
	if(isset($_REQUEST["cginfsb"]))
	{
		$sub=$_POST["usub"];
		$inf=$_POST["uinfo"];
		$current_date = gmDate("d-m-Y"); 
		mysql_query("insert into college_updates(cid,subject,info,date) values('$clgid','$sub','$inf','$current_date');")or die(mysql_error());
	}
	if(isset($_REQUEST["inidsb"]))
	{
		$mids=$_POST["mids"];
		$idsarray=explode(",",$mids);
		$uar=array_unique($idsarray);
		$nfids=count($uar);
		echo $nfids;
		for($i=0;$i<$nfids;$i++)
		{
			$stid=$uar[$i];
			echo $stid;
			mysql_query("insert into student(cid,sid) values('$clgid','$stid');")or die(mysql_error());
		}
	}
		
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
