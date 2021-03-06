<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'assets/php/functions.php';

$events = getEventsFromJson();

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Grand - Event and Conference Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/blue.css"> -->

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="assets/img/as_week_18.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="#header-wrap">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#schedules">
                  schedules
                </a>
              </li>
  <!--             <li class="nav-item">
                <a class="nav-link" href="#team">
                  Speakers
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#gallery">
                  Gallery
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq">
                  Faq
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sponsors">
                  Sponsors
                </a>
              </li>
   <!--            <li class="nav-item">
                <a class="nav-link" href="#pricing">
                  pricing
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#google-map-area">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="page-scrool" href="#header-wrap">Home</a>
          </li>
          <li>
            <a class="page-scrool" href="#about">About</a>
          </li>
          <li>
             <a class="page-scroll" href="#schedules">schedules</a>
          </li>
          <li>
            <a class="page-scroll" href="#team">Speakers</a>
          </li>
          <li>
            <a class="page-scroll" href="#gallery">Gallery</a>
          </li>
          <li>
            <a class="page-scroll" href="#faq">Faq</a>
          </li>
          <li>
            <a class="page-scroll" href="#sponsors">Sponsors</a>
          </li>
     <!--      <li>
            <a class="page-scroll" href="#pricing">pricing</a>
          </li> -->
          <li>
            <a class="page-scroll" href="#google-map-area">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

      <!-- Main Carousel Section Start -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/slider/slide1.jpg" alt="First slide">
            <div class="carousel-caption d-md-block">
              <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
              <h1 class="wow fadeInDown heading" data-wow-delay=".4s">Design Thinking Conference</h1>
              <a href="#" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">Get Ticket</a>
              <a href="#" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">Explore More</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/slide2.jpg" alt="Second slide">
            <div class="carousel-caption d-md-block">
              <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
              <h1 class="wow bounceIn heading" data-wow-delay=".7s">22 Amazing Speakers</h1>
              <a href="#" class="fadeInUp wow btn btn-border btn-lg" data-wow-delay=".8s">Learn More</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/slide3.jpg" alt="Third slide">
            <div class="carousel-caption d-md-block">
              <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
              <h1 class="wow fadeInUp heading" data-wow-delay=".6s">Book Your Seat Now!</h1>
              <a href="#" class="fadeInUp wow btn btn-common btn-lg" data-wow-delay=".8s">Explore</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
          <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
          <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Main Carousel Section End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Coundown Section Start -->
    <section class="countdown-timer section-padding">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="heading-count">
              <h2 class="wow fadeInDown" data-wow-delay="0.2s">Events Will Starts In</h2>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row time-countdown justify-content-center wow fadeInUp" data-wow-delay="0.2s">
              <div id="clock" class="time-count"></div>
            </div>
            <a href="pricing.html" class="btn btn-common wow fadeInUp" data-wow-delay="0.3s">Add to My Calender</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Coundown Section End -->

     <!-- Services Section Start -->
    <section id="services" class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Why You Choose Us?</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row services-wrapper">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Get Inspired</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon">
                <i class="lni-gallery"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Meet New Faces</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-envelope"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Fresh Tech Insights</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lni-cup"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Networking Session</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="1s">
              <div class="icon">
                <i class="lni-user"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Global Event</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
            <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lni-bubble"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Free Swags</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->
    

    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">About These Events</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="about-item">
              <img class="img-fluid" src="assets/img/about/img1.jpg" alt="">
              <div class="about-text">
                <h3><a href="#">Wanna Know Our Mission?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                <a class="btn btn-common btn-rm" href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="about-item">
              <img class="img-fluid" src="assets/img/about/img2.jpg" alt="">
              <div class="about-text">
                <h3><a href="#">What you will learn?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                <a class="btn btn-common btn-rm" href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="about-item">
              <img class="img-fluid" src="assets/img/about/img3.jpg" alt="">
              <div class="about-text">
                <h3><a href="#">What are the benifits?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                <a class="btn btn-common btn-rm" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Counter Area Start-->
    <section class="counter-section section-padding">
      <div class="container">
        <div class="row">
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <a href="http://maps.google.com/maps?q=41.409404,19.705865" target="_blank" class="map-link">
              <div class="counter wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon">
                 
                  <i class="lni-map"></i>
                 
                </div>
                <p>
                    Tirana Business Park
                </p>
                <span>RINAS ROAD , B07, 1000 Tirana Albania</span>
              </div>
            </div>
            </a>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon"><i class="lni-timer"></i></div>
              <p>May 7 - 12, 2018</p>
              <span>09:00 AM – 06:00 PM</span>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon"><i class="lni-users"></i></div>
              <p>343 Available Seats</p>       
              <span>Hurryup! few tickets are left</span>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon"><i class="lni-coffee-cup"></i></div>
              <p>Free Lunch & Snacks</p>
              <span>Don’t miss it</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End-->

    <!-- Schedule Section Start -->
    <section id="schedules" class="schedule section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Events Schedules</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit, sed do eiusmod tempor</p>
            </div>
          </div>
        </div>
        <div class="schedule-area row wow fadeInDown" data-wow-delay="0.3s">
          <div class="schedule-tab-title col-md-3 col-lg-3 col-xs-12">
            <div class="table-responsive">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                
                <?php 

                  foreach ($events as $key => $event) {
                    
                    ?>
                 

                <li class="nav-item">
                  <a class="nav-link <?php echo ($key == 0) ? 'active' : '' ?>" id="<?php echo $event['day'] ?>-tab" data-toggle="tab" href="#<?php echo $event['day'] ?>" role="tab" aria-controls="<?php echo $event['day'] ?>" aria-expanded="true">
                    <div class="item-text">
                      <h4><?php echo $event['day'] ?></h4>
                      <h5><?php echo $event['time'] ?></h5>
                    </div>
                  </a>
                </li>
                
                 <?php }
                ?>


                <li class="nav-item">
                  <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#saturday" role="tab" aria-controls="saturday">
                    <div class="item-text">
                      <h4>Tuesday</h4>
                      <h5>8 May</h5>
                    </div>
                  </a>
                </li>
                

              </ul>
            </div>
          </div>

          <div class="schedule-tab-content col-md-9 col-lg-9 col-xs-12 clearfix">
            <div class="tab-content" id="myTabContent">

              <?php 

                    
                  foreach ($events as $key => $event) {
                    
                    ?>

          
              <div class="tab-pane fade show <?php echo ($key == 0) ? 'active' : '' ?>" id="<?php echo $event['day'] ?>" role="tabpanel" aria-labelledby="<?php echo $event['day'] ?>-tab">
                <div id="accordion<?php echo $key; ?>">
                  
                  <?php foreach ($event['schedule'] as $index => $data): ?>
                    
                  

                    <div class="card">
                      <div id="heading<?php echo $key.$data['id'] ?>">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapse<?php echo $key.$data['id']; ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $key; ?>">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time"><?php echo $data['time'] ?></span>
                          <h4><?php echo $data['title'] ?></h4>
                          <h5 class="name"><?php echo $data['subtitle'] ?></h5>
                        </div>
                      </div>
                      <div id="collapse<?php echo $key.$data['id']; ?>" class="collapse <?php echo ($index == 0) ? 'show' : '' ?>" aria-labelledby="heading<?php echo $key.$data['id'] ?>" data-parent="#accordion<?php echo $key; ?>">
                        <div class="card-body">
                          <p><?php echo $data['description'] ?></p>
                          <div class="location">
                            <span>Location:</span> <?php echo $data['place'] ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php endforeach ?>

                </div>
              </div>
              
               <?php }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Schedule Section End -->

    <!-- Team Section Start -->
    <section id="team" style="display: none" class="section-padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Who's Speaking?</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-01.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">JONATHON DOE</a></h3>
                <p>Product Designer, Tesla</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-02.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Patric Green</a></h3>
                <p>Front-end Developer, Dropbox</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-03.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Paul Kowalsy</a></h3>
                <p>Lead Designer, TNW</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-04.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Jhon Doe</a></h3>
                <p>Back-end Developer, ASUS</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="1s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-05.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Daryl Dixon</a></h3>
                <p>Full-stack Developer, Google</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="1.2s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-06.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Chris Adams</a></h3>
                <p>UI Designer, Apple</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
        </div>
        <a href="speakers.html" class="btn btn-common mt-30 wow fadeInUp" data-wow-delay="1.9s">All Speakers</a>
      </div>
    </section>
    <!-- Team Section End -->

    <!-- Gallary Section Start -->
    <section id="gallery" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">our event gallery</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div> 
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/flashback/as2017-part1-056.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/flashback/as2017-part1-056.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/flashback/as2017-part2-036.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/flashback/as2017-part2-036.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/flashback/as2017-part2-070.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/flashback/as2017-part2-070.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/flashback/as2017-part3-078_1.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/flashback/as2017-part3-078_1.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/flashback/as2017-part3-081_1.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/flashback/as2017-part3-081_1.jpg">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="assets/img/flashback/as2017-part3-088_1.jpg" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="assets/img/flashback/as2017-part3-088_1.jpg" >
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-xs-12">
            <a href="http://www.albanianskills.org/flashback-2017" target="_blank" class="btn btn-common">Browse All</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallary Section End -->

    <!-- Ask Question Section Start -->
    <section id="faq" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Ask Question?</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <div class="header-title" data-toggle="collapse" data-target="#questionOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="lni-pencil"></i> How to make a new event?
                  </div>
                </div>
                <div id="questionOne" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                    <div class="header-title" data-toggle="collapse" data-target="#questionTwo" aria-expanded="false" aria-controls="questionTwo">
                      <i class="lni-pencil"></i>  Which payment methods do you accept? 
                    </div>
                </div>
                <div id="questionTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionThree" aria-expanded="false" aria-controls="questionThree">
                    <i class="lni-pencil"></i>  Which document can i bring to meeting?   
                  </div>
                </div>
                <div id="questionThree" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionFour" aria-expanded="false" aria-controls="questionFour">
                   <i class="lni-pencil"></i> Who can join at the live event venue?
                  </div>
                </div>
                <div id="questionFour" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="accordion">
              <div class="card">
                <div class="card-header" id="headingOne2">
                  <div class="header-title" data-toggle="collapse" data-target="#questionOne2" aria-expanded="true" aria-controls="collapseOne">
                    <i class="lni-pencil"></i> How to make a new event?
                  </div>
                </div>
                <div id="questionOne2" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo2">
                    <div class="header-title" data-toggle="collapse" data-target="#questionTwo2" aria-expanded="false" aria-controls="questionTwo">
                      <i class="lni-pencil"></i>  Which payment methods do you accept? 
                    </div>
                </div>
                <div id="questionTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionFive" aria-expanded="false" aria-controls="questionFive">
                    <i class="lni-pencil"></i>How to set price? 
                  </div>
                </div>
                <div id="questionFive" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionSix" aria-expanded="false" aria-controls="questionSix">
                    <i class="lni-pencil"></i>  What our price list? 
                  </div>
                </div>
                <div id="questionSix" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ask Question Section End -->

    <!-- Sponsors Section Start -->
    <section id="sponsors" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsores</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-tbp.jpg" alt=""></a>

            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-schneider.png" alt=""></a>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-unique.png" alt=""></a>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="spnsors-logo">
              <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-abiesse.png" alt=""></a>
            </div>
          </div>

  
          <div class="col-12 text-center">
            <a href="#" class="btn btn-common">become a sponsor</a>
          </div>


        </div>
      </div>
    </section>
    <!-- Sponsors Section End -->

    <!-- Ticket Pricing Area Start -->
    <section id="pricing" style="display: none" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Pricing</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
            <div class="price-block-wrapper wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lni-write"></i>
              </div>
              <div class="colmun-title">
                <h5>Basic Pass</h5>
              </div>
              <div class="price">
                <h2>$29</h2>
                <p>452 Tickets Available</p>
              </div>
              <div class="pricing-list">
                <ul>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Lunch on all days</span></li>
                  <li><i class="lni-close"></i><span class="text">Access to all areas</span></li>
                  <li><i class="lni-close"></i><span class="text">Certificate</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Workshop</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common">Buy Ticket</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
            <div class="price-block-wrapper wow fadeInUp" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-layers"></i>
              </div>
              <div class="colmun-title">
                <h5>Standard Pass</h5>
              </div>
              <div class="price">
                <h2>$40</h2>
                <p>452 Tickets Available</p>
              </div>
              <div class="pricing-list">
                <ul>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Lunch on all days</span></li>
                  <li><i class="lni-close"></i><span class="text">Access to all areas</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Certificate</span></li>
                  <li><i class="lni-close"></i><span class="text">Workshop</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common">Buy Ticket</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
            <div class="price-block-wrapper wow fadeInRight" data-wow-delay="0.4s">
              <div class="icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="colmun-title">
                <h5>Premium Pass</h5>
              </div>
              <div class="price">
                <h2>$68</h2>
                <p>452 Tickets Available</p>
              </div>
              <div class="pricing-list">
                <ul>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                  <li><i class="lni-close"></i><span class="text">Lunch on all days</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Access to all areas</span></li>
                  <li><i class="lni-check-mark-circle"></i><span class="text">Certificate</span></li>
                  <li><i class="lni-close"></i><span class="text">Workshop</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common">Buy Ticket</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ticket Pricing Area End -->

    <!-- Event Slides Section Start -->
    <section id="event-slides" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Guideline</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <div class="video">
              <img class="img-fluid" src="assets/img/about/about.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <p class="intro-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
            </p>
            <h2 class="intro-title">Check List</h2>
            <ul class="list-specification">
              <li><i class="lni-check-mark-circle"></i> Lorem Ipsum is simply dummy</li>
              <li><i class="lni-check-mark-circle"></i> Ipsum passages, and more recently</li>
              <li><i class="lni-check-mark-circle"></i> PageMaker including versions</li>
              <li><i class="lni-check-mark-circle"></i> Lorem Ipsum is simply dummy</li> 
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Event Slides Section End -->

    <!-- Blog Section Start -->
    <section id="blog" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Latest News & Articles</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="assets/img/blog/img-1.jpg" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="tag">Design</div>
                <h3 class="title">
                  <a href="single-blog.html">
                    The 9 Design Trends You Need to Know
                  </a>
                </h3>
                <div class="meta-tags">
                  <span class="date">Jan 20, 2018</span>
                  <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="assets/img/blog/img-2.jpg" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="tag">Design</div>
                <h3 class="title">
                  <a href="single-blog.html">
                    The 9 Design Trends You Need to Know
                  </a>
                </h3>
                <div class="meta-tags">
                  <span class="date">Jan 20, 2018 </span>
                  <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="assets/img/blog/img-3.jpg" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="tag">Design</div>
                <h3 class="title">
                  <a href="single-blog.html">
                    The 9 Design Trends You Need to Know
                  </a>
                </h3>
                <div class="meta-tags">
                  <span class="date">Jan 20, 2018</span> 
                  <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <a href="http://www.albanianskills.org/press-and-tv/" class="btn btn-common" target="_blank">Read More News</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section End -->

    <!-- Subscribe Area Start -->
