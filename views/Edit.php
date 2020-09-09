<?php require_once '../models/connection.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Edit.css?v=<?php echo time(); ?>">
    <link rel="shotcut icon" type="image/x-icon" href="../img/logo.png"  height="0" width="100">
    <title>Document</title>
</head>
<body>
    <header>
                    <!-------------------- HEADER NAV BAR ----------------------->

            <nav>
                
                    <?php
                $sql = "SELECT * FROM `login` WHERE `Email`='yassinemakhlouk49@gmail.com'";
                $sth = $Conn->query($sql);
                $result=mysqli_fetch_array($sth);
                echo '<img id="img" src="data:img/jpeg;base64,'.base64_encode( $result['img'] ).'"/>';
                ?>
                <!-- <img src="../img/logo.png" alt="logo"> -->
            <div class="humberger" id="hum"></div>
                <ul id="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#s2">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                
                <button onclick="window.location.href='../controllers/logout.php'">Logout</button>            
            </nav>

                    <!-------------------- HEADER FORM ----------------------->

            <form enctype="multipart/form-data" action="../controllers/update.php" method="POST">
            <?php require_once '../controllers/update.php'?>
                <label for="id">Project ID: <?php echo $post['id']?></label><br><br><br>
                <input type="hidden" name="id" id="" value="<?php echo $post['id']?>"><br>
                <label for="title">Project Name</label>
                <input type="text" name="title" id="" value="<?php echo $post['Title']?>"><br>
                <label for="discription">Project Discription</label>
                <textarea name="discription" id="" cols="30" rows="10"><?php echo $post['Discription']?></textarea><br>
                <label for="image">Image</label>
                <input type="file" accept="image/*" name="image" id="pic"><br>
                <label for="repo">Github Link</label>
                <input type="url" name="repo" id="" value="<?php echo $post['Github_link']?>"><br>
                <label for="url">Review Link</label>
                <input type="url" name="review" id="" value="<?php echo $post['Review_link']?>"><br>
                <input type="submit" name='sub' value="Submits">

            </form>
        </header>

            <!---------------------------------------- SCRIPT---------------------------------------------->

            <script src="../javascript/LoginPopp.js"></script>
            <script src="../javascript/Menu.js"></script>

</body>
</html>