<?php
    include_once'config/db.php';
    include'navbar.php'; 
?>

<div class="container mt-5 pt-5 d-flex flex-wrap">
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-warning rounded">
        <div class="col flex-row">
                <div class="container mx-1 p-2 w-100">
                    <h3 class="">Not Started</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Not Started' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 h-25 d-flex justify-content-between flex-column  border border-top-0 border-start-0 border-end-0 btn btn-lg btn-light' data-bs-toggle='modal' data-bs-target='#".$row['projectID']."'>
                                ".$row['projectName']."
                                <!-- The Modal -->
                                <div class='modal fade' id='".$row['projectID']."'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>

                                    <!-- Modal Header -->
                                    <div class='modal-header'>
                                        <h4 class='modal-title mx-auto'>".$row['projectName']."</h4>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class='modal-body'>
                                        <p>Start of the Project:".$row['projectStart']."</p>
                                        <p>End of the Project: ".$row['projectEnd']."</p>
                                        <p> Quantity:".$row['projectQuantity']."</p>
                                        <p> Description: ".$row['projectDescription']."</p>
                                        <p>Project Status: ".$row['projectStatus']."</p>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class='modal-footer'>
                                        <a href='#' class='btn btn-primary'>Edit</a>
                                        <a href='#' class='btn btn-danger'>Delete</a>
                                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                                    </div>

                                    </div>
                                </div>
                                </div>


                                </li>";
                            }
                            ?>
                        </ul>
                </div>
            </div>
    </div>
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-warning rounded">
        <div class="col flex-row">
        <div class="container mx-1 p-2 w-100">  <!--This is the container for In Progress -->
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
        </div>
    </div>
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-warning rounded">
        <div class="col flex-row">
        <div class="container mx-1 p-2 w-100">
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
        </div>
    </div>
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch">
        <div class="colflex-row">
        </div>
    </div>
    <div class="row overflow-x-auto">
        <div class="colflex-row">
        </div>
    </div>
    <div class="row overflow-x-auto">
        <div class="col flex-row">
        </div>
    </div>
</div>