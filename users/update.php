<?php
     include '../assets/includes/db_con.php';
     include '../assets/includes/sessions.php';
        
     auth();

     $id = $_SESSION['id'];
    /*
        For Select 
            Init
            prepare
            execute
            get_result
            fetch_assoc
    */
     $sql = "SELECT * FROM users WHERE id= '$id'";
     $stmt = mysqli_stmt_init($connect);
     mysqli_stmt_prepare($stmt,$sql);
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
     $row = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Safety Net : 'Financial friend everyone should have'</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawsome/css/all.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap5.min.css">
    <link rel="icon" href="../assets/img/logo.png">
    <!-- modernizr css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>

<style>
    .profpic{
        width: 100px;
        height: 100px;
        margin-left: 200px;
        border-radius: 50%;
    }

    @media (max-width:640px){
        .profpic{
            margin-left: 20px;
        }
    }
</style>
<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
  <?php include '../assets/includes/dashbord_nav.php' ?>
            <div class="main-content-inner">
            
            <?php echo successMessage(); echo errorMessage();?>

                <div class="card p-3 my-3 border border-primary">
<style>
    .profpic{
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }
    @media (max-width:680px) {
        .profpic{
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    }
</style>
                    <div class="row">
                        <div class="col-7"></div>
                        <div class="col-5">
                            <form action="../assets/controls/upload_prof_pic.php" method="POST" enctype="multipart/form-data">
                                <label for="profPic" class="form-label">
                                    <img src="../assets/img/profpic/<?php
                                        if (empty($row['prof_pic'])) {
                                           echo 'user.png';
                                        }else {
                                            echo $row['prof_pic'].'?'.mt_rand();
                                        }
                                    ?>" alt="prof-pic"  class="profpic">
                                </label>
                                <input type="file" name="img" class="form-control" id="profPic">
                                <div class="text-end my-2">
                                    <button type="submit" name="upload" class="btn btn-primary btn-sm rounded-pill">
                                        <i class="fas fa-arrow-circle-up"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                   <form action="../assets/controls/update_control.php" method="POST">
                        <div class="row mt-3">
                            <div class="col-md-3 my-2">
                                <label  class="form-label fw-bold text-warning fs-5">First Name:</label>
                            </div>
                            <div class="col-md-9 my-2">
                                <input type="text" name="fname" placeholder="<?php echo $row['first_name']; ?>" class="form-control bg-warning">
                            </div>

                            <div class="col-md-3 my-2">
                                <label  class="form-label fw-bold text-warning fs-5">Last Name:</label>
                            </div>
                            <div class="col-md-9 my-2">
                                <input type="text" name="lname" placeholder="<?php echo $row['last_name']; ?>" class="form-control bg-warning">
                            </div>

                            <div class="col-md-3 my-2">
                                <label  class="form-label fw-bold text-warning fs-5">Other Name:</label>
                            </div>
                            <div class="col-md-9 my-2">
                                <input type="text" name="oname" placeholder="<?php echo $row['other_name']; ?>" class="form-control bg-warning">
                            </div>

                            <div class="col-md-3 my-2">
                                <label  class="form-label fw-bold text-warning fs-5">Email:</label>
                            </div>
                            <div class="col-md-9 my-2">
                                <input type="email" value="<?php echo $row['email']; ?>" class="form-control bg-warning" readonly>
                            </div>

                            <div class="col-md-3 my-2">
                                <label  class="form-label fw-bold text-warning fs-5">DOB:</label>
                            </div>
                            <div class="col-md-9 my-2">
                                <input type="text" value="<?php echo $row['dob']; ?>" class="form-control bg-warning" readonly>
                            </div>

                            <div class="col-md-3 my-2">
                                <label  class="form-label fw-bold text-warning fs-5">State:</label>
                            </div>
                            <div class="col-md-9 my-2">
                                <input type="text" name="state" placeholder="<?php echo $row['states']; ?>" class="form-control bg-warning">
                            </div>

                            <div class="col-md-3 my-2">
                                <label  class="form-label fw-bold text-warning fs-5">Phone:</label>
                            </div>
                            <div class="col-md-9 my-2">
                                <input type="text" name="phone" placeholder="<?php echo $row['phone']; ?>" class="form-control bg-warning">
                            </div>

                            <div class="col-md-12 text-end">
                                    <button type="submit" name="update" class="btn btn-warning text-light">Update</button>
                            </div>
                        </div>
                   </form>
                </div>

                <div class="card p-3 my-2">
                    <h4 class="text-center text-warning">
                        Update Bank Details
                    </h4>
                    <form action="" method="post">
                        <div class="row p-1">
                            <div class="col-md-3 my-2">
                                <label  class="form-label fw-bold text-warning fs-5">Bank Name:</label>
                            </div>
                            <div class="col-md-9 my-2">
                                <input type="text" class="form-control bg-warning">
                            </div>

                            <div class="col-md-3 my-2">
                                <label  class="form-label fw-bold text-warning fs-5">Account Name:</label>
                            </div>
                            <div class="col-md-9 my-2">
                                <input type="text" class="form-control bg-warning">
                            </div>

                            <div class="col-md-3 my-2">
                                <label  class="form-label fw-bold text-warning fs-5">Account Number:</label>
                            </div>
                            <div class="col-md-9 my-2">
                                <input type="text" class="form-control bg-warning">
                            </div>

                            <div class="col-md-12 my-1">
                                    <button type="submit" class="btn btn-warning text-light">Add Bank Details</button>
                            </div>
                        </div>
                    </form>
                    
                </div>

            </div>
        <!-- main content area end -->
    </div>
    <!-- page container area end -->
<?php include '../assets/includes/footer.php'; ?>
</body>

</html>
