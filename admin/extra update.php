else{

	$image = explode(".",$file_name);
	// print $image[1];
	if($image[1] == "jpg" || $image[1] == "png" || $image[1] == "jpeg" || $image[1] == "gif"|| $image[1] == "JPEG"|| $image[1] == "JPG"|| $image[1] == "GIF"|| $image[1] == "PNG")
	{

		$sql2 = "SELECT * FROM `prroduct_images` WHERE `product_id_f` = '$id'";
		$res2= $db->query($sql2);
		$row = $res2->fetch_array();

		$update_id2 = $row['product_images_id'];

		unlink($row['product_images_1']);

		$destination = "Uploads/".$file_id."_".$file_name;

		###############################################################
		$sql3 = "UPDATE `prroduct_images` SET`product_images_1` = '$destination' WHERE `product_images_id` = '$update_id2'";
		$db->query($sql3);

		// $insert_id3 = $db->insert_id;
		############################################################


		$sql4 = "UPDATE `product` SET `product_name` = '$name',`product_details` = '$details',`product_price`='$price',`product_images_id` = '$update_id2',`product_category_id`='$category',`product_stock`='$stock' WHERE `product_id`='$id'";
		$db->query($sql4);

		move_uploaded_file($file_location,$destination);

	  header("location:admin_menu.php");
	}