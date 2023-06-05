<!DOCTYPE html>
<html lang="en">
<head>
<title>FrontPage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" href="FrontPageStyleSheet.css">
    
<link rel="stylesheet" 
href="FrontPage.css">
    
</head>
<body>


<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px">
  <img class="w3-image" src="plane.jpg" alt="Me" width="1500" height="600">
  <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
  
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">GO AIRLINES</h1>
    <h3 class="w3-hide-medium w3-hide-small">Ticket Booking Website</h3>
  </div>
  
  <!-- Navbar (placed at the bottom of the header image) -->
  <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
    <a href="http://localhost/Airline%20Website/profile.php" class="w3-bar-item w3-button">Profile</a>
    <a href="http://localhost/Airline%20Website/flights.php" class="w3-bar-item w3-button">Flight Rate</a>
    <a href="#portfolio" class="w3-bar-item w3-button">Contact</a>
  </div>
</header>

<!-- Navbar on small screens -->
<div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
<div class="w3-bar w3-light-grey">
  <a href="#" class="w3-bar-item w3-button">Profile</a>
  <a href="#portfolio" class="w3-bar-item w3-button">Flight Rate</a>
  <a href="#contact" class="w3-bar-item w3-button">Contact</a>
</div>
</div>
<!-- Page content -->
<div class="w3-content w3-padding-large w3-margin-top" id="portfolio">
    
    
    
    

  <!-- Images  -->
 <div class="w3-display-container">
    
  <img src="Airport.jpg" alt="Airport" class="w3-image w3-margin-top" width="1000" height="500">  
    
  
 
<div class="w3-display-bottomleft">
    
    <p class="cont" style="color:white;">
              CONTACT:  01145210394 | EMAIL:
    <a href="mailto:najmun.naj@northsouth.edu"> najmun.naj@northsouth.edu</a>
        
    </p>
        
        
        </div>
    </div>
    
    
    
    
    
    
    
    
  <!-- Booking -->
  <div class="w3-light-grey w3-padding-large w3-padding-16 w3-margin-top" id="booking">
    <h3 class="w3-center">Book a Flight</h3>
    <hr>
   
      
<!-- php work-->
     
    <form action="submit-form.php" method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		
		<label for="from">From:</label>
		<input type="text" id="from" name="from" required><br><br>
		
		<label for="to">To:</label>
		<input type="text" id="to" name="to" required><br><br>
		
		<label for="date">Date:</label>
		<input type="date" id="date" name="date" required><br><br>
		
		<label for="class">Class:</label>
		<select id="class" name="class">
			<option value="economy">Economy</option>
			<option value="business">Business</option>
			<option value="first">First</option>
		</select><br><br>
		
		<input type="submit" value="Submit">
	</form><br>


  </div>
</div>

</body>
</html>