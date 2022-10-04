<?php

abstract class Mahasiswa
{
   abstract protected function getTugasAkhir();
   abstract protected function getProgram($postfix);

   public function tugasAkhir()
   {
      print $this->getTugasAkhir() . "<br>";
   }
}

class sarjana extends Mahasiswa
{
   protected function getTugasAkhir()
   {
      return " Skripsi";
   }

   public function getProgram($postfix)
   {
      print "{$postfix} S1";
   }
}

class magister extends Mahasiswa
{
   protected function getTugasAkhir()
   {
      return " Tesis";
   }

   public function getProgram($postfix)
   {
      print "{$postfix} S2";
   }
}
