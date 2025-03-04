
<?php 
include '../config.php';
$admin=new Admin();
$id=$_SESSION['sid'];
$stmt=$admin->ret("SELECT * FROM `owner`WHERE `o_id`='$id'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
  rel="stylesheet"
/>
    <style>.gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}</style>
</head>
<body>
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
             <img src="controller/<?php echo $row['img'];?>" height=100px width=100px style="margin-top:150px;">
              <h5> <?php echo $row['o_name'];?></h5>
              <p>GrossEsay</p>
             <form action="controller/updateprofile1.php" method="POST" enctype="multipart/form-data">
            </div>
            <div class="col-md-7">
              <div class="p-3" style="margin-right:80px;" >
                <b><label>Shop Name</label></b>
                <input type="hidden" name="aid" value="<?php echo $id;?>"> 
                <input type="text" value="<?php echo $row['sh_name'];?>" name="shname">
                </div>
                <div class="p-3" style="margin-right:80px;">
                <b><label>Name</label></b> <input type="text" value="<?php echo $row['o_name'];?>" name="name">
                </div>

                <div class="p-3" style="margin-right:50px;">
                <b><label>Email</label></b> <input type="password"  value="<?php echo $row['o_email'];?>" name="email">
                </div>
                <div class="p-3" style="margin-right:50px;">
                <b><label>Password</label></b> <input type="text"  value="<?php echo $row['o_password'];?>" name="password">
                </div>
                <div class="p-3" style="margin-right:50px;">
                <b><label>Phone</label></b> <input type="text"  value="<?php echo $row['o_phone'];?>" name="phone">
                </div> 

                <div class="p-3" style="margin-right:50px;">
                <b><label>Choose Your Picture</label></b><input type="file" name="img"  value="<?php echo $row['img'];?>">
                </div>
                
                

               

                  
               
                <button style="margin-left:50px;" type="submit" name="submit"class="btn btn-success mr-2">Update Profile</button>
                
              </div>
            </div>
          </div>
</form>
        </div>
      </div>
    </div>
  </div>
</section>




    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>
</body>
</html>