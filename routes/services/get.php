<?php
require_once "controllers/get.controller.php";

// $table = $routesArray[1];
$table = explode("?", $routesArray[1])[0];

$select = $_GET["select"] ?? "*";


$response = new GetController();

if(isset($_GET["linkTo"]) && isset($_GET["equalTo"])) {
   // with filter
   $response -> getDataFilter($table, $select, $_GET["linkTo"], $_GET["equalTo"]);
} else {
   // no filter
   $response -> getData($table, $select);
}







// echo '<prep>'; print_r($table);'</prep>';
// return;
