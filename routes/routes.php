<?php

// var_dump($_SERVER['REQUEST_URI']);
/*
   si url= http://apirest.com/courses
   entonces $_SERVER['REQUEST_URI'] = /courses
*/

$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);            //limpiar, quita el indice ceor vacio 
// echo '<prep>'; print_r($routesArray );'</prep>';

//* Cuando NO se hace una petición a la API
if (count($routesArray) == 0) {
   $json = array(
      'status' => 404,
      'result' => 'Not Found'
   );

   echo json_encode($json, http_response_code($json["status"]));
   return;   
}

//* Cuando SI se hace una petición a la API
if (count($routesArray) == 1 && isset($_SERVER["REQUEST_METHOD"])) {

   //? Petición GET
   if ($_SERVER["REQUEST_METHOD"] == 'GET') {
      include "services/get.php";
   }
   //? Petición POST
   if ($_SERVER["REQUEST_METHOD"] == 'POST') {
      $json = array(
         'status' => 200,
         'result' => 'Solicitud POST'
      );
   
      echo json_encode($json, http_response_code($json["status"]));
   }  
   //? Petición PUT
   if ($_SERVER["REQUEST_METHOD"] == 'PUT') {
      $json = array(
         'status' => 200,
         'result' => 'Solicitud PUT'
      );
   
      echo json_encode($json, http_response_code($json["status"]));
   }  
   //? Petición DELETE
   if ($_SERVER["REQUEST_METHOD"] == 'DELETE') {
      $json = array(
         'status' => 200,
         'result' => 'Solicitud DELETE'
      );
   
      echo json_encode($json, http_response_code($json["status"]));
   }  

}



