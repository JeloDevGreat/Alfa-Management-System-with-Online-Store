<?php

 include 'config/database.php';

/// IP address code starts /////
function getRealUserIp(){
    if (!empty($_SERVER['HTTP_X_REAL_IP'])) {
        return $_SERVER['HTTP_X_REAL_IP'];
    } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
/// IP address code Ends /////


// items function Starts ///

// function items(){

// global $con;

// $ip_add = getRealUserIp();

// $get_items = "select * from cart where ip_add='$ip_add'";

// $run_items = mysqli_query($con,$get_items);

// $count_items = mysqli_num_rows($run_items);

// echo $count_items;

// }


// items function Ends ///

// total_price function Starts //

// function total_price(){

// global $con;

// $ip_add = getRealUserIp();

// $total = 0;

// $select_cart = "select * from cart where ip_add='$ip_add'";

// $run_cart = mysqli_query($con,$select_cart);

// while($record=mysqli_fetch_array($run_cart)){

// $pro_id = $record['p_id'];

// $pro_qty = $record['qty'];


// $sub_total = $record['p_price']*$pro_qty;

// $total += $sub_total;

// }

// echo "P" . $total;

// }

// // total_price function Ends //

// // getPro function Starts //

// function getPro(){

// global $con; 

// $get_products = "select * from products order by 1 DESC LIMIT 0,6";

// $run_products = mysqli_query($con,$get_products);

// while($row_products=mysqli_fetch_array($run_products)){

// $pro_id = $row_products['product_id'];

// $pro_title = $row_products['product_title'];

// $pro_price = $row_products['product_price'];

// $pro_img1 = $row_products['product_img1'];

// $pro_label = $row_products['product_label'];

// $product_stock = $row_products['Stock'];

// // $manufacturer_id = $row_products['manufacturer_id'];

// // $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

// // $run_manufacturer = mysqli_query($con,$get_manufacturer);

// // $row_manufacturer = mysqli_fetch_array($run_manufacturer);

// // $manufacturer_name = $row_manufacturer['manufacturer_title'] ?? 'Unknown Manufacturer';

// $pro_psp_price = $row_products['product_psp_price'];

// $pro_url = $row_products['product_url'];

// if($pro_label == "Sale" or $pro_label == "Gift"){

//   $product_price = "<del> P$pro_price </del>";

//   $product_psp_price = "| P$pro_psp_price";

// }
// else{

// $product_psp_price = "";

// $product_price = "P$pro_price";

// }


// if($pro_label == ""){
//   //pass
// }
// else{

// $product_label = "

// <a class='label sale' href='#' style='color:black;'>

// <div class='thelabel'>$pro_label</div>

// <div class='label-background'> </div>

// </a>

// ";

// }


// echo "

// <div class='card col-md-4 m-2'>

//   <div class='badge badge-primary text-capitalize' style='float:left;'>$product_label</div>
  
//     <a href='$pro_url'>

//       <img src='admin_area/product_images/$pro_img1' class='img-thumbnail' >

//     </a>

//   <div class='card-body align-items-center'>

//     <a href='$pro_url' class='card-title card-header h3 ' >$pro_title</a>
//     <div class='card-body row'>

//       <span class='h6 col'>Price: $product_price $product_psp_price </span>
    
//       <span class='h6 col'>Stocks: $product_stock</span>

//     </div>

    
//     <div class='card-footer row'>

//       <a href='details.php?pro_id=$pro_url' class='btn btn-primary btn-sm card-link col' >View Details</a>

//       <a href='details.php?pro_id=$pro_url' class='btn btn-danger btn-sm card-link col img-thumbnail'>

//         <i class='fa fa-shopping-cart '></i> Add To Cart

//       </a>

//     </div>

//   </div>

// </div>

// ";

// }

// }

// getPro function Ends //


/// getProducts Function Starts ///

function getProducts(){

/// getProducts function Code Starts ///

global $con;

$aWhere = array();

// /// Manufacturers Code Starts ///

if(isset($_REQUEST['pro'])&&is_array($_REQUEST['man'])){

  foreach($_REQUEST['pro'] as $sKey=>$sVal){

  if((int)$sVal!=0){

  $aWhere[] = 'product_id='.(int)$sVal;

  }

}

}

/// Manufacturers Code Ends ///

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

$per_page=6;

if(isset($_GET['page'])){

$page = $_GET['page'];

}else {

$page=1;

}
 global $con;
$start_from = ($page-1) * $per_page ;

$sLimit = " order by 1 DESC LIMIT $start_from,$per_page";

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;

$get_products = "select * from products  ".$sWhere;

$run_products = mysqli_query($con,$get_products);

while($row_products=mysqli_fetch_array($run_products)){

$pro_id = $row_products['product_id'];

$pro_title = $row_products['product_title'];

$pro_price = $row_products['product_price'];

$pro_img1 = $row_products['product_img1'];

$pro_label = $row_products['product_label'];

// $manufacturer_id = $row_products['manufacturer_id'];

// $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

// $run_manufacturer = mysqli_query($con,$get_manufacturer);

// $row_manufacturer = mysqli_fetch_array($run_manufacturer);

// $manufacturer_name = $row_manufacturer['manufacturer_title'];

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

<div class='col-md-4 center-responsive' >

<div class='product' >

<a href='$pro_url' >

<img src='admin_area/product_images/$pro_img1' class='img-responsive' >

</a>

<div class='text' >

<h3><a href='$pro_url' >$pro_title</a></h3>

<p class='price' > $product_price $product_psp_price </p>

<p class='buttons' >

<a href='$pro_url' class='btn btn-default' >View details</a>

<a href='$pro_url' class='btn btn-danger'>

<i class='fa fa-shopping-cart' data-price=$pro_price></i> Add To Cart

</a>


</p>

</div>

$product_label


</div>

</div>

";
// for manufacture title
// <center>

// <p class='btn btn-warning'> $manufacturer_name </p>

// </center>

// <hr>


}
/// getProducts function Code Ends ///



}


/// getProducts Function Ends ///


/// getPaginator Function Starts ///

function getPaginator(){

// getPaginator Function Code Starts //

$per_page = 6;

global $con;

$aWhere = array();

$aPath = '';

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

  foreach($_REQUEST['man'] as $sKey=>$sVal){

    if((int)$sVal!=0){

      $aWhere[] = 'manufacturer_id='.(int)$sVal;

      $aPath .= 'man[]='.(int)$sVal.'&';

    }

  }

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

  foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

    if((int)$sVal!=0){

    $aWhere[] = 'p_cat_id='.(int)$sVal;

    $aPath .= 'p_cat[]='.(int)$sVal.'&';

    }

  }

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

  foreach($_REQUEST['cat'] as $sKey=>$sVal){

    if((int)$sVal!=0){

      $aWhere[] = 'cat_id='.(int)$sVal;

      $aPath .= 'cat[]='.(int)$sVal.'&';

    }

  }

}
//  Categories Code Ends


// $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');

// $query = "select * from products ".$sWhere;

// $result = mysqli_query($con,$query);

// $total_records = mysqli_num_rows($result);

// $total_pages = ceil($total_records / $per_page);

// echo "<li><a href='shop.php?page=1";

// if(!empty($aPath)){ echo "&".$aPath; }

//   echo "' >".'First Page'."</a></li>";

// for ($i=1; $i<=$total_pages; $i++){

//   echo "<li><a href='shop.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' >".$i."</a></li>";

// };

// echo "<li><a href='shop.php?page=$total_pages";

// if(!empty($aPath)){ echo "&".$aPath; }

// echo "' >".'Last Page'."</a></li>";

/// getPaginator Function Code Ends ///


/// getPaginator Function Ends ///

}
?>
