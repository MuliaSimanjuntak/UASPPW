<?php
include_once "./functions/functions.php";
if(isset($_POST["nama"])){
    $_POST["nama"] = ucwords($_POST["nama"]);//jadiin kapital
    $_POST["password"] = password_hash($_POST["password"],PASSWORD_DEFAULT);///enkripsi
    if(addUser($_POST)){
        echo '<script>window.location.href="login.php?reg"</script>';//kalau berhasil daftar
    }else{
        echo '<script>window.location.href="register.php?fail"</script>';//kalau gagal
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrasi</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php include "header.php";?>

<section class="form-container">

   <form action="" method="post">
      <h3>Buat Akun</h3>
      <input type="tel" name="nama" required maxlength="50" placeholder="Nama" class="box">
      <input type="email" name="email" required maxlength="30" placeholder="Email" class="box">
      <input type="tel" name="telepon" required maxlength="13" placeholder="Nomor Telepon" class="box">
      <input type="password" name="password" required maxlength="20" placeholder="Password" class="box">
      <select name="role" placeholder="confirmed your role" class="box">
         <option value="#">Jenis Akun</option>
         <option value="owner">Owner</option>
         <option value="buyer">Buyer</option>
</select>
      <p>Sudah memiliki akun? <a href="login.php">Login disini!</a></p>
      <input type="submit" value="daftar sekarang" name="submit" class="btn">
   </form>

</section>
<?php include "footer.php";?>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>
<?php
if(isset($_GET["fail"])){
    echo '<script>swal("Registrasi Gagal", "" ,"error");</script>';
}
?>