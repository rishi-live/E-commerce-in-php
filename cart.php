
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    
    <title>cart</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    
    <link rel="stylesheet" href="vendors/linericon/style.css" />
   
    <!-- main css -->
    <link rel="stylesheet" href="css/style-cart.css" />
  </head>

  <body>
    <!--================Header Menu Area =================-->
    <?php   
      include "connection.php";
      include "lib/header1.php";
      include "lib/header.php";

     ?>
      <style>
        
        img {
          height: 90px;
          width: 120px;
        }
   </style>
    <!--================Header Menu Area =================-->


    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Cart</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="#">Home</a>
              <a href="#">Cart</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Cart Area =================-->


    <section class="cart_area">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
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

                  foreach ( $_SESSION['cart'] as $product_id => $product_qty ) {
                    # code...
                      $sql1 = "SELECT * FROM `product` WHERE `product_id` = '$product_id' ";
                      $res1 = $db->query($sql1);
                      $row1 = $res1->fetch_array();

                          $sql2 = "SELECT * FROM `prroduct_images` WHERE `product_id_f` = '$row1[0]' ";
                          $res2 = $db->query($sql2);
                          $row2 = $res2->fetch_array();
                    
                          $sub_total = $row1[3] * $product_qty;

                 ?>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img
                          src="<?php print "admin/$row2[2]";  ?>"
                          alt=""
                        />
                      </div>
                      <div class="media-body">
                        <p><?php print "$row1[1]";  ?></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5><?php print "$"."$row1[3]";  ?></h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <input
                        type="text"
                        name="qty"
                        id=""
                        maxlength="12"
                        value="<?php print "$product_qty";  ?>"
                        title="Quantity:"
                        class="input-text qty"
                        disabled
                      />
                      
                    </div>
                  </td>
                  <td>
                    <h5><?php print "$"."$sub_total";  ?></h5>
                  </td>
                </tr>

                  
<?php 

                    }

                   ?>

                <tr class="bottom_button">
                  <td>
                    <a class="gray_btn" href="#">Update Cart</a>
                  </td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="cupon_text">
                      <input type="text" placeholder="Coupon Code" />
                      <span>
                      <a class="main_btn" href="#">Apply</a>
                      <a class="gray_btn" href="#">Close Coupon</a>
                      </span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Subtotal</h5>
                  </td>
                  <td>
                    <h5><?php print "$"."$sub_total";  ?></h5>
                  </td>
                </tr>
                <tr class="shipping_area">
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Shipping</h5>
                  </td>
                  <td>
                    <div class="shipping_box">
                      <!-- <ul class="list">
                        <li>
                          <a href="#">Flat Rate: $5.00</a>
                        </li>
                        <li>
                          <a href="#">Free Shipping</a>
                        </li>
                        <li>
                          <a href="#">Flat Rate: $10.00</a>
                        </li>
                        <li class="active">
                          <a href="#">Local Delivery: $2.00</a>
                        </li>
                      </ul> -->
                      <h5>
                        Shipping Address
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </h5>
                      <div style="border: 1px solid red">
                      <?php  

                        $sql = "SELECT * FROM `user_address`  ";
                        $res = $db->query($sql);
                        while ( $row = $res->fetch_array() )
                        {
                          print "
                                <label style=\"margin-left: 2em;
  margin-bottom: 0;position: relative;
  margin: 20px 0;\">
                                <input type=\"radio\" style=\"position: absolute;
  margin: 5px;
  padding: 0;\" name=\"user_address_1\" value=\" $row[user_address_1] \">$row[user_address_1]</label>" ;
                        }
           

                      
                      
                      ?>
                      </div>
                      
                      <input type="text" placeholder="Postcode/Zipcode" />
                      <a class="gray_btn" href="#">Update Details</a>
                    </div>
                  </td>
                </tr>
                <tr class="out_button_area">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="checkout_btn_inner">
                      <a class="gray_btn" href="#">Continue Shopping</a>
                      <a class="main_btn" href="order.php">Proceed to checkout</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    
    <!--================End Cart Area =================-->

    <form action="order.php" method="post">
  
  <div class="form-group">
    <label for="Customer Email">Enter Username</label>
    <input type="text" class="form-control" name="payment_info">    
  </div>
  
  
  
  
  <button type="submit" class="btn btn-block btn-success">Submit</button>
</form>

    <!--================ start footer Area  =================-->

    <!--================ End footer Area  =================-->


  </body>
</html>
