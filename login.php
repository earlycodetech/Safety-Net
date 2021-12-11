<?php include 'assets/includes/sessions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
    <link rel="stylesheet" href="assets/fontawsome/css/all.css">
    <title>Safety-Net Login Page</title>
    <link rel="icon" href="assets/img/logo.png">
</head>
<body>
        <?php include 'assets/includes/main-nav.php'; ?>

    <section style="background-image: url(assets/img/bg-1.jpg); background-size: cover; height: 700px; background-position: center;">
            <?php echo successMessage(); echo errorMessage(); ?>
        <form style="padding-top: 130px;" class="d-block mx-3" action="assets/controls/login_control.php" method="post">
            <div class="row">
                <div class="col-3 my-3">
                    <label class="fw-bold" for="email">Email:</label>
                </div>
                <div class="col-9 my-3">
                    <input class="form-control w-50 d-inline bg-warning" type="text" name="email"> 
                </div>

                <div class="col-3 my-3">
                    <label class="fw-bold" for="email">Password:</label>
                </div>
                <div class="col-9 my-3">
                    <input class="form-control w-50 d-inline bg-warning" type="password" name="password" id="pass"> 
                    <i class="fas fa-eye text-primary" id="show"></i>
                </div>
                <div class="col-1"></div>
                <div class="col-12 my-3">
                    <button type="submit" name="login" class="fw-bold btn btn-warning text-light rounded-pill my-3">Login</button>
                </div>
            </div>
           
            
          
            
        </form>

        <div class="text-warning pt-5 mt-5">
            <?php include 'assets/includes/footer.php'; ?>
        </div>
    </section>  
</body>

</html>




