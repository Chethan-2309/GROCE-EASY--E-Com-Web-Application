<?php 
include '../../config.php';
$admin=new Admin();

 $cus_id=$_SESSION['rid'];



if(isset($_POST['checkout'])){
  
    $stmt=$admin->ret("SELECT * FROM `cart` INNER JOIN `product` ON product.p_id=cart.p_id  ");
    $un=uniqid();
    while( $row=$stmt->fetch(PDO::FETCH_ASSOC)){
    // $cid=$row['cid'];
    $grand_total=$_POST['grand_total'];
    $price=$row['p_price'];
    $p_id=$row['p_id'];
    $oid=$row['oid'];
    $g_total=0;
    $s_qty=$row['quantity'];
    $total=$price*$s_qty;
    $g_total=$g_total+$total;

    $status='pending';
    
    
    $stmt1=$admin->Rcud("INSERT INTO `order`(`oid`,`r_id`,`p_id`,`or_quantity`,`or_total`,`or_status`,`or_date`,`unid`)VALUES('$oid','$cus_id','$p_id','$s_qty','$g_total','$status',now(),'$un')","inserted");


    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $stmt2=$admin->cud("INSERT INTO `shipping` (`or_id`,`r_id`,`p_id`,`f_name`,`l_name`,`s_email`,`s_phone`,`s_address`,`s_state`,`s_zip`,`date`,`unid`)VALUES('$stmt1','$cus_id','$p_id','$fname','$lname','$email','$phone','$address','$state','$zip',now(),'$un')","INSERTED");

    $stmt4=$admin->ret("SELECT * FROM `order` WHERE `or_id`='$stmt1'");
    $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
    $or_id=$row4['or_id'];
    $trans_id=$_POST['trans_id'];
    $pay_type=$_POST['paymentMethod'];
    $card_name=$_POST['card_name'];
    $card_no=$_POST['card_no'];
   
    $pay_status='paid';


    $stmt3=$admin->cud("INSERT INTO `payment` (`oid`,`r_id`,`or_id`,`pay_type`,`trans_id`,`card_name`,`card_no`,`date`,`unid`,`amt`,`pay_status`)VALUES('$oid','$cus_id','$or_id','$pay_type','$trans_id','$card_name','$card_no',now(),'$un','$g_total','$pay_status')",'INSERTED');


   }
    $stmt6=$admin->cud("DELETE FROM `cart` WHERE `r_id`='$cus_id'",'DELETED');
    echo "<script>alert('Thank you for ordering ');
    window.location='../index.php';
    </script>";
}
?>