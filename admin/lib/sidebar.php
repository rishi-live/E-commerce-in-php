<html>
  <head>
    <link rel="stylesheet" href="css/colors1.css">
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

     <!-- Custom styles for this template  -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  </head>
  <body>
    <!-- loader -->
      <div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
    <!-- end loader -->
            <div class="d-flex" id="wrapper" style="background-color: #F0F0F0">

              <!-- Sidebar -->
                <div class="bg-info border-right" id="sidebar-wrapper"><!--  style="background-color: #383838" -->
                                    
                  
                <div class="sidebar-heading">Resturant</div>
                <div class="list-group list-group-flush">
                  <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light">Transaction</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light">Sales</a>
                  <a href="admin_menu.php" class="list-group-item list-group-item-action bg-light">Products</a>

                  <!-- <div class="dropdown list-group-item list-group-item-action bg-light">
                <button class="btn btn-secondary dropdown-toggle list-group-item list-group-item-action bg-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown button
                </button>
                <div class="dropdown-menu list-group-item list-group-item-action bg-light" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item list-group-item list-group-item-action bg-light" href="#">Action</a>
                  <a class="dropdown-item list-group-item list-group-item-action bg-light" href="#">Another action</a>
                  <a class="dropdown-item list-group-item list-group-item-action bg-light" href="#">Something else here</a>
                </div>
              </div> -->

                  <a href="user_profile.php" class="list-group-item list-group-item-action bg-light">User Profile</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light">Prime Members</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light">Messages</a>
                </div>
              </div>
              
              <!-- /#sidebar-wrapper -->
              <!-- Page Content -->
              <div id="page-content-wrapper">

                  <!-- navbar header start -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom">
                  <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                        <a class="nav-link" href="admin_panel.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>

                      </li>
                      <li>
                        <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                      </li>
                    </ul>
                  </div>
                </nav>

                <!-- navbar admin lib/header.php -->



