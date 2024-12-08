<?php
    include_once'config/db.php';
    include'navbar.php'; 
?>

<div class="container mt-5 pt-5 d-flex flex-wrap">
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-secondary rounded">
        <div class="col flex-row">
                <div class="container mx-1 p-2 w-100 overflow-auto">
                    <h3 class="">Not Started</h3>
                    <hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Not Started' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 d-flex justify-content-between flex-column  border border-3 border-top-0 border-bottom-0 border-end-0 border-secondary btn btn-lg btn-light' data-bs-toggle='modal' data-bs-target='#".$row['projectID']."'>
                                ".$row['projectName']."
                                <!-- The Modal -->
                                <div class='modal fade' id='".$row['projectID']."'>
                                <div class='modal-dialog modal-dialog-scrollable'>
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
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-secondary rounded">
        <div class="col flex-row">
                <div class="container mx-1 p-2 w-100 overflow-auto">
                    <h3 class="">In Progress</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'In Progress' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 d-flex justify-content-between flex-column border border-3 border-top-0 border-bottom-0 border-end-0 border-secondary btn btn-lg btn-light' data-bs-toggle='modal' data-bs-target='#".$row['projectID']."'>
                                ".$row['projectName']."
                                <!-- The Modal -->
                                <div class='modal fade' id='".$row['projectID']."'>
                                <div class='modal-dialog modal-dialog-scrollable'>
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
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-secondary rounded">
        <div class="col flex-row">
                <div class="container mx-1 p-2 w-100 overflow-auto">
                    <h3 class="">On Hold</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'On Hold' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 d-flex justify-content-between flex-column  border border-3 border-top-0 border-bottom-0 border-end-0 border-secondary btn btn-lg btn-light' data-bs-toggle='modal' data-bs-target='#".$row['projectID']."'>
                                ".$row['projectName']."
                                <!-- The Modal -->
                                <div class='modal fade' id='".$row['projectID']."'>
                                <div class='modal-dialog modal-dialog-scrollable'>
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
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-secondary rounded">
        <div class="col flex-row">
                <div class="container mx-1 p-2 w-100 overflow-auto">
                    <h3 class="">Completed</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Completed' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 d-flex justify-content-between flex-column border border-3 border-top-0 border-bottom-0 border-end-0 border-secondary btn btn-lg btn-light' data-bs-toggle='modal' data-bs-target='#".$row['projectID']."'>
                                ".$row['projectName']."
                                <!-- The Modal -->
                                <div class='modal fade' id='".$row['projectID']."'>
                                <div class='modal-dialog modal-dialog-scrollable'>
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
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-secondary rounded">
        <div class="col flex-row">
                <div class="container mx-1 p-2 w-100 overflow-auto">
                    <h3 class="">Delayed</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Delayed' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 d-flex justify-content-between flex-column border border-3 border-top-0 border-bottom-0 border-end-0 border-secondary btn btn-lg btn-light' data-bs-toggle='modal' data-bs-target='#".$row['projectID']."'>
                                ".$row['projectName']."
                                <!-- The Modal -->
                                <div class='modal fade' id='".$row['projectID']."'>
                                <div class='modal-dialog modal-dialog-scrollable'>
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
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-secondary rounded">
        <div class="col flex-row">
                <div class="container mx-1 p-2 w-100 overflow-auto">
                    <h3 class="">At Risk</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'At Risk' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 d-flex justify-content-between flex-column border border-3 border-top-0 border-bottom-0 border-end-0 border-secondary btn btn-lg btn-light' data-bs-toggle='modal' data-bs-target='#".$row['projectID']."'>
                                ".$row['projectName']."
                                <!-- The Modal -->
                                <div class='modal fade' id='".$row['projectID']."'>
                                <div class='modal-dialog modal-dialog-scrollable'>
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
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-secondary rounded">
        <div class="col flex-row">
                <div class="container mx-1 p-2 w-100 overflow-auto">
                    <h3 class="">Pending Review</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Pending Review' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 d-flex justify-content-between flex-column border border-3 border-top-0 border-bottom-0 border-end-0 border-secondary btn btn-lg btn-light' data-bs-toggle='modal' data-bs-target='#".$row['projectID']."'>
                                ".$row['projectName']."
                                <!-- The Modal -->
                                <div class='modal fade' id='".$row['projectID']."'>
                                <div class='modal-dialog modal-dialog-scrollable'>
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
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-secondary rounded">
        <div class="col flex-row">
                <div class="container mx-1 p-2 w-100 overflow-auto">
                    <h3 class="">Under Review</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Under Review' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 d-flex justify-content-between flex-column border border-3 border-top-0 border-bottom-0 border-end-0 border-secondary btn btn-lg btn-light' data-bs-toggle='modal' data-bs-target='#".$row['projectID']."'>
                                ".$row['projectName']."
                                <!-- The Modal -->
                                <div class='modal fade' id='".$row['projectID']."'>
                                <div class='modal-dialog modal-dialog-scrollable'>
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
    <div class="row m-1 overflow-x-auto flex-fill align-self-stretch border border-secondary rounded">
        <div class="col flex-row">
                <div class="container mx-1 p-2 w-100 overflow-auto">
                    <h3 class="">Closed</h3><hr>
                        <ul class="list-unstyled inline-flex flex-column align-items-center overflow-auto">
                            <?php 
                            $sql = "SELECT * FROM project WHERE projectStatus = 'Closed' AND is_deleted = '0'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <li class='my-2 mx-0 d-flex justify-content-between flex-column border border-3 border-top-0 border-bottom-0 border-end-0 border-secondary btn btn-lg btn-light' data-bs-toggle='modal' data-bs-target='#".$row['projectID']."'>
                                ".$row['projectName']."
                                <!-- The Modal -->
                                <div class='modal fade' id='".$row['projectID']."'>
                                <div class='modal-dialog modal-dialog-scrollable'>
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
</div>
