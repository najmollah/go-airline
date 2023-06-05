
    
    <?php

session_start();

include "db_conn.php";



$uname= ($_POST['uname']); 
$pass= ($_POST['password']);

if(empty($uname)) {

header ("Location: index.php?erro-User Name is required");
 exit();

}

else if (empty($pass)) {

header("Location: index.php?error=Password is required");
 exit();
}
$sql = "SELECT d.to, d.from, f.departure_date, f.return_date, (e.destination_fee + e.class_fee) AS total_amount
FROM flights f, destination d, fee e, ticket_list t
WHERE d.destination_id = f.destination_id AND d.destination_id = e.destination_id AND e.fee_id = t.fee_id";

$result= mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) { 
    $row= mysqli_fetch_assoc($result); 
    if($row['user_name'] === $uname && $row['password'] === $pass) {
      echo "Logged In!"; 
      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['id'] = $row['id']; 
      header("Location: home.php");
      exit();

} else{

header("Location: index.php?error=Incorrect User Name or Password");
 exit();
}


} else {

header("Location: index.php");

exit();
}