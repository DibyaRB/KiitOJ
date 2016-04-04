<?php echo $this->getContent(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Kiit-Online Judge</title>
<?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
<?php echo $this->tag->stylesheetLink('css/animate.min.css'); ?>
<?php echo $this->tag->stylesheetLink('css/font-awesome.css'); ?>
<?php echo $this->tag->stylesheetLink('css/lightbox.css'); ?>
<?php echo $this->tag->stylesheetLink('css/main.css'); ?>
<?php echo $this->tag->stylesheetLink('css/preset1.css'); ?>
<?php echo $this->tag->stylesheetLink('css/responsive.css'); ?>

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">


  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  

<link  rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>KIIT-Online Judge</span></h1>
            <p class="animated fadeInRightBig">Code your way to <b>Glory!</b></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="http://localhost/KiitOJ/signup">Sign Up</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Get your Algorithmic Knowledge <span>Strong</span></h1>
            <p class="animated fadeInRightBig">Solve interesting programming challenges and improve each day. </p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="http://localhost/KiitOJ/login">Login</a>
          </div>
        </div>
    
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
      
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
	    <li class="scroll"><a href="http://localhost/KiitOJ/login">Login</a></li>
            <li class="scroll"><a href="http://localhost/KiitOJ/signup">Signup</a></li>
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Everything You Need to Become a Better Programmer.</h2>
            <p>Practice Makes a Man Perfect</p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-male"></i>
            </div>
            <div class="service-info">
              <h3>Practice</h3>
              <p>Enhance your programming capabilities by solving challenges. </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-users"></i>
            </div>
            <div class="service-info">
              <h3>Compete</h3>
              <p>Compete on various Data Structures and Algorithms based Questions. </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-book"></i>
            </div>
            <div class="service-info">
              <h3>Collaborate</h3>
              <p>Read our existing Knowledgebases, tutorials. Check Ongoing contests.</p>
            </div>
          </div>
          
            
          </div>
          
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->



 
  

  <section id="contact">
   
    
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h1>Contact Us</h1>
            <p><h3>Have a question? Drop us a line; we are here to help.</h3></p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>We would reply you back as soon as possible.</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> Campus 15, KIIT University </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +91-9040794691  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:dibyabhoidibya@gmail.com"> dibyabhoidibya@gmail.com</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
            
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2016 KIIT ONLINE JUDGE.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
