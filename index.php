<?php
include("dbconfig.php");
if(isset($_REQUEST["logsub"]))
{
	$clgid=$_POST["colgid"];
	$pass=$_POST["lpass"];
	$l=mysql_query("select * from college where cid='$clgid';")or die(mysql_error());
	echo mysql_num_rows($l);
	$v=mysql_fetch_array($l);
	echo $v[2]."dskfjh";
	if($pass==$v["cpass"])
	{
		session_start();
		$_SESSION["clgid"]=$clgid;
		$_SESSION["SmS"]="sms";
		echo <<<s

		<script type="text/javascript">window.location.href="admin.php";</script>

s;
	}
	else
	{
		echo <<<sc
		<script type="text/javascript">alert("invalid credentals");</script>
sc;

	}
}
if(isset($_REQUEST["strgsub"]))
{
$sid=$_POST["stuid"];
$sname=$_POST["stuname"];
$spass=$_POST["spass"];
$semail=$_POST["stuemail"];
$sph=$_POST["stuph"];
$sadd=$_POST["stuadd"];
$sgen=$_POST["stugen"];
$sfname=$_POST["stufname"];
$sbatn=$_POST["sbatn"];
$syr=$_POST["syear"];
$ssem=$_POST["ssem"];
$sbranch=$_POST["sbranch"];
$clid=mysql_query("select cid from student where sid='$sid';") or die(mysql_error());
$ccid=mysql_fetch_array($clid);
$cid=$ccid['cid'];
$sd=mysql_query("update student set sname='$sname',spass='$spass',sfname='$sfname',sgender='$sgen',semail='$semail',sph='$sph',sadd='$sadd',batch='$sbatn',year='$syr',sem='$ssem',branch='$sbranch' where  sid='$sid' and cid='$cid';")or die(mysql_error());
mysql_query("insert into stu_acadamic(cid,sid,sname,sbatch,sbranch,curr_sem,year) values('$cid','$sid','$sname','$sbatn','$sbranch','$ssem','$syr');")or die(mysql_error());
mysql_query("insert into stu_prof(sid) values('$sid');")or die(mysql_error());
copy("profile.jpg","users/$sid");
}
if(isset($_REQUEST["regsub"]))
{
	$clgrid=$_POST["clgid"];
	$clgname=$_POST["clgname"];
	$cpass=$_POST["cpass"];
	$cemail=$_POST["cemail"];
	$cph=$_POST["cph"];
	$cadd=$_POST["cadd"];
	$cwst=$_POST["website"];
	echo $cwst;
	$q=mysql_query("insert into college(cid,cname,cpass,cemail,cph,cadd,cwebsite) values('$clgrid','$clgname','$cpass','$cemail','$cph','$cadd','$cwst');")or die(mysql_error());
	echo "successfully registered";
}
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
<script type="text/javascript" src="js/college.js"></script>
<script type="text/javascript">
function loginstudent()
{
	var stid=document.getElementById("studentid").value;
	var stpa=document.getElementById("stpassword").value;
	$.post("studentlogin.php?id="+stid+"&pass="+stpa,function(data)
	{
		$("#stulogin").html(data);
	});
}
function adm_login()
{
	var cid=document.getElementById("collegeid").value;
	var cpa=document.getElementById("lpassword").value;

	$.post("admin_login_check.php?cid="+cid+"&pass="+cpa,function(data)
	{
		$("#warning").html(data);
	});
}
function show_categ()
{
	document.getElementById("search_input").value="";
	document.getElementById("categ").style.display="block";

	$.post("show_commp.php",function(data)
		{
			$("#content").html(data);
		});
}
function action(a)
{
	document.getElementById("cname").value=a;
	document.getElementById("results").style.display="none";
	$.post("give_data.php?cid="+a,function(data)
		{
			$("#give_data").html(data);
		});
}
function action1(a)
{
	document.getElementById("cname").value=a;
	document.getElementById("results").style.display="none";
	$.post("give_stu_data.php?sid="+a,function(data)
		{
			$("#give_data").html(data);
		});
}
function search_box(a)
{
	document.getElementById("search_input").value=a;
	document.getElementById("stu_ids").style.display="none";
	$.post("give_stu_data.php?sid="+a,function(data)
		{
			$("#content").html(data);
		});
}
function register()
{
	document.getElementById("search_input").value="";
	document.getElementById("categ").style.display="none";
	$.post("college_registration.php",function(data)
		{
			$("#content").html(data);
		});
}
function stu_login()
{
	document.getElementById("search_input").value="";
	document.getElementById("categ").style.display="none";
	$.post("stu_login_show.php",function(data)
		{
			$("#content").html(data);
		});
}
function admin_login()
{
	document.getElementById("search_input").value="";
	document.getElementById("categ").style.display="none";
	$.post("admin_login.php",function(data)
	{
		$("#content").html(data);
	});
}
function stu_register()
{

	$.post("student_registration.php",function(data)
		{
			$("#content").html(data);
		});
}
function registervalid1()
{
	var rclgid=document.getElementById("regcollegeid").value;
	var clgname=document.getElementById("regcollegename").value;
	var cpass=document.getElementById("cregpassword").value;
	var ccpass=document.getElementById("cregcpassword").value;
	var cemail=document.getElementById("cemail").value;
	var cwbst=document.getElementById("wsit").value;
	var cph=document.getElementById("cphno").value;
	var cadd=document.getElementById("address").value;
	$.post("insert_college.php?cid="+rclgid+"&cname="+clgname+"&cpass="+cpass+"&ccpass="+ccpass+"&cemail="+cemail+"&cwbst="+cwbst+"&cph="+cph+"&cadd="+cadd,function(data)
		{
			$("#cwarning").html(data);
		});
}
function registervalid11()
{
	var cgid=document.getElementById("regcid").value;
	var stid=document.getElementById("regstuid").value;
	var stname=document.getElementById("regstuname").value;
	var pass=document.getElementById("sregpassword").value;
	var cpass=document.getElementById("sregcpassword").value;
	var stufname=document.getElementById("regstufname").value;
	var gender=document.getElementById("reggender").value;
	var email=document.getElementById("semail").value;
	var phn=document.getElementById("sphno").value;
	var sbatch=document.getElementById("sbtn").value;
	var syear=document.getElementById("syr").value;
	var sbranch=document.getElementById("sbrnc").value;
	var ssem=document.getElementById("ssm").value;
	var sadd=document.getElementById("saddress").value;
	$.post("insert_student.php?cid="+cgid+"&sid="+stid+"&sname="+stname+"&pass="+pass+"&cpass="+cpass+"&sfname="+stufname+"&sgender="+gender+"&semail="+email+"&sphn="+phn+"&sbatch="+sbatch+"&syear="+syear+"&sbranch="+sbranch+"&ssem="+ssem+"&sadd="+sadd,function(data)
		{
			$("#cwarning").html(data);
		});
}

