<?php

session_start();

if(empty($_SESSION['name']))
{
	header("location:index.php");
}

echo "Welcome  " . "<b>" . $_SESSION['name'] . "</b>" ;

echo "<br> <a href='logout.php'> Logout </a>";

?>