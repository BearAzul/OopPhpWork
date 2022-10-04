<?php

interface a
{
   public function foo();
}

interface b
{
   public function bar();
}

interface c extends a, b
{
   public function baz();
}

class d implements c
{
   public function foo()
   {
   }
   public function bar()
   {
   }
   public function baz()
   {
   }
}

class e implements a, b
{
   public function foo()
   {
   }
   public function bar()
   {
   }
}

// Interface a b c merupakan sebuah class yang didalamnya terdapat sebuah method berupa method foo(), bar(), dan baz() tetapi diboleh memiliki properti didalamnya dan method tersebut harus dalam bentuk abstract, sedangkan class d merupakan implements dari class c dan dimana class c juga merupakan turunan dari interface a dan b. Nah, di class d ini lah yang boleh menaruh properti di dalamnya seperti modifier private maupun protected dan mengisi semua method yang digunakan diparentnya.

// terjadi error, karena Kelas d berisi 1 metode abstrak dan oleh karena itu harus dinyatakan abstrak atau mengimplementasikan metode yang tersisa dimana jika dihilangkan maka interface c dengan method yang sama harus dihilangkan.

// Jadi sebuah interface dengan method abstract harus mempunyai class dengan implements yang sama dengan parentnya. sebuah interface hanya bisa disi dengan method abstract saja dan memiliki visibility public.
