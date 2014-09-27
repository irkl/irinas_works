<?php

$passw = "1234";

if (!empty($_POST['name'])) {
	
	if ($_POST['pass'] == $passw) {
		 
			print_r ($_POST['name']);
			echo ', you are logged in!';   
		}
		
		else {
			echo "You are not logged in. Incorrect password.";
		}
}

 else {
	 echo 'You are not logged in. Enter your name.';
 }


?>