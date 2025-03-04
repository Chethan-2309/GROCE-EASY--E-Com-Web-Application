<?php

include '../config.php';
$admin = new Admin();
$id = $_SESSION['sid'];
$unid=$_GET['unid'];
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
    <style>
    body {
      background: #eee;
    }

    .card {
      box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, .125);
      border-radius: 1rem;
    }

    .text-reset {
      --bs-text-opacity: 1;
      color: inherit !important;
    }

    a {
      color: #5465ff;
      text-decoration: none;
    }
  </style>
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

            <div class="main-panel">
        <div class="content-wrapper pb-0">
          <div class="container-fluid">

            <div class="container">
              <!-- Title -->
              <div class="d-flex justify-content-between align-items-center py-3">
                <h2 class="h5 mb-0"><a href="#" class="text-muted"></a>View Order Details</h2>
              </div>

              <!-- Main content -->
              <div class="row">
                <div class="col-lg-8">
                  <!-- Details -->
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="mb-3 d-flex justify-content-between">


                      </div>
                      <table class="table table-borderless">
                        <tbody>
                          <?php
                          $g_total = 0;

                          $stmt = $admin->ret("SELECT * FROM   `order`   INNER JOIN `product` ON product.p_id=order.p_id WHERE order.unid='$unid' AND order.oid='$id'");
                          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $quantity = $row['or_quantity'];
                            $price = $row['p_price'];
                            $g_total = $quantity * $price;
                          ?>
                            <tr>
                              <td>
                                <div class="d-flex mb-2">
                                  <div class="flex-shrink-0">
                                    <img src="controller/<?php echo $row['p_img'] ?>" alt="" style="width:100px;height:100px" class="img-fluid">
                                  </div>
                                  <div class="flex-lg-grow-1 ms-3">
                                    <h4 class=" mb-0"><a href="#" class="text-reset"><?php echo $row['p_name'] ?></a></h4>
                                    <span class="small">Quantity: <?php echo $row['or_quantity'] ?></span>
                                  </div>
                                </div>
                              </td>
                              <td>Price: ₹<?php echo $row['p_price'] ?></td>
                              <td class="text-end">Total: ₹<?php echo $g_total ?>
                            </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>

                          <?php
                          $a_total = 0;
                          $stmt3 = $admin->ret("SELECT * FROM  `order` WHERE `unid`='$unid' AND order.oid='$id' ");
                          while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                            $a_total += $row3['or_total'];
                          }
                          ?>

                          <tr class="fw-bold text-dark">
                            <td colspan="2">
                              <p>TOTAL</p>
                            </td>
                            <td class="text-end text-dark">
                              <p>₹ <?php echo $a_total ?></p>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <!-- Payment -->

                </div>
                <div class="col-lg-4">
                  <!-- Customer Notes -->
                  <?php

                  $stmt = $admin->ret("SELECT * FROM `shipping` INNER JOIN `order` ON order.unid=shipping.unid  INNER JOIN `product` ON product.p_id=order.p_id WHERE order.unid='$unid'  ");
                  $row1 = $stmt->fetch(PDO::FETCH_ASSOC);

                  ?>
                  <div class="card mb-4">
                    <!-- Shipping information -->
                    <div class="card-body">
                      <div class="d-flex justify-content-between pt-2">
                        <p class="fw-bold mb-0">Shipping Details</p>
                        <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> $898.00</p> -->
                      </div>

                      <div class="d-flex justify-content-between pt-2">
                        <p class="text-muted mb-0">Frist Name : <?php echo $row1['f_name'] ?></p>
                        <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $19.00</p> -->
                      </div>
                      <div class="d-flex justify-content-between pt-2">
                        <p class="text-muted mb-0">Last Name : <?php echo $row1['l_name'] ?></p>
                        <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $19.00</p> -->
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="text-muted mb-0">Email : <?php echo $row1['s_email'] ?></p>
                        <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p> -->
                      </div>

                      <div class="d-flex justify-content-between ">
                        <p class="text-muted mb-0">Phone Number : <?php echo $row1['s_phone'] ?></p>
                        <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p> -->
                      </div>

                      <div class="d-flex justify-content-between ">
                        <p class="text-muted mb-0">Address : <?php echo $row1['s_address'] ?></p>
                        <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p> -->
                      </div>
                      <div class="d-flex justify-content-between ">
                        <p class="text-muted mb-0">State : <?php echo $row1['s_state'] ?></p>
                        <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p> -->
                      </div>
                      <div class="d-flex justify-content-between ">
                        <p class="text-muted mb-0">Zip : <?php echo $row1['s_zip'] ?></p>
                        <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p> -->
                      </div>
                      <div class="d-flex justify-content-between mb-5">
                        <p class="text-muted mb-0">Ordered Date : <?php echo $row1['or_date'] ?></p>
                        <!-- <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>





        </div>
       
      </div>
            <!-- Table Start -->






            <!-- Table End -->


            <!-- Footer Start -->

            <!-- Footer End -->
        </div>
        <!-- Content End -->
    </div>

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