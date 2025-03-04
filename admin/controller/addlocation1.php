<?php

include '../../config.php';
$admin=new Admin();

if(isset($_POST['submit'])){
    $l_name=$_POST['lname'];
    $l_city=$_POST['lcity'];
    

    $stmt=$admin->cud("INSERT INTO `location`(`l_name`,`l_city`)VALUES('$l_name','$l_city')"
    ,"inserted");

    echo "<script>
    alert('Location Added Successfully');
    window.location='../viewlocation.php';
    </script>";



}

?>