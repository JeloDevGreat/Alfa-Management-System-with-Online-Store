<body>

<div class="box mx-auto w-50 fixed-bottom" ><!-- box Starts -->

<form action="checkout.php" method="post" ><!--form Starts -->

    <div class="form-group" ><!-- form-group Starts -->

        <label class="form-label">Email</label>

        <input type="text" class="form-control" name="c_email" required >

    </div><!-- form-group Ends -->

    <div class="form-group" ><!-- form-group Starts -->

        <label class="form-label">Password</label>

        <input type="password" class="form-control" name="c_pass" required >

    <p align="center">

    <a href="forgot_pass.php"> Forgot Password </a>

</p>

    </div><!-- form-group Ends -->

    <div class="text-center" ><!-- text-center Starts -->

        <button name="login" value="Login" class="btn btn-primary" >

            <i class="fa fa-sign-in" ></i> Log in
            
        </button>

    </div><!-- text-center Ends -->


</form><!--form Ends -->

<center><!-- center Starts -->

<a href="customer_register.php" >

<p>New ? Register Here</p>

</a>


</center><!-- center Ends -->


</div><!-- box Ends -->

</body>
</html>
<?php

if(isset($_POST['login'])){

    $customer_email = $_POST['c_email'];

    $customer_pass = $_POST['c_pass'];
    $customer_name = $_POST[''];
    
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

    echo "<script>alert('password or email is wrong')</script>";

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

    echo "<script>window.open('checkout.php','_self')</script>";

    } 


}

?>