function validation()
{
	if(checkUserName()==false || checkEmail()==false || checkDob()==false || checkNum()==false || checkNid()==false || checkAdd()==false || checkGender()==false  || checkPass()==false || checkCPass()==false)
	{
		return false;
	}
	else
	{
		return true;
	}
}
function checkUserName()
{
	var uname=document.getElementById("uname").value;
	if(uname=="")
	{
		document.getElementById("unameError").innerHTML="username is not set";
		return false;
	}
	else
	{
		var pattern = /^[a-zA-Z-' ]*$/;
		if(!pattern.test(uname))
		{
			document.getElementById("unameError").innerHTML="username can't contain numner";
			return false;
		}
		else if(uname.length <=2 || uname.length >= 16)
		{
			document.getElementById("unameError").innerHTML="name must have char between 3-10";
			return false;
		}
		else
		{
			return true;	
		}
	}
}
function checkEmail()
{
	var uemail=document.getElementById("uemail").value;
	if(uemail=="")
	{
		document.getElementById("uemailError").innerHTML="email is not set";
		return false;
	}
	else
	{
		var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(!pattern.test(uemail))
		{
			document.getElementById("uemailError").innerHTML="invalid email address";
			return false;
		}
		// else if()
		// {
		// 	var xttp= new XMLHttpRequest();
		// 	xttp.onreadystatechange = function()
		// 	{
		// 		if(this.readyState == 4 && this.status== 200)
		// 		{
		// 			document.getElementById("print").innerHTML=this.responseText;
		// 		}
		// 	}
		// 	xttp.open("POST", "http://localhost/ttmc/Control/searchCheck.php", true);
		// 	xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		// 	xttp.send("name="+name);
		// }
		else
		{
			return true;
		}
	
	}
}
function checkDob()
{
	var udob = document.getElementById("udob").value;
	if(udob=="")
	{
		document.getElementById("udobError").innerHTML="dob is not set";
		return false;
	}
	else
	{
		return true;
	}
}
function checkNum()
{
	var utell=document.getElementById("utell").value;
	if(utell=="")
	{
		document.getElementById("utellError").innerHTML="number is not set";
		return false;
	}
	else
	{
		var pattern = /^[0-9]+$/;
		if(!pattern.test(utell))
		{
			document.getElementById("utellError").innerHTML="invalid Phone Number";
			return false;
		}
		else if(utell.length != 11)
		{
			document.getElementById("utellError").innerHTML="Phone Number must have 11 digits";
			return false;
		}
		else
		{
			return true;	
		}
		
	}
}
function checkNid()
{
	var unid=document.getElementById("unid").value;
	
	if(unid=="")
	{
		document.getElementById("unidError").innerHTML="nid is not set";
		return false;
	}
	else
	{
		return true;
	}

}
function checkAdd()
{
	var uadd=document.getElementById("reg-textarea").value;
	if(uadd=="")
	{
		document.getElementById("udesError").innerHTML="address is not set";
		return false;
	}
	else
	{
		return true;
	}
}
function checkGender()
{
	if(document.getElementById("ugender1").checked)
	{
		return true;
	}
	else if(document.getElementById("ugender2").checked)
	{
		return true;
	}
	else if(document.getElementById("ugender3").checked)
	{
		return true;
	}
	else 
	{
		document.getElementById("ugenderError").innerHTML="gender is not set";
		return false;
	}
}

function checkVendor()
{
	if(document.getElementById("uvote[]").checked==false)
	{
		document.getElementById("uvoteError").innerHTML="vendor type is not set";
		return false;
	}
	else
	{
		return true;
	}
}
function checkPass()
{
	var upass=document.getElementById("upass").value;
	if(upass=="")
	{
		document.getElementById("upassError").innerHTML="password is not set";
		return false;
	}
	else
	{
		var uppercase = /[A-Z]/;
		var lowercase = /[a-z]/;
		var number = /[\d]/;
		var  specialChars= /[\W]/;
		if(upass.length < 8)
		{
			document.getElementById("upassError").innerHTML="password must have 8 char";
			return false;
		}
		else if(!uppercase.test(upass))
		{
			document.getElementById("upassError").innerHTML="password must include one uppercase letter";
			return false;
		}
		else if(!lowercase.test(upass))
		{
			document.getElementById("upassError").innerHTML="password must include one lowercase letter";
			return false;
		}
		else if(!number.test(upass))
		{
			document.getElementById("upassError").innerHTML="password must include one digit";
			return false;
		}
		else if(!specialChars.test(upass))
		{
			document.getElementById("upassError").innerHTML="password must include one specialChars";
			return false;
		}
		else
		{
			return true;	
		}
	}
}
function checkCPass()
{
	var upass=document.getElementById("upass").value;
	var ucpass=document.getElementById("ucpass").value;
	if(ucpass=="")
	{
		document.getElementById("ucpassError").innerHTML="confirm password is not set";
		return false;
	}
	else
	{
		if(upass!=ucpass)
		{
			document.getElementById("ucpassError").innerHTML="password and confirm password doesn't match";
			return false;
		}
		else
		{
			return true;
		}
		
	}
}
function fetchTrain()
{
	var name = document.getElementById("name").value;

	var xttp= new XMLHttpRequest();
	xttp.onreadystatechange = function()
	{
	  	if(this.readyState == 4 && this.status== 200)
	  	{
	 		document.getElementById("print").innerHTML=this.responseText;
	  	}
	}

xttp.open("POST", "http://localhost/ttmc/Control/searchCheck.php", true);
xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xttp.send("name="+name);
}