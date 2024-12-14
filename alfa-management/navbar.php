<?php
    include 'head.php';
?>
<nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="offcanvas offcanvas-start"
                    tabindex="-1"
                    id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel"
                >
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            Welcome, Admin
                        </h5>
                        <button
                            type="button"
                            class="btn-close text-reset"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="container">
                            <div class="row p-3 d-flex flex-column align-items-end ">
                                <!-- <button type="button" class="btn-close" aria-label="Close"></button>
                                <div class="col p-3 btn btn-dark">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-house"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"
                                        />
                                    </svg>
                                    Home
                                </div> -->
                                <div class="col p-3 btn "><a href='admin_dashboard.php'>Dashboard</a></div>
                                <div class="col p-3 btn "><a href='project.php'>Projects</a></div>
                                <div class="col p-3 btn ">Services</div>
                                <div class="col p-3 btn "><a href='inventory.php'>Inventory</a></div>
                                <div class="col p-3 btn">Products</div>
                                <div class="col p-3 btn">Orders</div>
                                <div class="col p-3 btn">Customers</div>
                                <div class="col p-3 btn">Settings</div>
                                <div class="col p-3 btn"><a href='../logout.php'>Logout</a></div>
                    </div>
                </div>
            </div>
        </nav>