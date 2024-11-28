<?php

session_start();

require_once("config/database.php");

include("navbar.php");

switch($_REQUEST['sAction']){

default :

getProducts();

break;

case'getPaginator';

getPaginator();

break;

}

?>