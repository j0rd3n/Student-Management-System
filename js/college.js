var exist="";
var exist1="";
var le="";
var ex;
var xmlHttp="sdf";

function showResult(str)
{
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
	var url="usercheck.php";
	url=url+"?q="+str;
	xmlHttp.onreadystatechange=function(){existence(xmlHttp);};
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}
function existence(xmlHttp) 
{ 
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{
		if(xmlHttp.responseText.length==0)
		{
		document.getElementById("cwarning").style.display="none";
		document.getElementById("tempcc").value="valid";
		return;
		}
		if(xmlHttp.responseText.length!=0)
		{
			document.getElementById("cwarning").style.display="block";
			document.getElementById("cwarning").style.top="30%";
			document.getElementById("cwarning").innerHTML="user already exist";
			document.getElementById("tempcc").value="exist";
			return ;
		}
		
	} 
}
function checkstud(cd,str)
{
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
	var url="stucheck.php";
	url=url+"?cd="+cd+"&q="+str;
	xmlHttp.onreadystatechange=function(){existences(xmlHttp);};
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}
function existences(xmlHttp) 
{ 
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{
		if(xmlHttp.responseText.length==0)
		{
		ex=document.getElementById("tempstu").value="valid";
		}
		if(xmlHttp.responseText.length!=0)
		{
			ex=document.getElementById("tempstu").value="exist";
		}
		
	} 
}

