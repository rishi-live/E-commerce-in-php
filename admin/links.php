<center>
    include "connection.php";


    <?php
@session_start();
	    if(isset($_SESSION['userid'])){
			echo "<a href=\"logout.php\">LOGOUT</a>&nbsp; | &nbsp;";
        }
		else{
            echo"<a href=\"index.php\">LOGIN</a>&nbsp; | &nbsp";
		}
	?>
    <!-- <a href = "login.php">LOGIN</a>&nbsp; | &nbsp; -->
    <a href="admin_panel.php">ADMIN PANEL</a>
    <hr>

</center>