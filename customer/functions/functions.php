<?php

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

  function update_cart(){

    global $con;

    if(isset($_POST['update'])){

        foreach($_POST['remove'] as $remove_id){


        $delete_product = "DELETE from cart where p_id='$remove_id'";

        $run_delete = mysqli_query($con,$delete_product);

        if($run_delete){
          echo "<script>window.open('cart.php','_self')</script>";
        }
      }
    }
  }



// total_price function Ends //


function getPro(){

global $con; 

$get_products = "select * from products order by 1 DESC LIMIT 0,6";

$run_products = mysqli_query($con,$get_products);

while($row_products=mysqli_fetch_array($run_products)){

$pro_id = $row_products['product_id'];

$pro_title = $row_products['product_title'];

$pro_price = $row_products['product_price'];

$pro_img1 = $row_products['product_img1'];

$pro_label = $row_products['product_label'];

$product_stock = $row_products['Stock'];

// $manufacturer_id = $row_products['manufacturer_id'];

// $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

// $run_manufacturer = mysqli_query($db,$get_manufacturer);

// $row_manufacturer = mysqli_fetch_array($run_manufacturer);

// $manufacturer_name = $row_manufacturer['manufacturer_title'] ?? 'Unknown Manufacturer';

$pro_psp_price = $row_products['product_psp_price'];

$pro_url = $row_products['product_url'];

if($pro_label == "Sale" or $pro_label == "Gift"){

  $product_price = "<del> P$pro_price </del>";

  $product_psp_price = "| P$pro_psp_price";

}
else{

$product_psp_price = "";

$product_price = "P$pro_price";

}


if($pro_label == ""){
  //pass
}
else{

$product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}


echo "

<div class='card col-md-4 m-2'>

  <div class='badge badge-primary text-capitalize' style='float:left;'>$product_label</div>
  
    <a href='$pro_url'>

      <img src='../admin_area/product_images/$pro_img1' class='img-thumbnail' >

    </a>

  <div class='card-body align-items-center'>

    <a href='details.php?pro_id=$pro_url' class='card-title card-header h3 ' >$pro_title</a>
    <div class='card-body row'>

      <span class='h6 col'>Price: $product_price $product_psp_price </span>
    
      <span class='h6 col'>Stocks: $product_stock</span>

    </div>

    
    <div class='card-footer row'>

      <a href='details.php?pro_id=$pro_url' class='btn btn-primary btn-sm card-link col' >View Details</a>

      <a href='details.php?pro_id=$pro_url' class='btn btn-danger btn-sm card-link col img-thumbnail'>

        <i class='fa fa-shopping-cart '></i> Add To Cart

      </a>

    </div>

  </div>

</div>

";

}

}

  function items(){

    global $con;
    
    $ip_add = getRealUserIp();
    
    $get_items = "select * from cart where ip_add='$ip_add'";
    
    $run_items = mysqli_query($con,$get_items);
    
    $count_items = mysqli_num_rows($run_items);
    
    echo $count_items;
    
    }
    function add_to_cart($product_id, $quantity) {
      global $con;
  
      // Get the user's IP address
      $ip_add = getRealUserIp();
  
      // Check if the product is already in the cart
      $check_product = "SELECT * FROM cart WHERE ip_add='$ip_add' AND p_id='$product_id'";
      $run_check = mysqli_query($con, $check_product);
  
      if (mysqli_num_rows($run_check) > 0) {
          // If the product is already in the cart, update the quantity
          $update_quantity = "UPDATE cart SET qty = qty + $quantity WHERE ip_add='$ip_add' AND p_id='$product_id'";
          mysqli_query($con, $update_quantity);
      } else {
          // If the product is not in the cart, add it
          $insert_product = "INSERT INTO cart (p_id, ip_add, qty) VALUES ('$product_id', '$ip_add', '$quantity')";
          mysqli_query($con, $insert_product);
      }
  
      // Optionally, you can redirect or show a message
      echo "<script>alert('Product added to cart!');</script>";
  }


  
/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

  foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

    if((int)$sVal!=0){

    $aWhere[] = 'p_cat_id='.(int)$sVal;

    }

  }

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

  foreach($_REQUEST['cat'] as $sKey=>$sVal){

    if((int)$sVal!=0){

    $aWhere[] = 'cat_id='.(int)$sVal;

    }

  }

}

/// Categories Code Ends ///

function getProducts(){

  /// getProducts function Code Starts ///
  
  global $con;
  
  $aWhere = array();

}


//FOR LIVE SEARCH
?>
