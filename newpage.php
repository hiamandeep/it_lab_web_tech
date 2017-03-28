<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// print_r($_POST);
	 echo "<b>Thanks for signing up!</b><br><br>";

		foreach ($_POST as $key => $value) {
		echo "<b>$key</b> :- $value<br>";
	};

	echo $_POST['name'];
}

?>
