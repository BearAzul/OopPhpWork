<?php

class LibraryModel{

   function __construct()  
   {
      $this->connection = new mysqli(
         'localhost', 'root','', 'library'
      );
   }

   public function getLibrary(){
      $query = "SELECT * FROM book";
      $result = $this->connection->query($query);
      return $result;
   }
}