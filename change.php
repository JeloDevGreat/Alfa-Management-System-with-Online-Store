<?php

session_start();

require_once("config/database.php");

include'navbar.php';

?>

<?php


$ip_add = getRealUserIp();

if(isset($_POST['id'])){

$id = $_POST['id'];

$qty = $_POST['quantity'];

$change_qty = "UPDATE cart SET qty='$qty' WHERE p_id='$id' AND ip_add='$ip_add'";

$run_qty = mysqli_query($con,$change_qty);


}





?>