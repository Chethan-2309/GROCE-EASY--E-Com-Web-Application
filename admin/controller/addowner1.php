<?php

include '../../config.php';
$admin=new Admin();

if(isset($_POST['submit'])){
    $sh_name=$_POST['sname'];
    $o_name=$_POST['oname'];
    $o_phone=$_POST['ophone'];
    $o_email=$_POST['oemail'];
    $o_password=$_POST['opassword'];

    $stmt=$admin->cud("INSERT INTO `owner`(`sh_name`,`o_name`,`o_phone`,`o_email`,`o_password`)VALUES('$sh_name','$o_name','$o_phone','$o_email','$o_password')","inserted");

    echo "<script>
    alert('Owner Added Successfully');
    window.location='../viewowner.php';
    </script>";
    


}








?>