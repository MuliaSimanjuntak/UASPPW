<?php
if (isset($_POST)&&isset($_FILES)&&count($_FILES)==4) {
    include_once "./functions/functions.php";
    $propertyId = uniqid(6);
    $_POST["propertyId"] = $propertyId;
    // var_dump($_POST);
    // var_dump($_FILES);
    $imgName = "images/".$propertyId."1".".".strtolower(pathinfo($_FILES["image_01"]["name"],PATHINFO_EXTENSION));
    $_POST["gambar1"] = $imgName;
    move_uploaded_file($_FILES["image_01"]["tmp_name"],$imgName);
    $imgName = "images/".$propertyId."2".".".strtolower(pathinfo($_FILES["image_02"]["name"],PATHINFO_EXTENSION));
    $_POST["gambar2"] = $imgName;
    move_uploaded_file($_FILES["image_02"]["tmp_name"],$imgName);
    $imgName = "images/".$propertyId."3".".".strtolower(pathinfo($_FILES["image_03"]["name"],PATHINFO_EXTENSION));
    $_POST["gambar3"] = $imgName;
    move_uploaded_file($_FILES["image_03"]["tmp_name"],$imgName);
    $imgName = "images/".$propertyId."4".".".strtolower(pathinfo($_FILES["image_04"]["name"],PATHINFO_EXTENSION));
    $_POST["gambar4"] = $imgName;
    move_uploaded_file($_FILES["image_04"]["tmp_name"],$imgName);
    addProperty($_POST);
    header("Location: property.php?id=".substr($propertyId,0,12));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tawarkan Properti</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include_once "header.php"; ?>
        <section class="property-form">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>TAWARKAN PROPERTI ANDA !</h3>
                <div class="box">
                    <input type="text" name="nama" required maxlength="30" placeholder="Nama Properti" class="input">
                </div>
                <div class="box">
                    <input type="text" name="lokasi" required maxlength="50" placeholder="Lokasi Properti" class="input">
                </div>
                <div class="flex">
                    <div class="box">
                        <p>Tipe Bangunan</p>
                        <select name="bangunan" class="input" required>
                            <option value="">TIPE</option>
                            <option value="rumah">RUMAH</option>
                            <option value="mansion">MANSION</option>
                            <option value="villa">VILLA</option>
                            <option value="kantor">KANTOR</option>
                        </select>
                    </div>
                    <div class="box">
                        <p>Perjanjian</p>
                        <select name="perjanjian" class="input" required>
                            <option value="">Pilih Jenis </option>
                            <option value="jual">JUAL </option>
                            <option value="sewa">SEWA</option>
                        </select>
                    </div>
                    <div class="box">
                        <p>Luas Bangunan (m2)</p>
                        <input type="number" name="luas" maxlength="6" required class="input">
                    </div>
                    <div class="box">
                        <p>Harga</p>
                        <input type="number" name="harga" maxlength="9" required class="input">
                    </div>
                    <div class="box">
                        <p>Kamar Tidur</p>
                        <input type="number" name="kamar" maxlength="2" required class="input">
                    </div>
                    <div class="box">
                        <p>Kamar Mandi</p>
                        <input type="number" name="toilet" maxlength="2" required class="input">
                    </div>
                    <div class="box">
                        <p>Jarak Fasum (km)</p>
                        <input type="number" name="jarak" maxlength="2" required class="input">
                    </div>
                    <div class="box">
                        <p>Dibangun</p>
                        <input type="date" name="dibangun" required class="input">
                    </div>
                </div>
                <div class="box">
                    <p>Deskripsi</p>
                    <textarea name="deskripsi" rows="5" id="" class="input"></textarea>
                </div>
                <div class="flex">
                    <div class="box"><input accept="image/*" type="file" placeholder="fa" name="image_01" class="input"></div>
                    <div class="box"><input accept="image/*" type="file" placeholder="fa" name="image_02" class="input"></div>
                    <div class="box"><input accept="image/*" type="file" placeholder="fa" name="image_03" class="input"></div>
                    <div class="box"><input accept="image/*" type="file" placeholder="fa" name="image_04" class="input"></div>
                </div>
                <div class="box">
                    <input type="submit" class="input" value="Tawarkan"></input>
                </div>
            </form>
        </section>
    <?php include_once "footer.php"; ?>
    <script src="js/script.js"></script>
</body>

</html>