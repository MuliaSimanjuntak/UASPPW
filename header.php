<?php
include_once "./functions/functions.php";
if(isset($_COOKIE["userId"])){
    $dataUser = getUserData($_COOKIE["userId"]);
}
?>
<header class="header">
   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><i class="fas fa-house"></i>MCs Property</a>
         
         <ul>
         <li><a href="
         <?php if(isset($dataUser)){
          if($dataUser["role"]=="owner"){
             echo 'post.php">TAWARKAN';
            }else{
               echo 'home.php">CARI';

            }}else{
             echo 'home.php">CARI';

          }?><i class="fas fa-paper-plane"></i></a></li>
               </ul>
      </section>
   </nav>
   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">PROPERTY<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search.php?type=rumah">Rumah</a></li>
                     <li><a href="search.php?type=mansion">Mansion</a></li>
                     <li><a href="search.php?type=villa">Villa</a></li>
                     <li><a href="search.php?type=kantor">Kantor</a></li>
                  </ul>
               </li>
               <?php if(isset($dataUser)):?>
                <?php if($dataUser["role"]=="owner"):?>
               <li><a href="post.php">JUAL</a>
               <li><a href="offers.php">TAWARAN</a>
               <li><a href="properties.php">PROPERTI</a>
               </li>
               <?php else:?>
               <li><a href="search.php?status=jual">BELI</a>
               <li><a href="search.php?status=sewa">SEWA</a>
               </li>
               <?php endif;?>
               <?php endif;?>
               <li><a href="#">BANTUAN<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">Tentang Kami</a></i></li>
                     <li><a href="contact.php">Kontak</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
               <li><a href="agent.php">AGEN</a>
               </li>
            </ul>
         </div>

         <ul>
            <?php if(isset($dataUser)&&$dataUser["role"]=="buyer"):?>
            <li><a href="favorit.php"> FAVORIT <i class="far fa-heart"></i></a></li>
            <?php endif;?>
            <li><a href="#"> AKUN <i class="fas fa-angle-down"></i></a>
               <ul>
               <?php if(isset($_COOKIE["userId"])):?>
                  <li><a href="settings.php">Pengaturan</a></li>
                  <li><a href="./functions/logout.php">Keluar</a></li>
                  <?php else:?>
                     <li><a href="login.php">Login</a></li>
                     <li><a href="register.php">Daftar</a></li>
                  <?php endif;?>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>