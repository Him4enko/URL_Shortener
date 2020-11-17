<?php
require './configs/database.php';
require './configs/config.php';
$date = date("d.m.Y");
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$slink = substr(str_shuffle($permitted_chars), 0, 10);
if(isset($_POST['submit']) &&  !empty($_POST['url'])){
	$query = "INSERT INTO shorts (url, urlshort, date) VALUES ('".$_POST['url']."', '".$slink."', '".$date."')";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	print("Your link: ".$siteurl."".$slink); // Replace http://localhost/ to the url of your website
}	
?>

<form action="" method="post">
<input type="link" name="url">
<button type="submit" name="submit">URL SHORT</button>
</form>
