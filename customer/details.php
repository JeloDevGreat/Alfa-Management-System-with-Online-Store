<?php

  session_start();

  require '../config/database.php';
  include 'includes/head.php';
  include 'includes/navbar.php';
//Get the product id in the url
$product_id = $_SESSION['pro_id'];
$get_product = "select * from products where product_id='$product_id'";

$run_product = mysqli_query($con,$get_product);

$check_product = mysqli_num_rows($run_product);

if($check_product == 0){

  echo "<script> window.open('homepage.php','_self') </script>";

}
else{
//INITIALIZE THE VARIABLES
  $row_product = mysqli_fetch_array($run_product);

  $p_cat_id = $row_product['p_cat_id'];

  $pro_id = $row_product['product_id'];

  $pro_title = $row_product['product_title'];

  $pro_price = $row_product['product_price'];

  $pro_desc = $row_product['product_desc'];

  $pro_img1 = $row_product['product_img1'];

  $pro_img2 = $row_product['product_img2'];

  $pro_img3 = $row_product['product_img3'];

  $pro_label = $row_product['product_label'];

  $pro_psp_price = $row_product['product_psp_price'];

  $pro_features = $row_product['product_features'];

  $pro_video = $row_product['product_video'];

  $status = $row_product['status'];

  $pro_url = $row_product['product_url'];
  
  $pro_stock = $row_product['Stock'];
// CHECK FOR THE LABEL
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
//GET ALL THE PRODUCT CATEGORIES
$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];

