<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
    <title>Welcome To the Bonny Online Booking System</title>
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
	    .boatImages{
			background: url('images/boats.jpg');
			width: 100%;
			height: 750px;
		}
    </style>
</head>
<body>

	<div class="boatImage">
		<!-- the nav bar starts here -->
		<!-- the nav bar starts here -->
        <nav>
            <ul class="navbar w3-navbar w3-light-grey">

                <a href="index.php">
                    <img class="logo w3-left" src="./images/logo.png">
                </a>

                <div class="list-nav w3-right">
                    <li><a class="w3-hover-white" href="boatdrivers.php">Book a Boat</a></li>
                    <li><a class="w3-hover-white" href="register.php">Register as a Driver</a></li>
                    <li><a class="w3-hover-white" href="login.php">Login</a></li>
                    <li><a class="w3-hover-white" href="#about">About</a></li>
                    <li><a class="w3-hover-white" href="#contact">Contact</a></li>
                </div>
                
            </ul>
        </nav>
        <!-- nav bar ends here -->
		<!-- nav bar ends here -->

		<!-- center picture -->
		<div class="w3-center">
			<div class="textHead">
				<h1><b>Welcome to Bonny</b></h1>
				<h1><b>Boating System</b></h1>
				<h2><b>Easy</b>
					<span class="txt-type" data-wait="3000" data-words='["Booking", "Sailing"]'></span>
				</h2>
			</div>
		</div>
	<!-- center end here -->

	</div>

	<center>
		<div class="w3-card-4 w3-center">

			<div id="about" class="about w3-card-4">
				<h1 class="w3-center">About</h1>
			<br>
			<p class="w3-padding">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div> <br>

			<div id="contact" class="contact w3-card-4">
				<h1>Contact Us</h1>
				<h4>You can send us Mail here</h4>
				<center>
					<form>
						<input class="input w3-input w3-border" type="text" name="" placeholder="enter your mail">
						<textarea class="textarea" placeholder="what do you want?"></textarea> <br>
						<button class="w3-btn w3-teal w3-round-large">Send</button>
					</form> <br>
				</center>
			</div><br>
		</div>
	</center>

	<footer class="w3-footer w3-light-grey w3-center w3-padding">
		<p>Created Group Red 2019</p>
	</footer>

	<!--script to hide and show the drop down-->
		<script>

			function dropFunc(id) {

			  let x = document.getElementById(id);

			  if (x.className.indexOf("w3-show") == -1) {

			    x.className += " w3-show";

			  } else { 

			    x.className = x.className.replace(" w3-show", "");

			  }

			}

		</script>
    <script src="./js/app.js"></script>
</body>
</html>