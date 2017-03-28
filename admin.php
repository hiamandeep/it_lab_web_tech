<?php
// echo "<table style='border: solid 1px black;'>";
// echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

// class TableRows extends RecursiveIteratorIterator { 
//     function __construct($it) { 
//         parent::__construct($it, self::LEAVES_ONLY); 
//     }

//     function current() {
//         return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
//     }

//     function beginChildren() { 
//         echo "<tr>"; 
//     } 

//     function endChildren() { 
//         echo "</tr>" . "\n";
//     }
// }

// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname = "student_db";

// try {

//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $stmt = $conn->prepare("SELECT * FROM student"); 
//     $stmt->execute();

//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
//     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
//         echo $v;
//     }
// }

// catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
// $conn = null;
// echo "</table>";



echo "<h1> Admin Panel </h1>";


$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "student_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

echo "<table>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>" . "<td>" . "id: " . $row["id"] . " &nbsp &nbsp &nbsp " . "</td>" . "<td>" .  $row["name"] . ": &nbsp &nbsp &nbsp " . "</td>";
    
 if($row["status"] == 'active'){
    echo "<td>" . "<a href='/web_lab/toggle.php?u_id=$row[id]&type=$row[status]'> Deactivate</a>" . "</td>" . "</tr>";
    }
 else{
    echo "<td>" . "<a href='/web_lab/toggle.php?u_id=$row[id]&type=$row[status]'> activate</a>" . "</td>" . "</tr>";
 }
    
    }

echo "</table>";

} else {
    echo "0 results";
}

mysqli_close($conn);



?>