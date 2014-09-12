<html>
<script>
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
	var url="stu_search.php";
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
</script>

<table cellspacing="10" cellpadding="10">
	<tr>
		<td><h4>Enter Student Id</h4></td><td>:<input type="text" id="cname" name="collid" onkeyup="seastu(this.value)"><div id="results"></div></td>
	</tr>


</table>
<div id="give_data"></div>


