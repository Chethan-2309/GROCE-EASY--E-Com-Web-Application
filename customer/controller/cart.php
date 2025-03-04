<?php 
include '../../config.php';
$admin=new Admin();
if(isset($_SESSION['rid'])){
$cus_id=$_SESSION['rid'];
}
if(isset($_GET['pid'])){
  
    $p_id=$_GET['pid'];
$oid=$_GET['oid'];

   $quantity=1;
 

   $stmt1=$admin->ret("SELECT * FROM `cart` WHERE `r_id`='$cus_id' AND `p_id`='$p_id'");
   $cart_row=$stmt1->fetch(PDO::FETCH_ASSOC);
   $num=$stmt1->rowCount();
   if($num>0){
    $quantity_cart=$cart_row['quantity']+1;
    $stmt2=$admin->cud("UPDATE `cart` SET `quantity`='$quantity_cart' WHERE `r_id`='$cus_id' AND `p_id`='$p_id'",'Updated');
    echo "<script>alert('item added to cart');window.location.href='../cart.php';</script>";
   }else{
    $stmt3=$admin->cud("INSERT INTO `cart` (`oid`,`r_id`,`p_id`,`quantity`,`date`)VALUES('$oid','$cus_id','$p_id','$quantity',now())",'inserted');
     echo "<script>alert('item added to cart');window.location.href='../cart.php';</script>";
   }
}
?>