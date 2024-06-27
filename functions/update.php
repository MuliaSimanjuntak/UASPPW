<?php
include_once "functions.php";
$propertyId = $_GET["id"];
$nama = $_POST["nama"];
$lokasi = $_POST["lokasi"];
$bangunan = $_POST["bangunan"];
$perjanjian = $_POST["perjanjian"];
$luas = $_POST["luas"];
$harga = $_POST["harga"];
$kamar = $_POST["kamar"];
$toilet = $_POST["toilet"];
$jarak = $_POST["jarak"];
$dibangun = $_POST["dibangun"];
$deskripsi = $_POST["deskripsi"];
$query = "UPDATE properties SET namaProperti='$nama',tipe='$bangunan',lokasi='$lokasi',harga='$harga',luas='$luas',toilet='$toilet',kamar='$kamar',status='$perjanjian',public='$jarak',dibangun='$dibangun',deskripsi='$deskripsi' WHERE propertyId='$propertyId'";
mysqli_query($mysql,$query);
header("Location: ../properties.php");