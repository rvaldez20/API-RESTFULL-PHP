<?php
require_once "models/get.model.php";

class GetController{
   static public function getData($table, $select) {
      $response = GetModel::getData($table, $select);

      $return = new GetController();
      $return -> fncResponse($response);
   }

   //?Respuesta del controller
   public function fncResponse($response) {
      if(!empty($response)){
         $json = array(
            'status' => 200,
            'total' => count($response),
            'results' => $response
         );         
      } else {
         $json = array(
            'status' => 404,
            'results' => 'Not Found'
         ); 
      }

      echo json_encode($json, http_response_code($json["status"]));

   }

}