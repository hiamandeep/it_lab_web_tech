var message = "";
var message2 = "";

function validate_login_form(){

	if(document.myform.username.value == ""){
		message += 'No username given\n';
	}
	
	if(document.myform.password.value == ""){
		message += 'no password given';
	}

	if(message==""){
		alert("Login Successful");
		return true;
	}

	else{
		alert(message)
		return false;
	}

}


function validate_signup_form(){

	if(document.myform2.name.value == ""){
		message2 += 'No username given\n';
	}
	
	if(document.myform2.roll.value == ""){
		message2 += 'no roll given\n';
	}

	if(document.myform2.gender.value == ""){
		message2 += 'no gender given\n';
	}
	if(document.myform2.mobile.value == ""){
		message2 += 'no mobile given\n';
	}

	else if (document.myform2.mobile.value.length != 10){
		message2 += "invalid phone no."
	}



	if(document.myform2.registration.value == ""){
		message2 += 'no registration no. given\n';
	}
	if(document.myform2.password.value == ""){
		message2 += 'no password given\n';
	}
	if(document.myform2.confirm_password.value == ""){
		message2 += 'no password confirmation given\n';
	}

	if(document.myform2.programme.value == 'blank'){
		message2 += 'no programme given\n';
	}

	if(document.myform2.semester.value == 'blank'){
		message2 += 'no semester given\n';
	}

	if(message2 == ""){
		alert("signup Successful");
		return true;
	}

	else{
		alert(message2);
		return false;
	}

}


function validate_signup_teacher_form(){

	if(document.myform2.name.value == ""){
		message2 += 'No username given\n';
	}


	if(document.myform2.gender.value == ""){
		message2 += 'no gender given\n';
	}
	if(document.myform2.mobile.value == ""){
		message2 += 'no mobile given\n';
	}

	else if (document.myform2.mobile.value.length != 10){
		message2 += "invalid phone no."
	}

	if(document.myform2.password.value == ""){
		message2 += 'no password given\n';
	}
	if(document.myform2.confirm_password.value == ""){
		message2 += 'no password confirmation given\n';
	}

	if(document.myform2.programme.value == 'blank'){
		message2 += 'no programme given\n';
	}

	if(document.myform2.semester.value == 'blank'){
		message2 += 'no semester given\n';
	}

	if(message2 == ""){
		alert("signup Successful");
		return true;
	}

	else{
		alert(message2);
		return false;
	}

}