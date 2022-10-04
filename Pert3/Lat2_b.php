<?php

require_once "Lat2_a.php";

$mhs2 = new Mahasiswa ("AdyaHakim", "G.211.21.0077");

$mhs2->cetak();

// Maka pada saat dijalankan akan terjadi error, hal ini dikarenakan pada sebuah class tidak boleh ada lebih dari 1 konstruktor, jika ingin menambahkan konstruktor paling tidak kita harus membuat satu class lain yang didalamnya terdapat 1 buah konstruktor. Begitu juga dengan desduktor.