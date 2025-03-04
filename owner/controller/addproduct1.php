<?php

include '../../config.php';
$admin=new Admin();

if(isset($_POST['submit'])){
    $p_name=$_POST['pname'];
    $p_desc=$_POST['pdesc'];
    $p_price=$_POST['pprice'];
    $p_stocks=$_POST['pstocks'];
    $id=$_SESSION['sid'];

    $imagename="upload/".basename($_FILES['pimg']['name']);
    move_uploaded_file($_FILES['pimg']['tmp_name'],$imagename);

    $stmt=$admin->cud("INSERT INTO `product`(`o_id`,`p_name`,`p_desc`,`p_price`,`p_stocks`,`p_img`)VALUES('$id','$p_name','$p_desc','$p_price','$p_stocks','$imagename')"
    ,"inserted");

    echo "<script>
    alert('Product Added Successfully');
    window.location='../addproduct.php';
    </script>";
    


}








?>