<?php 



@mkdir("Uploads");
include "connection.php";

//$db = new mysqli("localhost","root",NULL,"demo1");

session_start();
// print "<hr>Id Generated : ".$_SESSION['id'];

$name = $_POST['product_name'];
$details = $_POST['product_details'];
$price = $_POST['product_price'];

//try to add more category id in product_category[] but it takes onnly first checkbox value.
$category = implode("," , $_POST['product_category']);

//image file 
$file_name	  	= $_FILES['file_path']['name'];
$file_location 	= $_FILES['file_path']['tmp_name'];

$stock = $_POST['product_stock'];

//Image 

$image = explode(".",$file_name);
// print $image[1];
if($image[1] == "jpg" || $image[1] == "png" || $image[1] == "jpeg" || $image[1] == "gif"|| $image[1] == "JPEG"|| $image[1] == "JPG"|| $image[1] == "GIF"|| $image[1] == "PNG")
{

$sql1 = "INSERT INTO `product`(`product_id`,`product_name`,`product_details`,`product_price`,`product_category_id`,`product_stock`) VALUES (NULL, '$name','$details','$price','$category','$stock')";
$db->query($sql1);

$insert_id1 = $db->insert_id; //Last Inserted Id  mysqli_insert_id($db)

$destination = "Uploads/".$insert_id1."_".$file_name;



$sql2 = "INSERT INTO `prroduct_images`(`product_images_id`,`product_images_1`) VALUES (NULL, '$destination')";
$db->query($sql2);

$insert_id = $db->insert_id; //Last Inserted Id  mysqli_insert_id($db)

$sql3 = "UPDATE `product` SET `product_images_id` = '$insert_id' WHERE `product_id` = '$insert_id1'";
$db->query($sql3);

$sql4 = "UPDATE `prroduct_images` SET `product_id_f` = '$insert_id1' WHERE `product_images_id` = '$insert_id'";
$db->query($sql4);

// $sql = "UPDATE `product` SET `file_path` = '$destination' WHERE `product_id` = '$insert_id'";
// $db->query($sql);

// print $insert_id.$insert_id1;

move_uploaded_file($file_location,$destination); //copy($file_location,$destination)

header("location:admin_menu.php");

}

else 
{
	print "Please insert an image.";
	print "<a href=\"insertform.php\" >Back</a>";
 
}
 ?>