?>



  <div id="content" ><!-- content Starts -->
    <div class="container" ><!-- container Starts -->

      <div class="col-12"><!-- col-md-12 Starts -->
      <div id='alert'>
      </div>
        <div class="row" id="productMain"><!-- row Starts -->

          <div class="col-6"><!-- col-sm-6 Starts -->

            <?php echo $product_label; ?>
            <div id="mainImage"><!-- mainImage Starts -->

              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

                <ol class="carousel-indicators"><!-- carousel-indicators Starts -->

                  <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                  <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>

                </ol><!-- carousel-indicators Ends -->

                <div class="carousel-inner"><!-- carousel-inner Starts -->

                  <div class="carousel-item active">
                    <center>
                      <img src="../admin_area/product_images/<?php echo $pro_img1;?>" class="img-responsive">
                    </center>
                  </div>

                  <div class="carousel-item">
                    <center>
                      <img src="../admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive">
                    </center>
                  </div>

                  <div class="carousel-item">
                    <center>
                      <img src="../admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive">
                    </center>
                  </div>

                </div><!-- carousel-inner Ends -->

                <a href="#myCarousel" class="carousel-control-prev" data-slide="prev"><!-- left carousel-control Starts -->

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223"/>
                  </svg>

                </a><!-- left carousel-control Ends -->

                <a class="carousel-control-right" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671"/>
                  </svg>

                </a><!-- right carousel-control Ends -->

              </div>

            </div><!-- mainImage Ends -->

          </div><!-- col-sm-6 Ends -->

          <div class="col-6" ><!-- col-sm-6 Starts -->

            <div class="box" ><!-- box Starts -->

              <h1 class="text-center" > <?php echo $pro_title; ?> </h1>


              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="form-horizontal" ><!-- form-horizontal Starts -->

                <?php  if($status == "product"){?>

                <div class="form-group"><!-- form-group Starts -->

                  <h3 class="col-md-5 control-label">Product Quantity </h3>

                  <div class="col-md-7 form-control" ><!-- col-md-7 Starts -->
                    <label for="pro_quantity">
                      <input type="number" name="pro_quantity" id="pro_quantity" min='1' value="">
                    </label>

                  </div><!-- col-md-7 Ends -->

                </div><!-- form-group Ends -->

                <div class="form-group" ><!-- form-group Starts -->

                  
                  <?php
                    //MESSAGE FOR alert
                    echo ' <div id="alert" class="alert-warning"></div>'; 
                  ?>

                  <label class="col-md-5 control-label" for="pro_size">Product Size</label>

                  <div class="col-md-7" ><!-- col-md-7 Starts -->

                    <select id='pro_size' name="pro_size" class="form-control" >

                      <option values = ''>Select a Size</option>
                      <option value='XXS'>XXS</option>
                      <option value='XS'>XS</option>
                      <option value='SMALL'>Small</option>
                      <option value='MEDIUM'>Medium</option>
                      <option value='LARGE'>Large</option>
                      <option value='XL'>XL</option>
                      <option value='2XL'>2XL</option>

                    </select>

                </div><!-- col-md-7 Ends -->


                </div><!-- form-group Ends -->

              <?php } else { ?>


                <div class="form-group"><!-- form-group Starts -->

                  <label class="col-md-5 control-label" >Bundle Quantity </label>

                  <div class="col-md-7 form-control" ><!-- col-md-7 Starts -->

                    <label for="pro_quantity">
                      <input type="number" name="pro_quantity" id="pro_quantity">
                    </label>

                  </div><!-- col-md-7 Ends -->

                </div><!-- form-group Ends -->

                <div class="form-group" ><!-- form-group Starts -->

                  <label class="col-md-5 control-label" >Bundle Size</label>

                  <div class="col-md-7" ><!-- col-md-7 Starts -->

                    <select name="product_size" class="form-control" >

                      <option>Select a Size</option>
                      <option value='XXS'>XXS</option>
                      <option value='XS'>XS</option>
                      <option value='SMALL'>Small</option>
                      <option value='MEDIUM'>Medium</option>
                      <option value='LARGE'>Large</option>
                      <option value='XL'>XL</option>
                      <option value='2XL'>2XL</option>


                    </select>

                  </div><!-- col-md-7 Ends -->

                </div><!-- form-group Ends -->


                <?php } ?>


                <?php

                if($status == "product"){


                  if($pro_label == "Sale" or $pro_label == "Gift"){

                    echo "

                      <p class='price'>

                      Product Price : <del> P$pro_price </del><br>

                      Product sale Price : P$pro_psp_price

                      </p>

                      ";

                  } else{

                      echo "

                      <p class='price'>

                      Product Price : P$pro_price

                      </p>
                      <p>
                      Stock: $pro_stock
                      </p>

                      ";

                  }

                }
                else{

                  if($pro_label == "Sale" or $pro_label == "Gift"){

                    echo "

                      <p class='price'>

                      Bundle Price : <del> P$pro_price </del><br>

                      Bundle sale Price : P$pro_psp_price

                      </p>

                      ";

                  }
                  else{

                    echo "

                      <p class='price'>

                      Bundle Price : P$pro_price

                      </p>

                      ";

                  }

                }

                ?>

                <div class="text-center" ><!-- text-center buttons Starts -->

                  <button class="btn btn-primary"  name="add_to_cart"s>

                    <i class="fa fa-shopping-cart" ></i>Add to Cart

                  </button>

                  <button class="btn btn-warning"  name="add_wishlist" >

                    <i class="fa fa-heart" ></i>Add to Wishlist

                  </button>


                </div><!-- text-center buttons Ends -->

              </form><!-- form-horizontal Ends -->

            </div><!-- box Ends -->


            <div class="row" id="thumbs" ><!-- row Starts -->

              <div class="col-4" ><!-- col-xs-4 Starts -->

                <a href="#" class="thumb" >

                  <img src="../admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" >

                </a>

              </div><!-- col-xs-4 Ends -->

              <div class="col-4" ><!-- col-xs-4 Starts -->

                <a href="#" class="thumb" >

                  <img src="../admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive" >

                </a>

              </div><!-- col-xs-4 Ends -->

              <div class="col-4" ><!-- col-xs-4 Starts -->

                <a href="#" class="thumb" >

                  <img src="../admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive" >

                </a>

              </div><!-- col-xs-4 Ends -->


            </div><!-- row Ends -->


          </div><!-- col-sm-6 Ends -->

        </div><!-- row Ends -->

        <div class="box" id="details"><!-- box Starts -->

          <a class="btn btn-info tab" style="margin-bottom:10px;" href="#description" data-toggle="tab"><!-- btn btn-primary tab Starts -->

            <?php

            if($status == "product"){

              echo "Product Description";

            }
            else{

              echo "Bundle Description";

            }

            ?>

          </a><!-- btn btn-primary tab Ends -->

          <a class="btn btn-info tab" style="margin-bottom:10px;" href="#features" data-toggle="tab"><!-- btn btn-primary tab Starts -->

            Features

          </a><!-- btn btn-primary tab Ends -->

          <a class="btn btn-info tab" style="margin-bottom:10px;" href="#video" data-toggle="tab"><!-- btn btn-primary tab Starts -->

            Sounds and Videos

          </a><!-- btn btn-primary tab Ends -->

          <hr style="margin-top:0px;">

          <div class="tab-content"><!-- tab-content Starts -->

            <div id="description" class="tab-pane fade in active" style="margin-top:7px;" ><!-- description tab-pane fade in active Starts -->

            <?php echo $pro_desc; ?>

            </div><!-- description tab-pane fade in active Ends -->

            <div id="features" class="tab-pane fade in" style="margin-top:7px;" ><!-- features tab-pane fade in  Starts -->

              <?php echo $pro_features; ?>

            </div><!-- features tab-pane fade in  Ends -->

            <div id="video" class="tab-pane fade in" style="margin-top:7px;" ><!-- video tab-pane fade in Starts -->

              <?php echo $pro_video; ?>

            </div><!-- video tab-pane fade in  Ends -->


          </div><!-- tab-content Ends -->

        </div><!-- box Ends -->

        <div id="row" class="row"><!-- row same-height-row Starts -->

          <?php

            if($status == "product"){

          ?>

          <div class="col-3"><!-- col-md-3 col-sm-6 Starts -->

            <div class="box same-height headline"><!-- box same-height headline Starts -->

              <h3 class="text-center"> You may also like these Products: We provide you top 3 product items. </h3>

            </div><!-- box same-height headline Ends -->

          </div><!-- col-md-3 col-sm-6 Ends -->

          <?php

            $get_products = "select * from products order by rand() LIMIT 0,3";

            $run_products = mysqli_query($con,$get_products);

            while($row_products = mysqli_fetch_array($run_products)) {

            $pro_id = $row_products['product_id'];

            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];

            $pro_label = $row_products['product_label'];

            // $manufacturer_id = $row_products['manufacturer_id'];

            // $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

            // $run_manufacturer = mysqli_query($db,$get_manufacturer);

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

            <div class='card col-2' style='width:260px; height:450px; margin:10px;'>

              <div class='badge badge-primary' style='float:right;'>$product_label</div>
              
                <a href='details.php?pro_id=$pro_url' data-bs-toggle='tooltip' data-bs-placement='bottom' title='$pro_url'>

                  <img src='../admin_area/product_images/$pro_img1' class='card-img-top' >

                </a>

              <div class='card-body'>

                <a href='$pro_url' class='card-title h3' >$pro_title</a>

                <p class='price'> $product_price $product_psp_price </p>

                <div class='buttons'>

                  <a href='details.php?pro_id=$pro_url' class='btn btn-primary' >View Details</a>

                  <a href='details.php?pro_id=$pro_url' class='btn btn-danger'>

                    <i class='fa fa-shopping-cart'></i> Add To Cart

                  </a>

                </div>

              </div>

            </div>

            ";

            }


          ?>

          <?php }else{ ?>

          <div class="box same-height"><!-- box same-height Starts -->

            <h3 class="text-center"> Bundle Products </h3>

          </div><!-- box same-height Ends -->

          <?php

          $get_bundle_product_relation = "select * from bundle_product_relation where bundle_id='$pro_id'";

          $run_bundle_product_relation = mysqli_query($con,$get_bundle_product_relation);

          while($row_bundle_product_relation = mysqli_fetch_array($run_bundle_product_relation)){

            $bundle_product_relation_product_id = $row_bundle_product_relation['product_id'];

            $get_products = "select * from products where product_id='$bundle_product_relation_product_id'";


            $run_products = mysqli_query($con,$get_products);

            while($row_products = mysqli_fetch_array($run_products)){
              $pro_id = $row_products['product_id'];

              $pro_title = $row_products['product_title'];

              $pro_price = $row_products['product_price'];

              $pro_img1 = $row_products['product_img1'];

              $pro_label = $row_products['product_label'];

              // $manufacturer_id = $row_products['manufacturer_id'];

              // $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

              // $run_manufacturer = mysqli_query($db,$get_manufacturer);

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

              <div class='col-md-3 col-sm-6 center-responsive' >

                <div class='product' >

                  <a href='$pro_url' >

                    <img src='admin_area/product_images/$pro_img1' class='img-responsive' >

                  </a>

                  <div class='text' >

                    <h3><a href='$pro_url' >$pro_title</a></h3>

                    <p class='price' > $product_price $product_psp_price </p>

                    <p class='buttons' >

                    <a href='$pro_url' class='btn btn-default' >View details</a>

                    <a href='$pro_url' class='btn btn-primary'>

                      <i class='fa fa-shopping-cart'></i> Add to cart

                    </a>


                    </p>

                  </div>

                $product_label

                </div>

              </div>

              ";

            }

          }



          ?>


          <?php } ?>

        </div><!-- row same-height-row Ends -->

      </div><!-- col-md-12 Ends -->

    </div><!-- container Ends -->

  </div><!-- content Ends -->



