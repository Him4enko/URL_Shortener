<?php
require 'config.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Error " . mysqli_error($link));
?>