<?php

    session_start();

    require_once'../config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <main>
        <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active  mx-2" aria-current="page"><a href="homepage.php">Home</a></li>
            </ol>
        </nav>
                <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner.jpg" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/banner.jpg" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/banner.jpg" alt="New York" class="d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- End of Carousel -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Categories</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group
                            list-group-flush">
                                <?php
                                $get_cats = "SELECT * FROM categories";
                                $run_cats = mysqli_query($con, $get_cats);
                                while($row_cats = mysqli_fetch_array($run_cats)){
                                    $cat_id = $row_cats['cat_id'];
                                    $cat_title = $row_cats['cat_title'];
                                    echo "<li class='list-group-item'><a href='homepage.php?cat_id=$cat_id'>$cat_title</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h3>Products</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                    getPro();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>