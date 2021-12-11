<<<<<<< HEAD
=======
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
>>>>>>> master
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
<<<<<<< HEAD
    .profpic{
        width: 100px;
        height: 100px;
<<<<<<< HEAD
=======
        margin-left: 200px;
=======
   .profpic{
        width: 200px;
        height: 200px;
>>>>>>> master
        border-radius: 50%;
    }
    @media (max-width:680px) {
        .profpic{
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
>>>>>>> master
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
<<<<<<< HEAD
            <div class="container">
                    <h4 class="text-center fw-bold position-relative text-danger">Welcome to your dashboard</h4>

                    <!-- Row of prof pic start--> 
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6 rounded-circle">
=======
                
            <div class="container">
                   
            
            <?php echo successMessage(); 
            ?>

                    <!-- Row of prof pic start-->
                    <?php if ($_SESSION['role'] === 'user') {?> 
                    <div class="row mt-5">
<<<<<<< HEAD
                        <div class="col-6"></div>
                        <div class="col-6 my-4">
>>>>>>> master
                            <img src="../assets/img/profpic/user.png" alt="prof"class="shadow-lg profpic">
=======
                        <div class="col-8"></div>
                        <div class="col-4 my-4">
                            <img src="../assets/img/profpic/<?php
                                        if (empty($row['prof_pic'])) {
                                           echo 'user.png';
                                        }else {
                                            echo $row['prof_pic'].'?'.mt_rand();
                                        }
                                    ?>" alt="prof"class="shadow-lg profpic">
>>>>>>> master
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
<<<<<<< HEAD
                                <h4 class="pt-2 text-center fw-bold">₦ 100000</h4>
=======
                                <h4 class="pt-2 text-center fw-bold">₦ <?php echo $row['balance']; ?></h4>
>>>>>>> master
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="card p-3 shadow-lg rounded">
                                <div class="d-flex">
                                    <img src="../assets/img/logo.png" alt="logo" class="w-25">
                                    <h5 class="fw-bolder fs-6">Total Withdrawal</h5>
                                </div>
<<<<<<< HEAD
                                <h4 class="pt-2 text-center fw-bold">₦ 100000</h4>
=======
                                <h4 class="pt-2 text-center fw-bold">₦ <?php echo $row['withdrawals']; ?></h4>
>>>>>>> master
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
<<<<<<< HEAD
                                John
=======
                                <?php echo $row['first_name']; ?>
>>>>>>> master
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                Last Name:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
<<<<<<< HEAD
                                Solomon
=======
                                <?php echo $row['last_name']; ?>
>>>>>>> master
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                Other Names:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
<<<<<<< HEAD
                                Sylvester
=======
                                <?php echo $row['other_name']; ?>
>>>>>>> master
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                Email:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
<<<<<<< HEAD
                                example@ok.com
=======
                                <?php echo $row['email']; ?>
>>>>>>> master
                            </div>
                            <!--    -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                D.O.B:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
<<<<<<< HEAD
                                12-12-2021
=======
                                <?php echo $row['dob']; ?>
>>>>>>> master
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                State:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
<<<<<<< HEAD
                                Delta State
=======
                                <?php echo $row['states']; ?>
>>>>>>> master
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                Phone:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
<<<<<<< HEAD
                                08152436355
=======
                                <?php echo $row['phone']; ?>
>>>>>>> master
                            </div>
                            <!--  -->
                            <div class="col-3 fw-bold text-warning mb-3">
                                Reg Date:
                            </div>
                            <div class="col-9 fw-bold pt-2 mb-3 border rounded border-warning">
<<<<<<< HEAD
                                12-12-2021
=======
                                <?php echo $row['date_created']; ?>
>>>>>>> master
                            </div>
                        </div>
                    </div>

<!--///////////////////////// USERS SECTIONS ENDS HERE ////////////////////////////////////////////////////////////// -->
                <?php }else {?>
                        <div class="card p-3 text-warning">
                            <div class="row">
                                <div class="col-9"></div>
                                <div class="col-3">
                                    <div class="card shadow-lg p-2">
                                        <h3 class="fw-bold">Total Users</h3>

                                        <p class="pt-3 fw-bold">
                                            <i class="fas fa-users"></i>
                                            <?php
                                                $sql = "SELECT * FROM users WHERE roles= 'user'";
                                                $query = mysqli_query($connect,$sql);
                                                $users = mysqli_num_rows($query);
                                                echo $users;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- ENd of total users div -->
                            

                            <div class="table-responsive mt-5">
                            <table class="table table-bordered table-hover">
                                <thead class="table-warning text-dark">
                                    <tr>
                                    <th scope="col">User ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Option</th>
                                    </tr>
                                </thead>


                                <tbody>
                                <?php
                                    $sql = "SELECT * FROM users WHERE roles= 'user' ORDER BY id DESC LIMIT 0,10";
                                    $query = mysqli_query($connect,$sql);
                                    while ($userRow = mysqli_fetch_assoc($query)) {
                                ?>
                                   
                                   <tr>
                                       <td><?php echo $userRow['users_id']; ?></td>
                                       <td><?php echo $userRow['first_name']; ?></td>
                                       <td><?php echo $userRow['last_name']; ?></td>
                                       <td class="text-center">
                                           <a href="view?user=<?php echo $userRow['users_id']; ?>" class="btn btn-primary">
                                               <i class="fas fa-eye text-light"></i>
                                           </a>


                                                                            <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-trash text-light"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                        <h5 class="text-warning py-4">
                                            Are you sure?
                                        </h5>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>

                                        <a href="../assets/controls/update_control?del=<?php echo $userRow['id']; ?>" class="btn btn-danger">
                                                Yes
                                               </a>
                                        </div>
                                        
                                        </div>
                                        </div>
                                        </div>
                                          
                                       </td>
                                   </tr>
                                   <?php } ?>
                                </tbody>
                                </table>
                            </div>
                        </div>

                    <?php } ?>
                    </div>
            </div>
        <!-- main content area end -->
    </div>
    <!-- page container area end -->
<?php include '../assets/includes/footer.php'; ?>
</body>

</html>
