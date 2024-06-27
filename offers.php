<?php
include_once "./functions/functions.php";
$offers = getOffers();
if(isset($_GET["delete"])){
    $prop = $_GET["delete"];
    $userId = $_GET["user"];
    mysqli_query($mysql,"DELETE FROM bid WHERE userId='$userId' AND propertyId='$prop'");
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tawaran</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
   <?php include "header.php"; ?>
   <section class="listings">
       <h3 class="heading">TAWARAN YANG MASUK</h3>
         <div class="box-container">
            <?php foreach ($offers as $offer) : ?>
               <div class="box">
                  <div class="admin">
                     <h3><?= substr($offer["namaUser"], 0, 1) ?></h3>
                     <div>
                        <p><?= ucwords($offer["namaUser"]) ?></p>
                        <span><?= $offer["email"] ?></span>
                     </div>
                  </div>
                  <div class="thumb">
                     <p class="type"><span><?= strtoupper($offer["tipe"]) ?></span><span><?= strtoupper($offer["status"]) ?></span></p>
                     <img src="<?= $offer["gambar1"] ?>" alt="">
                  </div>
                  <p class="location"><span><?=ucwords($offer["namaProperti"])?></span></p>
                  <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= ucwords($offer["lokasi"]) ?></span></p>
               <p class="location"><i class="fa-sharp fa-solid fa-rupiah-sign fa-lg"></i><span><?= number_format($offer["harga"], 0, ',', '.') ?></span></p>
                  <a href="https://wa.me/<?= $offer["telepon"] ?>" class="btn">Hubungi</a>
                  <a href="property.php?id=<?= $offer["propertyId"] ?>" class="btn">Lihat Properti</a>
                  <a href="?delete=<?= $offer["propertyId"] ?>&user=<?= $offer["userId"] ?>" class="btn">Tolak</a>
               </div>
            <?php endforeach; ?>
         </div>

   </section>
   <?php include "footer.php"; ?>
   <script src="js/script.js"></script>

</body>

</html>