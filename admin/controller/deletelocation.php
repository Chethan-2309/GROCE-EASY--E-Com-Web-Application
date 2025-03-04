<?php
require_once '../../config.php';
$admin=new Admin();

$id=$_GET['id'];
{
    $stmt=$admin->cud("DELETE FROM `location` WHERE `l_id`=".$id,"Deleted");
    echo"<script>
    alert('Details deleted successfully');
    window.location='../viewlocation.php';
    </script>";

}