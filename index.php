<?php
//! config errors log
ini_set('display_errors', 1);
ini_set("log_errors", 1); 
ini_set("error_log", "C:/xampp/htdocs/apirest-dinamica/php_error_log"); 

require_once "controllers/routes.controller.php";
// require_once "models/connection.php";
// echo '<prep>'; print_r(Connection::connect());'</prep>';
// return;

$index = new RoutesController();
$index -> index();