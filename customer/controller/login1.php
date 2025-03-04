<?php 
require '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$email=$_POST['lemail'];
	$pass=$_POST['lpassword'];

$stmt=$admin->ret("SELECT * FROM `user` WHERE `r_email`='$email' AND `r_password`='$pass'");


$num = $stmt->rowCount();
if($num>0)
{
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$id= $row['r_id'];
$_SESSION['rid']=$id;


   echo"<script>
	alert('Login successfull');
    window.location='../index.php';


	</script>";
}
else
{
	echo"<script>
	alert('You have entered wrong name');
    window.location='../login.php';

    
	</script>";
}

}
?>