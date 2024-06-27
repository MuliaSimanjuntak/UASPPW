<?php
setcookie("userId","",time()-20,"/");
header("Location: ../register.php");