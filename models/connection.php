<?php
    // Creat connection
    $Conn = mysqli_connect('localhost', 'root', '','portfolio');

    // Check the connection with the Database
    if (mysqli_connect_error()) {
        // Connection failed
        echo 'failed to connect'.mysqli_connect_error();
    }
    // else {
    //     // successfuly connected
    //     echo 'Connected';
    // }
?>