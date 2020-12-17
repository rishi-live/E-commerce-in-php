<?php 
include "connection.php";
include "verify.php";




		$sql1 = "SELECT * FROM `product` WHERE `product_id` = '$product_id' ";
        $res1 = $db->query($sql1);
        $row1 = $res1->fetch_array();

        		$sql2 = "SELECT * FROM `prroduct_images` WHERE `product_id_f` = '$row1[0]' ";
		        $res2 = $db->query($sql2);
		        $row2 = $res2->fetch_array();


// create add a empty array
if(!$_SESSION['cart']) {
		$cart = [];
	}
else {
	// store session in names
	$cart = $_SESSION['cart'];
}

if(isset($_POST['add_to_cart']))
	// if form is fill then store username in $username and store it in names array.
 {
	$product_id = $_POST['product_id_h'];
	$product_qty = $_POST['product_qty'];

	$cart[$product_id] = $product_qty;
}
 

	$_SESSION['cart'] = $cart;
	 

	
	setcookie('c_cart','serialize($cart)', time() + 3600);
	// foreach($_SESSION['cart'] as $key=>$val)
	//  {
	// 	print " $val &nbsp;<a href=\"product_cart.php?del_id=$key\">DELETE</a>&nbsp;&nbsp;&nbsp;<a href=\"product_cart.php?edit_id=$key\">EDIT</a><br><br>";
		
	// }	

 header ("location:test_cart1.php");
?>