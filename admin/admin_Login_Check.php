<?php 
include "connection.php";

	//$db = new MySQLi("localhost","root",NULL,"demo1");
 ?>

<?php
@session_start();

include "links.php";

// checking for logedin user 
if(isset($_POST['admin_login'])) {
	// fetch the logedin user data
	$sql = "SELECT * FROM `admin` WHERE `admin_email` = '$_POST[admin_email]'  AND `admin_password` = '$_POST[admin_password]'";
	$res = $db->query($sql);
	//count the row in $res and store it in $num.
	$num = $res->num_rows;
	//checking the $num, that is it getting any value or not . if it get any value then it get some details as well.
	if($num>0) {
		$row = $res->fetch_array();
		$_SESSION['adminid'] = $row['admin_id'];
		$_SESSION['adminname'] = $row['admin_name'];

		header("location:admin_panel.php");
	}
	// if $num is empty then
	else {
		
		header("location:index.php?msg=1");
	}
}


?>