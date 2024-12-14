<?php
  include 'includes/head.php';
  include 'config/database.php';

  $sql = "SELECT products.product_title,products.product_img1,products.product_price FROM order_items INNER JOIN products on products.product_id=order_items.Product_ID;";
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $product_title = $row['product_title'];
    $product_price= $row['product_price'];
    $product_img1 = $row['product_img1'];

?>
<form action="" method="post" class="container">
    <input type="checkbox" name="checkbox" id="checkbox">
    <p><?php echo $row['product_img1']; ?></p>
    <p><?php echo $row['product_title']; ?></p>
    <p><?php echo $row['product_price']; ?></p>


</form>
<?php } ?>