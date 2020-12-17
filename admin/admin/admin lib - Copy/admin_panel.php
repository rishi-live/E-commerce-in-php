<html>
	<head>
		<link rel="stylesheet" href="css/colors1.css">
		<link rel="stylesheet" href="css/animated.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


		<!-- Bootstrap core CSS -->
		<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

		 <!-- Custom styles for this template  -->
	<link href="css/simple-sidebar.css" rel="stylesheet">

	</head>
	<body>
	 <!-- loader -->
	  	<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
	 <!-- end loader -->
		





<div class="d-flex" id="wrapper" style="background-color:	#F0F0F0">

    <!-- Sidebar -->
    	<?php 
    		include "admin/admin lib/sidebar.php";
    	 ?>
    <!-- /#sidebar-wrapper -->


    <!-- Page Content -->
    <div id="page-content-wrapper">


      <!-- navbar -->
      <?php 
      		include "admin/admin lib/header.php";
       ?>
      <!-- navbar admin lib/header.php -->


      <div class="container-fluid" style="background-color:white">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
        <div class="container-fluid" style="background-color:#F0F0F0">
        	
        <div class="card" style="width: 12rem">
		  <img class="card-img-top" src="admin/image/veg.jpg" alt="Card image cap">
		  <div class="card-body">

		    <h5 class="card-title" style="text-align: center;">VEG</h5>
		    <p class="card-text">All veg items. Click below to <code> #edit, #update , #delete.</code></p>
		    <a href="admin/admin_menu.php" class="btn btn-primary">VEG MENU</a>
		  </div>
		</div>

		<br><br>

		<div class="card" style="width: 12rem;">
		  <img class="card-img-top" src="admin/image/non-veg.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title" style="text-align: center;">Non VEG</h5>
		    <p class="card-text">All non veg items. Click below to <code> #edit, #update , #delete.</code></p>
		    <a href="#" class="btn btn-primary">NON VEG MENU</a>
		  </div>
		</div>
		
		</div>
		




        <?php 
			@session_start();

			print $_SESSION["adminname"];

		?>

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  



  <!-- Bootstrap core JavaScript -->
  <!-- <script src="js/jquery/jquery.min.js"></script> -->

  <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>




	</body>

</html>





<script src="js/jquery.min.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<script src="js/jquery/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">