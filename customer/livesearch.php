<?php
$con = mysqli_connect('localhost','root','','alfa_store_db');
if (mysqli_connect_errno()) {
    return "Failed to connect to MySQL: " . mysqli_connect_error();
}


// If there is a query, perform the search
$sql = 'SELECT * FROM products WHERE product_title LIKE "%'.$_GET['q'].'%"';
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<ul class=\"list-group dropdown-menu w-25 h-100 list-group\">
            <li class=\"list-group-item \">
                <a href='details.php?pro_id=".$row['product_id']." class= \" dropdown-item list-group-items\"'>
                    ".$row['product_title']."
                </a>
            </ul>";
    }
} else {    
    echo "No results found";
}
?>