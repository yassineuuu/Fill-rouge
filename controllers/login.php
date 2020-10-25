<?php
    require_once '../models/connection.php';
    session_start();
    $Email=mysqli_real_escape_string($Conn,$_POST['email']);
    $Password=mysqli_real_escape_string($Conn,$_POST['pass']);

    // creat SQL query
    $Query="SELECT * FROM login WHERE Email='$Email' && Password= '$Password'";

    // Get the Query result
    $Result=mysqli_query($Conn, $Query);

    // Check if the data exist
    $Line=mysqli_num_rows($Result);
    
    if ($Line==1) {
        header('location:../views/Admin.php');
    }else{
        echo 'password required';
    }
