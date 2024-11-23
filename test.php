<?php
    session_start();
    require_once("config/database.php");
    include 'functions/functions.php';

    $getIp = getRealUserIp();
    echo $getIp;
?>