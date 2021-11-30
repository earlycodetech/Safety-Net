<?php
    include '../includes/db_con.php';
    include '../includes/sessions.php';


    if (!isset($_POST['login'])) {
        $_SESSION['errormessage'] = 'Please log in';
        header('Location:../../login');
    }
    else{
        // get data from user

        $email = $_POST['email'];
        $password = $_POST['password'];

         /*
            For Select :
                Init
                prepare
                execute
                get_result
                fetch_assoc
        */
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($connect);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,'s',$email);
        $execute = mysqli_stmt_execute($stmt);

        if (!$execute) {
            $_SESSION['errormessage'] = 'Something went wrong';
            header('Location:../../login');
        }else{
            // get result from database
            $result = mysqli_stmt_get_result($stmt);

           
            if ($row = mysqli_fetch_assoc($result)) {
                $password_returned = $row['password'];//this is the encrypted password

                if (password_verify($password,$password_returned)) {//check if passwords match

                    $_SESSION['id'] = $row['id']; //collect the unique id of the user
                    $_SESSION['successmessage'] = 'Welcome '.$row['first_name'].' !';
                    header('Location:../../users/dashboard');
                }else{
                    $_SESSION['errormessage'] = 'Incorrect Password';
                    header('Location:../../login');
                }
                
            }
        }
    }