<?php
session_start();
if($_SESSION["SmS"]=="sms")
{
$clgid=$_SESSION["clgid"];
include("dbconfig.php");
<<<sw
	<script type="text/javascript">
		alert($clgid);
	</script>
sw;
$c=mysql_query("select * from college where cid='$clgid';");
$cd=mysql_fetch_array($c);
$cname=$cd["cname"];
$cemail=$cd["cemail"];
$cph=$cd["cph"];
$cwst=$cd["cwebsite"];
$cadd=$cd["cadd"];
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
               <li id="homec" title="home" class="current"><a id="home" title="home" href="admin.php" onclick="cls(this.id)" class="m1">College</a></li>
               <li id="collegec" title="college" class="not"><a id="college" title="college" href="#" class="m2" onclick="cls(this.id)">Create Batch</a></li>
               <li id="studentc" title="student" class="not"><a id="student" title="student" href="#" class="m3" onclick="cls(this.id),slgn()">Requests</a></li>
               <li id="adminsc" title="admins" class="not"><a  id="admins" title="admins" href="#" class="m4" onclick="cls(this.id),mdf()">Admins</a></li>
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
            <li><span><a href="#">Programs</a></span></li>
            <li><span><a href="#" onclick="clgst()">Student Info</a></span></li>
            <li><span><a href="#">Teachers</a></span></li>
            <li><span><a href="#">Descriptions</a></span></li>
            <li><span><a href="#">Administrators</a></span></li>
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
         <h2>Fresh <span>News</span></h2>
         <ul class="news">
            <li><strong>June 30, 2010</strong>
               <h4><a href="#">Sed ut perspiciatis unde</a></h4>
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. </li>
            
         </ul>
      </aside>
      <!-- content -->
	
      <section id="content">
		<div id="cb">
        	<form action="#" methode="post">
            	<table cellspacing="5" cellpadding="5">
                	<tr>
                    <td>Batch No:</td><td><input type="text" ></td>
                    </tr>
                </table>
            </form>
        </div>
      </section>
   </div>
</div>
<!-- footer -->
<footer>
   <div class="container">
      <div class="inside">
         <div class="wrapper">
            <div class="fleft">24/7 Customer Service <span>8.800.146.56.7</span></div>
            <div class="aligncenter"><a rel="nofollow" href="http://www.templatemonster.com" class="new_window">Website template</a> designed by TemplateMonster.com<br>
               <a href="http://www.templates.com/product/3d-models/" class="new_window">3D Models</a> provided by Templates.com</div>
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
