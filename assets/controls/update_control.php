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

    if (isset($_POST['updateBank'])) {
        $bankName = $_POST['bankName'];
        $acctName = $_POST['accountName'];
        $acctNum = $_POST['accountNumber'];
          $id = $_SESSION['id'];
        $sql = "UPDATE users SET account_name= '$acctName', account_number='$acctNum', bank_name= '$bankName' WHERE id='$id'";
        $query = mysqli_query($connect,$sql);
        if ($query) {
          $_SESSION['successmessage'] = 'Update Successfull';
          header('Location: ../../users/update');
        }else{
          $_SESSION['errormessage'] = 'Something went wrong';
          header('Location: ../../users/update');
        }
    }else{
     header('Location: ../../users/update');  
    }
    if (isset($_GET['del'])) {
     $del = $_GET['del'];

     $sql = "DELETE FROM users WHERE id = '$del'";
     $query = mysqli_query($connect,$sql);
     if ($query) {
         $_SESSION['successmessage'] = 'User Records Deleted Successfully';
         header('Location: ../../users/dashboard');
     }
  }