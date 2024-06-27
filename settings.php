<?php
include_once "./functions/functions.php";
$data = getUserData($_COOKIE["userId"]);
if(isset($_POST["nama"])){
   if(updateUser($_POST)==true){
      setcookie("userId","",time()-20,"/");
      header("Location: login.php");
   }else{
      header("Location: settings.php?fail");
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pengaturan</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php include "header.php";?>

<section class="form-container">

   <form action="" method="post">
      <h3>Edit Akun</h3>
      <input type="text" name="nama" required maxlength="50" value="<?=$data['namaUser']?>" placeholder="Nama" class="box">
      <input type="email" name="email" required maxlength="30" value="<?=$data['email']?>" placeholder="Email" class="box">
      <input type="tel" name="telepon" required maxlength="13" value="<?=$data['telepon']?>" placeholder="Nomor Telepon" class="box">
      <input type="password" name="password" maxlength="20" placeholder="Password" class="box">
      <?php if($data['role']=="owner"):?>
      <input type="text" name="deskripsi" required maxlength="100" value="<?=$data['tentang']?>" placeholder="Deskripsi" class="box">
      <?php endif;?>
      <input type="submit" value="Update" name="submit" class="btn">
   </form>

</section>

<?php include "footer.php";?>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>
<?php
if(isset($_GET["fail"])){
    echo '<script>swal("Update Gagal", "" ,"error");</script>';
}
?>