<?php
require 'require/header.php'
?>
	<body>
		<div class="signup_box">
		<header style="text-align:center;">
			<h1> Student Registration Form </h1>
		</header>
			<form method="post" action="submitdata.php" name="myform2" onsubmit="return(validate_new_signup_form())">
				<fieldset><h2> Personal Information </h2>
				<div id="personal-details">
				<table>
						<tr>
							<th> First Name </th>
							<td> <input type="text" name="first_name" placeholder="First Name"></td>
							<th> Last Name </th>
							<td> <input type="text" name="last_name" placeholder="Last Name"> </td>
						</tr>
						<tr>
							<th> Date of Birth </th>
							<td> <input type="text" name="first_name" placeholder="date/month/year"> </td>
							<th> Registration No: </th>
							<td> <input type="text" name="last_name" placeholder="Registration No"> </td>
						</tr>
						<tr>
							<th> Address </th>
							<td> <textarea name="address" rows="2" cols="40" placeholder="Enter your address"> </textarea> </td>
						</tr>
						<tr>
						<th>Mobile No. </th>
						<td>
				<p><input type="number" placeholder="Enter mobile no" name="mobile" id="mobile_su" ></p>
				<div class="error" id='mobile'></div></td>
						<th>Gender</th>
						<td><input type="radio" name="gender">Male</input>
						<input type="radio" name="gender">Female</input></td>
						<br><br></tr>
						<tr>
						<th>hobbies<th>
						<input type="checkbox" name="hobbies" value="Indoor">Indoor hobbies
						<input type="checkbox" name="vehicle" value="Outdoor">Outdoor hobbies
						<input type="checkbox" name="vehicle" value="Collection">Collection hobbies
						</table>

						               <b> upload image</b>
                <!-- <form action="/action_page.php"> -->
                  <input type="file" name="pic" accept="image/*">
  <!--                 <input type="submit"> -->
            <!--     </form> -->
						</div>
						</fieldset>
						<fieldset><h2> Scholastic Information </h2>
						<div id="scholasticinfo">


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


				<label for=""><b>Roll No: </b></label>
				<input type="number" style="width:34%" placeholder="Enter Rollno" name="roll" id="roll_su" >
				<div class="error" id='roll'></div>
				<br>

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
				<label for="">Username: </label> 
				<p><input type="text" placeholder="Enter username" name="name" id="username_su" ></p>
				<div class="error" id='uname'></div>
				<label for="">Email: </label>
				<p><input type="email" placeholder="Enter email" name="email" id="email_su" ></p>
				<div class="error" id='email_err'></div>
				<label for="">Password: </label>
                <p><input type="password" placeholder="Password" id="password" name="password" ></p>
				<div class="error" id='pass'></div>

                <label for="">Confirm password: </label>
                <p><input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password_su" ></p>
				<div class="error" id='conf_pass'></div>
                </fieldset>
				  </select>
 				<button type="submit" class="signupbtn button" align:center'>Signup</button>
			</form>
		</div>
	<script src= static/js/script.js></script>
	</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<?php
require 'require/footer.php'
?>