<?php
    session_start();
    include_once 'includes/db.php';
    include_once 'functions/functions.php';

        $username = 'angelojosephjeremias8501@gmail.com';
        $password = "angelo";
        $user_ip = getRealUserIp();
        

        
        $select_customer = "SELECT * FROM customers WHERE customer_email = '$username' AND customer_pass = '$password' AND customer_ip = '$user_ip'";

        $run_customer = mysqli_query($con,$select_customer);
        $check_customer = mysqli_num_rows($run_customer);

        if($check_customer == 0){

            echo "<script>alert('password or email is wrong')</script>";
            exit();
        }
        echo $check_customer;
        echo"<br>";
        $convert = (int) $user_ip;
        echo var_dump($convert);
        echo"<br>";
        echo $_SERVER['PHP_SELF'];
        echo"<br>";
        echo $_SERVER['SERVER_NAME'];
        echo"<br>";
        echo $_SERVER['HTTP_HOST'];
        echo"<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo"<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo"<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo"<br>";
        echo $_SERVER['SCRIPT_URI'];
?>