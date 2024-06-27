<?php 
include_once "./functions/functions.php";
if(isset($_POST["email"])){
   $hasil = loginUser($_POST);
   if($hasil==false){
       header("Location: login.php?fail");
   }else{
       setcookie("userId",$hasil,time()+3600,"/");//bikin cookie
       header("Location: home.php");
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include "header.php";?>

<section class="form-container">

   <form action="" method="post">
      <h3>Selamat Datang</h3>
      <input type="email" name="email" required maxlength="50" placeholder="Email" class="box">
      <input type="password" name="password" required maxlength="20" placeholder="Password" class="box">
      <p>Belum mempunyai akun? <a href="register.php">Daftar!</a></p>
      <input type="submit" value="login" name="submit" class="btn">
   </form>

</section>
<?php include "footer.php";?>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>
<?php
if(isset($_GET["reg"])){
    echo '<script>swal("Registrasi Berhasil", "" ,"success");</script>';
}
if(isset($_GET["fail"])){
    echo '<script>swal("Login Gagal", "" ,"error");</script>';
}
?>