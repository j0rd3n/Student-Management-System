<?php
session_start();
$clgid=$_SESSION["clgid"];
include("dbconfig.php");
$c=mysql_query("select * from college where cid='$clgid';");
$cd=mysql_fetch_array($c);
$cname=$cd["cname"];
$cemail=$cd["cemail"];
$cph=$cd["cph"];
$cwst=$cd["cwebsite"];
$cadd=$cd["cadd"];
if(isset($_REQUEST["bcsb"]))
{
	$batch=$_POST["btch"];
   	$year=$_POST["yar"];
	$sem=$_POST["semm"];
	$nsub=$_POST["nosub"];
	$brnch=$_POST["brnc"];
	$table_name=$clgid.$batch.$year.$sem.$brnch;
	mysql_query("create table $table_name(cid varchar(100),sid varchar(100),type varchar(20) ,dtype varchar(20));") or die(mysql_error());
	$tsub="";
	for($i=1;$i<=$nsub;$i++)
	{
	$sb=$_POST["sub".$i];
	if($i==$nsub)
	    	$tsub=$tsub.$sb;
	else
	    	$tsub=$tsub.$sb.",";
	mysql_query("alter table $table_name add $sb varchar(100)")or die(mysql_error());	
	}
	mysql_query("alter table $table_name add total varchar(100)")or die(mysql_error());	

	mysql_query("insert into btdet(cid,btno,year,sem,branch,sub,table_name) values('$clgid','$batch','$year','$sem','$brnch','$tsub','$table_name');") or die(mysql_error());
	header("location:admin.php#");
}
?>

<script type="text/javascript">
function validcb(){
	var batch=document.getElementById("batch").value;
	var year=document.getElementById("year").value;
	var sem=document.getElementById("sem").value;
	var branch=document.getElementById("branch").value;
	var nfsubs=document.getElementById("nsub").value;
	l1=[batch,year,sem,branch,nfsubs];
	l2=["please enter batch no","please enter year","please enter semister","please eter branch","please enter number of subjects"];
	var count=0
	for(var i=0;i<5;i++)
	{
		if(l1[i]==null||l1[i]=="")
		{
			document.getElementById("warningb").style.display="block";
			document.getElementById("warningb").style.visibility="visible";
			document.getElementById("warningb").style.opacity=1;
			document.getElementById("warningb").style.top="30%";
			document.getElementById("warningb").innerHTML=l2[i];
			setTimeout("document.getElementById('warningb').style.display='none';",2000);
			return false;
			}
		else{
			count++;
			}
	}
	if(batch!="")
	{
		var x=batch;
		if(isNaN(x)||x.indexOf(" ")!=-1)
		   {
			document.getElementById("warningb").style.display="block";
			document.getElementById("warningb").style.visibility="visible";
			document.getElementById("warningb").style.opacity=1;
			document.getElementById("warningb").style.top="30%";
			document.getElementById("warningb").innerHTML="Batch numbber should contain numbers only";
			setTimeout("document.getElementById('warningb').style.display='none';",2000);
		   	return false;  
		   }
		else
			count++;
	}
	if(nfsubs!="")
	{
		var x=nfsubs;
		if(isNaN(x)||x.indexOf(" ")!=-1)
		   {
			document.getElementById("warningb").style.display="block";
			document.getElementById("warningb").style.visibility="visible";
			document.getElementById("warningb").style.opacity=1;
			document.getElementById("warningb").style.top="30%";
			document.getElementById("warningb").innerHTML="subject number should contain numbers only";
			setTimeout("document.getElementById('warningb').style.display='none';",2000);
		   	return false;  
		   }
		else
			count++;
	}
	if(count==7)
		return true;
	else
		return false;
}
function cns(){
		var n=document.getElementById("nsub").value;
		var ht="";
		for(var i=0;i<n;i++)
		{
			ht=ht+"<tr><td>Name of Subject"+(i+1)+":</td><td><input type='text' name='sub"+(i+1)+"' id='rsub"+(i+1)+"'></td></tr>";
			}
		document.getElementById("subs").innerHTML=ht;
	}
</script>
      <!-- aside -->
<div id="cb">
<form action="c.php" method="post">
	<div id="warningb" class="warning" style="display:none;"><center></center></div>
	<table cellspacing="5" cellpadding="5">
		<tr>
	    <td>Batch No:</td><td><input type="text" id="batch" name="btch"></td>
	    </tr>
	    <tr>
	    <td>Year:</td><td><input type="text" id="year" name="yar"></td>
	    </tr>
	    <tr>
	    <td>Semister:</td><td><input type="text" id="sem" name="semm"></td>
	    </tr>
	    <tr>
	    <td>Branch:</td><td><input type="text" name="brnc" id="branch"></td>
	    </tr>
	    <tr>
	    <td>No of subjects:</td><td><input type="text" id="nsub" name="nosub" onKeyup="cns()"></td>
	    </tr>
	    <tr>
	    	<td colspan="2">
		<table  id="subs" cellspacing="5" cellpadding="5" >
		</table>
		</td>
	    </tr>
	    <tr>
	    <td></td><td><input type="submit" id="rsb" name="bcsb" value="submit" onclick="return validcb()"></td>
	    </tr>
	</table>
	
</form>
</div>
