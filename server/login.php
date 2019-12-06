<?php 

	require_once ("server.php");
	require_once ("Redirect.php");

	if (isset($_POST['signin'])) {
		
		/////////////// get all the global post /////////////////////////////
		$phone = mysqli_real_escape_string($dbconnection, $_POST['uid']);
		$password = mysqli_real_escape_string($dbconnection, $_POST['pwd']);
		///////////////////// ends here ////////////////////////////////////

		//////////////// check if the fields are empty ///////////////////
		$values = (empty($username) || empty($password)) ? true : false ;
		/////////////////// ends here ////////////////////////////////////

		if ($values) {
			Redirect::to('../login.php?msg=emptyfields');
		} else {

			
			$sql = ("SELECT * FROM users WHERE phone_number='$phone'");
			$bind = $dbconnection->query($sql);
			$result = mysqli_fetch_array($bind);

			$phone_no = $result['phone_number'];

			if ($phone != $phone_no) {
				Redirect::to('../login.php?msg=phone number does not match');
			} else {

				$sql = ("SELECT * FROM users WHERE passcode='$password'");
				$bind = $dbconnection->query($sql);
				$result = mysqli_fetch_array($bind);

				$pwd = $result['passcode'];	

				$verify_pwd = password_verify($password, $pwd);

				if ($verify_pwd) {
					Redirect::to('../login.php?msg=password does not match');
				} else {

					$sql = ("SELECT * FROM users WHERE phone_number='$phone'");
					$bind = $dbconnection->query($sql);
					$result = mysqli_fetch_array($bind);

					session_start();

					$_SESSION['phone'] = $result['phone_number'];
					Redirect::to('../driver_profile.php?msg=login successful');
				}			
			}
		}
	}