var xmlHttp;
function seastu1(str)
{
	if(str.length==0)
	{ 
		document.getElementById("stu_ids").innerHTML="";
		document.getElementById("stu_ids").style.border="0px";
		return;
	}
	document.getElementById("stu_ids").style.display="block";
	xmlHttp=GetXmlHttpObject()
	if(xmlHttp==null)
	{
		alert("Browser does not support HTTP Request");
		return;
	} 
	var url="stu_search1.php";
	url=url+"?q="+str;
	xmlHttp.onreadystatechange=stateChanged1 ;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}
function stateChanged1() 
{ 
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{
		document.getElementById("stu_ids").
		innerHTML=xmlHttp.responseText;
		document.getElementById("stu_ids").
		style.border="1px solid #A5ACB2";
	} 
}
</script>
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
               <li id="homec" title="home" class="current"><a id="home" title="home" href="index.php" onclick="cls(this.id)" class="m1">Home Page</a></li>
               <li id="collegec" title="college" class="not"><a id="college" title="college" href="#" class="m2" onclick="register(),cls(this.id)">Colleges</a></li>
               <li id="studentc" title="student" class="not"><a id="student" title="student" href="#" class="m3" onclick="cls(this.id),stu_login()">Students</a></li>
               <li id="companyc" title="company" class="not"><a id="company"title="company" href="#" class="m4" onclick="cls(this.id),show_categ()">Companies</a></li>
               <li id="adminsc" title="admins" class="last"><a  id="admins" title="admins" href="#" class="m5" onclick="cls(this.id),admin_login()">Admins</a></li>
            </ul>
         </nav>
         <form action="" id="search-form">
            <fieldset>
            <div class="rowElem">
               <input type="text" id="search_input" onkeyup="seastu1(this.value)">
               <a href="#" >Search</a><div id="stu_ids"></div></div>
		
            </fieldset>
         </form>
      </div>
   </header>
   <div class="container">
      <!-- aside -->
      <aside>
	<div id="categ" style="display:none">
         <h3>Categories</h3>
         <ul class="categories">
            <li><span><a href="#" onclick="show_stu_info()">Student Info</a></span></li>
            <li><span><a href="#" onclick="show_coll_info()">College Info</a></span></li>
         </ul>
	</div>
         <h2>Fresh <span>News</span></h2>
         <?php
	$col=mysql_query("select * from college_updates order by sno desc;")or die(mysql_error());
		for ($i=0;$i<5;$i++)
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
         <div id="banner">
            <h2>Student Management<ss>System <span>Since 2013</span></ss></h2>
         </div>
         <div id="desc" class="inside">
         	<p>A person always learns at every age...But a person who gains the knowledge and behaves as a professional human being at the age of a college and university is nothing but a student.It's a time for an alternative to traditional college prospect and student data systems.We recognized a major need for an easy and flexible student administrative system so that colleges and universities can more effectively manage and act on student data in order to drive enhanced learning experiences and better educational outcomes.</p><p>It is a interface between Administration and the student provided that results,performance of colleges and student.<br>It is used for Education establishments to manage student data efficiently.Handling records of examination,assessments,marks,grades and Academic progression.maintaining records of absence and presense.Communicating student details to parents through a parent portal.Job Recruitment place a major role in the process of  placements.</p>
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
