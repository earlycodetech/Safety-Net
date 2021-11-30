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
                
            <div class="container">
                   
            
            <?php echo successMessage(); ?>

                    <!-- Row of prof pic start--> 
                    <div class="row mt-5">
                        <div class="col-6"></div>
                        <div class="col-6 my-4">
                            <img src="../assets/img/profpic/user.png" alt="prof"class="shadow-lg profpic">
                        </div>
                    </div>
                    <!-- Row of prof pic ends--> 


                     <!-- Row of Balance starts--> 
                    <div class="row mb-4">
                        <div class="col-md-3 col-6">
                            <div class="card p-3 shadow-lg rounded">
                                <div class="d-flex">
                                    <img src="../assets/img/logo.png" alt="logo" class="w-25">
                                    <h5 class="fw-bolder fs-6">Current Ballance</h5>
                                </div>
                                <h4 class="pt-2 text-center fw-bold">₦ <?php echo $row['balance']; ?></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="card p-3 shadow-lg rounded">
                                <div class="d-flex">
                                    <img src="../assets/img/logo.png" alt="logo" class="w-25">
                                    <h5 class="fw-bolder fs-6">Total Withdrawal</h5>
                                </div>
                                <h4 class="pt-2 text-center fw-bold">₦ <?php echo $row['withdrawals']; ?></h4>
                            </div>
                        </div>

                        <div class="col-md-6"></div>
                    </div>
                     <!-- Row of balance ends--> 
                    <div class="card shadow-lg border border-warning p-5 mb-5">
                        <div class="row">
                            <div class="col-3 fw-bold text-warning mb-3">
                                First Name:
                            </div>
                            <div class="col-9 fw-bold mb-3 pt-2 border rounded border-warning">
                                <?php echo $row['first_name']; ?>
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                Last Name:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
                                <?php echo $row['last_name']; ?>
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                Other Names:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
                                <?php echo $row['other_name']; ?>
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                Email:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
                                <?php echo $row['email']; ?>
                            </div>
                            <!--    -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                D.O.B:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
                                <?php echo $row['dob']; ?>
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                State:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
                                <?php echo $row['states']; ?>
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                Phone:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
                                <?php echo $row['phone']; ?>
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                Reg Date:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
                                <?php echo $row['date_created']; ?>
                            </div>
                        </div>
                    </div>
                
                
                    </div>
            </div>
        <!-- main content area end -->
    </div>
    <!-- page container area end -->
<?php include '../assets/includes/footer.php'; ?>
</body>

</html>
