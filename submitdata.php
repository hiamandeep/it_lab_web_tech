<?php
if($_SERVER['REQUEST_METHOD']=='POST')

{

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "student_db";



$name = "'" . $_POST['name'] . "'";
$pwd = "'" . $_POST['password'] . "'";
$roll = "'" . $_POST['roll'] . "'";
$mobile = "'" . $_POST['mobile'] . "'";




try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO student (name, roll, password, mobile)
    VALUES ($name, $roll, $pwd, $mobile)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;



}
?>