<?php

  include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>
<script>
  // function alert(){
  //   const result = window.confirm('Do you want to update your cart?');
  //   if(result==true){
  //     window.open('details.php?pro_id=$pro_url','_self');
  //     document.getElementById('alert').innerHTML = 'Product has been updated';
  //   }
  //   else{
  //     window.open('details.php?pro_id=$pro_url','_self');
  //     document.getElementById('alert').innerHTML = 'Product has not been updated';
  //     }
  // }
</script>

</body>
</html>

<?php } ?>


<?php //ADD TO CART FUNCTION
if(isset($_POST['add_to_cart'])){

  if(!isset($_SESSION['customer_email'])){

    echo "<script>alert('You Must Login To Add Product In Cart')</script>";

    echo "<script>window.open('checkout.php','_self')</script>";
  }
  else{

    global $con;

    //GET THE CUSTOMER ID BASED ON THE IP ADDRESS OF THE USER
    $customer_session = $_SESSION['customer_email'];
    $get_customer_id = "select * from customers where customer_email='$customer_session'";
    $run_customer_id = mysqli_query($con,$get_customer_id);
    $row_customer_id = mysqli_fetch_array($run_customer_id);
    $customer_id = $row_customer_id['customer_id'];

    echo '<script>console.log("Add to cart button clicked")</script>';

    //GET THE IP ADDRESS OF THE USER
    $ip_add = getRealUserIp();

    echo '<script>console.log("IP Address: '.$ip_add.'")</script>';

    //GET THE PRODUCT ID
    $p_id = $pro_id;

    echo '<script>console.log("Product ID: '.$p_id.'")</script>';

    $pro_qty = $_POST['pro_quantity'];
    $pro_size = $_POST['pro_size'];
    echo '<script>console.log("Product ID: '.$p_id.'")</script>';
    echo '<script>console.log("Product Quantity: '.$pro_qty.'")</script>';
    echo '<script>console.log("Product Size: '.$pro_size.'")</script>'; 

    //MAKE A QUERY TO CHECK IF THE PRODUCT IS ALREADY IN THE CART
    $check_product = "SELECT * FROM cart WHERE ip_add='$ip_add' AND p_id='$p_id'";

    echo '<script>console.log("'.$check_product.'")</script>';
    //RUN THE QUERY
    $run_check = mysqli_query($con,$check_product);
    //CHECK IF THE PRODUCT IS ALREADY IN THE CART
    if(mysqli_num_rows($run_check)>0){
      global $con;
      echo "<script>window.alert('Product is already in your cart')</script>";
      echo '<script>console.log("Product is already in your cart")</script>';

    }else {
      echo '<script>console.log("Product is not in your cart.Add one")</script>';
      //IF THE PRODUCT IS NOT IN THE CART, INSERT THE PRODUCT INTO THE CART

      $query = "select * from products where product_id='$p_id'";

      $process = mysqli_query($con,$query);

      $catch = mysqli_fetch_array($process);

      $pro_price = $catch['product_price'];

      $pro_psp_price = $catch['product_psp_price'];

      $pro_label = $catch['product_label'];
   

        if($pro_label == "Sale" or $pro_label == "Gift"){                                                                           
            $product_price = $pro_psp_price;

        }
        else{

            $product_price = $pro_price;

        }
      $que = "insert into cart (p_id, customer_id, ip_add, qty, size, p_price) values ('$p_id','$customer_id','$ip_add','$pro_qty','$pro_size','$pro_price')";

      echo '<script>console.log("'.$que.'")</script>';


      if(mysqli_query($con, $que)){

        echo '<script>console.log("Product has been added to your cart")</script>';

      } else {

        $error = mysqli_error($con);

        echo "<script>console.log('Product has not been added to your cart: $error'); alert('Product has not been added to your cart: $error');</script>";

        error_log("MySQL error: " . $error);
      }

      // echo "<script>window.open('details.php?pro_id=$pro_url','_self')</script>";

    }
  }
}

