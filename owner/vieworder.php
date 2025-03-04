<?php
include '../config.php';
$admin=new Admin();?> 
<?php if(isset($_SESSION['sid'])) {
    
   $sid=$_SESSION['sid'];
    
    
    ?>
<!DOCTYPE html>
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
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
       
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include 'sidebar.php';
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'navbar.php';
            ?>

            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Order Details</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL.NO</th>
                                        

                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Order Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                               $i=1;
                                $sum = 0;
                               $stmt=$admin->ret("SELECT * FROM `order` INNER JOIN `shipping` ON shipping.unid=order.unid  INNER JOIN `product` ON product.p_id=order.p_id INNER JOIN `owner` ON owner.o_id = product.o_id WHERE product.o_id='$sid' AND order.oid='$sid'  GROUP BY shipping.unid  ");
                               
                            
                            //    echo "SELECT * FROM `order` INNER JOIN `shipping` ON shipping.unid=order.unid  INNER JOIN `product` ON product.p_id=order.p_id INNER JOIN `owner` ON owner.o_id = product.o_id WHERE product.o_id='$sid'";
                               while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                $unid=$row['unid'];
                                $stmt1=$admin->ret("SELECT * FROM `order` WHERE `unid`='$unid'");
                                while($row1=$stmt1->fetch(PDO::FETCH_ASSOC)){
                                    $sum=$sum+$row1['or_total'];
                                }
                               ?>
                        <tr>
                          <td>
                          <?php echo $i++?>
                          </td>
                          <td>
                          <?php echo $row['f_name']?>
                          </td>
                          <td>
                          <?php echo $row['p_name']?>
                          </td>
                          <td><?php echo $sum?></td>
                                    <td><?php echo $row['date']?></td>
                                    <td style="display: flex">
                                        <?php if($row['or_status']=='pending'){?>
                                    <a type="button" class="btn btn-info  btn-fw" href="controller/update_status.php?update_order_status=<?php echo $row['unid'] ?>&r_id=<?php echo $row['r_id'] ?>">Accept order</a>
                                    <a type="button" class="btn btn-danger  btn-fw" href="controller/update_status.php?order_cancel=<?php echo $row['unid'] ?>&r_id=<?php echo $row['r_id'] ?>">Cancel</a>
                                    <?php } elseif ($row['or_status'] == 'order_canceled') { ?>
                                 <a href="" type="button" class="btn btn-danger  btn-fw">Canceled</a> 
                                    <?php } elseif ($row['or_status'] == 'order_accepted') { ?>
                                 <a href="controller/update_status.php?Picked_by_courier=<?php echo $row['unid'] ?>& r_id=<?php echo $row['r_id'] ?>" type="button" class="btn btn-primary  btn-fw">Picked by courier</a> 

                                 <?php } elseif ($row['or_status'] == 'Picked by courier') { ?>
                               <a href="controller/update_status.php?On_the_way=<?php echo $row['unid'] ?>&r_id=<?php echo $row['r_id'] ?>" type="button" class="btn btn-warning  btn-fw">On the way</a>
                                 <?php } elseif ($row['or_status'] == 'On the way') { ?>
                               <a href="controller/update_status.php?Delivered=<?php echo $row['unid'] ?>&r_id= <?php echo $row['r_id'] ?>" type="button" class="btn btn-success  btn-fw">Delivered</a>
                                 <?php } elseif ($row['or_status'] == 'Delivered') { ?>
                               <a href="" type="button" class="btn btn-success  btn-fw">Item Delivered</a>
                                    <?php }   ?>
                                    </td>
                                

                        </tr>
                      
                    <?php } ?>
                  
                      
                      
                      </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                    
                    
                  
            <!-- Table End -->


            <!-- Footer Start -->
          
            <!-- Footer End -->
        </div>
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
    <?php
}
else { ?>
<h1>Please Login To Have Access</h1>
<a href="index.php" class="btn btn-warning" style="background-color: red">Back</a>
<?php }?>

</body>

</html>