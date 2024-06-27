<?php
include_once "functions.php";
if(isset($_GET["bid"])){
    bid($_GET["bid"]);
}else{
    unbid($_GET["unbid"]);
}
header("Location: " . $_SERVER["HTTP_REFERER"]);
