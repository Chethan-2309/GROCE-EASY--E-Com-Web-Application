<?php 
require '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];

$stmt=$admin->ret("SELECT * FROM `owner` WHERE `o_email`='$email' AND `o_password`='$pass'");


$num = $stmt->rowCount();
if($num>0)
{
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$id= $row['o_id'];
$_SESSION['sid']=$id;


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