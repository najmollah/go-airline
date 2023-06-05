


<?php
$servername = "localhost";
$uname = "uname";
$pass = "pass";
$dbname = "go_airlines";

// Create connection
$conn = new mysqli($servername, $uname, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name,uname,pass,pay_id,contact) 
values ('$name', '$uname', '$pass', '$pay_id', '$contact')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>