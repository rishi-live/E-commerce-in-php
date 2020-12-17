<?php 
session_start();
include "connection.php";


$sql = "SELECT * FROM `order_item`";
$res = $db->query($sql);
$row = $res->fetch_array();
 // print date("d/m/y,h:s:i a", $row['order_date']);


foreach($_SESSION['cart'] as $p_id=> $qty )
{
    $sql1 = "   SELECT * FROM `product` WHERE `product_id` = '$p_id'    ";
    $res1 = $db->query($sql1);
    $row1 = $res1->fetch_array();
    $time = time();

        $sql2 = "INSERT INTO `order_item` ( `order_id`,`user_id_f`,`product_id_f`,`order_date`,`payment_info`,`delivery_name`,`delivery_address`,`order_status` ) 
        VALUES (  NULL, '$_SESSION[user_id]','$p_id','$time','$_POST[payment_info]','$_POST[user_name]','$_POST[address]','new'   )  ";
        $db->query($sql2);

}

$auto_submit = true;
// include "lib/header.php";


if($_POST['payment_info'] == "cod"){
 print "thank u";
}
else {

	?>
	<body onload="document.form1.submit()">
		
	
	<form name="form1" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_cart" />
	<input type="hidden" name="upload" value="1">  

	<input type="hidden" name="business" value="info@monginis.com" />
	<?php 
	$c = 0;
	foreach($_SESSION['cart'] as $p_id=> $qty )
		{
		    $sql1 = "   SELECT * FROM `product` WHERE `product_id` = '$p_id'    ";
		    $res1 = $db->query($sql1);
		    $row1 = $res1->fetch_array(); 
		    $c++;
		
		print '<input type="hidden" name="item_name_'.$c.'" value="'.$row1['product_name'].'" />
		<input type="hidden" name="amount_'.$c.'"    value="'.$row1['product_price'].'" />
		<input type="hidden" name="quantity_'.$c.' "  value="'.$qty.'" />';
	}
		?>
		 
  </form>
</body>
 <?php 
}
 ?>



 
