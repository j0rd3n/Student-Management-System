function clgst()
{
	$.post("clgst.php",function(data)
	{
		$("#tcontent").html(data);
	});
}
function sreg()
{
	document.getElementById("regff").style.display="block";
	document.getElementById("banner2").style.display="none";
	document.getElementById("desc1").style.display="none";
	document.getElementById("mdff").style.display="none";
}
var c=1;
function mdf()
{
	$.post("edit.php",function(data)
		{
			$("#content").html(data);
		});	
}

function edit()
{
	var i;
	var l1=["memail","mph","mws","madd"];
	if(c==1)
	{
		for(i=0;i<4;i++)
		{
			document.getElementById(l1[i]).className="minp";
			document.getElementById(l1[i]).readOnly=false;
		}
		document.getElementById("mdsub").style.display="block";
		c=0;
	}
	else if(c==0)
	{
		for(i=0;i<4;i++)
		{
			document.getElementById(l1[i]).className="inp";
			document.getElementById(l1[i]).readOnly=true;
		}
		document.getElementById("mdsub").style.display="none";
		c=1;
	}		
	
}
function changevalue(a)
{
	alert(a.innerHTML);
	var b=prompt("Enter the value::");
	a.innerHTML=b;
}
var exist="";
var xmlHttp;
function checkusnm(str)
{
	document.getElementById("warning").style.visibility='visible';
	if(str.length==0)
	{ 
		document.getElementById("warning").innerHTML="";
		document.getElementById("warning").style.border="0px";
		document.getElementById("warning").style.visibility='hidden';
		return;
	}
	xmlHttp=GetXmlHttpObject()
	if(xmlHttp==null)
	{
		alert("Browser does not support HTTP Request");
		return;
	} 
	var url="susercheck.php";
	url=url+"?q="+str;
	xmlHttp.onreadystatechange=stateChanged ;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}
function stateChanged() 
{ 
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{
		document.getElementById("warning").
		innerHTML=xmlHttp.responseText;
		if(xmlHttp.responseText.length==0)
		{ 
		document.getElementById("warning").innerHTML="";
		document.getElementById("warning").style.border="0px";
		document.getElementById("warning").style.display="block";
		document.getElementById("warning").style.visibility='hidden';
		exist="not";
		return;
		}
		if(xmlHttp.responseText.length!=0)
		{
			document.getElementById("warning").style.display="block";
			sh("warning");
			exist="exist";
		}
		
	}
} 
var x=10;
function vv(a)
{
	if(a=="hide")
		x=10;
	else
		x=0;
}
var i1;
function nn(i)
{
	i1=i;
	if(x>0)
            {
                    var l=[0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1];
                    document.getElementById(i1).style.opacity=l[x];x--;
                    setTimeout("nn('"+i1+"')",500);
            }
            else
                    {
                    document.getElementById(i1).style.visibility="hidden";
                    x=10;
                    }
}
function sh(i)
{
	i1=i
	if(x<10)
	    {
	            var l=[0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1];
	            document.getElementById(i1).style.opacity=l[x];x++;
	            setTimeout("sh('"+i1+"')",100);
	    }
	    else
	            {
	            x=10;
	            setTimeout("nn('"+i1+"')",1000);			
	            }
}
function cls(a)
{
	var l=["home","college","student","admins","logout"];
	var i=0;var s;
	for(i=0;i<5;i++)
	{
		s=l[i]+"c";
		if(l[i]==a)
		{
			if(l[i]=="logout" )
			{
				document.getElementById(l[i]).style.color="#008cc4";
				document.getElementById(s).className="last current";
			}
			else
			{
				document.getElementById(l[i]).style.color="#008cc4";
				document.getElementById(s).className="current";
			}
		}
		else
		{	
			if(l[i]=="logout" )
			{
				document.getElementById(l[i]).style.color="#454545";		
				document.getElementById(s).className="last";
			}
			else
			{
				document.getElementById(l[i]).style.color="#454545";		
				document.getElementById(s).className="not";
			}
		}
		
	}
}

