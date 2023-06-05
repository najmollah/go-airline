
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">

	<title>Airplane Ticket Booking</title>

</head>
<body>
	<h1>Registration Form</h1>
	<form action="SignUpQuery.php" method="post">
    <p>Creating New Account</p>
        
  <label for="name">Full Name:</label>        
  <input type="text" id="name" name="name" required> 
        <br>
        
  <label for="email">Email or Username:</label>
  <input type="text" id="email" name="uname" required>
  <br>
        
  <label for="password">Set Password:</label>
  <input type="password" id="password" name="pass" required>
  <br>
   <label for="password">Confirm Password:</label>
  <input type="password" id="password" name="passc" required>
  <br>         
               
  <label for="pay_id">Pay Card ID:</label>
  <input type="text" id="pay_id" name="pay_id" required>
  <br>
        
  <label for="contacts">Contacts:</label>
  <input type="text" id="contacts" name="contact" required>
  <br>
 

  <input type="submit" value="Sign Up">
</form>
</body>
</html>