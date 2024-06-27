<?php
include_once "./functions/functions.php";
$dataProperti = getProperties($_GET["id"]);
$dataProperti = $dataProperti[0];
$diff = abs(time() - strtotime($dataProperti["dibangun"]));
$years = floor($diff / (365 * 60 * 60 * 24));
$months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$reviews = getPropertyReviews($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail Properti</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
   <?php include_once "header.php"; ?>
   <section class="view-property">

      <div class="details">
         <div class="thumb">
            <div class="big-image">
               <img src="<?= $dataProperti["gambar1"] ?>" alt="">
            </div>
            <div class="small-images">
               <img src="<?= $dataProperti["gambar1"] ?>" alt="">
               <img src="<?= $dataProperti["gambar2"] ?>" alt="">
               <img src="<?= $dataProperti["gambar3"] ?>" alt="">
               <img src="<?= $dataProperti["gambar4"] ?>" alt="">
            </div>
         </div>
         <h3 class="name"><?= ucwords($dataProperti["namaProperti"]) ?></h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= ucwords($dataProperti["lokasi"]) ?></span></p>
         <?php if (isset($dataUser)) : ?>
            <?php if ($dataUser["role"] == "buyer") : ?>
               <p class="location"><a href="review.php?id=<?= $dataProperti['propertyId'] ?>"><span style="color:grey;">Review Properti Ini </span><i class="fa-solid fa-forward fa-lg"></i></a></p>
            <?php endif; ?>
         <?php endif; ?>
         <div class="info">
            <p><i class="fas fa-tag"></i><span><?= number_format($dataProperti["harga"], 0, ',', '.') ?></span></p>
            <a href="agent.php?id=<?= $dataProperti["userId"] ?>">
               <p><i class="fas fa-user"></i><span><?= ucwords($dataProperti["namaUser"]) ?></span></p>

            </a>
            <p><i class="fas fa-phone"></i><a href="tel:1234567890"><?= $dataProperti["telepon"] ?></a></p>
            <p><i class="fas fa-building"></i><span><?= strtoupper($dataProperti["tipe"]) ?></span></p>
            <p><i class="fas fa-house"></i><span><?= strtoupper($dataProperti["status"]) ?></span></p>
            <p><i class="fas fa-calendar"></i><span><?= $dataProperti["dibangun"] ?></span></p>
         </div>
         <h3 class="title">Detail</h3>
         <div class="flex">
            <div class="box">
               <p><i>Kamar Tidur :</i><span><?= $dataProperti["kamar"] ?></span></p>
               <p><i>Kamar Mandi :</i><span><?= $dataProperti["toilet"] ?></span></p>
               <p><i>Luas Area :</i><span><?= $dataProperti["luas"] ?> m2</span></p>
            </div>
            <div class="box">
               <p><i>Jarak Fasum :</i><span><?= $dataProperti["public"] ?> km</span></p>
               <p><i>Umur Bangunan :</i><span><?= $years ?> Tahun <?= $months ?> Bulan</span></p>
            </div>
         </div>
         <h3 class="title">Deskripsi</h3>
         <br>
         <p class="location"><i style="color:grey;"><?= $dataProperti["deskripsi"] ?></i></p>
         <?php if (isset($dataUser)) : ?>
            <?php if ($dataUser["role"] == "buyer") : ?>
               <form action="" method="post" class="flex-btn">
                  <?php if ($dataProperti["likeStatus"] == NULL) : ?>
                     <a href="functions/like.php?like=<?= $dataProperti['propertyId'] ?>" class="btn"><i class="far fa-heart"></i><span> Simpan</span></a>
                  <?php else : ?>
                     <a href="functions/like.php?unlike=<?= $dataProperti['propertyId'] ?>" class="btn"><i class="fas fa-heart"></i><span> Hapus</span></a>
                  <?php endif; ?>
                  <a class="btn" href="functions/bid.php?bid=<?= $dataProperti['propertyId'] ?>">Tawar</a>
               </form>
            <?php endif; ?>
         <?php endif; ?>
      </div>
      <br>
      <br>
      <h3 class="heading">Review</h3>
      <div class="listings">
         <div class="box-container">
            <?php foreach ($reviews as $review) : ?>
               <div class="box">
                  <div class="admin">
                     <h3><?= substr($review['namaUser'], 0, 1) ?></h3>
                     <div>
                        <p><?= $review['namaUser'] ?></p>
                        <span><?= $review['email'] ?></span>
                     </div>
                  </div>
                  <br>
                  <p><?= $review['text'] ?></p>
               </div>
            <?php endforeach; ?>
         </div>
      </div>

   </section>
   <?php include_once "footer.php"; ?>
   <script src="js/script.js"></script>

</body>

</html>