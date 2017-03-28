<?php
require 'require/header.php'
?>
	<body>
		<div class="signup_box">
		<h1>Student Registration Page</h1>
			<form action="submitdata.php"  method="POST" name="myform2" onsubmit="return(validate_signup_form());">
	
				<label for="">Username: </label> 
				<p><input type="text" placeholder="Enter username" name="name" id="username_su" ></p>
				<div class="error" id='uname'></div>

				<label for="">Roll No: </label>
				<p>14/IT/<input type="number" style="width:34%" placeholder="Enter Rollno" name="roll" id="roll_su" ></p>
				<div class="error" id='roll'></div>

				<label for="">Gender</label>
				<input type="radio" name="gender">Male</input>
				<input type="radio" name="gender">Female</input>
				<div class="error" id='gender'></div>



				<br><br>
				<label for="">Mobile No: </label>
				<p><input type="number" placeholder="Enter mobile no" name="mobile" id="mobile_su" ></p>
				<div class="error" id='mobile'></div>
				
				<label for="">Registration No: </label>
				<p><input type="number" placeholder="Enter Registration no" name="registration" id="registration_su" ></p>
				<div class="error" id='reg'></div>

				<label for="">Email: </label>
				<p><input type="email" placeholder="Enter email" name="email" id="email_su" ></p>
				<div class="error" id='email_err'></div>

				<label for="">Password: </label>
                <p><input type="password" placeholder="Password" id="password" name="password" ></p>
				<div class="error" id='pass'></div>

                <label for="">Confirm password: </label>
                <p><input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password_su" ></p>
				<div class="error" id='conf_pass'></div>				

				<label for="">Programme: </label>

				  <select name="programme">
				  	<option value="blank">blank</option>
				    <option>B.Tech</option>
				    <optin>M.Tech</option>
				    <option>Phd</option>
				  </select>
				<div class="error" id='prog'></div>


				<p><label>Semester: </label>
				  <select name="semester">
				  	<option value="blank">blank</option>
				    <option value="firstsem">FirstSemester</option>
				    <option value="secondsem">SecondSemester</option>
				    <option value="thirdsem">ThirdSemester</option>
				    <option value="fourthsem">FourthSemester</option>
				    <option value="fifthsem">FifthSemester</option>
				    <option value="sixthsem">SixthSemester</option>
                    <option value="seventhsem">SeventhSemester</option>
				    <option value="eighthsem">EighthSemester</option>
				  </select>
				<div class="error" id='sem'></div>

 				<input type="submit" value="signup" class="signupbtn button"/>
			</form>
		</div>
	</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<!-- <script>

$(document).ready(function(){
    $("#username_su").focusin(function(){
        $(this).css("background-color", "#FFFFCC");
    });
    $("#username_su").focusout(function(){
        $(this).css("background-color", "#FFFFFF");
        
        if($(this).html() == "" ){
        	$('#uname').html("No username given<br><br>") 
        }
    });
        $("#roll_su").focusin(function(){
        $(this).css("background-color", "#FFFFCC");
    });
    $("#roll_su").focusout(function(){
        $(this).css("background-color", "#FFFFFF");
        
        if($(this).html() == "" ){
        	$('#roll').html("No Roll number given<br><br>") 
        }
    });
    $("#username_su").focusin(function(){
        $(this).css("background-color", "#FFFFCC");
    });
    $("#mobile_su").focusout(function(){
        $(this).css("background-color", "#FFFFFF");
        
        if($(this).html() == "" ){
        	$('#mobile').html("No mobile number given<br><br>") 
        }
    });
    
    $("#registration_su").focusin(function(){
        $(this).css("background-color", "#FFFFCC");
    });
    $("#registration_su").focusout(function(){
        $(this).css("background-color", "#FFFFFF");
        
        if($(this).html() == "" ){
        	$('#reg').html("No registration no. given<br><br>") 
        }
    });
    
    $("#password").focusin(function(){
        $(this).css("background-color", "#FFFFCC");
    });
    $("#password").focusout(function(){
        $(this).css("background-color", "#FFFFFF");
        
        if($(this).html() == "" ){
        	$('#pass').html("No pasword given<br><br>") 
        }
    });
    
    $("#confirm_password_su").focusin(function(){
        $(this).css("background-color", "#FFFFCC");
    });
    $("#confirm_password_su").focusout(function(){
        $(this).css("background-color", "#FFFFFF");
        
        if($(this).html() == "" ){
        	$('#conf_pass').html("No password Confirmation given<br><br>") 
        }
    });

    $("#email_su").focusin(function(){
        $(this).css("background-color", "#FFFFCC");
    });
    $("#email_su").focusout(function(){
        $(this).css("background-color", "#FFFFFF");
        
        if($(this).html() == "" ){
        	$('#email_err').html("No email given<br><br>") 
        }
    });

});

</script>
 -->

<?php
require 'require/footer.php'
?>