 <?php   
    include '../includes/db_con.php';
    include '../includes/sessions.php';

    if (!isset($_POST['upload'])) {
        header('Location: ../../users/update');
    }
    else{
        $id = $_SESSION['id'];
        $file = $_FILES['img'];

        print_r($file);

        // Get date from the file asssociative array
       $filename = $file['name'];
     echo  $fileTemName = $file['tmp_name'];
       $fileError = $file['error'];
       $fileSize = $file['size'];

       $fileActualName = explode('.',$filename);
       $fileExt = strtolower(end($fileActualName));
       
        $allowed = array('jpeg','png','jpg');

        //checks if extensions exists
        if (in_array($fileExt,$allowed)) {
                //if error durring upload
            if ($fileError === 0 ) {
               
                // if size is adequate
                if ($fileSize < 1000000) {
                    

                    //create a unique name for files
                    $fileNewName = 'profile'.$id.".".$fileExt;
                    // move file
                    $destination = '../../assets/img/profpic/';
                    $move =  move_uploaded_file($fileTemName,$destination.$fileNewName);
                    if ($move) {
                        $sql = "UPDATE users SET prof_pic= '$fileNewName' WHERE id='$id'";
                        mysqli_query($connect,$sql);
                        if (file_exists($fileNewName)) {
                            unlink($fileNewName);
                             $_SESSION['successmessage'] = 'Profile Picture Changed Successfully';
                                header('Location: ../../users/update');
                        }else {
                            $_SESSION['successmessage'] = 'Profile Picture Changed Successfully';
                            header('Location: ../../users/update');
                        }
                    }else{
                        $_SESSION['errormessage'] = 'Something went wrong';
                       // header('Location: ../../users/update');
                    }
                }else{
                    $_SESSION['errormessage'] = 'file is too large, please upload files lesser than 1mb';
                    header('Location: ../../users/update');
                }
            }else{
                $_SESSION['errormessage'] = 'There was a problem uploading your file';
                header('Location: ../../users/update');
            }

        }else{
            $_SESSION['errormessage'] = 'Please upload file that are jpeg, jpg, or png';
            header('Location: ../../users/update');
        }
    }