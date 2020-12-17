<html>

<head>

</head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css" />

<link rel="stylesheet" href="vendors/linericon/style.css" />

<!-- main css -->
<link rel="stylesheet" href="css/style-cart.css" />

<body>
    <?php   
      include "connection.php";
      include "lib/header1.php";
      include "lib/header.php";

     ?>
    <style>
    img {
        height: 90px;
        width: 120px;
        border-radius: 15px;
    }
    </style>

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container" style="background-color: ">
            <div class="row flex-row-reverse">
                <div class="col-lg-10">
                    <div class="product_top_bar">
                        <div class="left_dorp">

                            <h2>Cart Items</h2>

                        </div>
                    </div>

                    <div class="latest_product_inner">
                        <div class="row">

                            <!--  <form action="product_cart.php" method="post"> -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
                  $c=0;
                  foreach ( $_SESSION['cart'] as $product_id => $product_qty ) {
                    # code...
                      $sql1 = "SELECT * FROM `product` WHERE `product_id` = '$product_id' ";
                      $res1 = $db->query($sql1);
                      $row1 = $res1->fetch_array();

                          $sql2 = "SELECT * FROM `prroduct_images` WHERE `product_id_f` = '$row1[0]' ";
                          $res2 = $db->query($sql2);
                          $row2 = $res2->fetch_array();
                          $c++;
                    
                          $sub_total = $row1[3] * $product_qty;

                 ?>
                                    <tr style="background-color:  ">
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="<?php print "admin/$row2[2]";  ?>" />
                                                </div>
                                                <div class="media-body">
                                                    <p style="margin-top:35px;margin-left: 35px ">
                                                        <?php print "$row1[1]";  ?></p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <h5 style="margin-top:35px;"><?php print "$"."$row1[3]";  ?></h5>
                                        </td>
                                        <td>
                                            <div class="product_count">
                                                <input type="text" name="qty" value="<?php print "$product_qty";  ?>"
                                                    title="Quantity:" class="input-text qty" style="margin-top:35px;"
                                                    disabled />

                                            </div>
                                        </td>
                                        <td>
                                            <h5 style="margin-top:35px;"><?php print "$"."$sub_total";  ?></h5>
                                        </td>
                                    </tr>
                                    <?php 
              		}
              	 ?>

                                </tbody>
                            </table>
                            <!-- </form> -->

                            <!-- details of product -->

                        </div>
                        <center>
                            <div>
                                <a href="checkout.php" class="btn btn-primary">CheckOut</a>
                            </div>
                        </center>
                    </div>

                </div>

                <!-- <div class="col-lg-3">
            <div class="left_sidebar_area">


            </div>
          </div> -->
            </div>

        </div>


    </section>

    <!--================End Category Product Area =================-->
</body>

</html>