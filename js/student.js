
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
function show_profile()
{
	document.getElementById("profile").style.display="block";
	document.getElementById("inside").style.display="none";
	document.getElementById("send_requests").style.display="none";
	document.getElementById("acadamic").style.display="none";
	document.getElementById("are").style.display="none";
}
function send_request()
{
	document.getElementById("send_requests").style.display="block";
	document.getElementById("profile").style.display="none";
	document.getElementById("inside").style.display="none";
	document.getElementById("acadamic").style.display="none";
	document.getElementById("are").style.display="none";
}
function show_acadamic()
{
	document.getElementById("acadamic").style.display="block";
	document.getElementById("send_requests").style.display="none";
	document.getElementById("profile").style.display="none";
	document.getElementById("inside").style.display="none";
	document.getElementById("are").style.display="none";
}
var x=10;
function nn1(i)
{
	i1=i;
	if(x>0)
            {
                    var l=[0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1];

                    document.getElementById(i1).style.opacity=l[x];x--;
                    setTimeout("nn1('"+i1+"')",150);
            }
            else
                    {
                    document.getElementById(i1).style.visibility="hidden";
                    x=10;
                    }
}
function valid_request()
{
	var subj=document.getElementById("subject").value;
	var reqs=document.getElementById("request").value;
	if (subj=="" || subj==null)
	{
		document.getElementById("show_message1").style.display="block";
		nn1("show_message1");
		document.getElementById("show_message2").style.display="none";
		document.getElementById("subject").focus();
		return false;
	}
	else if (reqs=="" || reqs==null)
	{
		document.getElementById("show_message1").style.display="none";
		document.getElementById("show_message2").style.display="block";
		nn1("show_message2");
		document.getElementById("request").focus();
		return false;
	}
}
var x=8;
function nn(i)
{
	i1=i;
	if(x>0)
            {
                    var l=[0.7,0.6,0.5,0.4,0.3,0.2,0.1,0];

                    document.getElementById(i1).style.opacity=l[x];
		    document.getElementById("editp").style.opacity=l[x]+0.4;
			x--;
                    setTimeout("nn('"+i1+"')",50);
            }
            else
                    {
                    document.getElementById(i1).style.visibility="show";
                    x=8;
                    }
}
function show_editmenu()
{
	document.getElementById("blackk").style.display="block";
	nn("blackk");
	document.getElementById("editp").style.display="block";
}
function close_w()
{
	document.getElementById("blackk").style.display="none";
	document.getElementById("editp").style.display="none";
	document.getElementById("blackk").style.opacity=0;
	document.getElementById("editp").style.opacity=0;
}
function phpht()
{
	$.post("kk.php",function(data)
		{
			$("#editp").html(data);
		});	
}
function valid_edit()
{
	var edids=["ednm","edfnm","edemail","edphn","edrm","eddob","edad","edgo","edint","edach"];
	var ederrors=["Please Fill Name","Please Fill Your Father Name","Please Enter Email Id","Phone number","Roll Model","Date of Birth","Please Mention Address","Enter Password","Fill your Interests","Fill your achievements"];
	var err=document.getElementById("ed_error");
	for (i=0;i<10;i++)
	{
		if (document.getElementById(edids[i]).value==null || document.getElementById(edids[i]).value==""||document.getElementById(edids[i]).value==" ")
		{
			err.innerHTML="<div style='display:block;background-color:#0087C1;width:250px;height:50px;color:#fff;opacity:0;text-align:center' id=err_msg><b><br>"+ederrors[i]+"</b></div>";	
			nn1("err_msg");
			return false;
		}
	}
	return true;
	
}
var x=8;
function fade(i)
{
	i1=i;
	if(x>0)
            {
                    var l=[0.7,0.6,0.5,0.4,0.3,0.2,0.1,0];

                    document.getElementById(i1).style.opacity=l[x];
		    document.getElementById("sq_err1").style.opacity=l[x]+0.4;
			x--;
                    setTimeout("fade('"+i1+"')",50);
            }
            else
                    {
                    document.getElementById(i1).style.visibility="show";
                    x=8;
                    }
}
function close_w1()
{
	document.getElementById("blackk1").style.display="none";
	document.getElementById("sq_err1").style.display="none";
	document.getElementById("blackk1").style.opacity=0;
	document.getElementById("editp1").style.opacity=0;
}
function show_blackk()
{
	document.getElementById("blackk1").style.display="block";
	fade("blackk1");
	document.getElementById("sq_err1").style.display="block";
}
function show_response()
{
	document.getElementById("blackk2").style.display="block";
	fade("blackk2");
	document.getElementById("response_box").style.display="block";
}
function getstr1(st)
{
	var c=0;
	var new1="";
	for (i=0;i<st.length;i++)
		if (st[i]=="\n")
			new1=new1+"</br>";
		else
			new1=new1+st[i];
	return new1;
}
function give_result()
{
	document.getElementById("are").style.display="block";
	document.getElementById("results").style.display="block";
	document.getElementById("send_requests").style.display="none";
	document.getElementById("profile").style.display="none";
	document.getElementById("inside").style.display="none";
	document.getElementById("acadamic").style.display="none";
	$.post("show_result.php",function(data)
		{
			$("#results").html(data);
		});
}


