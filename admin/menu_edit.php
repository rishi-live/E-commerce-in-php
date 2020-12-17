<?php

include "connection.php";

	//$db = new mysqli("localhost","root",NULL,"demo1");

    // include "connection.php";
    // include "verify.php";
    include "lib/sidebar.php";
    ?>

<?php 

    //fetch the logedin user details
	$edit_id = $_GET['edit_id'];

	$sql = "SELECT * FROM `product` WHERE `product_id` = '$_GET[edit_id]' ";
	$res = $db->query($sql);
	$row = $res->fetch_array()

    ?>
<form method="post" action="menu_update.php" enctype="multipart/form-data">
    <table border="1" align="center" cellpadding="10">
        <input type="hidden" name="update_id" value=<?php print "$edit_id" ?>>
        <tr>
            <th>Product Name :</th>
            <td><input type="text" name="product_name" value="<?php print "$row[product_name]" ?>"></td>
        </tr>
        <tr>
            <th>Product Details :</th>
            <td><textarea name="product_details"><?php print "$row[product_details]" ?></textarea></td>
        </tr>
        <tr>
            <th>Product Price :</th>
            <td><input type="number" name="product_price" value="<?php print "$row[product_price]" ?>"></td>
        </tr>

        <tr>
            <th>Product Images :</th>
            <td><?php

				$sql1 = "SELECT * FROM `prroduct_images` WHERE `product_id_f` = '$edit_id' ";
				$res1 = $db->query($sql1);
				$img = $res1->fetch_array();

				?>

                <!-- print "<input name=\"file_path\"> $img[product_images_1]" ; -->
                <input type="file" name="file_path_img" value><img src="<?php 



				print $img['product_images_1'];


				?>" width="100">

                </input></td>
        </tr>
        <tr>
            <th>Product Category :</th>

            <td>

                <?php 
						$arr = explode(",",$row['product_category_id']);

						$sql2 = "SELECT * FROM `category`";
					$res2 = $db->query($sql2);
					while($category = $res2->fetch_array())
					{
							if(in_array($category['category_name'],$arr))
								print "<input type=\"checkbox\" name=\"product_category[]\"value=\"$category[category_name]\" checked> $category[category_name]";
							else
								print "<input type=\"checkbox\" name=\"product_category[]\"value=\"$category[category_name]\"> $category[category_name]";
					}

					 ?>

            </td>
        </tr>

        <tr>
            <th>Product Stock :</th>
            <td><input type="number" name="product_stock" value="<?php print "$row[product_stock]" ?>"></td>
        </tr>


        <tr>

            <td><input type="submit" name="edit" value="EDIT"></td>

        </tr>
    </table>


</form>

<?php 
		include "lib/footer.php";
	?>