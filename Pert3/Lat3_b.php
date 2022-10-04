<?php

require_once "Lat3_a.php";

$mhs1 = new Mahasiswa();

echo $mhs1->getNama(). $mhs1->getNim(); // ini merupakan method hanya untuk modifier private dan protected

// terjadi error, karena private itu sendiri untuk hanya dapat digunakan di dalam sebuah class tertentu saja.

//pada saat modifier private diganti dengan public maka tidak akan terjadi error, program akan berjalan semestinya. Karena modifier public bisa diakses dimana saja, bahkan diluar class
//tetapi jika modifier private diganti dengan protected maka akan terjadi error juga, hal ini terjadi hampir sama seperti kasus modifier private dimana modifier protected hanya dapat digunakan di dalam sebuah class beserta turunannya.

//Modifier Private bisa digunakan apabila yang kita panggil merupakan bagian dari class-nya saja berupa method yang ada didalam class Mahasiswa.




