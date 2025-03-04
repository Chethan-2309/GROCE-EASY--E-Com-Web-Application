<?php
include '../../config.php';
$admin=new Admin();

if(isset($_POST['submit'])){
$shname=$_POST['shname'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$id=$_POST['aid'];

	$pass=$_POST['password'];	
	$phone=$_POST['phone'];	
		$target="upload/";
	$image=$target.basename($_FILES['img']['name']);
	move_uploaded_file($_FILES['img']['tmp_name'], $image);


    $stmt=$admin->cud("UPDATE `owner` SET `sh_name`='$shname',`o_name`='$name',`o_password`='$pass',`o_phone`='$phone',`img`='$image' WHERE `o_id`='$id'","updated");
    echo "<script> alert('Profile Updated Succesfully');
    window.location='../index.php';
    </script>";

}
?>
