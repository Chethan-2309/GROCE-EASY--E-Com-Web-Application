<?php 
require '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];

$stmt=$admin->ret("SELECT * FROM `admin` WHERE `a_email`='$email' AND `a_password`='$pass'");


$num = $stmt->rowCount();
if($num>0)
{
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$id= $row['a_id'];
$_SESSION['aid']=$id;


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