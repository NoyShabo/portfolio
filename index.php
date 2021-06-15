<?php
 //create a mySQL DB connection:
 $dbhost = "182.50.133.173";
 $dbuser = "studDB21a";
 $dbpass = "stud21DB1!";
 $dbname = "studDB21a";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

 // testing connection success
 if(mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
    }
?>
<?php
 $query = "SELECT *
 FROM  portfolio_noyshabo";

 $result = mysqli_query($connection, $query);
 if(!$result) {
    die("DB query failed.");
 }
?>

<?php
 $queryPopUp = "SELECT *
 FROM  portfolio_noyshabo";

 $resultPopUp = mysqli_query($connection, $query);
 if(!$resultPopUp) {
    die("DB query failed.");
 }
?>





<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noy Shabo</title>

    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">NOY<span>Shabo</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">My Work</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="row">
                <div class="home-content">
                    <div class="text-1">Hello, my name is</div>
                    <div class="text-2">Noy Shabo</div>
                    <div class="text-3">And I'm a <span class="typing"></span></div>
                    <a href="#">Hire me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/me.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">My name is Noy Shabo and I'm a <span class="typing-2"></span></div>
                    <p>software engineering student at Shenkar college of engineering and design, GPA 97.6. She-code alumni and ex-member of the first Google DSC program operating in Israel.</p>
                    <a href="Noy_Shabo_resume.pdf" target="_blank">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">About Me</h2>
            <!-- <h2 class="title">My services</h2> -->
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Web Developer</div>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p> -->
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Outstanding student</div>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p> -->
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Creative, Open-Minded</div>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                   <span>&diamondsuit;</span><span class="myExperiencesdots">Member of the first Google Developer Student Club in Israel, with the goal of providing products
                                        for non-profit organizations and equip students with a large variety of technological skills.
                                        </span>
                                        <br>
                    <span>&diamondsuit;</span><span class="myExperiencesdots">Attended lectures by google experts on best practices and current/emerging technology trends. </span>
                        <br>
                    <span>&diamondsuit;</span><span class="myExperiencesdots">My group and I created Coronabot. An autonomous driven robot that can measure temperature
                                        and heart rate, the robot is capable of identifying patients, approach them and avoid obstacles
                                        while doing so. My role in this project consisted...<br>
                        </span>
                    <a  href="Noy_Shabo_resume.pdf" target="_blank">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>95%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>85%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>70%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>85%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>90%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Work</h2>
         


            <div id="page-top mainmain">
                <!-- Navigation-->

                <!-- Portfolio Grid-->

                <section class="page-section bg-light" id="portfolio">
                    <div class="container">
                        <div class="text-center"></div>


                        <div class="row">
                            <?php
                                while($row = mysqli_fetch_assoc($result)) { //results are in associative array. keys are cols names
                                        $project_id = $row["project_id"];
                                        $project_name = $row["project_name"];
                                        $project_description = $row["project_description"];
                                        $programming_language = $row["programming_language"];
                                        $github = $row["github"];
                                        $project_pic = $row["project_pic"];

                                echo       '<div class="col-lg-4 col-sm-6 mb-4">';
                                echo            '<div class="portfolio-item">';
                                echo                        '<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal'.$project_id.'">';
                                echo                            '<div class="portfolio-hover">';
                                echo                                '<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>';
                                echo                            '</div>';
                                echo                            '<img class="img-fluid" src="'.$project_pic.'" alt="'.$project_name.'" />';
                                echo                        '</a>';
                                echo                         '<div class="portfolio-caption">';
                                echo                             '<div class="portfolio-caption-heading">'.$project_name.'</div>';
                                echo                             '<div class="portfolio-caption-subheading text-muted">'.$programming_language.'</div>';
                                echo                         '</div>';
                                echo            '</div>';
                                echo        '</div>';

                                }

                            ?>

                        </div>
                </div>
                           
                </section>
                <!-- About-->


                <!-- Portfolio Modals-->
                <!-- By click every Item is Open -->

                <?php
                                while($row = mysqli_fetch_assoc($resultPopUp)) { //results are in associative array. keys are cols names
                                        $project_id = $row["project_id"];
                                        $project_name = $row["project_name"];
                                        $project_description = $row["project_description"];
                                        $programming_language = $row["programming_language"];
                                        $github = $row["github"];
                                        $project_pic = $row["project_pic"];
                                        $project_link = $row["project_link"];
                                        echo    '<div class="portfolio-modal modal fade " id="portfolioModal'.$project_id.'" tabindex="-1" role="dialog" aria-hidden="true">';
                                        echo        '<div class="modal-dialog">';
                                        echo            '<div class="modal-content">';
                                        echo                '<div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon2.svg" alt="Close modal" /></div>';
                                        echo                 '<div class="container">';
                                        echo                     '<div class="row justify-content-center">';
                                        echo                         '<div class="col-lg-8">';
                                        echo                            '<div class="modal-body">';
                                                        
                                        echo                                '<h2 class="text-uppercase">'.$project_name.'</h2>';
                                        echo                                '<p class="item-intro text-muted">'.$programming_language.'</p>';
                                        echo                                '<img class="img-fluid d-block mx-auto" src="'.$project_pic.'" alt="'.$project_name.'" />';
                                        echo                                '<p>'.$project_description.'</p>';
                                        echo                                '<ul class="list-inline">';
                                        echo                                    '<li>';
                                        echo                                        '<a href="'.$github.'" target="_blank" class="gitHubPic"></a>';
                                        echo                                    '</li>';
                                                                            if($project_link !="NULL"){
                                                                                echo    '<li>';
                                                                                echo        '<a href="'.$project_link .'" target="_blank" class="toTheCode"></a>';
                                                                                echo    '</li>';         
                                                                            }
                                        echo                                '</ul>';
                                        echo                                '<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">';
                                        echo                            '<i class="fas fa-times me-1"></i>';
                                        echo                           ' Close Project';
                                        echo                        '</button>';
                                        echo                            '</div>';
                                        echo                        '</div>';
                                        echo                    '</div>';
                                        echo                '</div>';
                                        echo            '</div>';
                                        echo        '</div>';
                                        echo    '</div>';

                                }
                    ?>                

    </section>
    </div>


    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Noy Shabo</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Ramat-Gan, Israel</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                               <div class="sub-title">Noysh1234@gmail.com</div>
                            </div>
                        </div>
                      
                        <div class="row">
                        <a href="https://github.com/noyshabo" target="_blank"><i class="fab fa-github"></i></a>
                            <div class="info">
                                <div class="head">Github</div>
                                <div class="sub-title"><a href="https://github.com/noyshabo" target="_blank" >github.com/noyshabo</a></div>
                            </div>
                        </div>

                        <div class="row">
                        <a href="https://linkedin.com/in/noy-shabo" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <div class="info">
                                <div class="head">Linkedin</div>
                                <div class="sub-title"><a href="https://linkedin.com/in/noy-shabo" target="_blank">linkedin.com/in/noy-shabo</a></div>
                            </div>
                        </div>

                        

                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <!-- mailllllllllllllllllllllllllll -->


                    <form class="contact-form" action="https://formsubmit.co/noysh1234@gmail.com" method="POST" target="_blank">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" class="fullname" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" class="email-input" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" class="subject" placeholder="Subject">
                        </div>
                        <div class="field textarea">
                            <textarea class="message" cols="30" rows="10" name="message" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="send">Submit Form</button>
                            <div class="error-box"></div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- footer section start -->
    <footer>
    <span id="iconShenkar"></span><a href="https://www.shenkar.ac.il/he/departments/engineering-software-department" target="_blank" class="text" id="shenkarText">תואר ראשון בהנדסת תוכנה בשנקר</a>
    </footer>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <!-- <script src="js/scripts.js"></script> -->
    <script src="script.js"></script>
</body>

</html>

<?php
 //close DB connection
 mysqli_close($connection);
?>
