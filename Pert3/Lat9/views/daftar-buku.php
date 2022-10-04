<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Buku | G.211.21.0077</title>
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

      body {
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         height: 40vh;
      }

      .table {
         border: 1px solid #222;
      }

      tr th {
         border: 1px solid #222;
         padding: 2px 6px;
         font-size: 16px;
      }

      tr td {
         padding: 2px 6px;
         font-size: 14px;
         border: 1px solid #222;
      }

      h3{
         text-align: center;
         margin-bottom: 15px;
      }

      p {
         margin-top: 20px;
         text-align: center;
         font-size: 12px;
      }
   </style>
</head>

<body>
   <h3>## PHP MVC tanpa Framework ##</h5>
   <table class="table">
      <thead>
         <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $no = 1;
         if ($listBuku) {
            foreach ($listBuku as $value) { ?>
               <tr>
                  <td style="text-align: center;"><?= $no++; ?></td>
                  <td><?= $value["Judul"]; ?></td>
                  <td><?= $value["Pengarang"]; ?></td>
                  <td><?= $value["Penerbit"]; ?></td>
                  <td><?= $value["Tahun"]; ?></td>
               </tr>
            <?php
            }
         } else {
            ?>
            <tr>
               <td colspan="5" style="text-align: center;">
                  Data belum ada
               </td>
            </tr>
         <?php } ?>
      </tbody>
   </table>
<footer>
   <p>&copy; Created By Adya Abdu Azizul Hakim - G.211.21.0077</p>
</footer>
</body>

</html>