      <?php 
        include "sidebar.php"

       ?>

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


      <?php 

      include "footer.php";
     ?>