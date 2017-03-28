<?php
require 'require/header.php'
?>
	<body>
		<div class="login_box">
		<h2>Teacher Login</h2>

			<form action="welcome.html" method="GET" name="myform" onsubmit="return(validate_login_form());">
				<label for="">Username: </label>
				<p><input type="text" placeholder="Enter username" name="username"></p>
				<div class="error" id="uname"></div>
				<label></label>
				<label for="">Password: </label>
				<p><input type="password" placeholder="Enter Password" name="password"></p>
				<div class="error" id="pass"></div>
				<input type="submit" class="button1">

			</form>

		</div>

<?php
require 'require/footer.php'
?>
