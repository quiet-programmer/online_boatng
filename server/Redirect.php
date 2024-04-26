<?php

	class Redirect {

		static function to($location){
			if ($location) {
				header('location: '.$location);
				exit();
			}
		}
	}
	//redirect.php
	