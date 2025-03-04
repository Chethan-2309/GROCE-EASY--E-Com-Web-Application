<?php 
include '../../config.php';
$admin=new Admin();
$cid=$_GET['cusid'];
$stmt=$admin->cud("DELETE  FROM `cart` WHERE  `c_id`='$cid'",'DELETED');
echo "<script>alert('Item deleted Successfully');window.location='../cart.php';</script>";
?>