<!--     <div id="subscribe" class="section-padding">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10 col-lg-7">
            <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
              <h2 class="subscribe-title">Sign Up For Our Newsletter</h2>
              <form class="text-center form-inline">
                <input class="mb-20 form-control" name="email" placeholder="Enter Your Email Here">
                <button type="submit" class="btn btn-common sub-btn" data-style="zoom-in" data-spinner-size="30" name="submit" id="submit">
                <span class="ladda-label"><i class="lni-check-box"></i> Submit</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Subscribe Area End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Contact Us Section -->
 
    <!-- Contact Us Section End -->

    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
            <h3>
              <a href="" class="navbar-brand">
                
              <img src="assets/img/as_week_18.png" alt=""></h3>
              </a>
            <p>
              Aorem ipsum dolor sit amet elit sed lum tempor incididunt ut labore el dolore alg minim veniam quis nostrud ncididunt.
            </p>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
            <h3>QUICK LINKS</h3>
            <ul>
              <li><a href="#about">About Conference</a></li>
              <li><a href="#event-slides">Event Guideline</a></li>
              <li><a href="#team">Our Speakers</a></li>
              <li><a href="#schedules">Event Shedule</a></li>
              <li><a href="#blog">Latest News</a></li>
              <li><a href="#gallery">Event Photo Gallery</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
            <h3>RECENT POSTS</h3>
            <ul class="image-list">
              <li>
                <figure class="overlay">
                  <img class="img-fluid" src="assets/img/art/a1.jpg" alt="">
                </figure>
                <div class="post-content">
                  <h6 class="post-title"> <a href="blog-single.html">Lorem ipsm dolor sumit.</a> </h6>
                  <div class="meta"><span class="date">October 12, 2018</span></div>
                </div>
              </li>
              <li>
                <figure class="overlay">
                  <img class="img-fluid" src="assets/img/art/a2.jpg" alt="">
                </figure>
                <div class="post-content">
                  <h6 class="post-title"><a href="blog-single.html">Lorem ipsm dolor sumit.</a></h6>
                  <div class="meta"><span class="date">October 12, 2018</span></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
            <h3>SUBSCRIBE US</h3>
            <div class="widget">
              <div class="newsletter-wrapper">
                <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                  <div class="form-group is-empty">
                    <input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Your email" required="">
                    <button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-pointer"></i></button>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h5 class="widget-title">FOLLOW US ON</h5>
              <ul class="footer-social">
                <li><a class="facebook" href="https://www.facebook.com/albanianskillsoriginal/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="https://twitter.com/AlbanianSkills"  target="_blank"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="https://www.linkedin.com/in/albanian-skills-095a15158/"  target="_blank"><i class="lni-linkedin-filled"></i></a></li>
                <li><a class="google-plus" href="https://www.instagram.com/albanianskills/"><i class="lni-instagram"  target="_blank"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-info2">
              <p>© Developed with love by <a href="https://www.linkedin.com/in/edison-biba-345402124/" target="_blank">Edison Biba</a> & <a href="https://www.linkedin.com/in/artur-havalja-431930159/" target="_blank">Artur Havalja</a>.</p>
            </div>      
          </div>
        </div>
      </div>
    </div>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/my_library.js"></script>
    <script src="assets/js/render.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
