<?php
class One
{
   private static $var = 77;

   static function disp()
   {
      print "Hallo World! " . self::$var;
   }

}

One::disp();

// Jadi keyword static digunakan untuk mencetak method tanpa melakukan instansiasi, yaitu dengan memanggil class nya kemudian titik dua, dua kali lalu method nya atau properti yang ingin dipanggil
