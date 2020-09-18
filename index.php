<?php require_once 'models/connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shotcut icon" type="image/x-icon" href="img/logo.png"  height="0" width="100">
    <script src="https://kit.fontawesome.com/03aea6aaf2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>
</head>
<body>

            <!-------------------- POPUP ----------------------->

    <div class="popup">
        <div>
            <form class="log" action="controllers/login.php" method='POST'>
                <label for="mail"><h3>E-mail</h3></label>
                <input type="email" name="email" id="mail">
                <label for="pass"><h3>Password</h3></label>
                <input type="password" name="pass" id="pass">
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="overlay" id="overlay"></div>
    </div>

        <!-------------------- HEADER ----------------------->


    <header>
                <!-------------------- HEADER NAV BAR ----------------------->

        <nav>
            
            <img src="img/logo.png" alt="logo">
           <div class="humberger" id="hum"></div>
            <ul id="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#s2">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            
            <button id="login"><i class="fas fa-user-lock"></i> LOGIN</button>
            
        </nav>

                <!-------------------- HEADER TEXT ----------------------->

        <div class="para">
            <p class="animate__animated animate__fadeInTopLeft">YOU ARE MOST DELIGHTFULLY WELCOME TO MY PORTFOLIO</p>
            <div class="button"><a href="#s1">ABOUT ME!</a></div>
            </div>
    </header>


    <!---------------------------------------- MAIN SECTION---------------------------------------------->

    <main>

        <!-------------------- SECTION1 ----------------------->
        <section id='s1' class="aboutme">

            <!-------------------- ABOUT ME ----------------------->


            <div class="ME">
                <h1>WHO I'M I ?</h1>
                <p data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="10"
                    data-aos-duration="700"
                    data-aos-easing="ease-in-out"
                    data-aos-mirror="true"
                    data-aos-once="false"
                    data-aos-anchor-placement="top-center"
                >I'm a moroccan front-end developer, who's  Always looking for an Opportunity to code, design and  
                    learn new things.<br>
                    Before becoming a developer i used to study Logistics exploitation where i learned a lot  about how 
                    to control whatever you do and make it flow's smoothly and that was very helpful specialy that 
                    every time in Youcode you work with a team.
                    Beside that i like to play football  and watch series, anime and movies plus some times i play some 
                    games
                    
                    </p>
                    <img data-aos="slide-left" src="img/undraw_reviewed_docs_neeb.svg" alt="vector">
            </div>

            <!-------------------- MY SKILLS ----------------------->


            <div class="skills">
                <h2>MY SKILLS</h2>
                <div class="skills__img">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="70" src="img/html.svg" alt="">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="400" src="img/css.svg" alt="">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="700" src="img/javascript-1.jpg" alt="">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="1000" src="img/sass.svg" alt="">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="1300" src="img/Php.png" alt="">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="1600" src="img/Octocat.jpg" alt="">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="1900" src="img/git_icon_130933.svg" alt="">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="2200" src="img/vscode.svg.png" alt="">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="2500" src="img/PS.png" alt="">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="2800" src="img/XD.svg.png" alt="">
                    <img data-aos="fade-up" data-aos-offset="200" data-aos-delay="3000" src="img/trello.png" alt="">
                </div>
            </div>
        </section>


        <!-------------------- SECTION2 ----------------------->


        <section id='s2' class="projects">
                    <!-------------------- my projects ----------------------->

            <h1>MY PROJECTS</h1>

            <div class="projects__list">
                <div class="projects__one">
                    
                    <div class="projects__one--image">
                        <!-- <img src="../img/smartmockups_ka2q7c93.png" alt=""> -->
                        <?php
                            $sql = "SELECT * FROM `projects` WHERE `id`='1'";
                            $sth = $Conn->query($sql);
                            $result=mysqli_fetch_array($sth);
                            echo '<img src="data:img/jpeg;base64,'.base64_encode( $result['Picture'] ).'"/>';
                            ?>
                    </div>
                    <h2 class="projects__one--title" data-aos="slide-right" data-aos-offset="200" data-aos-delay="100" ><?php
                            echo $result['Title']
                            ?>
                            </h2>

                    <div data-aos="fade-down" data-aos-offset="200" data-aos-delay="700" class="projects__one--content projects__one--content1">
                        <h3 classe="projects__one--title2"><?php echo $result['Title'];?></h3>
                        <p><?php echo $result['Discription'];?></p>
                        <div class="projects__one--buttons">
                            <a href="<?php echo $result['Github_link'];?>">GitHub repo</a>
                            <a href="<?php echo $result['Review_link'];?>" class="review"><h4>Quick review</h4></a>
                        </div>

                    </div>
                </div>

            
                <div class="projects__two">
                    
                    <div class="projects__one--image">
                        <!-- <img src="../img/smartmockHyperNova.png" alt=""> -->
                        <?php
                            $sql = "SELECT * FROM `projects` WHERE `id`='2'";
                            $sth = $Conn->query($sql);
                            $result=mysqli_fetch_array($sth);
                            echo '<img src="data:img/jpeg;base64,'.base64_encode( $result['Picture'] ).'"/>';
                            ?>
                    </div>
                    <h2 data-aos="slide-right" data-aos-offset="200" data-aos-delay="100" class="projects__two--title2"><?php echo $result['Title'];?></h2>

                    <div data-aos="fade-down" data-aos-offset="200" data-aos-delay="700" class="projects__two--content2">
                        <h3 classe="projects__one--title2"><?php echo $result['Title'];?></h3>
                        <p><?php echo $result['Discription'];?></p>
                        <div class="projects__two--buttons2">
                            <a href="<?php echo $result['Github_link'];?>">GitHub repo</a>
                            <a href="<?php echo $result['Review_link'];?>" class="review"><h4>Quick review</h4></a>
                        </div>

                    </div>
                </div>

            
                <div class="projects__three">
                    
                    <div class="projects__one--image">
                        <!-- <img src="../img/smartmockchallenge4.png" alt=""> -->
                        <?php
                            $sql = "SELECT * FROM `projects` WHERE `id`='3'";
                            $sth = $Conn->query($sql);
                            $result=mysqli_fetch_array($sth);
                            echo '<img src="data:img/jpeg;base64,'.base64_encode( $result['Picture'] ).'"/>';
                            ?>
                    </div>
                    <h2 data-aos="slide-right" data-aos-offset="200" data-aos-delay="100" class="projects__three--title3"><?php echo $result['Title'];?></h2>

                    <div data-aos="fade-down" data-aos-offset="200" data-aos-delay="700" class="projects__three--content3">
                        <h3 classe="projects__one--title2"><?php echo $result['Title'];?></h3>
                        <p><?php echo $result['Discription'];?></p>
                        <div class="projects__three--buttons2">
                            <a href="<?php echo $result['Github_link'];?>">GitHub repo</a>
                            <a href="<?php echo $result['Review_link'];?>" class="review"><h4>Quick review</h4></a>
                        </div>

                    </div>
                </div>

            
                <div class="projects__four">
                    
                    <div class="projects__one--image">
                        <!-- <img src="../img/smartmockchallenge5.png" alt=""> -->
                        <?php
                            $sql = "SELECT * FROM `projects` WHERE `id`='4'";
                            $sth = $Conn->query($sql);
                            $result=mysqli_fetch_array($sth);
                            echo '<img src="data:img/jpeg;base64,'.base64_encode( $result['Picture'] ).'"/>';
                            ?>
                    </div>
                    <h2 data-aos="slide-right" data-aos-offset="200" data-aos-delay="100" class="projects__four--title4"><?php echo $result['Title'];?></h2>

                    <div data-aos="fade-down" data-aos-offset="200" data-aos-delay="700" class="projects__four--content4">
                        <h3 classe="projects__one--title4"><?php echo $result['Title'];?></h3>
                        <p><?php echo $result['Discription'];?></p>
                        <div class="projects__four--buttons2">
                            <a href="<?php echo $result['Github_link'];?>">GitHub repo</a>
                            <a href="<?php echo $result['Review_link'];?>" class="review"><h4>Quick review</h4></a>
                        </div>

                    </div>
                </div>

            
                <div class="projects__five">
                    
                    <div class="projects__five--image">
                        <!-- <img src="../img/smartmockC2N3.png" alt=""> -->
                        <?php
                            $sql = "SELECT * FROM `projects` WHERE `id`='5'";
                            $sth = $Conn->query($sql);
                            $result=mysqli_fetch_array($sth);
                            echo '<img src="data:img/jpeg;base64,'.base64_encode( $result['Picture'] ).'"/>';
                            ?>
                    </div>
                    <h2 data-aos="slide-right" data-aos-offset="200" data-aos-delay="100" class="projects__five--title5"><?php echo $result['Title'];?></h2>

                    <div data-aos="fade-down" data-aos-offset="200" data-aos-delay="700" class="projects__five--content5">
                        <h3 classe="projects__one--title"><?php echo $result['Title'];?></h3>
                        <p><?php echo $result['Discription'];?></p>
                        <div class="projects__five--buttons2">
                            <a href="<?php echo $result['Github_link'];?>">GitHub repo</a>
                            <a href="<?php echo $result['Review_link'];?>" class="review"><h4>Quick review</h4></a>
                        </div>

                    </div>
                </div>

            
            </div>


        </section>


    </main>



        <!---------------------------------------- FOOTER---------------------------------------------->


    <footer  id='contact'>

                <!-------------------- FOOTER SECTION1 ----------------------->
        <h1>CONTACT</h1>
        <section class="contact">
            <div class="social">
                <div class="soc"><img src="img/Gmail_29991.png" alt=""><a href='mailto:yassinemakhlouk49@gmail.com'>yassinemakhlouk49@gmail.com</a></div>
                <div class="soc"><img src="img/phone-symbol-of-an-auricular-inside-a-circle_icon-icons.com_56478.svg" alt="">+212695518892</div>
                <div class="soc"><img src="img/fb_icon-icons.com_66689.png" alt="">Yà Cine</div>
                <div class="soc"><img src="img/linkedin_icon-icons.com_53609.png" alt=""><a href="https://www.linkedin.com/in/yassine-makhlouk-57359b1a1">Yassine MAKHLOUK</a></div>
            </div>
            <div class="inputs">
                <form action="controllers/Contact.php" method="post">
                    <input type="text" name="Name" id="name" placeholder="Name">
                    <input type="email" name="email" id="email" placeholder="e-mail">
                    <textarea type="text" name="Message" id="message" placeholder="Message"></textarea>
                    <button type="submit">SEND</button>
                </form>
            </div>

        </section>
            <!-------------------- FOOTER NAV BAR ----------------------->

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#s1">About me</a></li>
                <li><a href="#s2">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

    </footer>



        <!---------------------------------------- SCRIPT---------------------------------------------->

    <script src="javascript/LoginPopp.js"></script>
    <script src="javascript/Menu.js"></script>
    <script src="javascript/Animation.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>
</html>