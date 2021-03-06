<?php 

include "connection.php";

// session_start();
// $id = $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Items</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css1/bootstrap.css" />
    <link rel="stylesheet" href="css1/themify-icons.css" />

    <!-- main css -->
    <link rel="stylesheet" href="css1/style.css" />
    <!-- <link rel="stylesheet" href="css1/responsive.css" /> -->
</head>

<body>
    <!--================Header Menu Area =================-->
    <?php 
    	include "lib/header1.php";

     ?>
    <?php 
    	include "lib/header.php";

     ?>

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Menu</h2>
                        <p>Very us move be blessed multiply night</p>
                    </div>
                    <div class="page_link">
                        <a href="#">Home</a>
                        <a href="#">purchase</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">
                        <div class="left_dorp">
                            <!-- <select class="sorting">
                  <option value="1">Default sorting</option>
                  <option value="2">Default sorting 01</option>
                  <option value="4">Default sorting 02</option>
                </select>
                <select class="show">
                  <option value="1">Show 12</option>
                  <option value="2">Show 14</option>
                  <option value="4">Show 16</option>
                </select> -->
                        </div>
                    </div>

                    <div class="latest_product_inner">
                        <div class="row" id="search_result1">

                            <?php 
                  		$sql = "SELECT * FROM `product` ";
                  		$res = $db->query($sql);
                  		while ( $row = $res->fetch_array() )
                  			{ 
                  	 			
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




                            <!-- details of product -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="left_sidebar_area">


                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Dish Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="#">VEG</a>
                                    </li>
                                    <li>
                                        <a href="#">Drinks</a>
                                    </li>
                                    <li>
                                        <a href="#">Non - Veg</a>
                                    </li>
                                    <li>
                                        <a href="#">Combo</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->






    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default">Subscribe</button>
                            <!-- <div style="position: absolute; left: -5000px;">
                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                </div>
   -->
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <!-- <p class="footer-text m-0 col-lg-8 col-md-12"> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>-->


                <!-- <div class="col-lg-4 col-md-12 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div> -->
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js1/jquery-3.2.1.min.js"></script>

    <script src="js1/bootstrap.min.js"></script>

</body>

</html>