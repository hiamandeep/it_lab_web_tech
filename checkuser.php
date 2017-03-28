<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "student_db";

$uname =  $_POST['username'] ;
$pass = $_POST['password'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // $sql = "SELECT name FROM student WHERE name = $uname and password = $pass";

    $select = $conn->prepare("SELECT * FROM student WHERE name = '$uname' and password = '$pass' ");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    $data=$select->fetch();


    if($data['name'] == $uname && $data['password'] == $pass && $data['status'] == 'active'){


        // echo "Login success!";
        $_SESSION['name'] = $uname;
        header("location:profile.php");
    }

    else
    {
        echo "User not found!";
    }
 
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
