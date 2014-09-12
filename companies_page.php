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
<link rel="stylesheet" href="css/student.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/college.js"></script>
<script type="text/javascript">
function show_coll_info()
{
	$.post("companies.php",function(data)
		{
			$("#content").html(data);
		});

}
function show_stu_info()
{
	$.post("students_info.php",function(data)
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
        <center><h2>Comapnies Page</h2></center>
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
            <li><span><a href="#" onclick="show_stu_info()">Student Info</a></span></li>
            <li><span><a href="#" onclick="show_coll_info()">College Info</a></span></li>
         </ul>
	


      </aside>
      <!-- content -->
	
      <section id="content">
	
	</center>
         <div id="banner">
            <h2>Student Management<ss>System <span>Since 2013</span></ss></h2>

         <div id="desc" class="inside">
           Welcome to the student management system it is platform to view your profiles and performances
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
            <div class="aligncenter">Web Site designed by<a rel="nofollow" href="about_us.php" class="new_window"> Sapient team</a><br>
               <a href="http://www.templates.com/product/3d-models/" class="new_window">3D Models</a> provided by Templates.com</div>
         </div>
      </div>
   </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
<?php
if (isset($_REQUEST["go"]))
{
	$cid=$_POST["collid"];
?>
	<script type="text/javascript">
		document.getElementById("banner").style.display="none";

	</script>
<?php
	echo $cid;
}
?>
