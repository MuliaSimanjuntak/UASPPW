<?php
include_once "functions.php";
if(isset($_GET["like"])){
    like($_GET["like"]);
}else{
    unlike($_GET["unlike"]);
}
header("Location: " . $_SERVER["HTTP_REFERER"]);
