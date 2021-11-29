<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap_css/bootstrap.min.css">
    <title>Safety-Net Login Page</title>

    <style>
        header, button, footer, input {
            background-color: rgb(255, 145, 0) !important;
        }
        label {
            color: rgb(255, 145, 0) ;
            font-weight: bold;
        }
        section {
            height: 535px;
            background-image: url(assets/img/bg-1.jpg);
            background-size: cover;      
        } 
        img {
            margin-left: 30px;
        }
        @media (max-width: 650px) {
            button {
                width: 80px !important;
            }
        }
    </style>
</head>
<body>
    <header style="height: 60px;" class="d-flex align-items-center">
        <img width="50" height="50" src="assets/img/logo.png" alt="logo">
        <h1 class="text-light fs-5">Safety-Net</h1>
    </header>

    <section>
        <form style="padding-top: 130px;" class="d-block mx-3" action="" method="post">
            <label for="email">Email:</label>
            <input style="margin-left: 54px;" class="form-control w-25 d-inline border-0" type="text" name="name"> <br>
            <label for="password" name="password">Password:</label>
            <input class="ml-5 form-control w-25 d-inline mx-4 mt-3 border-0" type="password"> <br><br>
            <button style="width: 120px; margin-left: 105px;" class=" btn text-light rounded-pill my-3">Login</button>
        </form>
    </section>  
</body>

<footer style="height: 100px" class="d-flex">
    <img class="my-2" width="80" height="80" src="assets/img/logo.png" alt="logo">
    <p class="text-light mx-auto d-block my-5">Copyright &copy; 2021 Safety-Net</p>
</footer>
</html>