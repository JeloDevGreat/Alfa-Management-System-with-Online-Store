<?php

require_once("../config/database.php");

/// IP address code starts /////
function getRealUserIp(){
    return match(true) {
        !empty($_SERVER['HTTP_X_REAL_IP']) => $_SERVER['HTTP_X_REAL_IP'],
        !empty($_SERVER['HTTP_CLIENT_IP']) => $_SERVER['HTTP_CLIENT_IP'],
        !empty($_SERVER['HTTP_X_FORWARDED_FOR']) => $_SERVER['HTTP_X_FORWARDED_FOR'],
        default => $_SERVER['REMOTE_ADDR'],
    };
}
/// IP address code Ends /////

// items function Starts ///

function items(){

global $con;

$ip_add = getRealUserIp();

$get_items = "select * from cart where ip_add='$ip_add'";

$run_items = mysqli_query($con,$get_items);

$count_items = mysqli_num_rows($run_items);

echo $count_items;

}


// items function Ends ///

// total_price function Starts //

function total_price(){

global $con;

$ip_add = getRealUserIp();

$total = 0;

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($record=mysqli_fetch_array($run_cart)){

$pro_id = $record['p_id'];

$pro_qty = $record['qty'];

$get_price = "select * from products where product_id='$pro_id'";

$run_price = mysqli_query($con,$get_price);

while($row_price=mysqli_fetch_array($run_price)){


$sub_total = $row_price['product_price']*$pro_qty;

$total += $sub_total;



}





}

echo "P" . $total;


}



// total_price function Ends //


function getPro(){

global $con;

$get_products = "SELECT * FROM products WHERE is_deleted = 0 ORDER BY 1 DESC LIMIT 0,6";

$run_products = mysqli_query($con,$get_products);

while($row_products=mysqli_fetch_array($run_products)){

$pro_id = $row_products['product_id'];

$pro_title = $row_products['product_title'];

$pro_price = $row_products['product_price'];

$pro_img1 = $row_products['product_img1'];

echo "

  <div class='col-md-4 col-sm-6 single' >

    <div class='product' >

      <a href='details.php?pro_id=$pro_id' >

        <img src='customer/$pro_img1' class='img-responsive' >

      </a>

      <div class='text' >

        <h3><a href='details.php?pro_id=$pro_id' >$pro_title</a></h3>
        <p class='price' >P $pro_price</p>
        <div class='buttons' >

          <a href='details.php?pro_id=$pro_id' class='btn btn-default' >View details</a>

          <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>

            <i class='fa fa-shopping-cart'></i> Add to cart
            
          </a>
        </div>

      </div>


    </div>

  </div>

";

}
}

function getBreadcrumb() {
  $path = $_SERVER['PHP_SELF'];
  $path_parts = pathinfo($path);
  $directories = explode('/', trim($path_parts['dirname'], '/'));
  $breadcrumb = "<nav aria-label='breadcrumb'><ol class='breadcrumb'>";

  $breadcrumb .= "<li class='breadcrumb-item'><a href='../'>Home</a></li>";

  $dir_path = '..';
  foreach ($directories as $dir) {
    $dir_path .= '/' . $dir;
    $breadcrumb .= "<li class='breadcrumb-item'><a href='$dir_path'>$dir</a></li>";
  }

  $basename = basename($path_parts['basename'], ".php");
  $breadcrumb .= "<li class='breadcrumb-item active' aria-current='page'>{$basename}</li>";
  $breadcrumb .= "</ol></nav>";

  echo $breadcrumb;
}

?>
