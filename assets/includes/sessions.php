<?php
    session_start();

    function errorMessage(){
       if (isset($_SESSION['errormessage'])) {
<<<<<<< HEAD
        $output = "<div class=\"alert alert-danger text-center my-3 alert-dismisable\" role=\"alert\">";
=======
        $output = "<div class=\"alert alert-danger container text-center my-3 alert-dismisable\" role=\"alert\">";
>>>>>>> master
        $output .= htmlentities($_SESSION['errormessage']);
        $output.= "</div>";

        
        $_SESSION['errormessage'] = null;

        return $output;
       }
    }

    function successMessage(){
        if (isset($_SESSION['successmessage'])) {
<<<<<<< HEAD
                    $output = "<div class=\"alert text-center my-3 alert-success alert-dismisable\" role=\"alert\">";
=======
                    $output = "<div class=\"alert text-center container my-3 alert-success alert-dismisable\" role=\"alert\">";
>>>>>>> master
                $output .= htmlentities($_SESSION['successmessage']);
                $output.= "</div>";

                $_SESSION['successmessage'] = null;

                return $output;
            }
        }
<<<<<<< HEAD
=======

    function auth(){
        if (!isset($_SESSION['id'])) {
            header('Location: ../login');
        }
    }
>>>>>>> master
?>
