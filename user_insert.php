<?php 
include "connection.php";
include "verify.php";


@mkdir("Profile_img");

$id = $_POST['insert_id'];
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$gender = $_POST['gender'];

$dob = $_POST['user_dob'];

$file_name	  	= $_FILES['file_path']['name'];
$file_location 	= $_FILES['file_path']['tmp_name'];

$address1 = $_POST['user_address_1'];
$address2 = $_POST['user_address_2'];
$address3 = $_POST['user_address_3'];

//Image 

$image = explode(".",$file_name);
// print $image[1];

$sql9 = "SELECT * FROM `user_details` WHERE `user_id_f` = $id ";
$res = $db->query($sql9);
$num = $res->num_rows;

if($num == 0 ){

	if( isset($_POST['insert']) )
	{	
		if(empty($file_name)) {
			if(!empty($name) && !empty($phone) && !empty($gender) && !empty($dob) && !empty($address1) && empty($address2) && empty($address3))
			{
				//address 1 only
				$sql1 = "INSERT INTO `user_address` (`user_address_id`,`user_id_f`,`user_address_1`) VALUES (NULL, '$id','$address1')";
				$db->query($sql1);

				//Last Inserted Id  mysqli_insert_id($db)
				$address_id = $db->insert_id; 

				// insert all value like address_id  ###except img and address2 and address3
				$sql = "INSERT INTO `user_details`(`user_details_id`,`user_id_f`,`user_phone_number`,`user_gender`,`user_DOB`,`user_address_id`) VALUES (NULL, '$id','$phone','$gender','$dob','$address_id')";
				$db->query($sql);
				header("location:show.php");

				// print "add1";
			}

			if(!empty($name) && !empty($phone) && !empty($gender) && !empty($dob) && !empty($address1) && ( !empty($address2) || !empty($address3) ) )
			{
				//address 1 & address 2 & address 3
				$sql1 = "INSERT INTO `user_address` (`user_address_id`,`user_id_f`,`user_address_1` ,`user_address_2` ,`user_address_3`) VALUES (NULL, '$id','$address1' ,'$address2' ,'$address3')";
				$db->query($sql1);

				//Last Inserted Id  mysqli_insert_id($db)
				$address_id = $db->insert_id; 

				// insert all value like address_id  ###except img and address2 and address3
				$sql = "INSERT INTO `user_details`(`user_details_id`,`user_id_f`,`user_phone_number`,`user_gender`,`user_DOB`,`user_address_id`) VALUES (NULL, '$id','$phone','$gender','$dob','$address_id')";
				$db->query($sql);
				header("location:show.php");

				// print " add2 add3";
			}

			// till now it's not working with required, blank space problem
			if(empty($name) || empty($phone) || empty($gender) || empty($dob) || empty($address1)) {
				print "empty!!!!!!!!!!!!!!!!!!!!!";
			}
		}
	else {
		// print $image[1];
		if($image[1] == "jpg" || $image[1] == "png" || $image[1] == "jpeg" || $image[1] == "gif"|| $image[1] == "JPEG"|| $image[1] == "JPG"|| $image[1] == "GIF"|| $image[1] == "PNG")
		{
			if(!empty($name) && !empty($phone) && !empty($gender) && !empty($dob) && !empty($address1) && empty($address2) && empty($address3))
			{
				//address 1 only
				$sql1 = "INSERT INTO `user_address` (`user_address_id`,`user_id_f`,`user_address_1`) VALUES (NULL, '$id','$address1')";
				$db->query($sql1);

				//Last Inserted Id  mysqli_insert_id($db)
				$address_id = $db->insert_id;

				$destination = "Profile_img/".$address_id."_".$file_name; 

				// insert all value like address_id  ###except img and address2 and address3
				$sql = "INSERT INTO `user_details`(`user_details_id`,`user_id_f`,`user_phone_number`,`user_gender`,`user_DOB`,`user_img`, `user_address_id`) VALUES (NULL, '$id','$phone','$gender','$dob','$destination','$address_id')";
				$db->query($sql);
				move_uploaded_file($file_location,$destination);
				header("location:show.php");

				// print "add1 && img";
			}

			if(!empty($name) && !empty($phone) && !empty($gender) && !empty($dob) && !empty($address1) && ( !empty($address2) || !empty($address3) ) )
			{
				//address 1 & address 2 & address 3
				$sql1 = "INSERT INTO `user_address` (`user_address_id`,`user_id_f`,`user_address_1` ,`user_address_2` ,`user_address_3`) VALUES (NULL, '$id','$address1' ,'$address2' ,'$address3')";
				$db->query($sql1);

				//Last Inserted Id  mysqli_insert_id($db)
				$address_id = $db->insert_id;

				$destination = "Profile_img/".$address_id."_".$file_name; 

				// insert all value like address_id  ###except img and address2 and address3
				$sql = "INSERT INTO `user_details`(`user_details_id`,`user_id_f`,`user_phone_number`,`user_gender`,`user_DOB`,`user_img`, `user_address_id`) VALUES (NULL, '$id','$phone','$gender','$dob','$destination','$address_id')";
				$db->query($sql);
				move_uploaded_file($file_location,$destination);
				header("location:show.php");
				// print " add2 add3 && img";
			}

			if(empty($name) || empty($phone) || empty($gender) || empty($dob) || empty($address1)) {
				print "empty!!!!!!!!!!!!!!!!!!!!! && img";
			}
		  }

		}


	}

	else 
		{
		print "Please insert an image.";
		print "<a href=\"user_insert.php\" >Back</a>";
	 
		}
	}
else
{
	print "Please update the data don't insert again!!!!!!!!!!!!!";
	print "<a href=\"show.php\" >Back to Profile</a>";
}

 ?>