<?php 
include 'koneksi.php';
$id = $_POST['id'];
$brand = $_POST['brand'];
$type = $_POST['type'];
$price = $_POST['price']
 
mysql_query("INSERT INTO user VALUES('','$id','$brand','$type','$price')");
 
header("location:index.php?pesan=input");
?>