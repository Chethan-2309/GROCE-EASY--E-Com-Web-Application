<?php

include '../../config.php';
$admin=new Admin();

if(isset($_POST['submit'])){
    $p_name=$_POST['pname'];
    $p_desc=$_POST['pdesc'];
    $p_price=$_POST['pprice'];
    $p_stocks=$_POST['pstocks'];
    $pid=$_POST['p_id'];


    $imagename="upload/".basename($_FILES['pimg']['name']);
    move_uploaded_file($_FILES['pimg']['tmp_name'],$imagename);

    $stmt=$admin->cud("UPDATE `product` SET `p_name`='$p_name',`p_desc`='$p_desc',`p_price`='$p_price',`p_stocks`='$p_stocks',`p_img`='$imagename' WHERE `p_id`='$pid'","Updated");
    echo"<script>
    alert('Details Updated successfully');
    window.location='../viewproduct.php';
    </script>";

}
    ?>