function validemail()
{
	var ev=document.getElementById("email").value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(ev.match(mailformat))
	{
	return true;
	}
	else
	{
	document.getElementById("email").style.border="2px solid red";
	document.getElementById("email").focus();
	return false;
	}
}
function validph()
{
	var x=document.getElementById("phno").value;	
	if(isNaN(x)||x.indexOf(" ")!=-1||x.length!=10)
           {
           	document.getElementById("warning").innerHTML="please enter valid phno";
		document.getElementById("warning").style.display="block";
		document.getElementById("warning").style.visibility="visible";
		document.getElementById("warning").style.opacity=0;
		setTimeout("nn('warning')",500);
          	document.getElementById("phno").style.border="2px solid red";
          	document.getElementById("phno").focus();
           	return false;  
           }
}
function validcpass()
{
	var pass=document.getElementById("regpassword").value;;
	var cpass=document.getElementById("regcpassword").value;;
	if(cpass==null||cpass=="")
	{
		document.getElementById("warning").innerHTML="please enter confirm password";
		document.getElementById("warning").style.display="block";
		document.getElementById("warning").style.visibility="visible";
		document.getElementById("warning").style.opacity=0;
		document.getElementById("warning").style.top="33%";
		setTimeout("nn('warning')",500);		
	document.getElementById("regcpassword").focus();return false;
	}
	else{
		var p=pass;
		var cp=cpass;	
		if(p!=cp)
			{
				document.getElementById("warning").innerHTML="password & confirm not match";
				document.getElementById("warning").style.display="block";
				document.getElementById("warning").style.visibility="visible";
				document.getElementById("warning").style.opacity=0;
				document.getElementById("warning").style.top="33%";
				vv('show');
				setTimeout("sh('warning')",500);		
				document.getElementById("regpassword").focus();document.getElementById("regcpassword").value="";return false;
		
				}
		else 
			return true;
		}
}

function validmdf()
{
	
		var count=0;
		var memail=document.getElementById("memail").value;
		var mph=document.getElementById("mph").value;
		var mws=document.getElementById("mws").value;
		var madd=document.getElementById("madd").value;
		l2=[memail,mph,mws,madd];
		l3=["please enter email","please enter ph","please enter website","please enter address"];
		for(i=0;i<4;i++)
		{
			if(l2[i]==null||l2[i]=="")
			{
				document.getElementById("warning2").style.display="block";
				document.getElementById("warning2").style.visibility="visible";
				document.getElementById("warning2").style.opacity=0;
				document.getElementById("warning2").style.top="30%";
				document.getElementById("warning2").innerHTML=l3[i];
				vv('show');
				setTimeout("sh('warning2')",500);
				return false;
			}
			else
				count++;
		}
		if(memail!="")
		{
		
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(memail.match(mailformat))
			{
			count++;
			}
			else
			{
				document.getElementById("warning2").style.display="block";
				document.getElementById("warning2").style.visibility="visible";
				document.getElementById("warning2").style.opacity=0;
				document.getElementById("warning2").style.top="30%";
				document.getElementById("warning2").innerHTML="please enter valid email";
				vv('show');
				setTimeout("sh('warning2')",500);
				return false;
			}
		}
		if(mph!="")
		{
			var x=mph;
			if(isNaN(x)||x.indexOf(" ")!=-1||x.length!=10)
			   {
				document.getElementById("warning2").style.display="block";
				document.getElementById("warning2").style.visibility="visible";
				document.getElementById("warning2").style.top="30%";
			   	document.getElementById("warning2").innerHTML="please enter valid phno";
				document.getElementById("warning2").style.opacity=0;
				vv('show');
				setTimeout("sh('warning2')",500);
			   	return false;  
			   }
			else
				count++;
		}
		if(mws!="")
		{
			var ev=mws;

			var siteformat = /^www.\w+([\.-]?\w+)*.(\.\w{2,3})+$/;
			if(ev.match(siteformat))
			{
				count++;
			}
			else
			{
				document.getElementById("warning2").style.display="block";
				document.getElementById("warning2").style.visibility="visible";
				document.getElementById("warning2").style.top="30%";
			   	document.getElementById("warning2").innerHTML="please valid website";
				document.getElementById("warning2").style.opacity=0;
				vv('show');
				setTimeout("sh('warning2')",500);
				return false;
			}

		}
		if(count==7)
			return true;
	
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
