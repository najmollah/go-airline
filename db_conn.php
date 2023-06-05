<?php
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "go_airlines";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
if(!$conn){
    echo "connection Failed";
}
?>



