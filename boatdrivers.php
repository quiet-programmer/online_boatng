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

    <div class="boatImage1">
        <!-- the nav bar starts here -->
        <nav>
            <ul class="navbar w3-navbar w3-light-grey">

                <a href="index.php">
                    <img class="logo w3-left" src="./images/logo.png">
                </a>

                <div class="list-nav w3-right">
                    <li><a class="w3-hover-white" href="">Book a Boat</a></li>
                    <li><a class="w3-hover-white" href="register.php">Register as a Driver</a></li>
                    <li><a class="w3-hover-white" href="login.php">Login</a></li>
                </div>
                
            </ul>
        </nav>
        <!-- nav bar ends here -->

        <!-- center picture -->
        <div class="w3-center">
            <div class="w3-card-12">
                <h2 style="color: #fff;">List and Names of Boat Drivers</h2>
            </div>
        </div>

        <!-- list of boat drivers -->
        <div class="w3-row w3-container" style="float: left;">

            <div style="background-color: #fff; margin: 10px; border-radius: 10px;" class="w3-col m3 w3-card-4 w3-padding">
                <div class="w3-card-4 w3-padding">
                    <img style="width: 100%; height: 100%;" src="drivers_image/man1.jpg">
                </div>
                <p><b>Name:</b>Man 1</p>
            </div>

            <div style="background-color: #fff; margin: 10px; border-radius: 10px;" class="w3-col m3 w3-card-4 w3-padding">
                <div class="w3-card-4 w3-padding">
                    <img style="width: 100%; height: 100%;" src="drivers_image/man2.jpg">
                </div>
                <p><b>Name:</b>Man 1</p>
            </div>

            <div style="background-color: #fff; margin: 10px; border-radius: 10px;" class="w3-col m3 w3-card-4 w3-padding">
                <div class="w3-card-4 w3-padding">
                    <img style="width: 100%; height: 100%;" src="drivers_image/man3.jpg">
                </div>
                <p><b>Name:</b>Man 1</p>
            </div>

            <div style="background-color: #fff; margin: 10px; border-radius: 10px;" class="w3-col m3 w3-card-4 w3-padding">
                <div class="w3-card-4 w3-padding">
                    <img style="width: 100%; height: 100%;" src="drivers_image/man4.jpg">
                </div>
                <p><b>Name:</b>Man 1</p>
            </div>

            <div style="background-color: #fff; margin: 10px; border-radius: 10px;" class="w3-col m3 w3-card-4 w3-padding">
                <div class="w3-card-4 w3-padding">
                    <img style="width: 100%; height: 100%;" src="drivers_image/man5.jpg">
                </div>
                <p><b>Name:</b>Man 1</p>
            </div>

            <div style="background-color: #fff; margin: 10px; border-radius: 10px;" class="w3-col m3 w3-card-4 w3-padding">
                <div class="w3-card-4 w3-padding">
                    <img style="width: 100%; height: 100%;" src="drivers_image/man5.jpg">
                </div>
                <p><b>Name:</b>Man 1</p>
            </div>

        </div>
    <!-- center end here -->
        
    </div>

    <footer class="w3-footer w3-light-grey w3-center w3-padding">
        <p>Created Group Red 2019</p>
        </footer>

    <script src="./js/app.js"></script>
</body>
</html>