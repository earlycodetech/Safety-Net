<?php 

    // if (isset($_POST['send'])) {
    //     $email = $_POST['email'];
    //     $subject = $_POST['subject'];
    //     $message = $_POST['message'];

    //     $to = $email;
    //     $message = wordwrap($message, 40,"r\n");
    //     $headers = "From: support@saftyNet.com";
    //     $execute =   mail($to,$subject,$message,$headers);

    //     if ($execute) {
    //        echo "Mail Sent successfully";
    //     }else{
    //         echo 'Error sending mail';
    //     }
    // }

    if (isset($_POST['send'])) {
        $email = $_POST['email'];
        $subject = $_POST['subject'];

        $to = $email;
        $message = "
        <div style=\"border: 1px solid #000000; padding: 50px; text-align: center; background-color: #EDD2F3;\">
            <h1 style=\"font-weight: bold; font-size: 50px; padding-bottom: 20px;\">Welcome to Safety Net</h1>


            <a href=\"https://www.facebook.com\" style=\" padding: 10px; border-radius: 15px; margin-bottom: 20px; text-decoration: none; background-color: #F9C5D5; color:#ffffff;\">Click Me</a>
        </div>
        
        ";
        $headers = "From: support@saftyNet.com";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset= ISO-8859-1\r\n";
        $execute =   mail($to,$subject,$message,$headers);

        if ($execute) {
           echo "Mail Sent successfully";
        }else{
            echo 'Error sending mail';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
</head>
<body>
    <form method="POST" class="container mt-5 mx-auto">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control">

        <label for="">Subject</label>
        <input type="text" name="subject" class="form-control">

        <label for="">Messsage</label>
        <textarea name="message" class="form-control"></textarea>

        <button type="submit" name="send" class="btn btn-primary mt-5">Send</button>
    </form>


</body>
</html>