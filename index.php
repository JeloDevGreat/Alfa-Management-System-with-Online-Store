<?php 
  session_start();
  include 'config/database.php';
  include 'includes/head.php';
?>
  <body class=' body-background'>
      <div class="container row p-0 h-100 d-flex align-items-center mx-auto">
            <div class="col-sm-12 col-md-6 m-0 p-0 ms-auto index-photo h-75 flex-column ">
              <p class="ethnocentric m-2 index-font-on-shirt">ALFA</p><hr class="hr-index">
              <p class="betterlett m-2 index-font-on-shirt">Alfa SportsCity</p>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="col-md-6 p-3 h-75 d-flex flex-column justify-content-center shadow mx-auto form-login">
              <!-- <div class="m-0">
                <img class=" mb-4 img-thumbnail rounded-circle" src="images/alfa-32x32.jpg" alt="">
              </div> -->
              
              <!-- <p class="h5">Welcome to Alfa SportsCity</p> -->
              <h1 class="h3 m-4 text-light fw-normal ethnocentric mx-auto">Please sign in</h1>

              <div class="input-group m-2 w-75 mx-auto">
                <span class="input-group-text ethnocentric">Email</span>
                <input type="email" class="form-control" id="email" name="c_email" placeholder="juandelacruz@gmail.com" width="20" required>

              </div>
              <div class="input-group m-2 w-75 mx-auto">
                <span class="input-group-text ethnocentric">Password</span>
                <input type="password" class="form-control" id="pwd" name="c_pass" placeholder="" required>
              </div>
              <div class=" m-2 ethnocentric w-50 text-light mx-auto">
                  <input type="checkbox">&nbsp;Remember me
              </div>
              <div class="form-group row m-3">

                <button name="login" value="Login" class=" btn btn-lg m-1 p-1 col ethnocentric">
                  <a class="ethnocentric index-button text-decoration-none">Login</a>
                </button>

                <button name="register" value="register" id="register" class=" btn btn-lg m-1 p-1 col  " >
                  <a href="customer_register.php" class="text-decoration-none index-button ethnocentric">Register</a>
                </button>

              </div>
              <div class="justify-content-center mx-auto ">
                <a href="#" class="text-decoration-none ethnocentric text-light m-1">Forgot Password?</a>
                <a href="#" class="text-decoration-none ethnocentric text-light m-1">Forgot Email?</a>
              </div>
              <div class="socmed justify-content-center mx-auto p-4">
                <a href="#" class="text-decoration-none ethnocentric m-3">
                  <img src="images/facebook.png" alt="Facebook Logo" width="32">
                </a>
                <a href="#" class="text-decoration-none ethnocentric m-3">
                  <img src="images/twitter.png" alt="Twitter Logo" width="32" class="img-fluid">
                <a href="#" class="text-decoration-none ethnocentric m-3" class="img-fluid">
                  <img src="images/google.png" alt="Google Logo" width="32" class="img-fluid">
                </a>
                
              </div>
            </form>
      </div>

      <!-- FOOTER -->
      <footer class="page-footer"> -->
  
        <div class="footer-nav">
          <div class="container clearfix">

            <div class="footer-nav__col footer-nav__col--info">
              <div class="footer-nav__heading">Information</div>
              <ul class="footer-nav__list">
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">The brand</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Local stores</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Customer service</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Site map</a>
                </li>
              </ul>
            </div>

            <div class="footer-nav__col footer-nav__col--whybuy">
              <div class="footer-nav__heading">Why buy from us</div>
              <ul class="footer-nav__list">
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Secure shipping</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Testimonials</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Award winning</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Ethical trading</a>
                </li>
              </ul>
            </div>

            <div class="footer-nav__col footer-nav__col--account">
              <div class="footer-nav__heading">Your account</div>
              <ul class="footer-nav__list">
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Sign in</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Register</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">View cart</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">View your lookbook</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Track an order</a>
                </li>
                <li class="footer-nav__item">
                  <a href="#" class="footer-nav__link">Update information</a>
                </li>
              </ul>
            </div>


            <div class="footer-nav__col footer-nav__col--contacts">
              <div class="footer-nav__heading">Contact details</div>
                <address class="address">
                Head Office: Alfa SportsCity.<br>
                Bugallion St. Estacion, Paniqui, Tarlac
                </address>
                <div class="phone">
                  Telephone:
                <a class="phone__number" href="tel:0123456789">0909090909</a>
              </div>
              <div class="email">
                  Email:
                  <a href="mailto:support@yourwebsite.com" class="email__addr">alfasportscity@gmail.com</a>
              </div>
            </div>

          </div>
        </div>
<!-- 
         <div class="banners">
          <div class="container clearfix">

            <div class="banner-award">
              <span>Award winner</span><br> Fashion awards 2016
            </div>

            <div class="banner-social">
              <a href="#" class="banner-social__link">
              <i class="icon-facebook"></i>
            </a>
              <a href="#" class="banner-social__link">
              <i class="icon-twitter"></i>
            </a>
              <a href="#" class="banner-social__link">
              <i class="icon-instagram"></i>
            </a>
              <a href="#" class="banner-social__link">
              <i class="icon-pinterest-circled"></i>
            </a>
            </div>

          </div>
        </div> -->

        <div class="page-footer__subline">
          <div class="container clearfix">

            <div class="copyright">
              &copy; <?php echo date("Y");?> Alfa SportsCity&trade;
            </div>

            <div class="developer">
              Developed by Angelo Joseph Jeremias
            </div>

            <div class="designby">
              Design by Mark Joven Lacambacal
            </div>

          </div>
        </div>
      </footer>

      <?php
        global $con;
        if(isset($_POST['login'])){
          //Get the following data from the form and store it in a variable
          $_SESSION['customer_email'] = $_POST['c_email'];
          $_SESSION['customer_pass'] = $_POST['c_pass'];

          $customer_email = $_POST['c_email'];

          $customer_pass = $_POST['c_pass'];

          //Make a query to the database to check if the email and password is correct and if the user is registered or not yet registered in the database 
          $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
          //Run the query to the database 
          $run_customer = mysqli_query($con,$select_customer);
          //Check if the email and password is correct or not 
          if(mysqli_num_rows($run_customer) == 0){
              echo "<script>alert('Enter the correct email and password')</script>";
              exit();
          }
          //Check the Ip Address of the User if there is an IP Address same of the logger user 
          $check_customer = mysqli_num_rows($run_customer);

          $select_cart = "select * from cart where ip_add='$get_ip'";

          $run_cart = mysqli_query($con,$select_cart);

          $check_cart = mysqli_num_rows($run_cart);

          if($check_customer==0){

          echo "<script>alert('password or email is wrong ')</script>";

          exit();

          }

          if($check_customer==1 AND $check_cart==0){

          $_SESSION['customer_email'] = $customer_email;

          echo "<script>alert('You are Logged In')</script>";

          echo "<script>window.open('customer/homepage.php','_self')</script>";

          }
          else {

          $_SESSION['customer_email']=$customer_email;

          echo "<script>alert('You are Logged In')</script>";

          echo "<script>window.open('customer/homepage.php','_self')</script>";

          } 

          echo "<script>alert('You are Logged In')</script>";

          echo "<script>window.open('customer/homepage.php','_self')</script>";


          }

        ?>
  </body>

</html>
