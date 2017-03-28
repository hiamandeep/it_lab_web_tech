<?php
require 'require/header.php'
?>
	<body>
		<div class="signup_box">
		<h1>Teacher Registration Page</h1>
			<form action="welcome.html" name="myform2" onsubmit="return(validate_signup_teacher_form())">
				<label for="">Name: </label> 
				<p><input type="text" placeholder="Enter username" name="name" ></p>
				<div class="error" id='uname'></div>
				<label for="">Gender</label>
				<input type="radio" name="gender">Male</input>
				<input type="radio" name="gender">Female</input>
				<div class="error" id='gen'></div>
				<br><br>
				<label for="">Mobile No: </label>
				<p><input type="number" placeholder="Enter mobile no" name="mobile" ></p>
				<div class="error" id='mobile'></div>
			
				<label for="">Password: </label>
                <p><input type="password" placeholder="Password" id="password" name="password" ></p>
				<div class="error" id='pass'></div>

                <label for="">Confirm password: </label>
                <p><input type="password" placeholder="Confirm Password" name="confirm_password" ></p>
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


 				<button type="submit" class="signupbtn button">Signup</button>
			</form>
		</div>

<?php
require 'require/footer.php'
?>