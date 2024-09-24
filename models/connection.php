<?php

class Connection {
   //? informacion DB
   static public function infoDataBase() {

      $infoDB = Array(
         "database" => "database1",
         "user" => "root",
         "pass" => ""
      );
      
      return $infoDB;
   }

   //? Conexion a la base de datos
   static public function connect() {

      try {
         $link = new PDO(
            "mysql:host=localhost;dbname=".Connection::infoDataBase()["database"],
            Connection::infoDataBase()["user"],
            Connection::infoDataBase()["pass"],
         );

         $link->exec("set names utf8");
      } catch(PDOException $e) {
         die("Error: ".$e->getMessage());
      }

      return $link;
   }
}