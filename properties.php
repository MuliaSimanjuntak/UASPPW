<?php
include_once "./functions/functions.php";
$agents = getAgent($_COOKIE["userId"]);
$properties = getPropertiesBy($_COOKIE["userId"]);
if(isset($_GET["delete"])){
    $prop = $_GET["delete"];
    mysqli_query($mysql,"DELETE FROM properties WHERE propertyId='$prop'");
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
if(isset($_GET["edit"])){
    $prop = $_GET["edit"];
    $propEdit = getProperties($prop)[0];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Properti Anda</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
   <?php include "header.php"; ?>
   <?php if(!isset($_GET["edit"])):?>
   <section class="listings">
    <h3 class="heading">PROPERTI ANDA</h3>
      <?php if (!isset($_GET["id"])) : ?>
         <div class="box-container">
            <?php foreach ($properties as $property) : ?>
               <div class="box">
                  <div class="admin">
                     <div>
                        <p><?= ucwords($property["namaProperti"]) ?></p>
                        <span><?= $property["dibangun"] ?></span>
                     </div>
                  </div>
                  <div class="thumb">
                  <p class="type"><span><?= strtoupper($property["tipe"] )?></span><span><?= strtoupper($property["status"] )?></span></p>
                     <img src="images/house-img-1.webp" alt="">
                  </div>
                  <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= ucwords($property["lokasi"]) ?></span></p>
               <p class="location"><i class="fa-sharp fa-solid fa-rupiah-sign fa-lg"></i><span><?= number_format($property["harga"], 0, ',', '.') ?></span></p>
               <div class="flex">
                  <p><i class="fas fa-bed"></i><span><?= $property["kamar"] ?></span></p>
                  <p><i class="fas fa-bath"></i><span><?= $property["toilet"] ?></span></p>
                  <p><i class="fas fa-maximize"></i><span><?= $property["luas"] ?> m2</span></p>
               </div>
               <a href="./properties.php?edit=<?= $property['propertyId']; ?>" class="btn">Edit</a>
               <a href="./properties.php?delete=<?= $property['propertyId']; ?>" class="btn">Hapus</a>
               </div>
            <?php endforeach; ?>
         </div>
      <?php else : ?>
         <section class="view-property">

            <div class="details">
               <div class="info">
                  <p><i class="fas fa-user"></i><a href=""><?= $agents[0]["namaUser"] ?></a></p>
                  <p><i class="fas fa-phone"></i><a href=""><?= $agents[0]["telepon"] ?></a></p>
                  <p><i class="fas fa-building"></i><span><?= strtoupper($agents[0]["email"]) ?></span></p>
                  <p><i class="fas fa-building"></i><span><?= strtoupper($agents[0]["aset"]) ?> Properti</span></p>
               </div>
               <h3 class="title">Deskripsi</h3>
               <div class="flex">
                  <div class="box">
                     <p><i><?= $agents[0]["tentang"] ?></i></p>
                  </div>
               </div>
            </div>
            
         </section>
         <h3 class="heading">Properti Oleh <?=$agents[0]["namaUser"]?></h3>
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
                <?php if(isset($_COOKIE["userId"])):?>
                <?php if($property["likeStatus"]==NULL):?>
                    <a href="./functions/like.php?like=<?=$property['propertyId']?>">
                        <button type="submit" name="save" class="far fa-heart"></button>
                    </a>
                    <?php else:?>
                        <a href="./functions/like.php?unlike=<?=$property['propertyId']?>">
                            <button type="submit" name="save" class="fas fa-heart"></button>
                        </a>
                        <?php endif;?>
                        <?php else:?>
                            <a href="register.php">
                                <button type="submit" name="save" class="far fa-heart"></button>
                            </a>
                            <?php endif;?>
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
         <a href="property.php?id=<?=$property['propertyId'];?>" class="btn">view property</a>
      </div>
      <?php endforeach;?>
   </div>
      <?php endif; ?>
    </section>
    <?php else:?>
        <section class="property-form">
            <form action="functions/update.php?id=<?=$propEdit['propertyId']?>" method="post">
                <h3>EDIT PROPERTI</h3>
                <div class="box">
                    <input value="<?=$propEdit['namaProperti']?>" type="text" name="nama" required maxlength="30" placeholder="Nama Properti" class="input">
                </div>
                <div class="box">
                    <input value="<?=$propEdit['lokasi']?>" type="text" name="lokasi" required maxlength="50" placeholder="Lokasi Properti" class="input">
                </div>
                <div class="flex">
                    <div class="box">
                        <p>Tipe Bangunan</p>
                        <select value="<?=$propEdit['tipe']?>" name="bangunan" class="input" required>
                            <option value="">TIPE</option>
                            <option <?php if($propEdit["tipe"]=="rumah")echo "selected";?> value="rumah">RUMAH</option>
                            <option <?php if($propEdit["tipe"]=="mansion")echo "selected";?> value="mansion">MANSION</option>
                            <option <?php if($propEdit["tipe"]=="villa")echo "selected";?> value="villa">VILLA</option>
                            <option <?php if($propEdit["tipe"]=="kantor")echo "selected";?> value="kantor">KANTOR</option>
                        </select>
                    </div>
                    <div class="box">
                        <p>Perjanjian</p>
                        <select name="perjanjian" class="input" required>
                            <option value="">Pilih Jenis </option>
                            <option <?php if($propEdit["status"]=="jual")echo "selected";?> value="jual">JUAL </option>
                            <option <?php if($propEdit["status"]=="sewa")echo "selected";?> value="sewa">SEWA</option>
                        </select>
                    </div>
                    <div class="box">
                        <p>Luas Bangunan (m2)</p>
                        <input value="<?=$propEdit['luas']?>" type="number" name="luas" maxlength="6" required class="input">
                    </div>
                    <div class="box">
                        <p>Harga</p>
                        <input value="<?=$propEdit['harga']?>" type="number" name="harga" maxlength="9" required class="input">
                    </div>
                    <div class="box">
                        <p>Kamar Tidur</p>
                        <input value="<?=$propEdit['kamar']?>" type="number" name="kamar" maxlength="2" required class="input">
                    </div>
                    <div class="box">
                        <p>Kamar Mandi</p>
                        <input value="<?=$propEdit['toilet']?>" type="number" name="toilet" maxlength="2" required class="input">
                    </div>
                    <div class="box">
                        <p>Jarak Fasum (km)</p>
                        <input value="<?=$propEdit['public']?>" type="number" name="jarak" maxlength="2" required class="input">
                    </div>
                    <div class="box">
                        <p>Dibangun</p>
                        <input value="<?=$propEdit['dibangun']?>" type="date" name="dibangun" required class="input">
                    </div>
                </div>
                <div class="box">
                    <p>Deskripsi</p>
                    <input type="text" value="<?=$propEdit['deskripsi']?>" name="deskripsi" class="input"></input>
                </div>
                <div class="box">
                    <input type="submit" class="input" value="Update"></input>
                </div>
            </form>
        </section>
    <?php endif; ?>
   <?php include "footer.php"; ?>
   <script src="js/script.js"></script>

</body>

</html>