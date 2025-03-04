<!DOCTYPE html>
<?php
    include '../config.php';
$admin=new Admin();
if(!isset($_SESSION['sid']))
{
    $admin->redirect('login');
}
$id=$_SESSION['sid'];
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GROCE EASY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0" style="background-color:light">
        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include 'sidebar.php';
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content" style="background-color:light">
            <!-- Navbar Start -->
            <?php include 'navbar.php';
            ?>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-shopping-bag fa-3x text-light"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Products</p>
                                <?php  
                      $stmts = $admin -> ret("SELECT COUNT(*) FROM `product` WHERE `o_id`='$id' ");
                      $rowss = $stmts -> fetch(PDO::FETCH_ASSOC);
                      $orders = implode($rowss);
                      
                      ?>
                      <h3 class="mb-0"><?php echo $orders; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-light"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Employee</p>
                                <?php  
                      $stmts = $admin -> ret("SELECT COUNT(*) FROM `employee` WHERE `oid`='$id'  ");
                      $rowss = $stmts -> fetch(PDO::FETCH_ASSOC);
                      $orders = implode($rowss);
                      
                      ?>
                      <h3 class="mb-0"><?php echo $orders; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-light"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Orders</p>
                                <?php  
                      $stmts = $admin -> ret("SELECT COUNT(*) FROM `order` WHERE `oid`='$id' ");
                      $rowss = $stmts -> fetch(PDO::FETCH_ASSOC);
                      $orders = implode($rowss);
                      
                      ?>
                      <h3 class="mb-0"><?php echo $orders; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-credit-card fa-3x text-light"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Payments</p>
                                <?php  
                      $stmts = $admin -> ret("SELECT COUNT(*) FROM `payment`  WHERE `oid`='$id'");
                      $rowss = $stmts -> fetch(PDO::FETCH_ASSOC);
                      $orders = implode($rowss);
                      
                      ?>
                      <h3 class="mb-0"><?php echo $orders; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
         
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            
            <!-- Widgets End -->


            <!-- Footer Start -->
            
            <!-- Footer End -->
        
        <!-- Content End -->


        <!-- Back to Top -->
        

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>