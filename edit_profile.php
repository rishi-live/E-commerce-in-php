<?php 
		include "connection.php";
		include "verify.php";

		$update_id = $_GET['update_id'];

		$sql = "SELECT * FROM `user_details` WHERE `user_id_f` = '$update_id' ";
		$res = $db->query($sql);
		$row = $res->fetch_array();
		
		include "lib/header.php";
		?>
<center><br>
    <h1 style="color: #CC9933;">Update Details</h1>

</center>
<br>
<form method="post" action="user_update.php" enctype="multipart/form-data">
    <table align="center" cellpadding="10">

        <input type="hidden" name="update_id" value=<?php print "$update_id" ?>>

        <tr>
            <th>User Name :</th>
            <td><input type="text" class="form-control" name="user_name" value="<?php
                
                $sql2 = "SELECT `user_name` FROM `user_login` WHERE `user_id` = '$update_id' ";
                $res2 = $db->query($sql2);
                $row2 = $res2->fetch_array();
                
                print "$row2[user_name]" ?>"></td>
        </tr>
        <tr>
            <th>Phone Number :</th>
            <td><input type="number" class="form-control" name="user_phone"
                    value="<?php print "$row[user_phone_number]" ?>"></td>
        </tr>
        <tr>
            <th>Gender :</th>
            <td>

                <?php 
						if($row['user_gender'] == 'Male')
							print '<input type="radio" name="gender" value="Male" checked>Male<input type="radio" name="gender" value="Female">Female</td>';
						if($row['user_gender'] == 'Female')
							print '<input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female" checked>Female</td>';
						if($row['user_gender'] == '')
							print '<input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female</td>';					
							 ?>

            </td>
        </tr>
        <tr>
            <th>D.O.B :</th>
            <td><input type="date" class="form-control" name="user_dob" value="<?php print "$row[user_DOB]" ?>">
            </td>
        </tr>

        <tr>
            <th>Profile Picture :</th>
            <td>

                <input type="file" name="file_path" value>

                <?php 

				if($row['user_img']) {
					

				print "<img src = \"$row[user_img] \" 
				
				 width = \"100\">";

				} ?>

                </input>
            </td>
        </tr>

        <tr>
            <th>Address :</th>
            <td>
                <?php  
                
                $sql3 = "SELECT * FROM `user_address` WHERE `user_id_f` = '$update_id' ";
                $res3 = $db->query($sql3);
				$row3 = $res3->fetch_array();
				
				
					if($row3[2]) {
						print "<input type=\"text\" class=\"form-control\" name=\"user_address_1\" value=\"$row3[user_address_1]\">&nbsp;&nbsp;";
					}

					else {
						print "<input type=\"text\" class=\"form-control\" name=\"user_address_1\" value=\"\">&nbsp;&nbsp;";
					}

					if($row3[3]) {
						print "<input type=\"text\" class=\"form-control\" name=\"user_address_2\" value=\"$row3[user_address_2]\">&nbsp;&nbsp;";
					}
					else {
						print "<input type=\"text\" class=\"form-control\" name=\"user_address_2\" value=\"\">&nbsp;&nbsp;";
					}
					if($row3[4]) {
						print "<input type=\"text\" class=\"form-control\" name=\"user_address_3\" value=\"$row3[user_address_3]\">&nbsp;&nbsp;";
					}
					else {
						print "<input type=\"text\" class=\"form-control\" name=\"user_address_3\" value=\"\">&nbsp;&nbsp;";
					}
				               
				?>
            </td>
        </tr>

        <tr>
            <th></th>
            <td>
                <center> <input type="submit" name="edit_profile" value="EDIT" class="btn btn-success"></center>
            </td>

        </tr>

    </table>


</form>