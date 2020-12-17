<?php
session_start();
include "connection.php";

$sql = "select * from `user_login` where `user_email` = '$_POST[user_email]'  AND `user_password` = '$_POST[user_password]' ";
$res = $db->query($sql);
	//count the row in $res and store it in $num.
	$num = $res->num_rows;
	//checking the $num, that is it getting any value or not . if it get any value then it get some details as well.
	if($num>0) {
		$_SESSION['login'] = true;
		$id = session_id();
		$_SESSION['id'] = $id;

		// to send the user_id for editing no use of cookie & session
		
		$sql2 = "SELECT * FROM `user_login` WHERE `user_email` = '$_POST[user_email]' ";
		$res2 = $db->query($sql2);
		$row2 = $res->fetch_array();

		$user_id = $row2['user_id'];
		$user_name = $row2['user_name'];
		$user_email = $row2['user_email'];

		$_SESSION['user_id'] = $user_id;
		$_SESSION['user_name'] = $user_name;
		$_SESSION['user_email'] = $user_email;


		
// print $row2['user_email'];
		if(isset($_POST['remember'])) 
		{
			$time = time()+60;
			$user_email = $row2['user_email'];

			setcookie("cookieEmail",$user_email,$time);

			// print "hello".$_COOKIE['cookieEmail'];
		}

		header("location:index.php");
	}

else {
	$id = 1;
	//header("location:index1.php?m_id=$id");
	// print 'data not found';

	header("location:index1.php");
}
?>