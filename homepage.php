<?php

session_start();

require_once("config/database.php");
include("includes/head.php");
include 'functions/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-commerce Homepage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My E-commerce Store</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h2>Discover Our Latest Products</h2>
            <p>Find the best products at unbeatable prices.</p>
            <a href="products.php" class="btn">Shop Now</a>
        </section>
        <section class="featured-products">
            <h2>Featured Products</h2>
            <div class="product-list">
                <?php
                // Example of fetching products from a database
                // Assuming you have a database connection set up
                global $con;

                $sql = "SELECT product_id, product_title, product_price, product_img1 FROM products ORDER BY RAND() LIMIT 4";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='container row product card col-md-3'>";
                        echo "<img src='" . $row["product_img1"] . "' alt='" . $row["product_title"] . "' class='img-thumbnail'>";
                        echo "<h3 class='card-title>" . $row["product_title"] . "</h3>";
                        echo "<p card-body>$" . $row["product_price"] . "</p>";
                        echo "<a href='product.php?id=" . $row["product_id"] . "' class='btn btn-primary btn-sm card-footer'>View Product</a>";
                        echo "</div>";
                    }
                } else {
                    echo "No featured products available.";
                }
                $con->close();
                ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 My E-commerce Store. All rights reserved.</p>
    </footer>
</body>
</html>