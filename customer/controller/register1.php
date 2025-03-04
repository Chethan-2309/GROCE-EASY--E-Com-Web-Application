<?php

include '../../config.php';
$admin=new Admin();

if(isset($_POST['submit'])){
    $r_name=$_POST['rname'];
    $r_phone=$_POST['rphone'];
    $r_email=$_POST['remail'];
    $r_password=$_POST['rpassword'];
    

    $stmt=$admin->cud("INSERT INTO `user`(`r_name`,`r_phone`,`r_email`,`r_password`)VALUES('$r_name','$r_phone','$r_email','$r_password')"
    ,"inserted");

    echo "<script>
    alert('Registered Successfully');
    window.location='../login.php';
    </script>";



}








?>