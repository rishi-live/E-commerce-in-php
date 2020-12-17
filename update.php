<?php 
//print_r($_POST);
include "connection.php";
include "verify.php";

$id            = $_POST['update_id'];
$name          = $_POST['user_name'];
$phone         = $_POST['user_phone'];
$gender        = $_POST['user_gender'];
$dob           = $_POST['user_dob'];
$address       = $_POST['user_address'];


$file_name	  	= $_FILES['file_path']['name'];
$file_location 	= $_FILES['file_path']['tmp_name'];


if(empty($file_name)) {

    //change name
    $sql1 = "UPDATE `user_login` SET `user_name` = '$name' WHERE `user_id` = '$id' ";
    $db->query($sql1);

    //update all except img
	$sql2 = "UPDATE `user_details` SET `user_phone_number` = '$phone',`user_gender`='$gender',`user_DOB`='$dob',`user_address`='$address' WHERE `user_id_f`='$id'";
	 $db->query($sql2);
	// header("location:show.php");

}

else{

	$image = explode(".",$file_name);
	// print $image[1];
	if($image[1] == "jpg" || $image[1] == "png" || $image[1] == "jpeg" || $image[1] == "gif"|| $image[1] == "JPEG"|| $image[1] == "JPG"|| $image[1] == "GIF"|| $image[1] == "PNG")
	{
        //Name change
        $sql1 = "UPDATE `user_login` SET `user_name` = '$name' WHERE `user_id` = '$id' ";
        $db->query($sql1);

        //img change
		$sql2 = "SELECT `user_img` FROM `user_details` WHERE `user_id_f` = '$id'";
		$res2= $db->query($sql2);
		$row = $res2->fetch_array();

		unlink($row['file_path']);

		$destination = "Uploads/".$id."_".$file_name;

        //update all except name
		$sql3 = "UPDATE `user_details` SET `user_phone_number` = '$phone',`user_gender`='$gender',`user_DOB`='$dob',`file_path` = '$destination',`user_address`='$address' WHERE `user_id_f`='$id'";
	    $db->query($sql3);

		move_uploaded_file($file_location,$destination);

	    // header("location:show.php");
	}
	else
	{
		
		print "Please insert an image first";
		print "<a href=\"edit1.php?edit_id=$id\" >Back</a>";
	}

	}

 ?>