function login()
{
	document.getElementById("lgf").style.display="block";
	document.getElementById("banner").style.display="none";
	document.getElementById("desc").style.display="none";
	document.getElementById("regff").style.display="none";
	document.getElementById("sregff").style.display="none";
	document.getElementById("slgf").style.display="none";
}
function reg()
{
	alert("sdf");
	document.getElementById("regff").style.display="block";
	document.getElementById("banner").style.display="none";
	document.getElementById("desc").style.display="none";
	document.getElementById("lgf").style.display="none";
	document.getElementById("slgf").style.display="none";
	document.getElementById("sregff").style.display="none";

}
function streg(){
	document.getElementById("sregff").style.display="block";
	document.getElementById("banner").style.display="none";
	document.getElementById("desc").style.display="none";
	document.getElementById("lgf").style.display="none";
	document.getElementById("slgf").style.display="none";
	document.getElementById("regff").style.display="none";
}
function slgn()
{
	document.getElementById("slgf").style.display="block";
	document.getElementById("banner").style.display="none";
	document.getElementById("desc").style.display="none";
	document.getElementById("lgf").style.display="none";
	document.getElementById("regff").style.display="none";
	document.getElementById("sregff").style.display="none";
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
	if(x>=0)
            {
                    var l=[0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1];
                    document.getElementById(i1).style.opacity=l[x];x--;
                    setTimeout("nn('"+i1+"')",10);
            }
            else
                    {
                    x=10;
                    }
}
function sh(i)
{
	i1=i;
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
function check(usr,p)
{
	$.post("checking.php?id="+usr+"&p="+p,{q:usr},function(data)
	{
		alert(data);
	});
}
function loginvalid()
{
	var clgi=document.getElementById("collegeid").value;
	var cp=document.getElementById("lpassword").value;
	if(document.getElementById("collegeid").value==null||document.getElementById("collegeid").value=="")
	{
		document.getElementById("warningl").innerHTML="please enter username";
		document.getElementById("warningl").style.display="block";
		document.getElementById("warningl").style.visibility="visible";
		document.getElementById("warningl").style.opacity=1;
		document.getElementById("warningl").style.top="10%";
//		setTimeout("nn('warningl')",500);
		document.getElementById("collegeid").focus();
		return false;
	}
	if(document.getElementById("lpassword").value==null||document.getElementById("lpassword").value=="")
	{
		document.getElementById("warningl").innerHTML="please enter password";
		document.getElementById("warningl").style.display="block";
		document.getElementById("warningl").style.visibility="visible";
		document.getElementById("warningl").style.opacity=0;
		document.getElementById("warningl").style.top="20%";
//		setTimeout("nn('warningl')",500);
		document.getElementById("lpassword").focus();return false;
	}
	else
		return true;
}
function validstreg()
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
	var sadd=document.getElementById("saddress").value;;
	var vcs=checkstud(cgid,stid);
	l2=[cgid,stid,stname,pass,cpass,stufname,sbatch,syear,sbranch,ssem,gender,email,phn,sadd]
	l3=["please enter college id","please enter studentid","please enter student name","please enter password","please enter confirm password","please enter father name","please enter batch","please enter year","please enter branch","please enter sem","please select gender","please enter email","please enter phone number","please enter add"];
	for(i=0;i<14;i++)
	{
		
		if(l2[i]==null||l2[i]=="")
		{
			document.getElementById("warning").style.display="block";
			document.getElementById("warning").style.top="30%";
			document.getElementById("warning").innerHTML=l3[i];
			return false;
		}
		if(i==4 & l2[i]!="")
		{
			var vc=validcpass(cpass,pass)
			if(vc==false)
			{
				document.getElementById("warning").innerHTML="please enter correct password";
				document.getElementById("warning").style.display="block";
				setTimeout("document.getElementById('cwarning').style.display='none'",2000);
				return false;
			}
		}
		if(i==10)
		{
			if(gender=="Select")
			{
				document.getElementById("warning").innerHTML="please select gender";
				document.getElementById("warning").style.display="block";
				setTimeout("document.getElementById('cwarning').style.display='none'",2000);
				return false;
			}
		}
	}
	
	var ve=validemail(email)
	if(ve==false)
	{
		document.getElementById("warning").innerHTML="please enter valid email";
		document.getElementById("warning").style.display="block";
		setTimeout("document.getElementById('cwarning').style.display='none'",2000);
		return false;
		}
	var vp=validph(phn)
	if(vp==false)
	{
		document.getElementById("warning").innerHTML="please enter valid phone number";
		document.getElementById("warning").style.display="block";
		setTimeout("document.getElementById('cwarning').style.display='none'",2000);
		return false;
	}
	var ch=document.getElementById("tempstu").value;
	if(ch!="exist")
	{
		document.getElementById("warning").innerHTML="college id or student id are not valid";
		document.getElementById("warning").style.display="block";
		setTimeout("document.getElementById('cwarning').style.display='none'",2000);
		return false;
	}
	
}
function validemail(a)
{
	ev=a;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(ev.match(mailformat))
	{
	return true;
	}
	else
	{
	return false;
	}
}
function validewebsite(ev)
{
	var mailformat = /^www.\w+([\.-]?\w+)*.(\.\w{2,3})+$/;
	if(ev.match(mailformat))
	{
	return true;
	}
	else
	{
	document.getElementById("wsit").style.border="2px solid red";
	document.getElementById("wsit").focus();
	return false;
	}
}
function validph(x)
{
	if(isNaN(x)||x.indexOf(" ")!=-1)
           {
           	document.getElementById("warning").innerHTML="please enter valid phno";
		document.getElementById("warning").style.display="block";
		setTimeout("document.getElementById('cwarning').style.display='none'",2000);
           	return false;  
           }
	else{
		return true;
	}	
}
function validcpass(ccp,pp)
{
		if(pp!=ccp)
			{
				return false;
				}
		else
			return true;
}
function regvalid()
{
	var rclgid=document.getElementById("regcollegeid").value;
	var clgname=document.getElementById("regcollegename").value;
	var cpass=document.getElementById("cregpassword").value;
	var ccpass=document.getElementById("cregcpassword").value;
	var cemail=document.getElementById("cemail").value;
	var cwbst=document.getElementById("wsit").value;
	var cph=document.getElementById("cphno").value;
	var sw=showResult(document.getElementById("regcollegeid").value);
	var cadd=document.getElementById("address").value;
	l2=[rclgid,clgname,cpass,ccpass,cemail,cwbst,cph,cadd];
	l3=["please enter college id","please enter collegename","please enter password","password and cofirm password are not match","please enter valid email","please enter valid website","please enter valid phone number","please enter address"];
	for(var i=0;i<8;i++)
	{
		if(l2[i]==null||l2[i]=="")
		{
			document.getElementById("cwarning").innerHTML=l3[i];
			document.getElementById("cwarning").style.display="block";
			document.getElementById("cwarning").style.top="10%";
			setTimeout("document.getElementById('cwarning').style.display='none'",2000);		
			return false;
		}
		if(i==3 && l2[i]!="")
		{
			var c=validcpass(cpass,ccpass);
			if(c==false)
			{
				document.getElementById("cwarning").style.display="block";
				document.getElementById("cwarning").innerHTML=l3[i];
		
				document.getElementById("cwarning").style.top="10%";		
				setTimeout("document.getElementById('cwarning').style.display='none'",2000);
				return false;
			}
		}
		if(i==4 && l2[i]!="")
		{

			var d=validemail(cemail);
			if(d==false)
			{
				document.getElementById("cwarning").style.display="block";
				document.getElementById("cwarning").innerHTML=l3[i];
		
				document.getElementById("cwarning").style.top="10%";		
				setTimeout("document.getElementById('cwarning').style.display='none'",500);
				return false;
				return false;
			}
		}
		if(i==5 && l2[i]!="")
		{
			var e=validewebsite(cwbst);
			if(e==false)
			{
				document.getElementById("cwarning").style.display="block";
				document.getElementById("cwarning").innerHTML=l3[i];
		
				document.getElementById("cwarning").style.top="10%";		
				setTimeout("document.getElementById('cwarning').style.display='none'",500);
				return false;
				return false;
			}
		}
		if(i==6 && l2[i]!="")
		{
			var e=validph(cph)
			if(e==false)
			{
				document.getElementById("cwarning").style.display="block";
				document.getElementById("cwarning").innerHTML=l3[i];
		
				document.getElementById("cwarning").style.top="10%";		
				setTimeout("document.getElementById('cwarning').style.display='none'",500);
				return false;
				return false;
			}
		}
	}
	s=document.getElementById("tempcc").value;
	if(s=="exist")
	{
		document.getElementById("cwarning").style.display="block";
		document.getElementById("cwarning").innerHTML="username already exist";
		
		document.getElementById("cwarning").style.top="10%";		
		setTimeout("document.getElementById('cwarning').style.display='none'",500);
		document.getElementById("regcollegeid").focus();
		return false;
	}
	else
	{
		return true;
		}
	
}
function cls(a)
{
	var l=["home","college","student","company","admins"];
	var i=0;var s;
	for(i=0;i<5;i++)
	{
		s=l[i]+"c";
		if(l[i]==a)
		{
			if(l[i]=="admins" )
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
			if(l[i]=="admins" )
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
function show_coll_info()
{
	document.getElementById("search_input").value="";
	$.post("companies.php",function(data)
		{
			$("#content").html(data);
		});

}
function show_stu_info()
{
	document.getElementById("search_input").value="";
	$.post("students_info.php",function(data)
		{
			$("#content").html(data);
		});

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
