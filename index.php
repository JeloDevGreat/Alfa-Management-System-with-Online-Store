
<?php

  session_start();

  include("includes/db.php");
  // include("includes/header.php");
  include("functions/functions.php");
  // include("includes/main.php");
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto" rel="stylesheet">
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="shortcut icon" href="images/tab.png" type="image/png">
    
    <title>Alfa SportsCity </title>
    <link href="styles/style.css" rel="stylesheet">
    <link href="styles/backend.css" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style> -->
  </head>
  <body class='body-background'>
      <main class="container ">
          <div class="d-flex justify-content-end align-self-end m-5">
            <form action="" method="POST" class="p-5 col-sm-1 col-md-4 m-2 bg-light rounded">
              <div class="container dflex justify-content-center row">
                <img class=" mb-4 img-thumbnail rounded-circle w-50" src="images/alfa.jpg" alt="" width="72" height="57">
              </div>
              
              <p class="h3">Welcome to Alfa SportsCity</p>
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

              <div class="form-group form-floating m-2">

                <input type="email" class="form-control " id="email" name="c_email" placeholder="juandelacruz@gmail.com" required>

                <label for="email" class="form-label">Email address</label>

                <div class="valid-feedback">Valid.</div>

                <div class="invalid-feedback">Please fill out this field.</div>

              </div>
              <div class="form-group form-floating m-2">

                <input type="password" class="form-control" id="pwd" name="c_pass" placeholder="">

                <label for="email" class="form-label">Password</label>

                <div class="valid-feedback">Valid.</div>
                
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group row">
                <button name="login" value="Login" class="btn btn-primary p-2 mt-2 btn-lg mx-auto w-25" >Login</button>
              </div>

            </form>
          </div>
      </main>

        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
          <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
          </symbol>
          <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
          </symbol>
          <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
          </symbol>
          <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
          </symbol>
        </svg>

        
        <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
          <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"  aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme="light" aria-pressed="false">
                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                Light
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme="dark" aria-pressed="false">
                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                Dark
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme="auto" aria-pressed="true">
                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
                Auto
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
              </button>
            </li>
          </ul>
        </div>

        
    <main class="form-signin w-100 m-auto">
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <img class="mb-4" src="images/alfa.jpg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput"  name="c_email" placeholder="name@example.com"> 
          <label for="floatingInput">Email address</label>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" name="c_pass"placeholder="Password">
          <label for="floatingPassword">Password</label>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Remember me
          </label>
        </div> -->
        <!-- <button class="btn btn-primary w-100 py-2" type="submit" name="login">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy;2024</p>
      </form>
    </main> -->

      <!-- FOOTER -->
      <!-- <footer class="page-footer"> -->
  <!-- 
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
        </div> -->

        <!-- <div class="banners">
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

        <!-- <div class="page-footer__subline">
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
      </footer> -->

      <?php
        if(isset($_POST['login'])){

          $customer_email = $_POST['c_email'];

          $customer_pass = $_POST['c_pass'];
          // $customer_name = $_POST[''];

          $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

          $run_customer = mysqli_query($con,$select_customer);
          // if(mysqli_num_rows($run_customer) == 0){
          //     echo "<script>alert('password or email is wrong')</script>";
          //     exit();
          // }

          $get_ip = getRealUserIp();

          $check_customer = mysqli_num_rows($run_customer);
          // if($get_ip != $check_customer){
          //     echo "<script>alert('password or email is wrong')</script>";
          //     exit();
          // }

          $select_cart = "select * from cart where ip_add='$get_ip'";

          $run_cart = mysqli_query($con,$select_cart);

          $check_cart = mysqli_num_rows($run_cart);

          if($check_customer==0){

          echo "<script>alert('password or email is wrong 2')</script>";

          exit();

          }

          if($check_customer==1 AND $check_cart==0){

          $_SESSION['customer_email']=$customer_email;

          echo "<script>alert('You are Logged In')</script>";

          echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

          }
          else {

          $_SESSION['customer_email']=$customer_email;

          echo "<script>alert('You are Logged In')</script>";

          echo "<script>window.open('homepage.php','_self')</script>";

          } 


          }

        ?>
  </body>

</html>
