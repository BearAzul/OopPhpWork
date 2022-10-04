<?php

require_once __DIR__ . "/Controllers/Library.php";
require_once __DIR__ . "/Models/libraryModel.php";

$index = new Library();
$index->index();