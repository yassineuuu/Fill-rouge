<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shotcut icon" type="image/x-icon" href="img/logo.png"  height="0" width="100">
    <script src="https://kit.fontawesome.com/03aea6aaf2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

        <!-------------------- HEADER ----------------------->


    <header>
                <!-------------------- HEADER NAV BAR ----------------------->

        <nav>
            
            <img src="img/logo.png" alt="logo">
           
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#s2">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            
            <button id="login"><i class="fas fa-user-lock"></i> Se Connecter</button>
            
        </nav>

                <!-------------------- HEADER TEXT ----------------------->

        <div class="para">
            <p>YOU ARE MOST DELIGHTFULLY WELCOME TO MY PORTFOLIO</p>
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
                <p>I'm a moroccan front-end developer, who's  Always looking for an Opportunity to code, design and  
                    learn new things.
                    Before becoming a developer i used to study Logistics exploitation where i learned a lot  about how 
                    to control whatever you do and make it flow's smoothly and that was very helpful specialy that 
                    every time in Youcode you work with a team.
                    Beside that i like to play football  and watch series, anime and movies plus some times i play some 
                    games
                    
                    </p>
                    <img src="img/undraw_reviewed_docs_neeb.svg" alt="vector">
            </div>

            <!-------------------- MY SKILLS ----------------------->


            <div class="skills">
                <h2>MY SKILLS</h2>
                <div class="skills__img">
                    <img src="img/html.svg" alt="">
                    <img src="img/css.svg" alt="">
                    <img src="img/javascript-1.jpg" alt="">
                    <img src="img/sass.svg" alt="">
                    <img src="img/Php.png" alt="">
                    <img src="img/Octocat.jpg" alt="">
                    <img src="img/git_icon_130933.svg" alt="">
                    <img src="img/vscode.svg.png" alt="">
                    <img src="img/PS.png" alt="">
                    <img src="img/XD.svg.png" alt="">
                    <img src="img/trello.png" alt="">
                </div>
            </div>
        </section>


        <!-------------------- SECTION2 ----------------------->


        <section id='s2' class="projects">
                    <!-------------------- my projects ----------------------->

            <h1>MY PROJECTS</h1>

            <span class="left-arrow" id="left"><img src="img/élément-24.jpg" alt=""></span>
                <div class="projects__list">
                <div>
                    <img src="img/corona -hero.png" alt="">
                    <div class="repo"><img src="img/25231.svg" alt="">
                    <h4>GitHub repo</h4>
                    </div>
                    <div class="review"><h4>Quick review</h4></div>
                </div>

            <!-- <div>
                <img src="img/smartmockHyperNova.png" alt="">
                <div class="repo"><img src="img/25231.svg" alt="">
                    <h4>GitHub repo</h4>
                </div>
                
                <div class="review"><h4>Quick review</h4></div>
            </div>

            <div>
                <img src="img/smartmockchallenge5.png" alt="">
                <div class="repo"><img src="img/25231.svg" alt="">
                    <h4>GitHub repo</h4>
                </div>

                <div class="review"><h4>Quick review</h4></div>
            </div>

            <div>
                <img src="img/smartmockchallenge4.png" alt="">
                <div class="repo"><img src="img/25231.svg" alt="">
                    <h4>GitHub repo</h4>
                </div>

                <div class="review"><h4>Quick review</h4></div>
            </div>

            <div>
                <img src="img/smartmockC2N3.png" alt="">
                <div class="repo"><img src="img/25231.svg" alt="">
                    <h4>GitHub repo</h4>
                </div>

                <div class="review"><h4>Quick review</h4></div>
            </div> -->
            </div>
            <span class="right-arrow" id="right"><img src="img/32213.jpg" alt=""></span>


        </section>


    </main>



        <!---------------------------------------- FOOTER---------------------------------------------->


    <footer  id='contact'>

                <!-------------------- FOOTER SECTION1 ----------------------->
        <h1>CONTACT</h1>
        <section class="contact">
            <div class="social">
                <div><img src="img/Gmail_29991.png" alt=""><a href='mailto:yassinemakhlouk49@gmail.com'>yassinemakhlouk49@gmail.com</a></div>
                <div><img src="img/phone-symbol-of-an-auricular-inside-a-circle_icon-icons.com_56478.svg" alt="">+212695518892</div>
                <div><img src="img/fb_icon-icons.com_66689.png" alt="">Yà Cine</div>
                <div><img src="img/linkedin_icon-icons.com_53609.png" alt=""><a href="https://www.linkedin.com/in/yassine-makhlouk-57359b1a1">Yassine MAKHLOUK</a></div>
            </div>
            <div class="inputs">
                <input type="text" name="Name" id="name" placeholder="Name">
                <input type="email" name="email" id="email" placeholder="e-mail">
                <textarea type="text" name="Message" id="message" placeholder="Message"></textarea>
                <button type="submit">SEND</button>
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

    <script src="js/app.js"></script>


</body>
</html>