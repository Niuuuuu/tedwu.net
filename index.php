
<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Tedwu.net'; 
        $to = 'wuted.cpen@gmail.com'; 
        $subject = 'Message from Tedwu.net ';
        $posted = false;
        $sent = false;
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
            $posted = true;
            $errormsg .= " \\n name  ";
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
            $posted = true;
            $errormsg .= "\\n email  ";
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
            $posted = true;
            $errormsg .= "\\n message  ";
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
            $posted = true;
            $errormsg .= "\\n anti-spam ";
        }
 
// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
            $posted = true;
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
            $sent= true;

        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
            $sent= false;
        }
    }
        }
?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Ted Wu | Welcome !</title>
    <meta name="Protfolio site for Ted Wu" content="">
    <meta name="Ted Wu" content="">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
        <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Font Awesome -->
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scroll-top logo"><b>Ted Wu</b></a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="#home" class="scroll-link">Hello!</a></li>
                        <li><a href="#aboutUs" class="scroll-link">About Me</a></li>
                        <li><a href="#skills" class="scroll-link">Skills</a></li>
                        <li><a href="#experience" class="scroll-link">Experience</a></li>
                        <li><a href="#portfolio" class="scroll-link">Projects</a></li>
                        <li><a href="#contactUs" class="scroll-link">Contact Me</a></li>
                        <li><a href="http://tedwu.net/tedwu.net/Ted_Resume.pdf" target="_blank">Resume</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
    <div id="#top"></div>
    <section id="home">
        <div class="banner-container">
            <img src="images/banner-mac.jpg" alt="banner" />
            <div class="container banner-content">
                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>software developer</h2>
                        <p>I build and deliver softwares</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Front-end/Back-end web developer</h2>
                        <p>I develop website using different javascript frameworks</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Quality Assurance/ Unit Testing</h2>
                        <p>I do QA testing to ensure the project is bug-free</p>
                        <div class="da-img"></div>
                    </div>
                  <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav> 
                </div>
            </div>
        </div>
    </section>
    <section id="introText">
        <div class="container">
            <div class="text-center">
            <h1 style="font-size:40px">Hello, I am Ted Wu</h1>
             <p style="font-size:25px; margin-top:25px;"> I am a <span style="font-size:35px">Software Engineer </span> from Burnaby, BC</p>
            </div>
        </div>

    </section>
    <!--About-->
    <section id="aboutUs" class="secPad">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h1>Who am I?</h1>
                <p>I am a software developer currently pursuing a degree in software engineering at the University of British Columbia. I am always looking forward to learn new software development techniques, and I spend a lot of time doing side projects and improving my port-folio.</p>
                <p>I am a good team player and a quick learner, constantly looking for internship opportunities about software developing/web developing/ QA testing for Spring/Summer 2016, and I am willing to relocate. If you would be interested in hiring me, please email me at ted@tedwu.net or using the form found at the bottom of this site. </p>
            </div>
            <div class="row">
                <!-- item -->
                <div class="col-md-4 text-center tileBox">
                   <div class="txtHead"> <i class="fa fa-user"></i>
                    <h3><span class="id-color">Student</span></h3></div>
                    <p>I am a year 4 students in University of British Columbia, I am majoring in computer Engineering. I have done a lot of projects during my school years, on both one man work and team work.</p>
                </div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-4 text-center tileBox">
                    <div class="txtHead"><i class="fa fa-desktop"></i>
                    <h3><span class="id-color"> Software Developer</span></h3></div>
                    <p>My primary focus is on software developing. I have done a lot of projects such as mobile apps, web apps, desktop softwares during my school years and from my professional experneices.</p>
                </div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-4 text-center tileBox">
                    <div class="txtHead"><i class="fa fa-html5"></i>
                    <h3><span class="id-color">Web Developer</span></h3></div>
                    <p>My secondary focus is on web developing, I have done projects involved on both front-end/back-end web developing, this website is one of my front/back-end project.</p>
                </div>
                <!-- end: -->

            </div>
        </div>
    </section>
    <!--Quote-->
    <section id="quote" class="bg-parlex">
        <div class="parlex-back">
            <div class="container secPad text-center">
                <h2> Stay Hungry, Stay Foolish.</h2><h3>-Steve Jobs </h3>
            </div>
            <!--/.container-->
        </div>
    </section>
    
    <!--Skills-->
    <section id="skills" class="secPad white">
        <div class="container">
        <div class="heading text-center">
                <!-- Heading -->
                <h2>My Skills</h2>
                <p>Here are the skills I have obtained during professional work experiences and countless projects/labs from UBC</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Programming <strong>Skills</strong></h2>
                    <p class="mrgBtm20">
                        It takes knowledge, smart work, and dedication to make great ideas come to life. I have been helping make great ideas happen for the past 4 years and am always ready for new challenges.
                
                    </p>
                    <div class="row">
                        <div class="col-md-2 skilltitle">HTML5</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">CSS/CC3</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">JavaScript</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">jQuery/Ajax</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="row">
                        <div class="col-md-2 skilltitle">Java</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">C++/C</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
            <!--end of programming skills colume-->
                </div>
                <div class="col-sm-6">
                    <h2>Developing <strong>Tools </strong></h2>
                    <p class="mrgBtm20">
                        Problem solving is not always about sitting in a board room talking about the way things should be done. I have a strong background in UI design which allows me to think on my feet and act upon it.
                
                    </p>
                    <div class="row">
                        <div class="col-md-2 skilltitle">Photoshop</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    <span class="sr-only">10% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">Visual Studio</div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 skilltitle">Eclipse </div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
      
                     <div class="row">
                        <div class="col-md-2 skilltitle">NetBean </div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-2 skilltitle">Xcode </div>
                        <div class="col-md-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>        
    </section>
    
    <!--Experience-->
    <section id="experience" class="secPad">
        <div class="container">     
           <div class="heading text-center">
                <!-- Heading -->
                <h2>Professional Experience</h2>
                <p>Here is a brief roadmap of my profesional Experience</p>
            </div>
        <div id="timeline"><div class="row timeline-movement timeline-movement-top">
        <div class="timeline-badge timeline-future-movement">
            <a href="#">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </div>
        <div class="timeline-badge timeline-filter-movement">
            <a href="#">
                <span class="glyphicon glyphicon-time"></span>
            </a>
        </div>
    
    </div>
    <div class="row timeline-movement">
    
        <div class="timeline-badge">
            <span class="timeline-balloon-date-day">June</span>
            <span class="timeline-balloon-date-month">2015</span>
        </div>
    
    
        <div class="col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-11">
                    <div class="timeline-panel credits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">The StreeXB Ent.</span></li>
                            <li><span class="causale"> Junior Web Developer - Intern </span> </li>
                            <li><p><small class="text-muted"> June/2015 - Present</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
    
    </div>
    
    <!--due -->
    
    <div class="row timeline-movement">
    
    
        <div class="timeline-badge">
            <span class="timeline-balloon-date-day">May</span>
            <span class="timeline-balloon-date-month">2014</span>
        </div>
    
        <div class="col-sm-offset-6 col-sm-6  timeline-item">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-11">
                    <div class="timeline-panel debits">
                        <ul class="timeline-panel-ul">
                            <li><span class="importo">MCUmall Electronic.</span></li>
                            <li><span class="causale"> QA Testing  </span> </li>
                            <li><p><small class="text-muted"> 01/Sept/2014 - 01/May/2014</small></p> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
    
    
    
    </div>
   
    </div>
    </div>
    
    </section>
    
  
   <!--Portfolio-->
   <section id="portfolio" class="page-section section appear clearfix secPad">
        <div class="container">

            <div class="heading text-center">
                <!-- Heading -->
                <h2>Portfolio</h2>
                <p>Below are the collections of my projects in my school years and internship experience</p>
            </div>

            <div class="row">
                <nav id="filter" class="col-md-12 text-center">
                    <ul>
                        <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                        <li><a href="#" class="btn-theme btn-small" data-filter=".school">School Projects</a></li>
                        <li><a href="#" class="btn-theme btn-small" data-filter=".work">Work Projects</a></li>
                        <li><a href="#" class="btn-theme btn-small" data-filter=".self">Side Projects</a></li>
                    </ul>
                </nav>
                <div class="col-md-12">
                    <div class="row">
                        <div class="portfolio-items isotopeWrapper clearfix" id="3">



                          <article class="col-sm-4 isotopeItem work">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/streeXB-app.png" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/streeXB-app.png" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                                <h5>KSBI Radio App</h5>
                                                <h6>PhoneGap+html+css+js</h6>
                                                </a>

                                                <a href="https://play.google.com/store/apps/details?id=ca.ksbi.ksbiradio&hl=en" target="_blank"><br><i class="fa fa-external-link"></i> Google Play</a>
                                    
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-sm-4 isotopeItem school">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/tiny-plat.png" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/tiny-plat.png" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                                <h5>Tiny Platformer</h5>
                                                <h6>Javascript webgame </h6>
                                                </a>
                                                <a href="http://niuuuuu.github.io/javascript-tiny-platformer/" target="_blank"><br>Website</a>
                                                <a href="https://github.com/Niuuuuu/javascript-tiny-platformer" target="_blank"><i class="fa fa-external-link"></i> Github Source code</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            


                            <article class="col-sm-4 isotopeItem self">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/universe.png" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/universe-gameplay.png" class="fancybox"> 
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                                <h5>Universe Roaming</h5>
                                                <h6>Java desktop game </h6>
                                               </a>
                                               <a href="https://github.com/Niuuuuu/universeRoaming" target="_blank"><br><i class="fa fa-external-link"></i> Github Source code</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

     
                            <article class="col-sm-4 isotopeItem work">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/iindieartisthub.png" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/iindieartisthub.png" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                                <h5>StreeXB Ent. Official Site</h5>
                                                <h6>Wordpress Site</h6>
                                                </a>

                                                <a href="https://indieartisthub.com" target="_blank"><br><i class="fa fa-external-link"></i> Website</a>

                                        </div>
                                    </div>
                                </div>
                            </article>



      

                         

                            <article class="col-sm-4 isotopeItem school">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/3D-Visualization.gif" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/3D-Visualization.gif" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                                <h5>Telus Data Visualizer</h5>
                                                <h6>Three.js+php</h6>
                                                </a>

                                                <a href="https://github.com/Niuuuuu/3D_Visualization" target="_blank"><br><i class="fa fa-external-link"></i> Github Source code</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

     

                            <article class="col-sm-4 isotopeItem self">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/html calculator.png" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/html calculator.png" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                                <h5>HTML Calculator</h5>
                                                <h6>HTML + Jquery</h6>
                                                </a>
                                                <a href="http://niuuuuu.github.io/html-calculator/" target="_blank"><br>Website</a>
                                                <a href="https://github.com/Niuuuuu/html-calculator" target="_blank"><i class="fa fa-external-link"></i> Github Source code</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                             <article class="col-sm-4 isotopeItem school">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/pacman.png" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/pacman.png" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                                <h5>PacMan</h5>
                                                <h6>Jave desktop game </h6>
                                                </a>

                                                <a href="https://github.com/Niuuuuu/UndoableJpacman" target="_blank"><br><i class="fa fa-external-link"></i> Github Source code</a>
                                        </div>
                                    </div>
                                </div>
                            </article>  

                            <article class="col-sm-4 isotopeItem school">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/libgdx.png" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/libgdx-gameplay.jpeg" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                                <h5>Fruit Catch</h5>
                                                <h6>Andriod mobile game </h6>
                                                </a>

                                                <a href="https://github.com/Niuuuuu/fruitcatch" target="_blank"><br><i class="fa fa-external-link"></i> Github Source code</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                             <article class="col-sm-4 isotopeItem work">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/mcumall.png" alt="" />
                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info">
                                            <a href="images/portfolio/mcumall.png" class="fancybox">
                                                <i class="fa fa-arrows-alt fa-2x"></i>
                                                <h5>USB Programmer</h5>
                                                <h6>QA testing</h6>
                                                </a>

                                                
                                        </div>
                                    </div>
                                </div>
                            </article>




                        </div>

                    </div>


                </div>
            </div>

        </div>
    </section> 

    <!--Contact -->
    <section id="contactUs" class="page-section secPad">
        <div class="container">

            <div class="row">
                <div class="heading text-center">
                    <!-- Heading -->
                    <h2>Let's Keep In Touch!</h2>
                    <p>Thank you for visiting out my profile. If you would like to get into contact with me, please fill out the form below.</p>
                </div>
            </div>


            <div class="row mrgn30">

                <form method="post" action="index.php" id="contactfrm" role="form">

                          <?php
                            if( $posted  ) {
                              if( !$_POST['name'] || !$_POST['email'] || !$_POST['message'] || ($human !== 5) ) 
                                echo "<script type='text/javascript'>alert('Your submission was unsuccessful because one of the following info is incorrect: $errormsg')</script>";
                            }

                             if (!$errName && !$errEmail && !$errMessage && !$errHuman && $posted){
                                if( $sent){
                                    echo "<script type='text/javascript'>alert('Your message is delivered, I will get in touch with you ASAP :D')</script>" ;
                                }
                                else{
                                
                                    echo "<script type ='text/javascript'>alert('Your message is NOT delivered due to the internet connection, please try again later!')</script>";

                                }


                             }

                          ?>


                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                        <div class="form-group">
                            <label for="human"> 2 + 3 = ?</label>
                            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                            <?php echo "<p class='text-danger'>$errHuman</p>";?>
                        </div>

                    </div>


       
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" class="form-control" id="message" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>";?>
                        </div>
                        <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
                        <div class="result"> <?php echo $result; ?>  </div>

                    </div>
                </form>
                <div class="col-sm-4">
                                   
                         <h3> Contact Me </h3>
                              <ul>
                                    <li class="contact-bottom"><img class="contact-icon"src="images/map_icon.png" alt="marker image" />Burnaby, British Columbia, Canada</li>
                                    <li class="contact-bottom"><img class="contact-icon" src="images/phone_icon.png" alt="phone image"/>+1-778-858-7592</li>
                                    <li class="contact-bottom"><img class="contact-icon" src="images/mail_icon.png" alt="mail image"/>Ted@TedWu.net</li>                                   
                             </ul>
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <footer>
        <div class="container">
            <div class="social text-center">
                <a href="https://ca.linkedin.com/in/wuted" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/Niuuuuu"    target="_blank"><i class="fa fa-github"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href="mailto:ted@tedwu.net" target="_blank"><i class="fa fa-comment"></i></a>
                <a href="http://tedwu.net/"><i class="fa fa-dribbble"></i></a>
            </div>

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
    </footer>
    <!--/.page-section-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    Copyright 2015 @ TedWu.net</a>
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

    <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    <script src="js/modernizr-latest.js"></script>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="js/jquery.nav.js" type="text/javascript"></script>
    <script src="js/jquery.cslider.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="js/owl-carousel/owl.carousel.js"></script>



</body>
</html>

