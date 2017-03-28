<?php
require 'require/header.php'
?>
	<body>
		<div class="login_box">
		<h2>Student Login</h2>

			<form action="checkuser.php" method="post" name="myform" onsubmit="return(validate_login_form());">
				<label for="">Username: </label>
				<p><input type="text" placeholder="Enter username" name="username" id="username_sl"></p>
				<div class="error" id="uname"></div>
				<label></label>
				<label for="">Password: </label>
				<p><input type="password" placeholder="Enter Password" name="password" id="password_sl" ></p>
				<div class="error" id="pass"></div>
				<input type="submit" class="button1">

			</form>
		</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src= static/js/script.js></script>

<script>