function validation()
{
	if(checkEmail() == false || checkPass() == false)
	{
		return false;
	}
	else
	{
		return true;
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
			document.getElementsById("uemailError").innerHTML="invalid email address";
			return false;
		}
		else
		{
			return true;
		}
	
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
		// else if(!uppercase.test(upass))
		// {
		// 	document.getElementById("upassError").innerHTML="password must include one uppercase letter";
		// 	return false;
		// }
		// else if(!lowercase.test(upass))
		// {
		// 	document.getElementById("upassError").innerHTML="password must include one lowercase letter";
		// 	return false;
		// }
		// else if(!number.test(upass))
		// {
		// 	document.getElementById("upassError").innerHTML="password must include one digit";
		// 	return false;
		// }
		// else if(!specialChars.test(upass))
		// {
		// 	document.getElementById("upassError").innerHTML="password must include one specialChars";
		// 	return false;
		// }
		else
		{
			return true;	
		}
	}
}
