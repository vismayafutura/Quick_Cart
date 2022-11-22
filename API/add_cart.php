<?php

include 'connection.php';
$cus_id = $_POST['cus_id'];
$id = $_POST['product_id'];
$quandity = $_POST['quandity'];
$value = $_POST['value'];
$sql = mysqli_query($con, "INSERT INTO request(cus_id,product_id,quandity,val)values('$cus_id','$id','$quandity','$value')");


if ($sql) {

  

    $myarray['message'] = 'Added';

    // $myarray['login_id'] = $row['login_id'];

    // $myarray['type'] = $row['type'];
  
} else {

  $myarray['message'] = 'Failed';
}
echo json_encode($myarray);
