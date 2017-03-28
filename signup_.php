<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link rel="stylesheet" href="static/css/style.css">
		<script type="text/javascript" src="js/validation-signup.js"></script>
    		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script>
		  $( function() {
		    $( "#datepicker" ).datepicker();
		  } );
  	    </script>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					  <li><a class="" href="welcome.html"><img src="static/img/logo.png" height="25px" width="25px" /></a></li>
					  <li><a href="index.html">Student Login</a></li>
					  <li><a href="teacher_login.html">Teacher Login</a></li>
					  <li><a href="signup.html">Student Registration</a></li>
				</ul>
			</nav>
		</header>
		<div id="form">
		<div class="signup_box">
		<header style="text-align:center;"><h1> Student Registration Form </h1></header>
		<form name="signup_form" onsubmit="return validateForm()" method="post">
			<div id="personal-details">
					<fieldset><h2> Personal Information </h2>
					<p> First Name <input type="text" name="first_name" placeholder="First Name"> <br>
					<p> Last Name <input type="text" name="last_name" placeholder="Last Name">
					<p> Date of Birth <input name="dob" type="Date" id="datepicker"></p>
					<p>Age:<input name ="age" type="text" id="a" onclick="getAge()"></p>
					<p>Year of Enrolment<input name ="years" type="text" id="ye" name="year_start" placeholder="Year of 							Enrolment"> </p>
					<p>Branch: 
					<select type="dropdown" name="branch" id="a1" required="required">
					<option value="0">--Select--</option>
					<option value='BT'>BT</option>
					<option value='CHE'>CHE</option>
					<option value='CE'>CE</option>
					<option value='CSE'>CSE</option>
		-			<option value='EE'>EE</option>
					<option value='ECE'>ECE</option>
					<option value='IT'>IT</option>
					<option value='ME'>ME</option>
					<option value='MME'>MME</option>
					</select>
					</p>
					<p>Registration No:<input type="text" name="regno" placeholder="Registration No"> </p>
					<p>Roll No:<input type="text" name="rollno" placeholder="Roll No" id="a1" onclick="getAdminid()"> </p>
					<p>Address <textarea name="address" rows="2" cols="40" placeholder="Enter your address"> </textarea> </p>
					<p>Mobile No.<input type="number" name="mobile" placehlder="Enter ten digit mobile no."></p>
					<p>Hobbies<input type="checkbox" name="tab" value="Collection">Collection hobbies</input><br><br><input 					type="checkbox" name="tab" value="INDOOR">Indoor hobbies</input><br<</br><input type="checkbox" name="tab" 							value="OUTDOOR"> Outdoor</input></p>
					<p>Image<input type="file" name="filesToUpload[]" id="filesToUpload" multiple="multiple" ><output 					id="filesInfo"></output></p>
					</fieldset>
			</div>
		<div name="scholar" id="scholasticinfo">
		<fieldset><h2> Scholastic Information </h2>			
		<table>
			<tr>
			<th> Exam </th>
			<th> Board </th>
			<th> Year Of Passing </th>
			<th> Percentage </th>
			<th>Institute<th>
			</tr>
			<tr>
			<td> 10 </td>
			<td>
			<select name="Board">
			<option value="selectboard" selected>Select Board</option>
			<option value="cbse">CBSE</option>
		  	<option value="icse">ICSE</option>
		  	<option value="other">Other</option>
			</select>	
			</td>
			<td> <input type="text" name="Year of Passing" placeholder="Enter year of passing"></td>
			<td> <input type="text" name="Percentage" placeholder="Enter 10th Percentage"></td>
			<td> <input type="text" name="Institute" placeholder="Enter name of Institute"></td>
     		</tr>
			<tr>
			<td> 12 </td>
			<td>
			<select name="Board">
			<option value="selectboard" selected>Select Board</option>
			<option value="cbse">CBSE</option>
		  	<option value="icse">ICSE</option>
		  	<option value="other">Other</option>
			</select>	
			</td>
	     	<td> <input type="text" name="Year of Passing" placeholder="Enter year of passing"></td>
			<td> <input type="text" name="Percentage" placeholder="Enter 12th Percentage"></td>
			<td> <input type="text" name="Institute" placeholder="Enter name of Institute"></td>
			</table>
			<br>
			<table>
			<tr>
			<th> Programme </th>
			<td> 
			<select name="Programme">
			<option value=selectprogram>Select Program</option>
		   	<option>B.Tech</option>
		   	<option>M.Tech</option>
		   	<option>Phd</option>
		   	<option>MCA</option>
			</select>
			</td>
			<th> Branch </th>
			<td>
			<select name="Year">
			<option value="branch" selected>Select Branch</option>
			<option value="1">Biotechnology</option>
			<option value="2">Civil</option>
		 	<option value="3">Chemical</option>
			<option value="4">Electronic and Communication Engineering</option>
			<option value="5">Electrical Engineering</option>
			<option value="6">Computer Science</option>
			<option value="7">Information Technology</option>
			<option value="8">Mechanical</option>
			<option value="9">Metallurgy</option>
			<option value="10">Management Science</option>
			</select>	
			</td>
			</tr>
			</table>	
			<br>	
			<table>
			<tr>
			<th> Semester </th>
			<th> SGPA(/10) </th>
			</tr>
			<tr>
			<td><select name="semester">
			<option value="blank">Select Semester</option>
			<option value="firstsem">FirstSemester</option>
			<option value="secondsem">SecondSemester</option>
			<option value="thirdsem">ThirdSemester</option>
			<option value="fourthsem">FourthSemester</option>
			<option value="fifthsem">FifthSemester</option>
			<option value="sixthsem">SixthSemester</option>
            <option value="seventhsem">SeventhSemester</option>
			<option value="eighthsem">EighthSemester</option></select>
			</td>	
			<td> <input type="text" name="sgpa" placeholder="Enter SGPA"> </td>	
			</tr>
			<tr>
				<tr>
			<td><select name="semester">
			<option value="blank">Select Semester</option>
			<option value="firstsem">FirstSemester</option>
			<option value="secondsem">SecondSemester</option>
			<option value="thirdsem">ThirdSemester</option>
			<option value="fourthsem">FourthSemester</option>
			<option value="fifthsem">FifthSemester</option>
			<option value="sixthsem">SixthSemester</option>
            <option value="seventhsem">SeventhSemester</option>
			<option value="eighthsem">EighthSemester</option></select>
			</td>	
			<td> <input type="text" name="sgpa" placeholder="Enter SGPA"> </td>	
			</tr>
			<tr>
			<td><select name="semester">
			<option value="blank">Select Semester</option>
			<option value="firstsem">FirstSemester</option>
			<option value="secondsem">SecondSemester</option>
			<option value="thirdsem">ThirdSemester</option>
			<option value="fourthsem">FourthSemester</option>
			<option value="fifthsem">FifthSemester</option>
			<option value="sixthsem">SixthSemester</option>
            <option value="seventhsem">SeventhSemester</option>
			<option value="eighthsem">EighthSemester</option></select>
			</td>	
			<td> <input type="text" name="sgpa" placeholder="Enter SGPA"> </td>	
			</tr>
			<tr>
			<td><select name="semester">
			<option value="blank">Select Semester</option>
				    <option value="firstsem">FirstSemester</option>
				    <option value="secondsem">SecondSemester</option>
				    <option value="thirdsem">ThirdSemester</option>
				    <option value="fourthsem">FourthSemester</option>
				    <option value="fifthsem">FifthSemester</option>
				    <option value="sixthsem">SixthSemester</option>
                    <option value="seventhsem">SeventhSemester</option>
				    <option value="eighthsem">EighthSemester</option></select>
						</td>	
						<td> <input type="text" name="sgpa" placeholder="Enter SGPA"> </td>	
					</tr>
					<tr><tr>
						<td><select name="semester">
				  	<option value="blank">Select Semester</option>
				    <option value="firstsem">FirstSemester</option>
				    <option value="secondsem">SecondSemester</option>
				    <option value="thirdsem">ThirdSemester</option>
				    <option value="fourthsem">FourthSemester</option>
				    <option value="fifthsem">FifthSemester</option>
				    <option value="sixthsem">SixthSemester</option>
                    <option value="seventhsem">SeventhSemester</option>
				    <option value="eighthsem">EighthSemester</option></select>
						</td>	
						<td> <input type="text" name="sgpa" placeholder="Enter SGPA"> </td>	
					</tr>
					<tr><tr>
						<td><select name="semester">
				  	<option value="blank">Select Semester</option>
				    <option value="firstsem">FirstSemester</option>
				    <option value="secondsem">SecondSemester</option>
				    <option value="thirdsem">ThirdSemester</option>
				    <option value="fourthsem">FourthSemester</option>
				    <option value="fifthsem">FifthSemester</option>
				    <option value="sixthsem">SixthSemester</option>
                    <option value="seventhsem">SeventhSemester</option>
				    <option value="eighthsem">EighthSemester</option></select>
						</td>	
						<td> <input type="text" name="sgpa" placeholder="Enter SGPA"> </td>	
					</tr>
					<tr><tr>
						<td><select name="semester">
				  	<option value="blank">Select Semester</option>
				    <option value="firstsem">FirstSemester</option>
				    <option value="secondsem">SecondSemester</option>
				    <option value="thirdsem">ThirdSemester</option>
				    <option value="fourthsem">FourthSemester</option>
				    <option value="fifthsem">FifthSemester</option>
				    <option value="sixthsem">SixthSemester</option>
                    <option value="seventhsem">SeventhSemester</option>
				    <option value="eighthsem">EighthSemester</option></select>
						</td>	
						<td> <input type="text" name="sgpa" placeholder="Enter SGPA"> </td>	
					</tr>
					<tr><tr>
						<td><select name="semester">
				  	<option value="blank">Select Semester</option>
				    <option value="firstsem">FirstSemester</option>
				    <option value="secondsem">SecondSemester</option>
				    <option value="thirdsem">ThirdSemester</option>
				    <option value="fourthsem">FourthSemester</option>
				    <option value="fifthsem">FifthSemester</option>
				    <option value="sixthsem">SixthSemester</option>
                    <option value="seventhsem">SeventhSemester</option>
				    <option value="eighthsem">EighthSemester</option></select>
						</td>	
						<td> <input type="text" name="sgpa" placeholder="Enter SGPA"> </td>	
					</tr>
					<tr>
					</table>
				<table>
					<tr>
						<th> CGPA </th>
						<td> <input type="text" name="cgpa" placeholder="Enter your CGPA"> </td> 
					</tr>
				</table>
		</div>		
		<br><br>
		</fieldset>
		<fieldset><h4>LOGIN CREDENTIALS</h4>
				<label for="">Email:</label>
				<p><input type="password" placeholder="Enter mailid"password" name="password" ></p>
				<label for="">Password: </label>
                <p><input type="password" placeholder="Password" id="password" name="password" ></p>
                <label for="">Confirm password: </label>
                <p><input type="password" placeholder="Confirm Password" name="confirm_password" ></p>
                </fieldset>
				  </select>
 				<button type="submit" class="signupbtn button" align:center'>Signup</button>
			</form>
		</div>
	</body>
</html>
