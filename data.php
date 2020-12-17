<?php 
 // print "Hello node";
include "connection.php";

$word = $_GET['word'];

$sql = "SELECT * FROM `product` WHERE `product_name` LIKE '%$word%' ";
$res = $db->query($sql);

while ( $row = $res->fetch_array() ) {

	// print "<br>".$row['name']."<br>";

  		
  	 			
  	 			$sql2 = "SELECT * FROM `prroduct_images` WHERE `product_id_f` = '$row[0]' ";
  	 			$res2 = $db->query($sql2);
  	 			$row2 = $res2->fetch_array();

					print'<div class="col-lg-4 col-md-6">
					  <div class="single-product">                 	

						
					        <div class="product-img">
					          <img
					            class="card-img"
					            src="admin/'.$row2[2].'
					          "/>

					           
					          	<div class="p_icon">
					                <a href="#">
					                  <i class="ti-eye"></i>
					                </a>
					                <a href="#">
					                  <i class="ti-heart"></i>
					                </a>
					                <a href="#">
					                  <i class="ti-shopping-cart"></i>
					                </a>
					          	</div>
					        </div>
					    
					        <div class="product-btm">
					          <a href="product_details.php?p_id='.$row['0'] .' " class="d-block">
					            <h4>'.$row['product_name'].'</h4>
					          </a>
					          <div class="mt-3">
					            <span class="mr-4">$'.$row['product_price'].'</span>
					            <del>$35.00</del>
					          </div>
					        </div>
					    </div>
					</div>';

	}
?>