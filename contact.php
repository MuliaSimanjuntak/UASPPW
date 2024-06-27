<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kontak Kami</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php include "header.php";?>
<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
      <form action="" method="post">
         <h3>Terhubung Dengan Kami</h3>
         <input type="text" name="name" required maxlength="50" placeholder="Nama Anda" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="Email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="Kontak" class="box">
         <textarea name="message" placeholder="Pesan anda untuk kami" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="kirim saran" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>Bagaimana membatalkan booking?</span><i class="fas fa-angle-down"></i></h3>
         <p>Untuk membatalkan pemesanan Anda, silakan kunjungi halaman pembatalan kami atau hubungi tim layanan pelanggan kami. Pastikan untuk memberikan detail pemesanan Anda untuk proses yang lebih lancar.</p>
      </div>

      <div class="box active">
         <h3><span>Kapan saya akan mendapatkan kepemilikannya?</span><i class="fas fa-angle-down"></i></h3>
         <p>Tanggal kepemilikan berbeda-beda di setiap properti. Biasanya, Anda akan menerima kepemilikan setelah menyelesaikan semua pembayaran yang diperlukan dan formalitas hukum. Silakan periksa kontrak Anda untuk rincian spesifiknya.</p>
      </div>

      <div class="box">
         <h3><span>Di mana saya bisa membayar sewa?</span><i class="fas fa-angle-down"></i></h3>
         <p>Pembayaran sewa dapat dilakukan melalui portal online kami, di kantor kami, atau melalui transfer bank. Hubungi tim dukungan kami untuk bantuan mengenai opsi pembayaran.</p>
      </div>

      <div class="box">
         <h3><span>Bagaimana cara menghubungi pembeli?</span><i class="fas fa-angle-down"></i></h3>
         <p>Anda dapat menghubungi pembeli melalui sistem pesan kami di platform atau melalui detail kontak yang disediakan di akun Anda. Tim kami juga dapat memfasilitasi komunikasi jika diperlukan.</p>
      </div>

      <div class="box">
         <h3><span>Mengapa listing saya tidak muncul?</span><i class="fas fa-angle-down"></i></h3>
         <p>Jika listingan Anda tidak terlihat, hal ini mungkin disebabkan oleh informasi yang tidak lengkap, menunggu persetujuan, atau masalah teknis. Periksa status listing Anda dan pastikan semua detail diisi dengan benar.</p>
      </div>

      <div class="box">
         <h3><span>Bagaimana cara mempromosikan listing saya?</span><i class="fas fa-angle-down"></i></h3>
         <p>Promosikan listing Anda dengan meningkatkan ke listingan unggulan, berbagi di media sosial, dan menggunakan alat pemasaran kami. Tim kami dapat memberikan strategi tambahan untuk meningkatkan visibilitas.</p>
      </div>

   </div>

</section>
<?php include "footer.php";?>
<script src="js/script.js"></script>

</body>
</html>