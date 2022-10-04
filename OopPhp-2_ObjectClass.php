<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 2 | OOP PHP</title>
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <script defer src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <style>
      @font-face {
         font-family: "Poppins";
         src: url(fonts/Poppins-Regular.ttf) format('truetype'),
            url(fonts/Poppins-Medium.ttf) format('truetype'),
            url(fonts/Poppins-SemiBold.ttf) format('truetype'),
            url(fonts/Poppins-Bold.ttf) format('truetype');
      }

      *{
         padding: 0;
         margin: 0;
         font-family: "Poppins";
      }
      p{
         text-align: justify;
      }
   </style>
</head>

<body>
   <?php
   class Binatang
   {
      public $animal,
         $have,
         $can,
         $plus;

      public function __construct(
         $animal = "Monyet merupakan salah satu hewan",
         $have = "Monyet mempunyai kemampuan untuk Berjalan, Makan dan Bersuara",
         $can = "tetapi jika dilatih Monyet akan bisa Berkendara seperti naik sepeda",
         $plus = "yang tidak dipunyai oleh hewan lainnya."
      ) {
         $this->animal  = $animal;
         $this->have    = $have;
         $this->can     = $can;
         $this->plus    = $plus;
      }
   }

   class cetakKalimat
   {
      public function cetak($binatang)
      {
         $str = "{$binatang->animal}, {$binatang->have}, {$binatang->can} {$binatang->plus}";
         return $str;

         // Atau Alternative
         // echo "{$binatang->animal}, {$binatang->have}, {$binatang->can} {$binatang->plus}";
         
      }
   }
   ?>
   <div class="container mt-5 bg-gray-300">
      <div class="card pt-3 px-3 shadow mx-auto" style="width: 400px">
         <div class="card-header text-center text-bg-secondary border-0 rounded">
            <h4>Tugas 2 | OOP PHP</h4>
         </div>
         <div class="card-body">
            <p>
               <?php
               $hewan = new Binatang;
               $cetak = new cetakKalimat();
               echo $cetak->cetak($hewan);
               //Atau Alternative
               //$cetak->cetak($hewan);
               ?>
            </p>
         </div>
         <div class="btn-group btn-group-sm" style="width: 40px;">
            <a href="OopPhp-1_Inheritance.php" class="btn btn-danger">
               < </a>
         </div>
         <p style="font-size: 10px;" class="text-center mt-2">
            Adya Abdu Azizul Hakim - G.211.21.0077
         </p>
      </div>
   </div>
</body>

</html>