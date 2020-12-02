/*function myFormValidation()
{
	var admin_name = document.myForm.admin_name;
	
	var admin_id = document.myForm.admin_id;
	var email_address = document.myForm.email_address;
	var phone = document.myForm.phone;
	
	var password = document.myForm.password;
	var conformpassword = document.myForm.conformpassword;
	
	
	if(allLetter(admin_name))
	{
		

		if(admin_id_validation(admin_id))
		{
			if(ValidateEmail(email_address))
			{
				if(allnumericphone(phone))
				{
					if(password_validation(password)
					{
						if(conformpassword_validation(conformpassword))
						{
						}
					}
				}
				
			}

		}
		

	} 
	return false;
}

function allLetter(admin_name)
{ 
	var letters = /^[A-Za-z]+$/;
	if(admin_name.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('admin_name must have alphabet characters only');
		admin_name.focus();
		return false;
	}
}
function admin_id_validation(admin_id)
{
	var letters=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if (admin_id.value.match(letters))
	{

		return true;
	}
	else
	{
		alert('admin_id must be your official email address');
		admin_id.focus();
		return false;
	}
}


function allnumericphone(phone)
{ 
	var numbers = /^[01][0-9]{9}$/;
	if(phone.value.match(numbers))
	{
		return true;
	}
	else
	{
		alert('Phone Numbers must have numeric characters only');
		phone.focus();
		return false;
	}
}
function ValidateEmail(email_address)
{
	var mailmyFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email_address.value.match(mailmyFormat))
	{
		return true;
	}
	else
	{
		alert("You have entered an invalid email address!");
		return false;
	}
} 


function password_validation()
{
	var password = document.myForm.password;
	var passwordcheck=/^(?=.*[0-9])(?=.*[!@#$%&*])[A-Za-z0-9!@#$%^&*]{8,16}$/;
	
	if (password.value.match(passwordcheck))
	{
		document.myForm.conformpassword.focus();
		return true;
		
	}
	else
	{

		alert("Must contain at least one number and one uppercase and lowercase letter,one special character and at 8 to 16 characters");
		password.focus();
		return false;
	}
}

function conformpassword_validation(conformpassword)
{
	var conformpassword = document.myForm.conformpassword;
	var passwordcheck=/^(?=.*[0-9])(?=.*[!@#$%&*])[A-Za-z0-9!@#$%^&*]{8,16}$/;
	
	if (conformpassword.value.match(passwordcheck))
	{
		
		return true;
		
	}
	else
	{

		alert("Must contain at least one number and one uppercase and lowercase letter,one special character and at 8 to 16 characters");
		conformpassword.focus();
		return false;
	}
}

*/







// After myForm loads focus will go to Full Name field.
function firstfocus()
{
	var admin_id = document.myForm.admin_id.focus();
	return true;
}



// This function will validate Full Name.
function allLetter_onchange()
{ 
	var admin_name = document.myForm.admin_name;
	//var admin_name_len = admin_name.value.length;
	var x = document.getElementById("admin_name");
    x.value = x.value.toUpperCase();
	/*var letters = /^[A-Za-z\s]{5,20}$/;
	if((admin_name.value.match(letters))&&(admin_name.value!="") )
	{
// Focus goes to next field i.e. Address.
     //document.myForm.admin_id.focus();
      return true;
}
else
  {
	alert("admin_name must have alphabet characters only / length be between 5 to 20");
	admin_name.focus();
	return false;
  }*/
}



function admin_id_validation_onchange()
{
	var admin_id = document.myForm.admin_id;
	var letters=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if (admin_id.value.match(letters))
	{
		document.myForm.phone.focus();
		return true;
	}
	else
	{
		alert("admin_id must be your official email address");
		admin_id.focus();
		return false;
	}
}

// This function will validate Phone Numbers.
function validatePhone_onchange()
{
	var phone = document.myForm.phone;
	var numbers = /^[0-9]{11}$/;
	if(phone.value.match(numbers))
	{
		document.myForm.email_address.focus();
		return true;
	}
	else
	{
		alert('Phone Numbers must have numeric characters only');
		phone.focus();
		return false;
	}
} 

 // This function will validate Email.
 function validateEmail_onchange()
 {
 	var email_address = document.myForm.email_address;
 	var mailmyFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
 	if(email_address.value.match(mailmyFormat))
 	{
 		document.myForm.password.focus();
 		return true;
 	}
 	else
 	{
 		alert("You have entered an invalid email address!");
 		email_address.focus();
 		return false;
 	}
 } 

// This function will validate Password.
function password_validation_onchange()
{
	var password = document.myForm.password;
	var passwordcheck=/^(?=.*[0-9])(?=.*[!@#$%&*])[A-Za-z0-9!@#$%^&*]{8,16}$/;
	
	if (password.value.match(passwordcheck))
	{
		document.myForm.conformpassword.focus();
		return true;
		
	}
	else
	{

		alert("Must contain at least one number and one uppercase and lowercase letter,one special character and at 8 to 16 characters");
		password.focus();
		return false;
	}
}

function check() {
	if (password.value == conformpassword.value) {
		alert("Success: Password Matched!");
	} else {
		alert("Error: Please check that you've entered and confirmed your password!");
	}
}