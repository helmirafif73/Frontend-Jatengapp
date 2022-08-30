<?php
session_start();

if( isset($_SESSION['akses']) )
{
  header('location:'.$_SESSION['akses']);
  exit();
}

$error = '';
if( isset($_SESSION['error']) ) {

  $error = $_SESSION['error']; 

  unset($_SESSION['error']);
} ?>

<?php echo $error;?>
<!DOCTYPE html>
<html>
<head>
	<title>BANK JATENG</title>
	<meta name="description" content="Customized bootstrap login forms with multiple variants. Easy to customize.">
	<meta name="keywords" content="Bootstrap Modal, Login Form, Modal Login, Registration Form, Form, Bootstrap, Login, Registration">
	<!--Import Google Icon Font-->
      <link href="fonts/material.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
       <meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>Card</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
			body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
	body{
		font-family: "Lato", sans-serif;

	}
	.mySlides {display: none
	}
  	.h1{
		  font-size: 32px;
		  color : black;
  	}
  	.footer{
		  font-size: 14px;
		  color : black;
	  }
	.h2{
		font-size : 25px;
		color : black;
	  }
	.h3{
		font-size : 25px;
		color : black;
	  }

  </style>

</head>
<body>
    </div>
	<button onclick="document.getElementById('01').style.display='block'" style="max-width:auto; ">Get Started</button>
    <div id="01" class="modal">
    </div>
    
    <button onclick="document.getElementById('02').style.display='block'" style="max-width:auto;">Login</button>
    <div id="02" class="modal">
  
	<div class="container" style="background-color:#f1f1f1">
	<form method="POST" action="check-login.php">
							<div id="card">
							<div id="card-content">
							<div id="card-title">
							</div>
						</form>
						<label for="icon_prefix">Phone Number </label>
							<input type="text" name="username" id="icon_prefix" class="validate">
	  						<label for="icon_prefix">Password </label>
							<input type="password" name="password" id="icon_prefix" class="validate">
							<div class="row">
								<div class="col s12 m12 l12 center">
									<input name="login" type="submit" value="Login" class="modal-action modal-close waves-effect waves-light btn blue lighten+10">
								</div>
							</div>	

      <button type="button" onclick="document.getElementById('02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
	<!-- Page content -->
	<div class="w3-content" style="max-width:2000px;margin-top:46px">
	  
			<!-- Automatic Slideshow Images -->
		
				<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
				<h3></h3>
				<p><b>Wellcome to Voulux Finance UI Kit</b></p>  
	</div>


<!-- Image of location/map -->

	<!-- Footer -->
<footer class="w3-container w3-padding-29 w3-center w3-opacity w3-transparant w3-xlarge">

  <div class="footer" class="w3-medium" align="center">
                  	<?php
		$etdy = '2019';
		echo sprintf('Copyright &copy; %s <a href="%s">%s</a>PT Pura Nusa Persada',
		(date("Y")==$etdy) ? $etdy : $etdy.' - '.date("Y"),
		'',
		'' );
		?> All rights reserved.
	</div>	
	
</footer>

	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $( document ).ready(function(){
          Materialize.updateTextFields();
          $('.modal').modal();
        })
	  </script>
	  <script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>