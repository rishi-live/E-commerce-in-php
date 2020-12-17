<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
include "lib/sidebar.php";
 ?>
<div class="row" style="background-color: red">
	<div class="col-md-3"></div>
  <div class="col-sm-6"><!--  style="margin-left: 200px; margin-top: 20px" -->
    <div class="card">
      <div class="card-body">
<form method="post" action="admin_insert.php" enctype = "multipart/form-data">
		<table border="1" align="center" cellpadding="10">
			<tr>
				<th>Name :</th>
				<td><input type="text" name="product_name"></td>
			</tr>
			<tr>
				<th>Details :</th>
				<td><textarea name="product_details"></textarea></td>
			</tr>
			<tr>
				<th>Price:</th>
				<td><input type="number" name="product_price"></td>
			</tr>
			<tr>
				<th>Images:</th>
				<td><input type="file" name="file_path"></td>
			</tr>
			<tr>
				<th>Category :</th>
				<td><input type="checkbox" name="product_category[]" value="VEG">VEG
					<input type="checkbox" name="product_category[]" value="NON-VEG">Non VEG
					<input type="checkbox" name="product_category[]" value="DRINKS">Drinks
					<input type="checkbox" name="product_category[]" value="COMBO">Combo
				</td>
			</tr>
			<tr>
				<th>Stock :</th>
				<td>
					<input type="number" name="product_stock" >
				</td>
			</tr>
			
			<tr>
				
				<!-- <th><button type="submit"  class="btn btn-primary">INSERT</button></th> -->
				
			</tr>

		</table>
<center><button type="submit" style="margin-top: 7px" class="btn btn-primary">INSERT</button></center>

	</form>

	</div>
</div>
</div>
<div class="col-md-3"></div>
</div>

<?php 
include "lib/footer.php";
 ?>