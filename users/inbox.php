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


     if (isset($_GET['del'])) {
       $del_id = $_GET['del'];
       $sql = "DELETE FROM notifications WHERE mesg_id= '$del_id'";
       $query = mysqli_query($connect,$sql);
       if ($query) {
          header('Location:inbox');
       }
     }

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
        

<?php  if (!isset($_GET['send']) && !isset($_GET['sent']) && !isset($_GET['read'])) {
            if ($_SESSION['role'] === 'user') {
    ?>
    <div class="table-responsive mt-5">
        <div class="text-end">
            <a href="inbox?send" class="btn btn-primary my-2">Compose</a>
        </div>
                <table class="table">
                        <thead class="table-dark text-white">
                            <tr>
                            <th scope="col"><i class="fas fa-envelope"></i></th>
                            <th scope="col">Message</th>
                            <th scope="col visually-hidden"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $num = 1;
                                $sql = "SELECT * FROM notifications WHERE userid='$id' AND msg_status = 'unread' AND sender='admin' ORDER BY mesg_id DESC";
                                $query = mysqli_query($connect,$sql);
                                while ($ms = mysqli_fetch_assoc($query)) {
                            ?>
                            <tr>
                                <td><?php echo $num++; ?></td>
                                <td><?php echo substr($ms['messages'],0,10).".........."; ?></td>
                                <td>
                                    <a href="inbox?read=<?php echo $ms['mesg_id']; ?>" class="btn btn-transperent">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                </table>
    </div>

<?php }if($_SESSION['role'] === 'admin'){?>


<!-- ADMIN -->
<div class="table-responsive mt-5">
        <div class="text-end">
            <a href="inbox?send" class="btn btn-primary my-2">Compose</a>
        </div>
                <table class="table">
                        <thead class="table-dark text-white">
                            <tr>
                            <th scope="col"><i class="fas fa-envelope"></i></th>
                            <th scope="col">Message</th>
                            <th scope="col">User</th>
                            <th scope="col visually-hidden"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $num = 1;
                                $sql = "SELECT * FROM notifications WHERE msg_status = 'unread' AND sender='user' ORDER BY mesg_id DESC";
                                $query = mysqli_query($connect,$sql);
                                while ($ms = mysqli_fetch_assoc($query)) {
                            ?>
                            <tr>
                                <td><?php echo $num++; ?></td>
                                <td><?php echo substr($ms['messages'],0,10).".........."; ?></td>
                                <td>
                                    <?php 
                                        $uid = $ms['userid'];
                                        $nameCmd = "SELECT * FROM users WHERE id= '$uid'";
                                        $nameQury = mysqli_query($connect,$nameCmd);
                                        $name = mysqli_fetch_assoc($nameQury);
                                        echo $name['first_name'];
                                    ?>
                                </td>
                                <td>
                                    <a href="inbox?read=<?php echo $ms['mesg_id']; ?>" class="btn btn-transperent">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="inbox?del=<?php echo $ms['mesg_id']; ?>" class="btn btn-transperent">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                </table>
    </div>

<?php }}else {
        if (isset($_GET['read'])) {
            $read = $_GET['read'];
            $update = "UPDATE notifications SET msg_status='read' WHERE mesg_id = '$read'";
            $query = mysqli_query($connect,$update);

            $sql = "SELECT * FROM notifications WHERE mesg_id = '$read'";
            $query = mysqli_query($connect,$sql);  
            $fetch = mysqli_fetch_assoc($query);
            
    ?>

<div class="container">
    <a href="inbox" class="btn btn-dark btn-sm my-2">
        <i class="fas fa-reply"></i>
    </a>
    <h3 class="fw-bold"><?php echo $fetch['date_created']; ?></h3>

    <p class="border rounded p-3">
        <?php echo $fetch['messages']; ?>
    </p>
</div>


    <?php } if (isset($_GET['send'])) {?>
        <div class="my-2">
            <a href="inbox" class="btn btn-dark btn-sm my-2">
                <i class="fas fa-reply"></i>
            </a>
        </div>
        
        <form action="../assets/controls/update_control.php" method="post">

            <textarea name="message" class="form-control" placeholder="Hello, what can we do for you today"></textarea>

            <div class="text-end my-3">
                <?php if ($_SESSION['role'] === 'user') {?>
                    <button type="submit" name="sendUser" class="btn btn-info"> <i class="fas fa-envelope"></i> </button>
                <?php }else{ ?>
                <select name="userid" class="form-select my-3 w-25">
                    <?php 
                        $sql = "SELECT * FROM users WHERE roles = 'user'";
                        $query = mysqli_query($connect,$sql);
                        while ($users = mysqli_fetch_assoc($query)){
                    ?>
                        <option value="<?php echo $users['id']; ?>"><?php echo $users['first_name']." ".$users['last_name']; ?></option>
                    <?php } ?>
                </select>
                <button type="submit" name="sendAdmin" class="btn btn-danger"> <i class="fas fa-envelope"></i> </button>
                <?php } ?>
            </div>
        </form>

    <?php }} ?>
    </div>

        
    </div>

            </div>
        <!-- main content area end -->
    </div>
    <!-- page container area end -->
<?php include '../assets/includes/footer.php'; ?>
</body>

</html>
