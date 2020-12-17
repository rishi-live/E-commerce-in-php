<?php

	include "connection.php";
	include "verify.php";

    // include "connection.php";
    // include "verify.php";
    include "lib/header.php";

    ?>

<?php 

    //fetch the logedin user details
	$insert_id = $_GET['insert_id'];

	
	$sql1 = "SELECT * FROM `user_details` WHERE `user_id_f` = '$_GET[insert_id]' ";
	$res1 = $db->query($sql1);
	$num = $res1->num_rows;
	$row1 = $res1->fetch_array();

    ?>

<center><br>
    <h1 style="color: #33CC00;">Insert Details</h1>

</center>
<br>

<form method="post" action="user_insert.php" enctype="multipart/form-data">

    <table align="center" cellpadding="10">

        <input type="hidden" name="insert_id" value=<?php print "$insert_id" ?>>

        <tr>
            <th>User Name *:</th>
            <td><input type="text" class="form-control" name="user_name" value=" <?php
                
                $sql2 = "SELECT `user_name` FROM `user_login` WHERE `user_id` = '$insert_id' ";
                $res2 = $db->query($sql2);
                $row2 = $res2->fetch_array();
                
                print "$row2[user_name]" ?>"></td>
        </tr>
        <tr>
            <th>User Phone Number *:</th>
            <td><input name="user_phone" class="form-control" required></td>
        </tr>
        <tr>
            <th>Gender *:</th>
            <td><input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
            </td>
        </tr>
        <tr>
            <th>D.O.B *:</th>
            <td><input type="date" class="form-control" name="user_dob" value="" required></td>
        </tr>
        <tr>
            <th>Profile Picture :</th>
            <td>
                <input type="file" name="file_path" value="">
            </td>
        </tr>
        <tr>
            <th>Address 1 *:</th>
            <td>
                <input type="text" class="form-control" name="user_address_1" value="">
            </td>
        </tr>
        <tr>
            <th>Address 2:</th>
            <td>
                <input type="text" class="form-control" name="user_address_2" value="">
            </td>
        </tr>
        <tr>
            <th>Address 3:</th>
            <td>
                <input type="text" class="form-control" name="user_address_3" value="">
            </td>
        </tr>
        <tr>

            <!-- <td><input type="submit" name="insert" value="INSERT"></td> -->
            <th></th>
            <td>
                <center> <input type="submit" name="insert" value="INSERT" class="btn btn-primary"></center>
            </td>

        </tr>
    </table>


</form>