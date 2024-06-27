<?php 
include_once "./functions/functions.php";
$property = getProperties($_GET["id"])[0];
if(isset($_POST["pesan"])){
    $userId = $_COOKIE["userId"];
    $text = $_POST["pesan"];
    $propId = $_GET["id"];
    try{
        mysqli_query($mysql,"INSERT INTO propertyReviews VALUES ('NULL','$userId','$propId','$text')");
    }catch(Exception $e){

    }
    unset($_POST);
    header("Location: property.php?id=".$propId);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Property</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        <?php include "header.php";?>
    <section class="contact">

<div class="row">
   <div class="image">
    <h3 class="heading"><?=$property["namaProperti"]?></h3>
      <img src="<?=$property["gambar1"]?>" alt="">
   </div>
   <form action="" method="post">
      <h3>Beri Penilaian</h3>
      <textarea name="pesan" placeholder="Apa pesan anda" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
      <input type="submit" value="Kirim" name="send" class="btn">
   </form>
</div>

</section>
            
<?php include "footer.php";?>
        </body>
</html>