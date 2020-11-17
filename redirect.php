<?php
require './configs/database.php';
require './configs/config.php';

$rlink = $_GET['link']; 
$queryr = "SELECT url FROM shorts WHERE urlshort ='".$rlink."'";
$links = mysqli_query($link, $queryr) or die("Ошибка " . mysqli_error($link)); 
$arrlinks = $links->fetch_assoc();
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".$arrlinks['url']);
?>