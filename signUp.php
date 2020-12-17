<?php 
include "connection.php";
 ?>
 
 <?php 
if(isset($_POST['sign_up'])) {

// print_r($_POST);

	$name = $_POST['user_name'];
	$password1 = $_POST['user_password'];
	$password2 = $_POST['user_password_repeat'];
	$email = $_POST['user_email'];

	if(!empty($name) && !empty($password1) && !empty($password2) && !empty($email)) {

		$sql = "SELECT `user_email` FROM `user_login` WHERE `user_email` = '$_POST[user_email]'";
		$res = $db->query($sql);
		$num = $res->num_rows;

		if($num == 0) {
			if ($password1 === $password2) {
				# code...
				$sql1 = "INSERT INTO `user_login`(`user_id`,`user_name`,`user_email`,`user_password`) VALUES (NULL, '$name','$email','$password1')";

				$db->query($sql1);
				header("location:index1.php");
				}
			else {
				print "Password does not match!!!!";
				// header("location:index.php");
			}
			}

				
		else {
			print "Email already exist";
			// header("location:index.php");
		}
	
	}
	else {
	print "Please fill-up all require field!!!!!!";
	// header("location:index.php");
	}
	
}

	else {
		print "Fill up please....";
		// header("location:index.php");
	}

?>