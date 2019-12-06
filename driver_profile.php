<?php

////// get the server file and Redirect file //////////
require_once "server/server.php";
require_once "server/Redirect.php";
///////////// ends here //////////////////////////////

session_start();

//get the session of the user tha was logged in
if (isset($_SESSION['phone'])) {

    //declare the variable
    $phone = $_SESSION['phone'];

    //////// get all the data in the user table ///////
    //and display it to the html dcument //////////
    $sql = "SELECT * FROM users WHERE phone_number='$phone'";
    $bind = $dbconnection->query($sql);
    $result = mysqli_fetch_array($bind);

    $name = $result['full_name'];
    $address = $result['address'];
    $phone_number = $result['phone_number'];
    $gender = $result['gender'];
    $des_of_engine = $result['des_of_engine'];
    $working_time = $result['working_time'];
    //////////////////ends here////////////////////////


} else {
    ///// if the user is not logged in
    //// this loggeds the user out.
    $msg = "Sorry seems you are not logged in";
    Redirect::to('index.php?error='.$msg);
}

?>
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

    <div class="boatImage2">
        <!-- the nav bar starts here -->
        <nav>
            <ul class="navbar w3-navbar w3-light-grey">

                <a href="index.php">
                    <!-- site logo -->
                    <img class="logo w3-left" src="./images/logo.png">
                </a>

                <div class="list-nav w3-right">
                    <!-- <li><a class="w3-hover-white" href="boatdrivers.php">Book a Boat</a></li>
                    <li><a class="w3-hover-white" href="register.php">Register as a Driver</a></li> -->
                    <li><a class="w3-hover-white" href="edit.php">Edit profile</a></li>

                    <li><a class="w3-hover-white" href="logout.php">Logout</a></li>
                </div>
                
            </ul>
        </nav>
        <!-- nav bar ends here -->

        <!-- center picture -->
        <div class="w3-center">
            <div class="">
                <div class="w3-card-4">
                    <img class="pro_img w3-circle w3-padding" src="drivers_image/man1.jpg" style="width: 300px; height: 250px;">
                     <center>
                        <div class="w3-padding">
                            <input class="w3-btn" type="file" name="image">
                            <button class="w3-btn" type="submit" name="img_submit">Upload</button>
                        </div>
                    </center>
                </div>
                
            </div>
        </div>
        <div class="w3-text-white w3-container">
            <h1><u>Your Details</u></h1>
            <!-- where all the data fetched from the data is displayed -->
            <h4>Name: <?= $name; ?></h4>
            <h4>Adress: <?= $address; ?></h4>
            <h4>Phone Number: <?= $phone_number; ?></h4>
            <h4>Gender: <?= $gender; ?></h4>
            <h4>Engine Description: <?= $des_of_engine; ?></h4>
            <h4>Working Time: <?= $working_time; ?></h4>
        </div>
    <!-- center end here -->
        <footer class="w3-footer w3-light-grey w3-center w3-padding">
        <p>Created Group Red 2019</p>
        </footer>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>