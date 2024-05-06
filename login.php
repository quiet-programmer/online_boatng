<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
    <title>Login Here</title>
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
        <nav>
            <ul class="navbar w3-navbar w3-light-grey">

                <a href="index.php">
                    <img class="logo w3-left" src="./images/logo.png">
                </a>

                <div class="list-nav w3-right">
                    <li><a class="w3-hover-white" href="boatdrivers.php">Book a Boat</a></li>
                    <li><a class="w3-hover-white" href="register.php">Register as a Driver</a></li>
                    <li><a class="w3-hover-white" href="login.php">Login</a></li>
                </div>
                
            </ul>
        </nav>
        <!-- nav bar ends here -->

        <!-- center picture -->
        <div class="w3-center">
            <div class="formHead">
                <center>
                    <h2 class="regHead">Login</h2>
                    <form action="server/login.php" method="POST">
                        <div class="username">
                            <input class="inputL w3-input" type="text" name="uid" placeholder="Enter phone number here">
                        </div><br>
                        <div>
                            <input class="inputL w3-input" type="password" name="pwd" placeholder="Enter Password here">
                        </div><br>
                        <div>
                            <button name="signin" class="w3-btn w3-teal w3-round-large" type="submit">Login</button>
                        </div>
                    </form>
                </center>
            </div>
        </div>
    <!-- center end here -->
        <footer class="w3-footer w3-bottom w3-light-grey w3-center w3-padding">
        <p>Created Group Red 2019</p>
        </footer>
    </div>


    <script src="./js/app.js"></script>
</body>
</html>
//login.php