<?php
// class mobil awal
// class Mobil{
//    public $nama;
//    public $merk;

//    function getInfo(){
//       echo "Nama Mobil: ".$this->nama."<br>";
//       echo "Merk: ".$this->merk. "<br>";
//    }
// }

// jika menambahkan parameter $a pada fungsi getInfo
// class mobil case
class Mobil{
   public $nama;
   public $merk;

   //jika menggunakan fungsi construct
   // function __construct(
   //    $nama = "RX-7", $merk = "Mazda"
   // )
   // {
   //    $this->nama = $nama;
   //    $this->merk = $merk;
   // }
   function getInfo($a){
      echo "Nama Mobil: ".$a->nama."<br>";
      echo "Merk: ".$a->merk. "<br>";
   }
}
//atau menggunakan variable
// $nama = "Rx-7";
// $merk = "Mazda";

// bagian main
$mobil = new Mobil();
$mobil->nama = "Rx-7";
$mobil->merk = "Mazda";
$mobil->getInfo($mobil);// jika ini dihapus maka program akan berjalan tetapi tidak menampilkan hasil apapun


// Jadi, pada saat menggunakan method overload getInfo dengan parameter $a ketika dijalankan akan terjadi error, hal ini terjadi karena parameter $a pada fungsi getInfo tidak tahu apa yang akan dia jalankan, akan tetapi jika kita mengganti $this pada nama maupun merk dengan parameter $a di dalam fungsi getInfo dan memasukkan variable $mobil ke dalam fungsi $mobil->getInfo(); maka parameter $a akan mendeteksi bahwa $a akan mengacu ke nama dan juga merk. dan ketika dijalankan hasilnya akan sama seperti program awalnya.
