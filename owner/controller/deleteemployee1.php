<?php
require_once '../../config.php';
$admin=new Admin();

$id=$_GET['id'];
{
    $stmt=$admin->cud("DELETE FROM `employee` WHERE `e_id`=".$id,"Deleted");
    echo"<script>
    alert('Details deleted successfully');
    window.location='../viewemployee.php';
    </script>";

}