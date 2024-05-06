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
<body class="w3-mobile">

    <div class="boatImage">
        <!-- the nav bar starts here -->
        <nav class="w3-mobile">
            <ul class="navbar w3-navbar w3-light-grey w3-mobile">

                <a href="index.php">
                    <img class="logo w3-left" src="./images/logo.png">
                </a>

                <div class="list-nav w3-right">
                    <li><a class="w3-hover-white" href="boatdrivers.php">Book a Boat</a></li>
                    <li><a class="w3-hover-white" href="">Register as a Driver</a></li>
                    <li><a class="w3-hover-white" href="login.php">Login</a></li>
                </div>
                
            </ul>
        </nav>
        <!-- nav bar ends here -->

        <!-- center picture -->
        <div class="w3-center">
            <div class="formHead">
                <center>
                    <h2 class="regHead">Register as a Driver</h2>
                    <form action="server/register.php" method="POST">
                        <div class="">
                            <input class="inputL w3-input" type="text" name="name" placeholder="Enter full name here">
                        </div><br>

                        <div class="">
                            <input class="inputL w3-input" type="text" name="phone" placeholder="Enter Phone number here">
                        </div><br>

                        <div class="">
                            <input class="inputL w3-input" type="text" name="address" placeholder="Enter address here">
                        </div><br>

                        <div class="">
                            <input class="inputL w3-input" type="password" name="pwd" placeholder="Enter password here">
                        </div><br>

                        <div class="genHead w3-row">
                            <div class="w3-col m5 w3-text-white">
                                <input id="male" type="radio" name="gender" value="male"> <label for="male">Male</label>
                                <input id="female" type="radio" name="gender" value="female"> <label for="female">Female</label>
                            </div>

                            <!-- <div class="w3-col m5">
                                <select name="select_time" class="select w3-left">
                                    <option value="male">6AM</option>
                                    <option value="male">7AM</option>
                                    <option value="male">8AM</option>
                                    <option value="male">9AM</option>
                                    <option value="male">10AM</option>
                                    <option value="male">11AM</option>
                                    <option value="male">12PM</option>
                                    
                                </select>
                            </div> -->
                        </div> <br>
                        
                        <div>
                            <button name="register" class="w3-btn w3-teal w3-round-large" type="submit">Register</button>
                        </div>
                    </form>
                </center>
            </div>
        </div>
    <!-- center end here -->
    </div>

    <footer class="w3-footer w3-light-grey w3-center w3-padding">
        <p>Created Group Red 2024</p>
    </footer>

    <script src="./js/app.js"></script>
</body>
</html>
//register.php
