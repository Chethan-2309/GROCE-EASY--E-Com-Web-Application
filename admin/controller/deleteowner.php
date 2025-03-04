<?php
require_once '../../config.php';
$admin=new Admin();

$id=$_GET['id'];
{
    $stmt=$admin->cud("DELETE FROM `owner` WHERE `o_id`=".$id,"Deleted");
    echo"<script>
    alert('Details deleted successfully');
    window.location='../viewowner.php';
    </script>";

}