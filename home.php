<?php  
include_once "./functions/functions.php";
$properties = getProperties("home");
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
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

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading">LAYANAN KAMI</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Beli Properti</h3>
         <p>Temukan dan beli rumah impian Anda atau properti investasi ideal dengan bimbingan ahli kami. Kami menawarkan berbagai pilihan sesuai preferensi dan anggaran Anda.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Sewa Properti</h3>
         <p>Temukan properti sewaan sempurna yang memenuhi semua kebutuhan Anda. Baik Anda mencari apartemen yang nyaman atau rumah yang luas, tim kami siap membantu Anda di setiap langkah.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Jual Properti</h3>
         <p>Jual properti Anda dengan harga terbaik dengan layanan profesional kami. Kami memberikan dukungan komprehensif, mulai dari analisis pasar hingga penutupan kesepakatan, memastikan proses yang lancar.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Bangunan Kantor atau Villa</h3>
         <p>Jelajahi pilihan vila mewah dan gedung perkantoran utama di lokasi teratas. Kami menawarkan properti yang memadukan keanggunan, kenyamanan, dan fungsionalitas untuk memenuhi kebutuhan gaya hidup atau bisnis Anda.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Mansion Megah</h3>
         <p>Manjakan diri dengan kemegahan rumah mewah kami. Properti ini menawarkan kemewahan dan kecanggihan yang tak tertandingi, cocok bagi mereka yang mencari gaya hidup mewah.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>24/7 Layanan</h3>
         <p>Nikmati bantuan sepanjang waktu untuk semua kebutuhan real estate Anda. Tim kami yang berdedikasi tersedia kapan saja untuk memberikan dukungan, menjawab pertanyaan, dan membantu Anda menavigasi pasar.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">Properti yang ditawarkan</h1>

   <div class="box-container">

   <?php foreach($properties as $property):?>     
      <div class="box">
         <div class="admin">
            <h3><?=substr($property["namaUser"],0,1)?></h3>
            <div>
               <p><?=$property["namaUser"]?></p>
               <span><?=$property["dibangun"]?></span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span><?=strtoupper($property["tipe"])?></span><span><?=strtoupper($property["status"])?></span></p>
            <div class="save">
                <button type="submit" name="save" class="far fa-heart"></button>
            </div>
            <img src="<?=$property["gambar1"]?>" alt="">
        </div>
        <h3 class="name"><?=ucwords($property["namaProperti"])?></h3>
        <p class="location"><i class="fas fa-map-marker-alt"></i><span><?=ucwords($property["lokasi"])?></span></p>
        <p class="location"><i class="fa-sharp fa-solid fa-rupiah-sign fa-lg"></i><span><?=number_format($property["harga"] , 0, ',', '.')?></span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span><?=$property["kamar"]?></span></p>
            <p><i class="fas fa-bath"></i><span><?=$property["toilet"]?></span></p>
            <p><i class="fas fa-maximize"></i><span><?=$property["luas"]?> m2</span></p>
         </div>
         <a href="property.php?id=<?=$property['propertyId'];?>" class="btn">Lihat Properti</a>
      </div>
      <?php endforeach;?>

   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="search.php" class="inline-btn">Lihat Semua</a>
   </div>

</section>
<?php include 'footer.php'; ?>
<script src="js/script.js"></script>

</body>
</html>