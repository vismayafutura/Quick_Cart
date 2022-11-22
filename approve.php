<?php
include 'connection.php';
$id = $_GET['id'];

mysqli_query($con,"UPDATE supermarket SET status='1' WHERE shop_id='$id'");
header('location:approve_shop.php');
?>