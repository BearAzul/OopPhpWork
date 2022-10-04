<?php

class Mahasiswa
{
   private $nama;
   private $nim;

   // protected $nama;
   // protected $nim;

   function __construct(
      $a = "Adya Abdu Azizul Hakim <br>",
      $b = "G.211.21.0077"
   ) {
      $this->nama = $a;
      $this->nim = $b;
   }

   function setNama($a)
   {
      $this->nama = $a;
   }
   function setNim($b)
   {
      $this->nim = $b;
   }

   function getNama()
   {
      return $this->nama;
   }

   function getNim()
   {
      return $this->nim;
   }

   function __destruct()
   {
   }
}
