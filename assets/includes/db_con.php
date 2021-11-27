<?php
    // server name
    $server = 'localhost';

    // username
    $user = 'root';

    // password
    $password = '';

    // databas name
    $database = 'safety-net';

    $connect = mysqli_connect($server,$user,$password,$database);
    if (!$connect) {
        die('Connection was not successfull'.mysqli_connect_error());
    }
