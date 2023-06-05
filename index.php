<!DOCTYPE html>

<html> 
    <head>
        <style>
  <?php include "style.css" ?>
</style>
        
        
        
        
        <style>
		body {
			background-image: url('plane.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			font-family: Arial, sans-serif;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 50px;
			background-color: rgba(255, 255, 255, 0.8);
		}

		h1 {
			font-size: 36px;
			text-align: center;
			margin-top: 0;
		}

		p {
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 20px;
		}

		button {
			display: block;
			margin: 0 auto;
			padding: 10px 20px;
			font-size: 18px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>

        

<title> LOGIN </title> 
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    
  
	<div class="container">
		<h1>WELCOME TO GO AIRLINES</h1>
		<p>ABOUT: The airline reservation and ticket system project is a software solution designed to simplify the airline
reservation process and enable travelers to book flights, purchase tickets, and manage their reservations
online. The system provides a user-friendly interface that enables customers to easily search for flights
based on their travel dates, destination, and preferred airline. This system offers a number of benefits for both customers and airlines. For customers, it offers the
convenience of being able to book flights and purchase tickets from anywhere with an internet
connection. For airlines, it streamlines the reservation process, reduces overhead costs.
The airline reservation and ticket system typically includes several modules, including a user registration
and login system.</p>
		
	</div>
    

<form action="login.php" method="post"> 
    <h2>LOGIN</h2>

<?php if(isset($_GET['error'])) { ?>
     <p class="error"> <?php echo $_GET['error']; ?></p>

<?php } ?>

<label> User Name</label>
<input type="text" name="uname" placeholder="User Name"><br> 
<label>Password</label>
<input type="password" name="password" placeholder="Password"><br>

<button type="submit">Login</button>
    <br>
    <br>
<a href="http://localhost/Airline%20Website/SignUp.php">Or Sign Up</a>
</form>

</body>
</html>