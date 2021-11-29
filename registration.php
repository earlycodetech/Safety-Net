<?php include 'assets/includes/sessions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safety Net</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawsome/css/all.css">
</head>
<body>
  <?php include 'assets/includes/main-nav.php'; ?>
    <div class="container">

      <?php echo errorMessage();
        
        ?>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <form action="assets/controls/reg_control.php" method="POST" class="mt-4 p-3">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-warning fs-6 py-2 fw-bolder">First Name:</label>
                        <div class="col-sm-9">
                          <input type="text" name="fname" class="form-control bg-warning mb-3 px-3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-warning fs-6 py-2 fw-bolder">Last Name:</label>
                        <div class="col-sm-9">
                          <input type="text" name="lname" class="form-control bg-warning mb-3 px-3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-warning fs-6 py-2 fw-bolder">Other Name:</label>
                        <div class="col-sm-9">
                          <input type="text" name="oname" class="form-control bg-warning mb-3 px-3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-warning fs-6 py-2 fw-bolder">Email:</label>
                        <div class="col-sm-9">
                          <input type="email" name="email" class="form-control bg-warning mb-3 px-3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-warning fs-6 py-2 fw-bolder">Date Of Birth:</label>
                        <div class="col-sm-9">
                          <input type="date" name="dob" class="form-control bg-warning mb-3 px-3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-warning fs-6 py-2 fw-bolder">State Of Origin:</label>
                        <div class="col-sm-9">
                          <input type="text" name="state" class="form-control bg-warning mb-3 px-3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-warning fs-6 py-2 fw-bolder">Phone Number:</label>
                        <div class="col-sm-9">
                          <input type="text" name="phone" class="form-control bg-warning mb-3 px-3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-warning fs-6 py-2 fw-bolder">Password:</label>
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="col-11">
                              <input type="password" name="pass" class="form-control bg-warning mb-3 px-3" id="pass">
                            </div>
                            <div class="col-1">
                                <i class="fas fa-eye text-primary" id="show"></i>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-warning fs-6 py-2 fw-bolder">Comfirm Password:</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-11">
                                  <input type="password" name="conpass" class="form-control bg-warning mb-3 px-3" id="pass1">
                                </div>
                                <div class="col-1">
                                    <i class="fas fa-eye text-primary" id="show1"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="signup" class="btn btn-warning ">Sign up</button>
                </form>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <img src="assets/img/logo.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <div class="text-center">
      <?php include 'assets/includes/footer.php'; ?>
    </div>
</body>
</html>