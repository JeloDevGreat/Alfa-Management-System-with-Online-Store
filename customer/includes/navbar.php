<body>


       <!-- topline -->
       <div class="row dflex justify-content-between align-items-center topline">
      <div class="col-3">
        <div class="currency col">
            <a class="currency__change text-decoration-none text-white text-uppercase ms-3" href="customer/my_account.php?my_orders">
            <?php
            if(!isset($_SESSION['customer_email'])){
              echo "Welcome to Alfa Sportscity"; 
            }
            else
            { 
              // echo $_SESSION['customer_email'];
              $customer_email = $_SESSION['customer_email'];
              
              $select_customer = "select * from customers where customer_email='$customer_email'";

              $run_customer = mysqli_query($con,$select_customer);
              $row_customer=mysqli_fetch_array($run_customer);

              $customer_name = $row_customer['customer_name'];
              $_SESSION['customer_name']=$customer_name;
              echo "Welcome " . $customer_name;
              }
            ?>
            </a>
        </div>
      </div>

      <div class="col-4 row dflex-row align-items-center ">
        
        <a href="cart.php" class="col btn btn-sm basket">
          <span class="badge bg-danger"><i class="icon-basket"></i><?php items();?></span>
        </a>
        
        <div class="col bell btn btn-sm btn-warning text-center">
            <a href="#" class="text-muted">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
              </svg>
              
            </a>
        </div>

        <div class="col text-center btn-sm">
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

        <div class="col text-white btn-sm">
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


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../images/alfa.jpg" width="30" height="30" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>