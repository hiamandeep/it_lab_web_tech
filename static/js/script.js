var message = "";
var message2 = "";
var track = true;
var track1 = true;

function validate_login_form(){

	if(document.myform.username.value == ""){
		document.getElementById('uname').innerHTML = 'No username given<br><br>';
		track = false;
	}
	
	if(document.myform.password.value == ""){
		document.getElementById('pass').innerHTML = 'No password given<br><br>';
		track = false;
	}

	if(track == true){
		// alert("Login Successful");
		return true;
	}

	else{
		return false;
	}
}

// function new_validation()
// {
// 		if(document.myform.username.value == ""){
// 		document.getElementById('uname').innerHTML = 'No username given<br><br>';
// 		track = false;
// 	}
// }


// function new_validation_username()
// {
// 		if(document.myform.password.value == ""){
// 		document.getElementById('pass').innerHTML = 'No password given<br><br>';
// 		track = false;
// 	}
// }


// function new_validation_password()
// {
// 		if(document.myform.username.value == ""){
// 		document.getElementById('uname').innerHTML = 'No username given<br><br>';
// 		track = false;
// 	}
// }



// function validate_login_form(){

// 	if(document.myform.username.value == ""){
// 		message += 'No username given\n';
// 	}
	
// 	if(document.myform.password.value == ""){
// 		message += 'no password given';
// 	}

// 	if(message==""){
// 		alert("Login Successful");
// 		return true;
// 	}

// 	else{
// 		alert(message)
// 		return false;
// 	}

// }

function validate_signup_form(){

	if(document.myform2.name.value == ""){
		document.getElementById('uname').innerHTML = 'No username given<br><br>';
		track1 = false;
	}
	
	if(document.myform2.roll.value == ""){
		document.getElementById('roll').innerHTML = 'No roll given<br><br>';
		track1 = false;
	}

	if(document.myform2.gender.value == ""){
		document.getElementById('gender').innerHTML = 'no gender given';
		track1 = false;
	}

	if(document.myform2.mobile.value == ""){
		document.getElementById('mobile').innerHTML = 'no mobile no. given<br><br>';
		track1 = false;
	}

	else if (document.myform2.mobile.value.length != 10){
		document.getElementById('mobile').innerHTML = 'mobile no. not valid<br><br>';
		track1 = false;
	}

	if(document.myform2.registration.value == ""){
		document.getElementById('reg').innerHTML =  'no registration no. given<br><br>';
		track1 = false;
	}

	if(document.myform2.password.value == ""){
		document.getElementById('pass').innerHTML =  'no password given<br><br>';
		track1 = false;
	}

	if(document.myform2.email.value == ""){
		document.getElementById('email_err').innerHTML =  'no email given<br><br>';
		track1 = false;
	}
	
	// var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	// else if (re.test(document.myform2.email.value) == false)
	// {
	// 			document.getElementById('email_err').innerHTML =  'invalid email<br><br>';
	// 			track = false;
	// }
	
	if(document.myform2.confirm_password.value == ""){
		document.getElementById('conf_pass').innerHTML = 'no password confirmation given<br><br>';
		track1 = false;
	}

	if(document.myform2.programme.value == 'blank'){
		document.getElementById('prog').innerHTML =  'no programme given';
		track1 = false;
	}

	if(document.myform2.semester.value == 'blank'){
		document.getElementById('sem').innerHTML =  'no semester given';
		track1 = false;
	}

	if(track1 == true){
		// alert("signup Successful");
		return true;
	}

	else{
		return false;

	}
}


function validate_new_signup_form(){

	if(document.myform2.name.value == ""){
		document.getElementById('uname').innerHTML = 'No username given<br><br>';
		track1 = false;
	}
	
	// if(document.myform2.roll.value == ""){
	// 	document.getElementById('roll').innerHTML = 'No roll given<br><br>';
	// 	track1 = false;
	// }

	// if(document.myform2.gender.value == ""){
	// 	document.getElementById('gender').innerHTML = 'no gender given';
	// 	track1 = false;
	// }

	// if(document.myform2.mobile.value == ""){
	// 	document.getElementById('mobile').innerHTML = 'no mobile no. given<br><br>';
	// 	track1 = false;
	// }

	// else if (document.myform2.mobile.value.length != 10){
	// 	document.getElementById('mobile').innerHTML = 'mobile no. not valid<br><br>';
	// 	track1 = false;
	// }

	// if(document.myform2.registration.value == ""){
	// 	document.getElementById('reg').innerHTML =  'no registration no. given<br><br>';
	// 	track1 = false;
	// }

	if(document.myform2.password.value == ""){
		document.getElementById('pass').innerHTML =  'no password given<br><br>';
		track1 = false;
	}

	if(document.myform2.email.value == ""){
		document.getElementById('email_err').innerHTML =  'no email given<br><br>';
		track1 = false;
	}
	
	// var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	// else if (re.test(document.myform2.email.value) == false)
	// {
	// 			document.getElementById('email_err').innerHTML =  'invalid email<br><br>';
	// 			track = false;
	// }
	
	if(document.myform2.confirm_password.value == ""){
		document.getElementById('conf_pass').innerHTML = 'no password confirmation given<br><br>';
		track1 = false;
	}

	// if(document.myform2.programme.value == 'blank'){
	// 	document.getElementById('prog').innerHTML =  'no programme given';
	// 	track1 = false;
	// }

	// if(document.myform2.semester.value == 'blank'){
	// 	document.getElementById('sem').innerHTML =  'no semester given';
	// 	track1 = false;
	// }

	if(track1 == true){
		// alert("signup Successful");
		return true;
	}

	else{
		return false;
	}
}





// function validate_signup_form(){

// 	if(document.myform2.name.value == ""){
// 		message2 += 'No username given\n';
// 	}
	
// 	if(document.myform2.roll.value == ""){
// 		message2 += 'no roll given\n';
// 	}

// 	if(document.myform2.gender.value == ""){
// 		message2 += 'no gender given\n';
// 	}
// 	if(document.myform2.mobile.value == ""){
// 		message2 += 'no mobile given\n';
// 	}

// 	else if (document.myform2.mobile.value.length != 10){
// 		message2 += "invalid phone no."
// 	}

// 	if(document.myform2.registration.value == ""){
// 		message2 += 'no registration no. given\n';
// 	}
// 	if(document.myform2.password.value == ""){
// 		message2 += 'no password given\n';
// 	}
// 	if(document.myform2.confirm_password.value == ""){
// 		message2 += 'no password confirmation given\n';
// 	}

// 	if(document.myform2.programme.value == 'blank'){
// 		message2 += 'no programme given\n';
// 	}

// 	if(document.myform2.semester.value == 'blank'){
// 		message2 += 'no semester given\n';
// 	}

// 	if(message2 == ""){
// 		alert("signup Successful");
// 		return true;
// 	}

// 	else{
// 		alert(message2);
// 		return false;
// 	}
// }




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
		// alert(message2);
		return false;
	}

}