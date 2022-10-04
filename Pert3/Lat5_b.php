<?php

require_once "Lat5_a.php";

// Sarjana
$strata = new sarjana;
$strata->getProgram("Mahasiswa"). "<br>";
$strata->tugasAkhir();

// Magister
$magister = new magister;
$magister->getProgram("Mahasiswa"). "<br>";
$magister->tugasAkhir();


//terjadi error, karena method getTugasAkhir() tidak ada di turunannya sedangkan method dengan keyword abstract hanya bisa dipanggil/diakses  apabila diturunannya/subclass terdapat method getTugasAkhir().

//dapat disimpulkan bahwa class dan method dengan keyword abstract hanya bisa diakses melalui turunannya saja.