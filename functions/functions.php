<?php
$mysql = mysqli_connect("localhost","root","","mulya",3306);
function addUser($data){
    global $mysql;
    $name = $data["nama"];
    $telepon = $data["telepon"];
    $email = $data["email"];
    $password = $data["password"];
    $role = $data["role"];
    $id = uniqid(6);

    $query = "INSERT INTO users VALUES ('$id','$name','$email','$telepon','$password','$role','')";
    try{
        mysqli_query($mysql,$query);
        return true;
    }catch(Exception $e){
        return false;
    }
}
function loginUser($data){
    global $mysql;
    $email = $data["email"];
    $password = $data["password"];
    $query = "SELECT userId,email,password FROM users WHERE email='$email'";
    $res = mysqli_query($mysql,$query);
    $res = mysqli_fetch_assoc($res);
    if(password_verify($password,$res["password"])){
        return $res["userId"];
    }else{
        return false;
    }
}
function getUserData($id){
    global $mysql;
    $query = "SELECT * FROM users WHERE userId='$id'";
    $res = mysqli_query($mysql,$query);
    $res = mysqli_fetch_assoc($res);
    return $res;
}
function updateUser($data){
    global $mysql;
    $id = $_COOKIE["userId"];
    $name = $data["nama"];
    $telepon = $data["telepon"];
    $email = $data["email"];
    $password = $data["password"];
    $deskripsi = isset($data["deskripsi"])?$data["deskripsi"]:"";

    if($password==""){
        $query = "UPDATE users SET namaUser='$name',email='$email',telepon='$telepon',tentang='$deskripsi' WHERE userId='$id'";
    }else{
        $password = password_hash($password,PASSWORD_DEFAULT);
        $query = "UPDATE users SET namaUser='$name',email='$email',telepon='$telepon',tentang='$deskripsi',password='$password' WHERE userId='$id'";
    }

    try{
        mysqli_query($mysql,$query);
        return true;
    }catch(Exception $e){
        return false;
    }
}
function addProperty($data){
    global $mysql;
    $propertyId = $data["propertyId"];
    $userId = $_COOKIE["userId"];
    $nama = $data["nama"];
    $lokasi = $data["lokasi"];
    $bangunan = $data["bangunan"];
    $perjanjian = $data["perjanjian"];
    $luas = $data["luas"];
    $harga = $data["harga"];
    $kamar = $data["kamar"];
    $toilet = $data["toilet"];
    $jarak = $data["jarak"];
    $dibangun = $data["dibangun"];
    $deskripsi = $data["deskripsi"];
    $gambar1 = $data["gambar1"];
    $gambar2 = $data["gambar2"];
    $gambar3 = $data["gambar3"];
    $gambar4 = $data["gambar4"];
    $query = "INSERT INTO properties VALUES ('$propertyId','$userId','$nama','$bangunan','$lokasi','$harga','$luas','$toilet','$kamar','$perjanjian','$jarak','$dibangun','$deskripsi','$gambar1','$gambar2','$gambar3','$gambar4')";
    mysqli_query($mysql,$query);

}
function getProperties($method){
    global $mysql;
    $allData = [];
    if(isset($_COOKIE["userId"])){
        $userId = $_COOKIE["userId"];
    }else{
        $userId = "ds";
    }
    if($method=="all"){
        $query = "SELECT *,(SELECT userId FROM favorit f WHERE f.propertyId=p.propertyId AND f.userId='$userId') AS 'likeStatus' FROM properties p JOIN users u ON p.userId=u.userId ORDER BY p.harga";
    }elseif(strlen($method)>10){
        $query = "SELECT *,(SELECT userId FROM favorit f WHERE f.propertyId=p.propertyId AND f.userId='$userId') AS 'likeStatus' FROM properties p JOIN users u ON p.userId=u.userId WHERE p.propertyId='$method' ORDER BY p.harga";
    }elseif($method=="home"){
        $query = "SELECT *,(SELECT userId FROM favorit f WHERE f.propertyId=p.propertyId AND f.userId='$userId') AS 'likeStatus' FROM properties p JOIN users u ON p.userId=u.userId ORDER BY p.lokasi LIMIT 6";
    }elseif(strlen($method)==4){
        $query = "SELECT *,(SELECT userId FROM favorit f WHERE f.propertyId=p.propertyId AND f.userId='$userId') AS 'likeStatus' FROM properties p JOIN users u ON p.userId=u.userId WHERE p.status='$method' ORDER BY p.harga";
    }else{
        $query = "SELECT *,(SELECT userId FROM favorit f WHERE f.propertyId=p.propertyId AND f.userId='$userId') AS 'likeStatus' FROM properties p JOIN users u ON p.userId=u.userId WHERE p.tipe='$method' ORDER BY p.harga";
    }
    $res = mysqli_query($mysql,$query);
    while($row=mysqli_fetch_assoc($res)){
        $allData[] = $row;
    }
    return $allData;
}
function getFavorites(){
    global $mysql;
    $allData = [];
    $userId = $_COOKIE["userId"];
        // $query = "SELECT *,(SELECT userId FROM favorit f WHERE f.propertyId=p.propertyId AND f.userId='$userId') AS 'likeStatus' FROM properties p JOIN users u ON p.userId=u.userId";
        $query = "SELECT *,(SELECT userId FROM favorit f WHERE f.propertyId=p.propertyId AND f.userId='$userId') AS 'likeStatus' FROM properties p JOIN users u ON p.userId=u.userId WHERE p.propertyId IN (SELECT propertyId FROM favorit WHERE userId='$userId')";
    $res = mysqli_query($mysql,$query);
    while($row=mysqli_fetch_assoc($res)){
        $allData[] = $row;
    }
    return $allData;
}
function searchProperties($data){
    global $mysql;
    $kota = $data["kota"];
    $type = $data["type"];
    $luas = $data["luas"];
    if(isset($_COOKIE["userId"])){
        $userId = $_COOKIE["userId"];
    }else{
        $userId = "ds";
    }
    switch($luas){
        case '101':
            $min = 0;
            break;
        case '301':
            $min = 100;
            break;
        case '501':
            $min = 300;
            break;
        case '1001':
            $min = 500;
            break;
        default:
        $min = 1000;
        break;
    }
    $harga = $data["harga"]*1000000;
    $status = $data["status"];
    $allData = [];
    $query = "SELECT *,(SELECT userId FROM favorit f WHERE f.propertyId=p.propertyId AND f.userId='$userId') AS 'likeStatus' FROM properties p JOIN users u ON p.userId=u.userId WHERE p.lokasi LIKE '%$kota%' AND p.status='$status' AND p.tipe='$type' AND p.luas>'$min' AND p.luas<'$luas' AND p.harga<='$harga' ORDER BY p.harga";
    $res = mysqli_query($mysql,$query);
    while($row=mysqli_fetch_assoc($res)){
        $allData[] = $row;
    }
    return $allData;
    
}
function like($prop){
    global $mysql;
    $user = $_COOKIE["userId"];
    mysqli_query($mysql,"INSERT INTO favorit VALUES ('$user','$prop')");
}
function unlike($prop){
    global $mysql;
    $user = $_COOKIE["userId"];
    mysqli_query($mysql,"DELETE FROM favorit WHERE userId='$user' AND propertyId='$prop'");
}
function bid($prop){
    global $mysql;
    $user = $_COOKIE["userId"];
    mysqli_query($mysql,"INSERT INTO bid (userId,propertyId) VALUES ('$user','$prop')");
}
function unbid($prop){
    global $mysql;
    $user = $_COOKIE["userId"];
    mysqli_query($mysql,"DELETE FROM bid WHERE userId='$user' AND propertyId='$prop'");
}
function getAgent($id){
    global $mysql;
    $allData = [];
    if($id=="all"){
        $query = "SELECT *,(SELECT COUNT(propertyId) FROM properties p WHERE p.userId=u.userId) AS 'aset' FROM users u WHERE role='owner'";
    }else{
        $query = "SELECT *,(SELECT COUNT(propertyId) FROM properties p WHERE p.userId=u.userId) AS 'aset' FROM users u WHERE userId='$id'";
    }
    $res = mysqli_query($mysql,$query);
    while($row=mysqli_fetch_assoc($res)){
        $allData[] = $row;
    }
    return $allData;
    
}
function getPropertiesBy($id){
    global $mysql;    
    $allData = [];
    if(isset($_COOKIE["userId"])){
        $userId = $_COOKIE["userId"];
    }else{
        $userId = "ds";
    }
    $query = "SELECT *,(SELECT userId FROM favorit f WHERE f.propertyId=p.propertyId AND f.userId='$userId') AS 'likeStatus' FROM properties p JOIN users u ON p.userId=u.userId WHERE p.userId='$id' ORDER BY p.harga";
    $res = mysqli_query($mysql,$query);
    while($row=mysqli_fetch_assoc($res)){
        $allData[] = $row;
    }
    return $allData;
}
function getPropertyReviews($id){
    global $mysql;
    $allData = [];
    $query = "SELECT * FROM propertyReviews r JOIN users u ON r.userId=u.userId WHERE r.propertyId='$id'";
    $res = mysqli_query($mysql,$query);
    while($row=mysqli_fetch_assoc($res)){
        $allData[]= $row;
    }
    return $allData;
}
function getOffers(){
    global $mysql;
    $allData = [];
    $userId = $_COOKIE["userId"];
    $query = "SELECT u.*,p.*,b.* FROM bid b JOIN users u ON u.userId=b.userId JOIN properties p ON b.propertyId=p.propertyId WHERE p.userId='$userId'";
    $res = mysqli_query($mysql,$query);
    while($row=mysqli_fetch_assoc($res)){
        $allData[]= $row;
    }
    return $allData;
}