<?php
require_once "controllers/get.controller.php";

// $table = $routesArray[1];
$table = explode("?", $routesArray[1])[0];
// echo '<prep>'; print_r($table);'</prep>';
// return;

$select = $_GET["select"] ?? "*";


$response = new GetController();
$response -> getData($table, $select);
