<?php   
      include "connection.php";
      include "lib/header1.php";
      include "lib/header.php";

     ?>
<html>

<head>

</head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css" />

<link rel="stylesheet" href="vendors/linericon/style.css" />

<!-- main css -->
<link rel="stylesheet" href="css/style-cart.css" />
</head>

<body>

    <?php
    

    foreach ( $_SESSION['cart'] as $product_id => $product_qty ) {

        $sql1 = "SELECT * FROM `product` WHERE `product_id` = '$product_id' ";
        $res1 = $db->query($sql1);
        $row1 = $res1->fetch_array();

            $sql2 = "SELECT * FROM `prroduct_images` WHERE `product_id_f` = '$row1[0]' ";
            $res2 = $db->query($sql2);
            $row2 = $res2->fetch_array();

                  $sql3 = "SELECT * FROM `user_details` WHERE `user_id_f` = '$_SESSION[user_id]' ";
                  $res3 = $db->query($sql3);
                  $row3 = $res3->fetch_array();

                          $sql4 = "SELECT * FROM `user_address` WHERE `user_id_f` = '$_SESSION[user_id]' ";
                          $res4 = $db->query($sql4);
                          $row4 = $res4->fetch_array();

}
 ?>


    <section class="cat_product_area section_gap">
        <div class="container" style="background-color:#F5F5F5">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="product_top_bar">
                        <div class="left_dorp">
                            <center>

                                <label for=""
                                    style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:3px 3px;width:auto;height:auto; border-radius: 5px"><b
                                        style="font-weight:bold;color: black;padding:3px 3px;width:auto;height:auto;">
                                        Cart Items </b></label>
                            </center>
                        </div>
                    </div>
                    <form action="order.php" method="post" name="fname">
                        <div class="register-top-grid">
                            <h3>SHIPPING INFORMATION</h3>
                            <hr>
                            <div class="mation">
                                <span><b style="color: black;">FullName</b>
                                    <FONT COLOR=RED>*</FONT>
                                </span>
                                <input type="text" name="user_name" id="n1"
                                    value="<?php echo $_SESSION["user_name"]  ?> " required>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><b style="color: black;">Email</b>
                                    <FONT COLOR=RED>*</FONT>
                                </span>
                                <input type="text" name="user_email" id="e1"
                                    value="<?php echo $_SESSION["user_email"]   ?>    "
                                    required>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span><b style="color: black;">Phone No</b>
                                    <FONT COLOR=RED>*</FONT>
                                </span>
                                <input type="text" name="user_phone" id="p1" value=" <?php echo "$row3[2]"  ?>  "
                                    required>
                                <div>
                                    <span><b style="color: black;">Address</b>
                                        <FONT COLOR=RED>*</FONT>
                                    </span>

                                    <div>
                                        <input type="radio" name="address" value="<?php echo "$row4[user_address_1]" ?>"
                                            id="a1" checked>&nbsp;<?php echo "$row4[user_address_1]" ?>
                                        <br>
                                        <input type="radio" name="address" value="<?php echo "$row4[user_address_2]" ?>"
                                            id="a2">&nbsp;<?php echo "$row4[user_address_2]" ?>
                                        <br>
                                        <input type="radio" name="address" value="<?php echo "$row4[user_address_3]" ?>"
                                            id="a3">&nbsp;<?php echo "$row4[user_address_3]" ?>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="clearfix"> </div>
                     <a class="news-letter">
                     <label class="checkbox"><input type="checkbox" name="checkbox" onclick="sameAsAbove()"><i> </i>Same As Above</label>
                     </a> -->
                        </div>
                        <script>
                        function sameAsAbove() {
                            var checked = document.fname.checkbox.checked;

                            if (checked) {
                                document.getElementById("n2").value = document.getElementById("n1").value;
                                document.getElementById("p2").value = document.getElementById("p1").value;
                                document.getElementById("a2").value = document.getElementById("a1").value;
                            } else {
                                document.getElementById("n2").value = "";
                                document.getElementById("p2").value = "";
                                document.getElementById("a2").value = "";
                            }

                        }
                        </script>
                        <!-- <div class="  register-bottom-grid">
        <h3>SHIPPING INFORMATION</h3>
        <div class="mation">
          <span>FullName<label>*</label></span>
          <input type="text" name = "name2" id="n2"> 

           <span>Phone<label>*</label></span>
           <input type="text" name = "phone2" id="p2">
       
           <span>Address<label>*</label></span>
           <input type="text" id="a2" name="address">
        </div>
     </div> -->
                        <hr>
                        <div class="  register-bottom-grid">
                            <h3>PAYMENT INFORMATION</h3>
                            <input type="radio" name="payment_info" value="cod">&nbsp;&nbsp;PAY CASH ON DELIVERY
                            <br>
                            <input type="radio" name="payment_info" value="online" checked>&nbsp;&nbsp;PAY ONLINE
                        </div>
                        <br>
                        <center>
                            <div>
                                <input type="submit" value="submit" class="btn btn-primary">
                            </div>
                        </center>


                    </form>



                </div>
            </div>
        </div>
    </section>
</body>

</html>