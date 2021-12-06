<?php
    include '../includes/db_con.php';
    include '../includes/sessions.php';

    //set time zone
    date_default_timezone_set('Africa/Lagos');
    
    // local date
    

    if (!isset($_POST['signup'])) {
        $_SESSION['errormessage'] = 'Please Register here...';
        header('Location: ../../registration');
    }
    else{
        // collect all data
       $usersid = 'SN'.rand(0,1000000);
       $firstname = $_POST['fname'];
       $lastname = $_POST['lname'];
       $othername = $_POST['oname'];
       $email = $_POST['email'];
       $dob = $_POST['dob'];
       $state = $_POST['state'];
       $phone = $_POST['phone'];
       $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
       $date = date('Y-m-d');
       

        // check if password and confirm password are the same
        $sql ="SELECT * FROM users WHERE email= '$email'";
        $query = mysqli_query($connect,$sql);
        $row = mysqli_num_rows($query);
            
        if ($row > 0) {
            $_SESSION['errormessage'] = 'This email already exists!';
            header('Location: ../../registration');
        }
       elseif ($_POST['pass'] != $_POST['conpass']) {
            $_SESSION['errormessage'] = 'Passwords do not match';
            header('Location: ../../registration');
       }
       elseif (strlen($_POST['pass']) < 8) {
            $_SESSION['errormessage'] = 'Passwords must be 8 characters or more';
            header('Location: ../../registration');
       }
       else{
            /*Inserting to the database */

            $sql = "INSERT INTO users(users_id,first_name,last_name,other_name,email,dob,states,phone,password,date_created) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($connect);
            mysqli_stmt_prepare($stmt,$sql);
            mysqli_stmt_bind_param($stmt,'ssssssssss',$usersid,$firstname,$lastname,$othername,$email,$dob,$state,$phone,$password,$date);
            $execute = mysqli_stmt_execute($stmt);

            if ($execute) {
                $_SESSION['successmessage'] = 'Signup successfull please log in';
                header('Location: ../../login');
            }
            else{
                $_SESSION['errormessage'] = 'Something went wrong';
                header('Location: ../../registration');
            }
       }
    }
    