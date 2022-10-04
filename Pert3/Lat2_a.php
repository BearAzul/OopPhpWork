<?php

class Mahasiswa
{
   public $nama;
   public $nim;

   function __construct($a, $b)
   {
      $this->nama = $a;
      $this->nim = $b;
      echo "kelas telah dibuat <br><br>";
   }

   // function __construct($c, $d)
   // {
   //    $this->alamat = $c;
   //    $this->agama = $d;
   // }

   function cetak()
   {
      echo $this->nama . "<br>" . $this->nim . "<br><br>";
   }

   function __destruct()
   {
      echo "Kelas telah dihancurkan";
   }
}
