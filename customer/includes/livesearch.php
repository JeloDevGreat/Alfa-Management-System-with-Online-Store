<?php
    global $con;
    $q = $_GET['q'];

    $sql = "SELECT * FROM products WHERE product_title LIKE '%$q%'";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)){
        $product_title = $row['product_title'];
    }


    if(!empty($product_title)){
        echo'<script> document.getElementById("livesearch").innerHTML = "'.$product_title.'"; </script>';
    } else{
        echo'<script> document.getElementById("livesearch").innerHTML = "No results found"; </script>';
    }
?>