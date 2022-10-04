<?php

require_once __DIR__ . "/Controllers/Library.php";
require_once __DIR__ . "/Models/libraryModel.php";

$url = isset($_SERVER["PATH_INFO"]) ? explode("/", ltrim($_SERVER["PATH_INFO"], "/")) : "/";
$index = new Library();

if($url[0] = "/"){
   return $index->index();
}