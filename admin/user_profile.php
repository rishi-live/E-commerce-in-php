<?php 
include "connection.php";
	
//	$db = new mysqli("localhost","root",NULL,"demo1");

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
					<th>Phone Number</th>
					<th>Gender</th>
					<th>DOB</th>
					<th>Profile Picture</th>
					<th>Address1</th>
					<th>Address2</th>
					<th>Address3</th>
										
					<th>Delete</th>
					<th>Edit</th>



	";
	$sql1 = "SELECT * FROM `user_details`";
	$res1 = $db->query($sql1);
	while($row = $res1->fetch_array()){

		$sql2 = "SELECT `user_name` FROM `user_login` WHERE `user_id` = '$row[user_id_f]'";
		$res2 = $db->query($sql2);
		$user_name = $res2->fetch_array();

			$sql3 = "SELECT * FROM `user_address` WHERE `user_id_f` = '$row[user_id_f]' ";
			$res3 = $db->query($sql3);
			$row3 = $res3->fetch_array();

		print "
			<tr>
				<td> $row[0]</td>
				<td> $user_name[user_name]</td>
				
				<td> $row[2]</td>
				<td> $row[3]</td>
				
				<td> $row[4]</td>
				<td><img src = $row[user_img] width = 70></td>
				<td> $row3[user_address_1]</td>
				<td> $row3[user_address_2]</td>
				<td> $row3[user_address_3]</td>
				<td><a href = 'delete1.php?del_id=$row[0]' onclick = \"return confirm('Are You Sure?')\">DELETE</a></td> 
				<td><a href=\"menu_edit.php?edit_id=$row[0]\">EDIT</a>
				
			</tr>";

	}

print "</table>";

 // print "<a href=\"insertform.php\"  style=\"margin-top: 7px; margin-bottom:15px\" class=\"btn btn-primary\" >Insert New Data</a>&nbsp;&nbsp;&nbsp;";
 print "<center><a href=\"admin_panel.php\" style=\"margin-top: 7px; margin-bottom:15px\" class=\"btn btn-primary\" >Back</a>&nbsp;&nbsp;&nbsp;";
 print "<a href=\"logout.php\" style=\"margin-top: 7px; margin-bottom:15px\" class=\"btn btn-primary\">LOGOUT</a> </center>"
 // <center><button type="submit" style="margin-top: 7px" class="btn btn-primary">INSERT</button></center>
// }
 ?>
<!-- <a href="logout.php" style="margin-top: 7px" class="btn btn-primary">LOGOUT</a> -->

<?php 

include "lib/footer.php";
 ?>