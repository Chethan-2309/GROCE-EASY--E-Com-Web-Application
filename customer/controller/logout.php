<?php 
include '../../config.php';
$admin=new Admin();
session_destroy();
unset($_SESSION['rid']);
echo "<script>
alert('Logout Successfull');
window.location='../index.php';
</script>";
?>
