
<?php
$admin=new Admin();
$id=$_SESSION['sid'];
$stmt=$admin->ret("SELECT * FROM `owner` WHERE `o_id`=$id");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="sidebar pe-4 pb-3 bg-secondary">
            <nav class="navbar bg-secondary navbar-secondary">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-light text-white">SHOP OWNER</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="controller/<?php echo $row['img'];?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $row['o_name'];?></h6>
                        <span>Shop Owner</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>DASHBOARD</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-shopping-bag me-2"></i>PRODUCTS</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="addproduct.php" class="dropdown-item">ADD</a>
                            <a href="viewproduct.php" class="dropdown-item">VIEW</a>
                            
                        </div>
                    </div>
                    <a href="vieworder.php" class="nav-item nav-link"><i class="fa fa-sort me-2"></i>ORDERS</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>EMPLOYEE</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="addemployee.php" class="dropdown-item">ADD</a>
                            <a href="viewemployee.php" class="dropdown-item">VIEW</a>
                          
                        </div>
                    </div>
                    
                    <a href="payment.php" class="nav-item nav-link"><i class="fa fa-credit-card me-2"></i>VIEW PAYMENTS</a>
                    <a href="viewfeedback.php" class="nav-item nav-link"><i class="fa fa-comments  me-2"></i>VIEW FEEDBACK</a>
                
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-reply me-2"></i>LOG OUT</a>
                
                    
                </div>
            </nav>
        </div>