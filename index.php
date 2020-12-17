<?php 
include "lib/header.php";
include "connection.php";
?>

<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="css/style-button.css">



<!-- carousel start -->

<style>
  
  img {
    height:800px;
  }


</style>


 <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"  data-interval="700">
      <img src="img/bg.jpg"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item"  data-interval="1000">
      <img src="img/dinner1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item"  data-interval="1000">
      <img src="img/cake.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<?php 

include "lib/icon.php";
 ?>

	<div class="container-fluid" style="background-color:">
    <div class="row" style="background-color: ">
  		<div class="col-md-4" style="background-color: "><a href="show_menu.php" class="delta1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            MENU
          </a>
      </div>

  		<div class="col-md-4"  ><!-- <a href="show_menu.php">ITEMS</a> -->

          <a href="show_menu.php" class="delta2">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            MENU
          </a>

      </div>
  		<div class="col-md-4" style="background-color: "><a href="show_menu.php" class="delta3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            MENU
          </a>
      </div>
	  </div>
  </div>

<?php 

	include "lib/Menu-box/menu-box.php";

 ?> 
<br><br>
<?php 

	include "lib/block1.php";

 ?>
<section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="offset-lg-2 col-lg-6 text-center">
          <div class="offer_content">
            <h3 class="text-uppercase mb-40">Independence Day's Offer</h3>
            <h2 class="text-uppercase">50% off</h2>
            <a href="#" class="main_btn mb-20 mt-5">Discover Now</a>
            <p>Limited Time Offer</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php 

	include "lib/Gallery-img/Gallery-img.php";

 ?>

 
<div>
 <?php 

include "lib/count/count.php";

  ?>
</div>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

