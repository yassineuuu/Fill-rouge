<?php
    require_once '../models/connection.php';

    // Get id
    $id= mysqli_real_escape_string($Conn, $_GET['id']);
    
   
    // creat SQL query
    $query= "SELECT*FROM projects WHERE id='$id'";
    // get the result of the query
    $result= mysqli_query($Conn, $query);
    // fetch data
    $post= mysqli_fetch_assoc($result);
    // var_dump($posts);
    // free result
    mysqli_free_result($result);
    




    if (isset($_POST['sub'])){
        
   
        $Title=mysqli_real_escape_string($Conn, $_POST['title']);
        $Discription=mysqli_real_escape_string($Conn, $_POST['discription']);
        $update_id=mysqli_real_escape_string($Conn, $_POST['id']);
        $image=mysqli_real_escape_string($Conn, file_get_contents($_FILES['image']['tmp_name']));
        $Github=mysqli_real_escape_string($Conn, $_POST['repo']);
        $Review=mysqli_real_escape_string($Conn, $_POST['review']);

        
        $query="UPDATE `projects` SET `Title`='$Title',`Picture`='$image', `Discription`='$Discription', `Github_link`='$Github', `Review_link`='$Review' WHERE id={$update_id}";
        
        if(mysqli_query($Conn, $query)){
        header('location: '.'http://localhost/portfolio/views/admin.php');
        // echo "$image";
        }else{
        echo "Failed to update" . mysqli_error($Conn);
        }
        
        }


?>