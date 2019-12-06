<?php
	
	require_once ("server.php");
	require_once ("Redirect.php");

	if (isset($_POST['register'])) {
		
		/////////////// get all the global post /////////////////////////////
		$full_name = mysqli_real_escape_string($dbconnection, $_POST['name']);
		$address = mysqli_real_escape_string($dbconnection, $_POST['address']);
		$phone = mysqli_real_escape_string($dbconnection, $_POST['phone']);
		
		$gender = mysqli_real_escape_string($dbconnection, $_POST['gender']);
		$pwd = mysqli_real_escape_string($dbconnection, $_POST['pwd']);
		////////////////////////// ends here ///////////////////////////////


		///////////////// check if the fields are empty ///////////////////
		$values = (empty($full_name) || empty($address) || empty($phone) ||empty($gender) || empty($pwd)) ? true : false ;
		/////////////////// ends here ////////////////////////////////////

		////////////////// check the registration ///////////////////////
		if ($values) {
			Redirect::to('../register.php?empty name');
		} else {

			$sql = ("SELECT * FROM users WHERE phone_number='$phone'");
			$sqli = $dbconnection->query($sql);
			$result = mysqli_fetch_array($sqli);
        	$phone_number = $result['phone_number'];

			if ($phone === $phone_number) {
				Redirect::to('../register.php?error=phone number already exists');
			} else {

				if (strlen($pwd) <= 6) {
					Redirect::to('../register.php?msg=password is too short');
				} else {

					$pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);

					$sql = $dbconnection->prepare("INSERT INTO users(full_name, address, phone_number, gender, passcode) VALUES(?,?,?,?,?)");
					$sql->bind_param("sssss", $full_name, $address, $phone, $gender, $pwd_hash);
					$sql->execute();
					Redirect::to('../login.php?msg=registration is successful');
				}
			}
		}
		/////////////////////////// ends here //////////////////////////
	}