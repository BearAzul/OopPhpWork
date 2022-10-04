<?php

final class A{
   public function disp(){
      echo "inside the final function";
   }
}

class B extends A{
   function disp(){
      echo "inside the final function";
   }
}

$obj = new B();
$obj->disp();


// Error karena method pada class A tidak dapat di override

// karena tujuandigunakannya keyword final adalah agar class tidak akan di override.

// final, akan mencegah proses overriding method pada class anak (sub-class). Apabila metode kita berikan status final, maka metode tersebut tidak akan bisadioverr ide, begitu juga pada class, apabila kita berikan status “final” pada deklarasi class maka class tersebut tidak bisa diperpanjang (diwariskan).