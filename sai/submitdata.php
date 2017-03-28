<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "student_db";


$name = "'amandeep'";
$roll = "14";
$gender = "'male'";
$mobile = "70553443";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO student (name, roll, gender, mobile)
    VALUES ($name, $roll, $gender, $mobile)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
