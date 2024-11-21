<?php
  require_once("../config/database.php");
?>
<body>

  <header class="page-header ">
    <!-- topline -->
    <div class="row dflex justify-content-between align-items-center topline">
      <div class="col-3">
        <div class="currency col">
            <a class="currency__change text-decoration-none text-uppercase text-white ms-3" href="customer/my_account.php?my_orders">
            <?php
            if(!isset($_SESSION['customer_email'])){
              echo "Guest"; 
            }
            else
            { 
              // echo $_SESSION['customer_name'];
              $customer_email = $_SESSION['customer_email'];
              
              $select_customer = "select * from customers where customer_email='$customer_email'";

              $run_customer = mysqli_query($con,$select_customer);
              $row_customer=mysqli_fetch_array($run_customer);
              $customer_name = $row_customer['customer_name'];
              $SESSION['customer_name']=$customer_name;
              echo $customer_name;
              }
            ?>
            </a>
        </div>
      </div>

      <div class="col-4 row dflex justify-content-end  align-items-center ">
        
        <a href="cart.php" class="col btn basket">
          <span class="badge bg-danger"><i class="icon-basket"></i><?php items();?></span>
        </a>
        
        <div class="col bell text-center">
            <a href="#" class="text-muted">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
              </svg>
              
            </a>
        </div>

        <div class="col text-center">
        <?php
        if(!isset($_SESSION['customer_email'])){
          echo '
          <a href="customer_register.php" class="login__link bg-secondary p-1 rounded text-light text-decoration-none">
           Register
          </a>';
        } 
          else
          { 
              echo '
              <a href="customer/my_account.php?my_orders">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle text-dark" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg>
              </a>';
          }   
        ?>  
        </div>

        <div class="col text-dark">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '
            <a href="checkout.php" class="login__link bg-light p-1 rounded text-decoration-none text-dark">
               Sign In
            </a>';
          } 
            else{ 
                echo '
                <a href="./logout.php" class="login__link">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right text-dark" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                    </svg>
                </a>
                ';
            }   
          ?>  
            
        </div>

      </div>
    </div>


    <!-- bottomline -->
    <nav class="bottomline navbar navbar-expand-sm justify-content-between align-items-center ">
      <a class="align-items-center" href="../index.php">
        
        <img class="rounded-circle " src="images/alfa.jpg" alt="Alfa Sportscity logotype" width="40" height="40">

      </a>
      <ul class="navbar-nav list-unstyled align-items-center  ">

        <!-- <li class="nav-item m-1">
          <a class="nav-link" href="#">
            Popular
            <i class="icon-down-open-1"></i>
          </a>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="#">
            Featured
          <!-- <i class="icon-down-open-1"></i> -->
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">
            Categories
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../about.php">
            About
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="../contact.php">
            Contact Us
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="customer/my_account.php?my_orders">
              My Account
              <i class="icon-down-open-1"></i>
            </a>
            <div class="dropdown dropdown--lookbook">
              <div class="clearfix">
                <div class="dropdown__half">
                  <div class="dropdown__heading">Account Settings</div>
                  <ul class="dropdown__items">
                    <li class="dropdown__item">
                      <a href="#" class="dropdown__link">My Wishlist</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="#" class="dropdown__link">My Orders</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="#" class="dropdown__link">View Shopping Cart</a>
                    </li>
                  </ul>
                </div>
                <div class="dropdown__half">
                  <div class="dropdown__heading"></div>
                  <ul class="dropdown__items">
                    <li class="dropdown__item">
                      <a href="" class="dropdown__link">Edit Your Account</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="" class="dropdown__link">Change Password</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="" class="dropdown__link">Delete Account</a>
                    </li>
                  </ul>
                </div>
              </div>
          

            </div>

        </li>

      </ul>

    </nav>
  </header>