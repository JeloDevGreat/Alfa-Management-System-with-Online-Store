<?php
    include_once'config/db.php';
    include'navbar.php'; 
?>

<div class="container mt-5 pt-5">
    <div class="row overflow-x-auto">
        <div class="col d-flex flex-nowrap">
            <div class="container mx-1 p-2 w-100 border border-warning rounded">  <!--This is the container for Not Started -->
                <div class="container">
                    <h3 class="">Not Started</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Not Started' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 d-flex justify-content-between flex-column  border border-top-0 border-start-0 border-end-0 btn btn-lg btn-light data-bs-toggle='modal' data-bs-target='#myModal'>
                                ".$row['projectName']."
                                <div class='dropdown'>
                                    <button type='button' class='btn btn-light text-dark dropdown-toggle' data-bs-toggle='dropdown'>
                                    </button>
                                    <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href='#'>Edit</a></li>
                                        <li><a class='dropdown-item' href='#'>Delete</a></li>
                                    </ul>
                                </div>
                                

                                </li>";
                            }
                            ?>
                        </ul>
                </div>
            </div>
            <div class="container mx-1 p-2 w-100 border border-warning rounded">  <!--This is the container for In Progress -->
                <div class="container ">
                    <h3>In Progress</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'In Progress'AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "<li class='my-2 mx-0 d-flex justify-content-between border border-top-0 border-start-0 border-end-0 btn btn-light'>".$row['projectName']."
                                <div class='dropdown'>
                                    <button type='button' class='btn btn-light text-dark dropdown-toggle' data-bs-toggle='dropdown'>
                                    </button>
                                    <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href='#'>Edit</a></li>
                                        <li><a class='dropdown-item' href='#'>Delete</a></li>
                                    </ul>
                                </div>
                                </li>";
                            }
                            ?>
                        </ul>
                </div>
            </div>
            <div class="container mx-1 p-2 w-100 border border-warning rounded">
                <div class="container ">
                    <h3>On Hold</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'On Hold' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "<li class='my-2 mx-0 d-flex justify-content-between border border-top-0 border-start-0 border-end-0 btn btn-light'>".$row['projectName']."
                                <div class='dropdown'>
                                    <button type='button' class='btn btn-light text-dark dropdown-toggle' data-bs-toggle='dropdown'>
                                    </button>
                                    <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href='#'>Edit</a></li>
                                        <li><a class='dropdown-item' href='#'>Delete</a></li>
                                    </ul>
                                </div>
                                </li>";
                            }
                            ?>
                        </ul>
                </div>
            </div>
            <div class="container mx-1 p-2 w-100 border border-warning rounded">
                <div class="container ">
                    <h3>Completed</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Completed' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "<li class='my-2 mx-0 d-flex justify-content-between border border-top-0 border-start-0 border-end-0 btn btn-light'>".$row['projectName']."
                                <div class='dropdown'>
                                    <button type='button' class='btn btn-light text-dark dropdown-toggle' data-bs-toggle='dropdown'>
                                    </button>
                                    <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href='#'>Edit</a></li>
                                        <li><a class='dropdown-item' href='#'>Delete</a></li>
                                    </ul>
                                </div>
                                </li>";
                            }
                            ?>
                        </ul>
                </div>
            </div>
            <div class="container mx-1 p-2 w-100 border border-warning rounded">
                <div class="container">
                    <h3>Delayed</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Delayed' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "<li class='my-2 mx-0 d-flex justify-content-between border border-top-0 border-start-0 border-end-0 btn btn-light'>".$row['projectName']."
                                <div class='dropdown'>
                                    <button type='button' class='btn btn-light text-dark dropdown-toggle' data-bs-toggle='dropdown'>
                                    </button>
                                    <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href='#'>Edit</a></li>
                                        <li><a class='dropdown-item' href='#'>Delete</a></li>
                                    </ul>
                                </div>
                                </li>";
                            }
                            ?>
                        </ul>
                </div>
            </div>
            <div class="container mx-1 p-2 w-100 border border-warning rounded">
                <div class="container">
                    <h3>At Risk</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'At Risk' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "<li class='my-2 mx-0 d-flex justify-content-between border border-top-0 border-start-0 border-end-0 btn btn-light'>".$row['projectName']."
                                <div class='dropdown'>
                                    <button type='button' class='btn btn-light text-dark dropdown-toggle' data-bs-toggle='dropdown'>
                                    </button>
                                    <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href='#'>Edit</a></li>
                                        <li><a class='dropdown-item' href='#'>Delete</a></li>
                                    </ul>
                                </div>
                                </li>";
                            }
                            ?>
                        </ul>
                </div>
            </div>
            <div class="container mx-1 p-2 w-100 border border-warning rounded">
                <div class="container">
                    <h3>Under Review</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Under Review' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "<li class='my-2 mx-0 d-flex justify-content-between border border-top-0 border-start-0 border-end-0 btn btn-light'>".$row['projectName']."
                                <div class='dropdown'>
                                    <button type='button' class='btn btn-light text-dark dropdown-toggle' data-bs-toggle='dropdown'>
                                    </button>
                                    <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href='#'>Edit</a></li>
                                        <li><a class='dropdown-item' href='#'>Delete</a></li>
                                    </ul>
                                </div>
                                </li>";
                            }
                            ?>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>