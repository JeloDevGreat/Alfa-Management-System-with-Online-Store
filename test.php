<?php
  include 'includes/head.php';
  include 'config/database.php';

  $sql = "SELECT products.product_id,products.product_title,products.product_img1,products.product_price,order_items.Order_Item_ID,order_items.Order_ID FROM order_items INNER JOIN products on products.product_id=order_items.Product_ID;";

  $result = mysqli_query($con, $sql);
?>
<form action="" method="post" class="container">
<?php 
  while($row = mysqli_fetch_assoc($result)){
    echo"<div class=' list-group'>";
      echo"<div class='list-group-item d-flex justify-content-between align-items-center' id='$row[product_id]'>";
        echo"<input type='checkbox' name=''>";
        echo"<img src='$row[product_img1]' alt=''>";
        echo"<h3>$row[product_title]</h3>";
        echo"<p>Price: $row[product_price]</p>";
        echo"Quantity: <input type='number' name='quantity' id='quantity' value='1'>";
      echo"</div>";
    echo"</div>";

  }
?>
  <button type="submit" class="btn btn-primary">Checkout</button>
<?php
  if(isset($_POST['submit'])){ 
   while($row['product_id'] == $_POST['product_id']){

    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $datenow = date('Y-m-d H:i:s');

    $sql = "INSERT INTO orders (p_id, qty) VALUES ('$product_id', '$quantity')";
    $result = mysqli_query($con, $sql);
    if($result){
      echo "Product added to cart";
    }else{
      echo "Failed to add product to cart";
    }
   }
  }

 ?>
</form>
