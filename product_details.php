<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Item Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />

    <!-- main css -->
    <link rel="stylesheet" href="css1/style.css" /> <!-- css1 -->
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">

        <?php  
        include "lib/header1.php";
        include "lib/header.php";
        include "connection.php";

        $p_id = $_GET['p_id'];
        $sql = "SELECT * FROM `product` WHERE `product_id` = '$p_id' ";
        $res = $db->query($sql);
        $row = $res->fetch_array();

      ?>


    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Product Details</h2>
                        <p>Very us move be blessed multiply night</p>
                    </div>
                    <div class="page_link">
                        <a href="#">Home</a>
                        <a href="#">Product Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->



    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_product_img">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <?php
                            
                            $sqli = "SELECT * FROM `prroduct_images` WHERE `product_id_f` = '$row[product_images_id]'  ";
                            $resi = $db->query($sqli);
                            $img = $resi->fetch_array();
                            
                            ?>


                            <img src="admin/<?php echo $img['product_images_1'] ?>" style="width: 400px;height: 400px;"
                                class="rounded float-left" alt="...">
                            <!-- <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                    <img src="img1/product/single-product/s-product-s-2.jpg" alt="" />
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                    <img src="img1/product/single-product/s-product-s-3.jpg" alt="" />
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                    <img src="img1/product/single-product/s-product-s-4.jpg" alt="" />
                                </li>
                            </ol> -->
                            <!-- <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img1/product/single-product/s-product-1.jpg"
                                        alt="First slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img1/product/single-product/s-product-1.jpg"
                                        alt="Second slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img1/product/single-product/s-product-1.jpg"
                                        alt="Third slide" />
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3><?php print $row['product_name'] ?></h3>
                        <h2><?php print $row['product_price'] ?></h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category</span> : <?php 

                    $arr  =  $row['product_category_id'];
                    //print $arr  =  $row['product_category_id']; also done the work.

                    $p = explode(",",$arr);

                    foreach ($p as $key => $value) {
                      # code...
                      print "$value &nbsp;&nbsp;";
                    }

                    // if(  in_array(needle, haystack))


                     ?></a>
                            </li>
                            <li>
                                <a href="#"> <span>Availibility</span> : <?php 

                  if($row['product_stock'] > 0) {
                    print "<font size=\"3\" color=\"green\">In-Stock</font>";
                  }
                  if($row['product_stock'] <= 0) {
                    print "<font size=\"3\" color=\"red\">Out-of-Stock</font>";
                  }


                   ?></a>
                            </li>
                        </ul>
                        <p>
                            Mill Oil is an innovative oil filled radiator with the most
                            modern technology. If you are looking for something that can
                            make your interior look awesome, and at the same time give you
                            the pleasant warm feeling during the winter.
                        </p>


                        <form method="post" action="product_cart.php">

                            <!-- <input type="hidden" name="insert_id" value= <?php //print "$insert_id" ?> > -->
                            <input type="hidden" name="product_id_h" value=<?php print "$p_id" ?>>
                            <!-- <input type="hidden" name="user_id_h" value= <?php //print "$insert_id" ?> > -->

                            <div class="product_count">
                                <label for="qty">Quantity:</label>
                                <?php 
                    if($row['product_stock'] <= 0) {
                      print '<input
                                type="text"
                                name="qty"
                                id="sst"
                                maxlength="12"
                                value="0"
                                title="Quantity:"
                                class="input-text qty"
                                disabled
                              />';
                    }
                    if($row['product_stock'] > 0) {
                      print '<input
                                type="number"
                                name="product_qty"
                                id="sst1"
                                maxlength="12"
                                value="1"
                                title="Quantity:"
                                class="input-text qty"
                                
                              />';
                            }

                   ?>

                                <button
                                    onclick="var result = document.getElementById('sst'); var sst1 = result.value; if( !isNaN( sst1 )) result.value++;return false;"
                                    class="increase items-count" type="button">
                                    <i class="lnr lnr-chevron-up"></i>
                                </button>
                                <button
                                    onclick="var result = document.getElementById('sst'); var sst1 = result.value; if( !isNaN( sst1 ) &amp;&amp; sst1 > 0 ) result.value--;return false;"
                                    class="reduced items-count" type="button">
                                    <i class="lnr lnr-chevron-down"></i>
                                </button>
                            </div>
                            <div class="card_area">
                                <button class="main_btn" name="add_to_cart" type="submit">Add to Cart</button>
                                <!-- <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-diamond"></i>
                </a>
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-heart"></i>
                </a> -->
                            </div>
                            <div>
                                <br><br>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->

    <!--================End Product Description Area =================-->

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
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Nobody</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>