<?php
    include '../includes/db_con.php';
    include '../includes/sessions.php';

    if (!isset($_POST['update'])) {
        header('Location: ../../users/update');
    }else{
       echo $id = $_SESSION['id'];

        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $othername = $_POST['oname'];
        $state = $_POST['state'];
        $phone = $_POST['phone'];

        if (!empty($firstname)) {
           $sql = "UPDATE users SET first_name= '$firstname' WHERE id = '$id'";
           $execute = mysqli_query($connect,$sql);
           if ($execute) {
                $_SESSION['successmessage'] = 'Update Successfull';
                header('Location: ../../users/update');
           }else{
                $_SESSION['errormessage'] = 'Something went wrong';
                header('Location: ../../users/update');
           }
        }
        if (!empty($lastname)) {
            $sql = "UPDATE users SET last_name= '$lastname' WHERE id = '$id'";
            $execute = mysqli_query($connect,$sql);
            if ($execute) {
                 $_SESSION['successmessage'] = 'Update Successfull';
                 header('Location: ../../users/update');
            }else{
                 $_SESSION['errormessage'] = 'Something went wrong';
                 header('Location: ../../users/update');
            }
         }
         if (!empty($othername)) {
            $sql = "UPDATE users SET other_name= '$othername' WHERE id = '$id'";
            $execute = mysqli_query($connect,$sql);
            if ($execute) {
                 $_SESSION['successmessage'] = 'Update Successfull';
                 header('Location: ../../users/update');
            }else{
                 $_SESSION['errormessage'] = 'Something went wrong';
                 header('Location: ../../users/update');
            }
         }
         if (!empty($phone)) {
            $sql = "UPDATE users SET phone= '$phone' WHERE id = '$id'";
            $execute = mysqli_query($connect,$sql);
            if ($execute) {
                 $_SESSION['successmessage'] = 'Update Successfull';
                 header('Location: ../../users/update');
            }else{
                 $_SESSION['errormessage'] = 'Something went wrong';
                 header('Location: ../../users/update');
            }
         }
         if (!empty($state)) {
            $sql = "UPDATE users SET states= '$state' WHERE id = '$id'";
            $execute = mysqli_query($connect,$sql);
            if ($execute) {
                 $_SESSION['successmessage'] = 'Update Successfull';
                 header('Location: ../../users/update');
            }else{
                 $_SESSION['errormessage'] = 'Something went wrong';
                 header('Location: ../../users/update');
            }
         }
    }