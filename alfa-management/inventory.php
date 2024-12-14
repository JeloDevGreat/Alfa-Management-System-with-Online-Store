<?php
include 'config/db.php';
include 'head.php';
include 'navbar.php';
?>
<div class="container mt-5 pt-5 d-flex flex-wrap">
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-secondary rounded">
        <div class="col flex-row">
        <div class="container mx-1 p-2 w-100 overflow-auto">
                    <h3 class="">Inventory</h3>
                    <hr>

                    <table class="table table-striped table-hover">
                        <tr>
                        <thead>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                            <?php 
                            $sql = "SELECT * FROM products";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <tr>
                                <td><img src='../admin_area/product_images/".$row['product_img1']."' width='50' height='50'></td>
                                <td>".$row['product_title']."</td>
                                <td>".$row['product_price']."</td>
                                <td>
                                <button class='btn btn-sm btn-primary' data-toggle='modal' data-target='#updateProduct".$row['product_id']."'>Update</button>
                                <button class='btn btn-sm btn-danger' data-toggle='modal' data-target='#deleteProduct".$row['product_id']."'>Delete</button>
                                
                                <!-- Modal -->
                                <div class='modal fade' id='updateProduct".$row['product_id']."' tabindex='-
                                1' aria-labelledby='updateProduct".$row['product_id']."' aria-hidden='true'>
                                <div class='modal-dialog'>
                                <div class='modal-content'>
                                <div class='modal-header'>
                                <h5 class='modal-title' id='updateProduct".$row['product_id']."'>Update Product</h5>
                                
                                </td>

                                </tr>";
                            }
                            ?>
                    </table>
                </div>
        </div>
    </div>
</div>