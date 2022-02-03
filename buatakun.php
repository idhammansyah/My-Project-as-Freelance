<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tribest Admin Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="img/customer.png" alt="IMG">
        </div>

        <form action = "prosesdaftar.php" method="post">
        <form class="login100-form validate-form">
          <span class="login100-form-title">
            Admin Create Account
          </span>

          <div class="wrap-input100">
            <input type = "text-area" class="input100" name="nama" placeholder="Insert your Username..." autocomplete="off" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100">
            <input type = "email" class="input100" name="email" placeholder="Insert your Email here..." autocomplete="off" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100">
            <input type = "password" class="input100" name="password"  id ="pass" placeholder="Insert Password here..." autocomplete="off" required>

            <span class="focus-input100"></span>
             <!-- <span class ="symbol-input100">
                <i id="icon" class="fa fa-eye-slash"></i>
              </span> -->
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
            <!-- <script src="show.js"></script> -->
          </div>
          
          
          <div class="container-login100-form-btn">
            <input type = "submit" class="login100-form-btn" value = "Create Account">
          </div>
          <div class="text-center p-t-136">
            <p>Do you have Account ?</p>
            <a class="txt2" href="login.php">
              Click here!
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
          </form>
        </form>
          
      </div>
    </div>
  </div>
  
  

  
<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>