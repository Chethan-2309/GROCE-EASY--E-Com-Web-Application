<?php
include '../config.php';
$admin=new Admin();
session_destroy();
unset($_SESSION['aid']);
echo "<script>
alert('Logout Successfull');
window.location='login.php';

</script>";
?>