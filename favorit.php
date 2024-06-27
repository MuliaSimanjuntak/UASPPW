<?php 
include_once "./functions/functions.php";
$properties = getFavorites();
$found = count($properties)>0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Properti Disimpan</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php include_once "header.php";?>
<section class="listings">

   <h1 class="heading">Properti Yang Anda Simpan</h1>
   <?php if(!$found):?>
       <h3 align='center'>Anda belum menyimpan properti</h3>
   <?php endif;?>

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

</section>
<?php include_once "footer.php";?>
<script src="js/script.js"></script>

</body>
</html>