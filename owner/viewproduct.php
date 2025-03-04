
<?php

include '../config.php';
$admin=new Admin()
;?>

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
            <div class="container-fluid pt-4 px-5">
                <div class="row g-4">
                    <div class="col-sm-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Product Details</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Image</th>
                                        <th scope="col">Product Description</th>
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Stocks</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Update</th>


                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                $stmt=$admin->ret("SELECT * FROM `product`");
                                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                {
                                    ?>

                                <tr>
                               

                                    <td><?php echo $row['p_name']?></td>
                                    <td><img src="controller/<?php echo $row['p_img'];?>" width="300px" height="250px"></td>
                                    <td><?php echo $row['p_desc']?></td>
                                    <td><?php echo $row['p_price']?></td>
                                    <td><?php echo $row['p_stocks']?></td>
                                    

                                   
                                    <td><a href="controller/deleteproduct1.php ?id=<?php echo $row['p_id'];?>"class="btn btn-danger">Delete</a></td>
                                    <td><a href="updateproduct.php?id=<?php echo $row['p_id'];?>"class="btn btn-info">Update</a></td>
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
</body>

</html>