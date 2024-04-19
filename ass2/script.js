// function formValidation()
// {
// 	var uid = document.registration.userid;
// 	var passid = document.registration.passid;
// 	var uname = document.registration.username;
// 	var uadd = document.registration.address;
// 	var ucountry = document.registration.country;
// 	var uzip = document.registration.zip;
// 	var uemail = document.registration.email;
// 	var umsex = document.registration.msex;
// 	var ufsex = document.registration.fsex; 
// 	if(userid_validation(uid,5,12))
// 	{
// 		if(passid_validation(passid,7,12))
// 		{
// 			if(allLetter(uname))
// 			{
// 				if(alphanumeric(uadd))
// 				{ 
// 					if(countryselect(ucountry))
// 					{
// 						if(allnumeric(uzip))
// 						{
// 							if(ValidateEmail(uemail))
// 							{
// 								if(validsex(umsex,ufsex))
// 								{

// 								}
// 							} 
// 						}
// 					} 
// 				}
// 			}
// 		}
// 	}
// 	return false;

// } 


function formValidation(){
	let userid = document.getElementById('userid').value;

	userid = userid.trim();
	if(userid.length == 0){
		alert('enter valid username');
		userid.focus();

	}

	if(userid.length < 5 || userid.length > 10){
		alert('length should be between 5 to 10');
		userid.focus();
		return false;
	}

	let username = document.getElementsByName('username').value;
	let myRegExpression = /^[a-zA-Z]+$/
	if(username.test(myRegExpression) === false){
		alert('enter valid username')
	}

}




















function userid_validation(uid,mx,my)
{
	var uid_len = uid.value.length;
	let uservar = /^[a-zA-Z]+[0-9]+$/;
	if (uid_len == 0 || uid_len >= my || uid_len < mx)
	{
		alert("User Id should not be empty / length be between "+mx+" to "+my);
		uid.focus();
		return false;
	}
	else if(uid.value.match(uservar)){
		return true;
	}
	else{
		alert("User Id should start with alfabet and end with number");
		uid.focus();
		return false;
	}
}



function passid_validation(passid,mx,my)
{
	var passid_len = passid.value.length;
	let pass = /^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{3,}$/;
	if (passid_len == 0 ||passid_len >= my || passid_len < mx)
	{
		alert("Password should not be empty  and  length be between "+mx+" to "+my);
		passid.focus();
		return false;
	}
	else if(passid.value.match(pass)){
		return true;
	}
	else{
		alert('pass must have  one alphabet , number, special char ');
		passid.focus();
		return false;
	}
	return true;
}

function allLetter(uname)
{ 
	var letters = /^[A-Za-z]+$/;

	if(uname.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('Username must have alphabet characters only');
		uname.focus();
		return false;
	}

}

function alphanumeric(uadd)
{ 
	var letters = /^[0-9a-zA-Z]+$/;
	if(uadd.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('User address must have alphanumeric characters only');
		uadd.focus();
		return false;
	}
}

function countryselect(ucountry)
{
	if(ucountry.value == "Default")
	{
		alert('Select your country from the list');
		ucountry.focus();
		return false;
	}
	else
	{
		return true;
	}
}

function allnumeric(uzip)
{ 
	var numbers = /^[0-9]+$/;
	if(uzip.value.match(numbers))
	{
		return true;
	}
	else
	{
		alert('ZIP code must have numeric characters only');
		uzip.focus();
		return false;
	}
}

function ValidateEmail(uemail)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	let emilavar = /^[a-zA-Z]+@gmail\.com$/;
	if(uemail.value.match(emilavar))
	{
		return true;
	}
	else
	{
		alert("You have entered an invalid email address!");
		uemail.focus();
		return false;
	}
} 

function validsex(umsex,ufsex)
	{
		x=0;

		if(umsex.checked) 
		{
			x++;
		} 

		if(ufsex.checked)
		{
			x++; 
		}

		if(x==0)
		{
			alert('Select Male/Female');
			umsex.focus();
			return false;
		}

		else
		{
			alert('Form Succesfully Submitted');
			// window.location.reload()
			// window.location.href = './home.html'   // TO REDIRECT  to another page after successfully submition on reg form
			window.location.replace('./login.html');   // to go to another page , after that we cant go to back
			return true;
		}
}
