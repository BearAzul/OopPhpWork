<?php
class Product
{
   public $name, $price, $discount;
   function getName()
   {
      return $this->name;
   }
   function getPrice()
   {
      return $this->price;
   }
   function getDiscount()
   {
      return $this->discount;
   }

   function setName($name)
   {
      return $this->name = $name;
   }
   function setPrice($price)
   {
      return $this->price = $price;
   }
   function setDiscount($discount)
   {
      return $this->discount = $discount;
   }
}
class CDMusic extends Product
{
   public $artist, $genre;

   function getArtist()
   {
      return $this->artist;
   }
   function getGenre()
   {
      return $this->genre;
   }

   function setArtist($artist)
   {
      return $this->artist = $artist;
   }
   function setGenre($genre)
   {
      return $this->genre = $genre;
   }

   // Menentukan Harga Per CD dan mendapatkan diskon
   function getPrice()
   {
      $harga = $this->price;
      $ppn = ((10 / 100) * $this->price);
      $discount = ((5 / 100) * $this->price);
      return ($harga + $ppn) - $discount;
   }
}

class CDRack extends Product
{
   public $capacity, $model;
   function getCapacity()
   {
      return $this->capacity;
   }
   function getModel()
   {
      return $this->model;
   }
   function setCapacity($capacity)
   {
      return $this->capacity = $capacity;
   }
   function setModel($model)
   {
      return $this->model = $model;
   }

   // Menentukan Harga Rack
   function getPrice()
   {
      $harga = $this->price;
      $tambahan = ((15 / 100) * $this->price);
      return $harga + $tambahan;
   }
}

$product = new Product;
$CDMusic = new CDMusic;
$CDRack  = new CDRack;

$product->setName('Azizul Music');
$product->setPrice('100000');

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 1 | OOP PHP</title>
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

      * {
         padding: 0;
         margin: 0;
         font-family: "Poppins";
      }

      input {
         letter-spacing: .5px;
      }

      p {
         font-size: 12px;
         color: #198754;
         font-weight: bold;
      }
   </style>
</head>

<body>
   <div class="container mt-4" style="width: 900px;">
      <div class="row g-5">
         <div class="col card p-3 shadow me-4">
            <div class="group">
               <div class="set">
                  <div class="card-header border-0 rounded mb-2 bg-secondary bg-opacity-25">
                     <h6>Promo Special Pembelian CD di Azizul Music</h4>
                  </div>
                  <ol>
                     <li>CD Music Discount 5%</li>
                     <li>CD Rack Discount Unavailable</li>
                  </ol>
               </div>
            </div>


            <?php
            $CDMusic->setArtist('Avenged Sevenfold');
            $CDMusic->setGenre('Heavy Metal');
            $CDMusic->setDiscount('5%');
            $CDMusic->setPrice('100000');

            ?>
            <div class="card-header border-0 rounded mb-2 bg-secondary bg-opacity-25">
               <h6>Selamat Datang, Promo CD Music A7x</h6>
            </div>
            <div class="group row mb-2">
               <div class="set col">
                  <label for="product" class="form-label">Nama Product :</label>
                  <div class="input-group input-group-sm">
                     <input type="text" id="product" value="<?= $product->getName(); ?>" class="form-control">
                  </div>
               </div>
               <div class="set col">
                  <label for="artist" class="form-label">Artist :</label>
                  <div class="input-group input-group-sm">
                     <input type="text" id="artist" value="<?= $CDMusic->getArtist(); ?>" class="form-control">
                  </div>
               </div>
            </div>
            <div class="group mb-2">
               <div class="set">
                  <label for="artist" class="form-label">Genre :</label>
                  <div class="input-group input-group-sm">
                     <input type="text" id="artist" value="<?= $CDMusic->getGenre(); ?>" class="form-control">
                  </div>
               </div>
            </div>
            <div class="group row mb-2">
               <div class="set col">
                  <label for="diskon" class="form-label">Harga :</label>
                  <div class="input-group input-group-sm">
                     <span class="input-group-text">Rp.</span>
                     <input type="text" id="diskon" value="<?= $product->getPrice(); ?>,00" class="form-control">
                  </div>
               </div>
               <div class="set col">
                  <label for="diskon" class="form-label">Diskon :</label>
                  <div class="input-group input-group-sm">
                     <input type="text" id="diskon" value="<?= $CDMusic->getDiscount(); ?>" class="form-control">
                  </div>
               </div>
            </div>
            <div class="group">
               <div class="set">
                  <label for="diskon" class="form-label">Total Harga CD :</label>
                  <div class="input-group input-group-sm">
                     <span class="input-group-text">Rp.</span>
                     <input type="text" id="diskon" value="<?= $CDMusic->getPrice(); ?>,00" class="form-control">
                  </div>
                  <p>* Total harga sudah termasuk PPN 10% dan diskon 5%</p>
               </div>
            </div>
         </div>


         <?php
         $CDRack->setCapacity('30');
         $CDRack->setModel('Rose Gold');
         $CDRack->setPrice('100000');
         ?>
         <div class="col card shadow p-3">
            <div class="card-header border-0 rounded mb-2 bg-secondary bg-opacity-25">
               <h6>Rack CD (Optional)</h6>
            </div>
            <div class="group row mb-2">
               <div class="set col">
                  <label for="capacity" class="form-label">Kapasitas :</label>
                  <div class="input-group input-group-sm">
                     <input type="text" id="capacity" value="<?= $CDRack->getCapacity(); ?>" class="form-control">
                     <span class="input-group-text">Pcs</span>
                  </div>
               </div>
               <div class="set col">
                  <label for="model" class="form-label">Model :</label>
                  <div class="input-group input-group-sm">
                     <input type="text" id="model" value="<?= $CDRack->getModel(); ?>" class="form-control">
                  </div>
               </div>
            </div>
            <div class="group row">
               <div class="set col">
                  <label for="harga" class="form-label">Harga :</label>
                  <div class="input-group input-group-sm">
                     <span class="input-group-text">Rp.</span>
                     <input type="text" id="harga" value="<?= $product->getPrice(); ?>,00" class="form-control">
                  </div>
               </div>
               <div class="set col">
                  <label for="diskon" class="form-label">Diskon :</label>
                  <div class="input-group input-group-sm">
                     <input type="text" id="diskon" value="0%" class="form-control">
                  </div>
                  <p class="text-danger">* Maaf Diskon tidak tersedia</p>
               </div>
            </div>
            <div class="group">
               <div class="set">
                  <label for="total" class="form-label">Total Harga Rack</label>
                  <div class="input-group input-group-sm">
                     <span class="input-group-text">Rp.</span>
                     <input type="text" id="total" value="<?= $CDRack->getPrice(); ?>,00" class="form-control">
                  </div>
                  <p>* Harga sudah termasuk PPN 15%</p>
               </div>
            </div>
            <div class="btn-group btn-group-sm" style="width: 40px;">
               <a href="OopPhp-2_ObjectClass.php" class="btn btn-primary">
                  >
               </a>
            </div>
         </div>
      </div>
   </div>
   <p class="text-center mt-5 text-dark">Adya Abdu Azizul Hakim - G.211.21.0077</p>
</body>

</html>