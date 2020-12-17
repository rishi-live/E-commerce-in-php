<?php 
include "connection.php";
	
//	$db = new mysqli("localhost","root",NULL,"demo1");

// include "admin lib/sidebar.php";
include "lib/sidebar.php";


	// session_start();
	// print "<hr>Id Generated : ".$_SESSION['id'];

	// print $_COOKIE['cookieEmail'];

// if(isset($_SESSION['login']) == true) 
// {

	print "<table border = 1 cellpadding =10 align = center style=\"background-color:#FFFFCC\">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Details</th>
					<th>Price</th>
					<th>Images</th>
					<th>Category</th>
					<th>Stock</th>
					
					
					<th>Delete</th>
					<th>Edit</th>



	";
	$sql = "SELECT * FROM `product`";
	$res = $db->query($sql);
	while($row = $res->fetch_array()){

		$sql = "SELECT `product_images_1` FROM `prroduct_images` WHERE `product_images_id` = '$row[product_images_id]'";
		$res1 = $db->query($sql);
		$img = $res1->fetch_array();

		print "
			<tr>
				<td> $row[0]</td>
				<td> $row[1]</td>
				
				<td> $row[2]</td>
				<td> $row[3]</td>
				<td><img src = '$img[0]' width = 70></td>
				<td> $row[5]</td>
				
				<td> $row[6]</td>
				<td><a href = 'delete1.php?del_id=$row[0]' onclick = \"return confirm('Are You Sure?')\">DELETE</a></td> 
				<td><a href=\"menu_edit.php?edit_id=$row[0]\">EDIT</a>
				
			</tr>";

	}

print "</table>";

 print "<center><a href=\"insertform.php\"  style=\"margin-top: 7px; margin-bottom:15px\" class=\"btn btn-primary\" >Insert New Data</a>&nbsp;&nbsp;&nbsp;";
 print "<a href=\"admin_panel.php\" style=\"margin-top: 7px; margin-bottom:15px\" class=\"btn btn-primary\" >Back</a>&nbsp;&nbsp;&nbsp;";
 print "<a href=\"logout.php\" style=\"margin-top: 7px; margin-bottom:15px\" class=\"btn btn-primary\">LOGOUT</a> </center>"
 // <center><button type="submit" style="margin-top: 7px" class="btn btn-primary">INSERT</button></center>
// }
 ?>
<!-- <a href="logout.php" style="margin-top: 7px" class="btn btn-primary">LOGOUT</a> -->

<?php 

include "lib/footer.php";
 ?>