//ADD TO WISHLIST FUNCTION

if(isset($_POST['add_wishlist'])){
  echo '<script>console.log("Add to wishlist button clicked")</script>';
  if(!isset($_SESSION['customer_email'])){

    echo "<script>alert('You Must Login To Add Product In Wishlist')</script>";

    echo "<script>window.open('checkout.php','_self')</script>";

  }
  else{

    $customer_session = $_SESSION['customer_email'];

    $get_customer = "select * from customers where customer_email='$customer_session'";

    $run_customer = mysqli_query($con,$get_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $customer_id = $row_customer['customer_id'];

    $select_wishlist = "select * from wishlist where customer_id='$customer_id' AND product_id='$pro_id'";

    $run_wishlist = mysqli_query($con,$select_wishlist);

    $check_wishlist = mysqli_num_rows($run_wishlist);

    if($check_wishlist == 1){

      echo "<script>alert('This Product Has Been already Added In Wishlist')</script>";

      echo "<script>window.open('details.php?pro_id=$pro_url','_self')</script>";

    }
    else{

      $insert_wishlist = "insert into wishlist (customer_id,product_id) values ('$customer_id','$pro_id')";

      $run_wishlist = mysqli_query($con,$insert_wishlist);

      if($run_wishlist){

        echo "<script> alert('Product Has Inserted Into Wishlist') </script>";

        echo "<script>window.open('details.php?pro_id=$pro_url','_self')</script>";

      }

    }

  }

}

?>
