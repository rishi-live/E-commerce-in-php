<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin panel</title>
    <link rel="stylesheet" href="css/animated.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/style1.css">
    <!-- <link rel="stylesheet" href="css/colors1.css"> -->
    <link rel="stylesheet" href="css/colors1.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body  >
    <div class="container">
      <h1 style="color: #4885ed">Admin Login</h1>
            
            <?php 
              if(isset($_GET['msg']) == 1)
              {
                print "<h1 style=\" color:red \">Invalid Info</h1>";
              }

             ?>


      <form method="post" name="admin_login" action="admin_Login_Check.php">
        <div class="input-field">
          <input type="text" name="admin_email" id="email" required>
          <label>Email or Username</label>
        </div>


        <div class="input-field">
          <input class="pswrd" name="admin_password" type="password" id="pswrd" required>
          <span class="show">SHOW</span>
          <label>Password</label>
        </div>

      
        <div class="button">
          <div class="inner"></div>

          <button type="submit" name="admin_login" onclick="return email_validation(document.admin_login.admin_email)" >LOGIN</button> <!--onclick="process()"-->

        </div>
      </form>
      
      <div class="auth">Or login with</div>
      <div class="links">
        <div class="facebook">
          <i class="fab fa-facebook-square"><span>Facebook</span></i>
        </div>
        <div class="google">
          <i class="fab fa-google-plus-square"><span>Google</span></i>
        </div>
      </div>



      <!-- loader -->
          <div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
      <!-- end loader -->



      <!-- <div class="signup">
        Not a member? <a href="#">Signup now</a>
      </div> -->


      <div>
        <?php 
       echo "<br><a href=\"logout.php\">DEVELOPER MODE</a>&nbsp;  &nbsp;";
        ?>
      </div>



    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/loginCheck.js"></script>


    <!-- wow animation -->
    <script src="js/wow.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>


    <script>
      
      var input = document.querySelector('.pswrd');
      var show = document.querySelector('.show');
      show.addEventListener('click', active);
      function active(){
        if(input.type === "password"){
          input.type = "text";
          show.style.color = "#1DA1F2";
          show.textContent = "HIDE";
        }else{
          input.type = "password";
          show.textContent = "SHOW";
          show.style.color = "#111";
        }
      }




    </script>
  </body>
</html>
