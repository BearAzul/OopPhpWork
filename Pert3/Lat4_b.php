<?php

require_once "Lat4_a.php";

$asisten = new asisten();
$asisten->setNama("Abdu Azizul");
echo $asisten->getNama();

// Tidak terjadi error karena getNama masih berada di dalam class Mahasiswa Kalau getNama dipindahkan ke class asisten yang terjadi adalah error, oleh karena itu agar hal tersebut tidak error maka modifier private bisa diganti dengan protected agar kita bisa akses getNama di subclass-nya.