<?php
include_once "./functions/functions.php";
if (isset($_GET["harga"])) {
   $properties = searchProperties($_GET);
} elseif (isset($_GET["type"])) {
   $properties = getProperties($_GET["type"]);
} elseif (isset($_GET["status"])) {
   $properties = getProperties($_GET["status"]);
} else {
   $properties = getProperties("all");
}
$found = count($properties) > 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cari Properti</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
   <?php include_once "header.php"; ?>
   <section class="listings">

      <h1 class="heading">Daftar Properti</h1>
      <?php if (!$found) : ?>
         <h3 align='center'>Maaf kami tidak menemukan properti dengan kriteria tersebut</h3><br><br>
         <div class="home">
            <section class="center">
               <form action="search.php" method="get">
                  <h3>CARI PROPERTI</h3>
                  <div class="box">
                     <p> Masukkan Lokasi (Kota) <span>*</span></p>
                     <input type="text" name="kota" required maxlength="50" placeholder="Kota" class="input">
                  </div>
                  <div class="flex">
                     <div class="box">
                        <p>Tipe Bangunan <span>*</span></p>
                        <select name="type" class="input" required>
                           <option value="rumah">RUMAH</option>
                           <option value="mansion">MANSION</option>
                           <option value="villa">VILLA</option>
                           <option value="kantor">KANTOR</option>
                        </select>
                     </div>
                     <div class="box">
                        <p>Luas Bangunan <span>*</span></p>
                        <select name="luas" class="input" required>
                           <option value="101">0-100</option>
                           <option value="301">101-300</option>
                           <option value="501">301-500</option>
                           <option value="1001">501-1000</option>
                           <option value="9999">>1001</option>
                        </select>
                     </div>
                     <div class="box">
                        <p>Harga Maximal<span>*</span></p>
                        <select name="harga" class="input" required>
                           <option value="300">300 juta</option>
                           <option value="700">700 juta</option>
                           <option value="1000">1 Milyar</option>
                           <option value="0">>1 Milyar</option>
                        </select>
                     </div>
                     <div class="box">
                        <p>Jenis Pembiayaan <span>*</span></p>
                        <select name="status" class="input" required>
                           <option value="">JENIS</option>
                           <option value="jual">BELI</option>
                           <option value="sewa">SEWA</option>
                        </select>
                     </div>
                  </div>
                  <input type="submit" value="search property" name="search" class="btn">
               </form>

            </section>
         </div>
      <?php endif; ?>

      <div class="box-container">
         <?php foreach ($properties as $property) : ?>
            <div class="box">
               <div class="admin">
                  <h3><?= substr($property["namaUser"], 0, 1) ?></h3>
                  <div>
                     <a href="agent.php?id=<?= $property["userId"] ?>">
                        <p><?= $property["namaUser"] ?></p>
                     </a>
                     <span><?= $property["dibangun"] ?></span>
                  </div>
               </div>
               <div class="thumb">
                  <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
                  <p class="type"><span><?= strtoupper($property["tipe"]) ?></span><span><?= strtoupper($property["status"]) ?></span></p>
                  <div class="save">
                     <?php if (isset($_COOKIE["userId"])) : ?>
                        <?php if ($property["likeStatus"] == NULL) : ?>
                           <a href="./functions/like.php?like=<?= $property['propertyId'] ?>">
                              <button type="submit" name="save" class="far fa-heart"></button>
                           </a>
                        <?php else : ?>
                           <a href="./functions/like.php?unlike=<?= $property['propertyId'] ?>">
                              <button type="submit" name="save" class="fas fa-heart"></button>
                           </a>
                        <?php endif; ?>
                     <?php else : ?>
                        <a href="register.php">
                           <button type="submit" name="save" class="far fa-heart"></button>
                        </a>
                     <?php endif; ?>
                  </div>
                  <img src="<?= $property["gambar1"] ?>" alt="">
               </div>
               <h3 class="name"><?= ucwords($property["namaProperti"]) ?></h3>
               <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= ucwords($property["lokasi"]) ?></span></p>
               <p class="location"><i class="fa-sharp fa-solid fa-rupiah-sign fa-lg"></i><span><?= number_format($property["harga"], 0, ',', '.') ?></span></p>
               <div class="flex">
                  <p><i class="fas fa-bed"></i><span><?= $property["kamar"] ?></span></p>
                  <p><i class="fas fa-bath"></i><span><?= $property["toilet"] ?></span></p>
                  <p><i class="fas fa-maximize"></i><span><?= $property["luas"] ?> m2</span></p>
               </div>
               <a href="property.php?id=<?= $property['propertyId']; ?>" class="btn">view property</a>
            </div>
         <?php endforeach; ?>
      </div>

   </section>
   <?php include_once "footer.php"; ?>
   <script src="js/script.js"></script>

</body>

</html>