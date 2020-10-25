<?php
    require_once '../models/connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Name= mysqli_real_escape_string($Conn, htmlspecialchars($_POST['Name']));
    $sub= "Message from $Name";
    $mail= mysqli_real_escape_string($Conn, $_POST['email']);
    $msg= mysqli_real_escape_string($Conn, $_POST['Message']);

    $To= "yassinemakhlouk49@gmail.com";
    $headers= "From: ".$mail.'\r\n';
    $txt= "you have recived an email $Name"."\n\n"."$msg";


    mail($To, $sub, $msg, $headers);
    header("Location: ../index.php");
    // echo $mail.$Name.$msg;
}
?>
