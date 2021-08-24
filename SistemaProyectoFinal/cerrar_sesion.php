<?php
ob_start();
setcookie('usuario', '', time() - 3600); // empty value and old timestamp
header("location:index.php");


?>
