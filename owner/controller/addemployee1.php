<?php

include '../../config.php';
$admin=new Admin();

if(isset($_POST['submit'])){
    $oid=$_SESSION['sid'];
    $e_name=$_POST['ename'];
    $e_phone=$_POST['ephone'];
    $e_email=$_POST['eemail'];
    $e_password=$_POST['epassword'];
    

    $stmt=$admin->cud("INSERT INTO `employee`(`oid`,`e_name`,`e_phone`,`e_email`,`e_password`)VALUES('$oid','$e_name','$e_phone','$e_email','$e_password')"
    ,"inserted");

    echo "<script>
    alert('Employee Added Successfully');
    window.location='../viewemployee.php';
    </script>";



}








?>