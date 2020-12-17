<?php 
include "connection.php";
include "verify.php";

$id 		= $_POST['update_id'];
$name 		= $_POST['user_name'];
$phone 		= $_POST['user_phone'];
$gender 	= $_POST['gender'];

$dob 		= $_POST['user_dob'];

$file_name	  	= $_FILES['file_path']['name'];
$file_location 	= $_FILES['file_path']['tmp_name'];

$address1 = $_POST['user_address_1'];
$address2 = $_POST['user_address_2'];
$address3 = $_POST['user_address_3'];

//Image 

$image 	= explode(".",$file_name);
// print $image[1];

$sql9 	= "SELECT * FROM `user_details` WHERE `user_id_f` = $id ";
$res9 	= $db->query($sql9);
$row9   = $res9->fetch_array();
// $num 	= $res->num_rows;

if($row9[2]){

	if( isset($_POST['edit_profile']) )
	{	
		if(	empty($file_name)	) {
			if(	!empty($name) && !empty($phone) && !empty($gender) && !empty($dob) && !empty($address1) && empty($address2) && empty($address3)	)
			{
				//address 1 only
				$sql1 = "UPDATE `user_address` SET `user_address_1` = '$address1' WHERE `user_id_f` = '$id' "; //`user_id_f` = '$id',
				$db->query($sql1);

				//Last Inserted Id  mysqli_insert_id($db)
				// $address_id = $db->insert_id; 

				// insert all value like address_id  ###except img and address2 and address3
				$sql = "UPDATE `user_details` SET `user_phone_number` = '$phone',`user_gender` = '$gender',`user_DOB` = '$dob' WHERE `user_id_f` = '$id' ";
				$db->query($sql);
				header("location:show.php");

				// print "add1";
			}

			if(!empty($name) && !empty($phone) && !empty($gender) && !empty($dob) && !empty($address1) && ( !empty($address2) || !empty($address3) ) )
			{
				//address 1 & address 2 & address 3
				$sql1 = "UPDATE `user_address` SET `user_address_1` = '$address1', `user_address_2` = '$address2', `user_address_3` = '$address3' WHERE `user_id_f` = '$id' ";
				$db->query($sql1);

				//Last Inserted Id  mysqli_insert_id($db)
				// $address_id = $db->insert_id; 

				// insert all value like address_id  ###except img and address2 and address3
				$sql = "UPDATE `user_details` SET `user_phone_number` = '$phone',`user_gender` = '$gender',`user_DOB` = '$dob' WHERE `user_id_f` = '$id' ";
				$db->query($sql);
				header("location:show.php");
				

				// print " add2 add3";
			}

			// till now it's not working with required, blank space problem
			if(empty($name) || empty($phone) || empty($gender) || empty($dob) || empty($address1)) {
				print "<script>alert('empty no update!!!!!!!!!!!!!!!!!!!!!')

				</script>";

			}
		}
	else {

		$sql = "SELECT * FROM `user_address` WHERE `user_id_f` = '$id' ";
		$res = $db->query($sql);
		$row = $res->fetch_array();

		$address_id1 = $row['user_address_id'];
		// print $image[1];
		if($image[1] == "jpg" || $image[1] == "png" || $image[1] == "jpeg" || $image[1] == "gif"|| $image[1] == "JPEG"|| $image[1] == "JPG"|| $image[1] == "GIF"|| $image[1] == "PNG")
		{
			if(!empty($name) && !empty($phone) && !empty($gender) && !empty($dob) && !empty($address1) && empty($address2) && empty($address3))
			{
				//address 1 only
				$sql1 = "UPDATE `user_address` SET `user_address_1` = '$address1' WHERE `user_address_id` = '$address_id1' "; //`user_id_f` = '$id',
				$db->query($sql1);

				//Last Inserted Id  mysqli_insert_id($db)
				// $address_id = $db->insert_id;

				$destination = "Profile_img/".$address_id1."_".$file_name; 

				// insert all value like address_id  ###except img and address2 and address3
				$sql = "UPDATE `user_details` SET `user_phone_number` = '$phone',`user_gender` = '$gender',`user_DOB` = '$dob',`user_img` = '$destination' WHERE `user_id_f` = '$id' ";
				$db->query($sql);
				move_uploaded_file($file_location,$destination);
				header("location:show.php");
				// print "add1 && img";
			}

			if(!empty($name) && !empty($phone) && !empty($gender) && !empty($dob) && !empty($address1) && ( !empty($address2) || !empty($address3) ) )
			{
				//address 1 & address 2 & address 3
				$sql1 = "UPDATE `user_address` SET `user_address_1` = '$address1', `user_address_2` = '$address2', `user_address_3` = '$address3' WHERE `user_address_id` = '$address_id1' ";
				$db->query($sql1);
				
				//Last Inserted Id  mysqli_insert_id($db)
				// $address_id = $db->insert_id;

				$destination = "Profile_img/".$address_id1."_".$file_name; 

				// insert all value like address_id  ###except img and address2 and address3
				$sql = "UPDATE `user_details` SET `user_phone_number` = '$phone',`user_gender` = '$gender',`user_DOB` = '$dob',`user_img` = '$destination' WHERE `user_id_f` = '$id' ";
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
		print "<a href=\"edit_profile.php?update_id=$id\" >Back</a>";
	 
		}
	}
else
{
	print "Please Insert first don't update first!!!!!!!!!!!!!";
	print "<a href=\"show.php\" >Back to Profile</a>";
}

 ?>