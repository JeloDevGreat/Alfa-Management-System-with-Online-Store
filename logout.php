<?php

session_start();
echo "<script>window.open('index.php','_self')</script>";
mysqli_close($con);
session_destroy();

?>