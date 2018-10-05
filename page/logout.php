<?php
session_destroy();
setcookie('login','',time()-1);
header('location:http://localhost/web2/login.php');
?>