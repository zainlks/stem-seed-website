<!DOCTYPE html>
<html lang="en">
  <head>
    <title>STEM SEED - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" type = "text/css" href="css/style.css">
  </head>
  <body>

    <?php
    $host = "localhost";
    $dbusername = "stemseed_zain";
    $dbpassword = "alza1302";
    $dbname = "stemseed_signupClasses";

    // Create connection

    function checkClassav($className) {
        $conn = new mysqli ($host, 'stemseed_zain', 'alza1302', 'stemseed_signupClasses');


                  if (mysqli_connect_error()){
                  die('Connect Error ('. mysqli_connect_errno() .') '
                  . mysqli_connect_error());
                  }
                  else{
                  $sql = "SELECT studentNum FROM classList WHERE className =". "'$className'";
                  if ($results = $conn->query($sql)){
                      $classSize = mysqli_fetch_array($results);
                      $classSize = $classSize[0];
                  // //if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
                    if($classSize >= 5) {
                      echo('services-list full-class');
                    }
                    else {
                      echo('services-list');
                    }
                  }
                  else {
                      echo $conn->error;
                  }
                }
    }

     ?>


    <div class="container pt-5 pb-4">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						<div class="col-md-6 text-center">
							<a class="navbar-brand" href="index.php">STEM<span>SEED</span></a>
						</div>
						<!-- <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
              <div class = "social-media">
							  <img class="d-flex align-items-center justify-content-center" src = "./assets/Small-Header-2.png" height = "60px" width = "60px">
              </div>
						</div> -->
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="https://www.facebook.com/pages/category/Nonprofit-Organization/STEM-Seed-104947514202070/" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="https://www.linkedin.com/company/stem-seed" class="d-flex align-items-center justify-content-center"><span class="fa fa-linkedin"><i class="sr-only">Twitter</i></span></a>
		    			<a href="https://www.instagram.com/stemseedorg/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="#online-class" class="nav-link">Online Classes</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Projects</a></li>
	          <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="./portal.php" class="nav-link">Log In</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<h2 class="subheading">Welcome to STEM SEED</h2>
          	<h1>STEM Education for everyone </h1>
            <p class="mb-4">Help close the STEM gap today</p>
            <p><a href="https://donorbox.org/stem-seed" class="btn btn-primary mr-md-4 py-2 px-4">Donate Now <span class="ion-ios-arrow-forward"></span></a></p>
            <p><a href="#online-class" class="btn btn-secondary mr-md-4 py-2 px-4">New Online Classes! <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 py-5 order-md-last">
	          <div class="heading-section ftco-animate">
	          	<span class="subheading">What we do</span>
	            <h2 class="mb-4">Equity in STEM</h2>
	            <p>Through both local and international initiatives, our goal is to bring STEM education to those who don't have access to it. We teach curriculum relevant to ages 7 all the way through 16. Some of our past curriculum deployments include topics involving LEGO Robotics, Renewable Energies, VEX Robotics and more. </p>
	            <!-- <p><a href="#" class="btn btn-primary py-3 px-4">Get a Quote</a></p> -->
	          </div>
    			</div>
    			<div class="col-lg-9 services-wrap px-4 pt-5">
    				<div class="row pt-md-3">
    					<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<img class="flaticon-fence" src = "./assets/laptop.png" height = "50px">
		    					</div>
		    					<div class="text">
		    						<h3>Online Classes</h3>
		    						<p>Providing online classes on a variety of topics for studnets between grades 3 and 8</p>
		    					</div>
		    					<a href="#online-class" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
		    				</div>
		    			</div>
		    			<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<img class="flaticon-lawn-mower" src = "./assets/plane.png" height = "50px">
		    					</div>
		    					<div class="text">
		    						<h3>International Projects</h3>
		    						<p>Running student and teacher training workshops for schools that don't have access to STEM equipment or resources.</p>
		    					</div>
		    					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
		    				</div>
		    			</div>
		    			<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<img class="flaticon-natural-resources" src = "./assets/price.png" height = "50px">
		    					</div>
		    					<div class="text">
		    						<h3>Fundraising Support</h3>
		    						<p>Providing financial support to international schools year-long for continuing STEM education</p>
		    					</div>
		    					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
		    				</div>
		    			</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
    					<!-- <a href="./assets/Robotics-Prep-Vid.mp4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a> -->
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<a name = "online-class"><span class="subheading">COVID 19 Support</span></a>
		            <h2 class="mb-4">Online Classes</h2>
		            <p>Introducing online distance learning from STEM SEED! Classes offered can be seen below. Click on any to register and get more information on the class. <br> <strong>Note: Classes in red are full.</strong></p>
		            <div class="services-wrap">
		            	<a href="./intro-to-programming.php" class="<?php checkClassav('Introduction to Programming');?>">Introduction to Programming (Scratch)
		            		<!-- <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div> -->
		            	</a>
		            	<a href="./senior-programming.php" class="<?php checkClassav('Senior Programming');?>">Senior Programming (Python)
		            		<!-- <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div> -->
		            	</a>

                  <a href="./data_structures_algorithms.php" class="<?php checkClassav('Data Structures and Algorithms');?>">Data Structures and Algorithms
		            		<!-- <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div> -->
		            	</a>

                  <a href="./coding-contest-prep.php" class="<?php checkClassav('Coding Contest Preperation');?>">Coding Contest Preperation
		            		<!-- <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div> -->
		            	</a>

                  <a href="./virtual-robotics.php" class="<?php checkClassav('Virtual Robotics');?>">Virtual Robotics
		            		<!-- <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div> -->
		            	</a>


		            	<a href="./english.php" class="<?php checkClassav('English');?>">English
		            		<!-- <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div> -->
		            	</a>
		            	<a href="./math.php" class="<?php checkClassav('Mathematics');?>">Mathematics
		            		<!-- <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div> -->
		            	</a>
		            	<a href="./intro-to-business.php" class="<?php checkClassav('Introduction to Business');?>">Introduction to Business
		            		<!-- <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div> -->
		            	</a>
                  <a href="./debate.php" class="<?php checkClassav('Debate and Public Speaking');?>">Debate and Public Speaking
                  </a>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <!-- <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section ftco-animate">
          	<span class="subheading">Tips &amp; Techniques</span>
            <h2 class="mb-4">Seasonal Lawn Care Tips</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
        		<div class="carousel-seasonal owl-carousel ftco-owl">
              <div class="item">
              	<div class="wrap">
			        		<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-1.jpg);">
			        		</div>
			        		<div class="text text-center px-4">
		        				<h3><a href="#">Spring</a></h3>
		        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		        			</div>
		        		</div>
              </div>
              <div class="item">
              	<div class="wrap">
			        		<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-2.jpg);">
			        		</div>
			        		<div class="text text-center px-4">
		        				<h3><a href="#">Summer</a></h3>
		        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		        			</div>
		        		</div>
              </div>
              <div class="item">
              	<div class="wrap">
			        		<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-3.jpg);">
			        		</div>
			        		<div class="text text-center px-4">
		        				<h3><a href="#">Winter</a></h3>
		        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		        			</div>
		        		</div>
              </div>
              <div class="item">
              	<div class="wrap">
			        		<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-4.jpg);">
			        		</div>
			        		<div class="text text-center px-4">
		        				<h3><a href="#">Fall</a></h3>
		        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		        			</div>
		        		</div>
              </div>
            </div>
        	</div>
        </div>
    	</div>
    </section> -->
    <a name = "contact">
    <section class="ftco-intro bg-primary py-5">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-md-6">
						<h2>Contact  us</h2>
						<p>Contact us if you have any comments or questions about the classes above.</p>
					</div>
					<div class="col-md-5 text-md-right">
						<span class="contact-number">team@stemseed.org</span>
					</div>
				</div>
			</div>
		</section>
  </a>



    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Our Team</span>
            <h2 class="mb-4">Volunteers and Teachers</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(./assets/Zain-headshot.jpeg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Zain Lakhani</p>
		                    <span class="position">CEO and Teacher</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(./assets/sobia-headshot.jpeg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Sobia Makhani</p>
		                    <span class="position">Head of Curriculum Development</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(./assets/ali-lakhani.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Ali Lakhani</p>
		                    <span class="position">Volunteer Teacher</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(./assets/Sanna-headshot.jpeg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Sanna Tayabali</p>
		                    <span class="position">Head of Fundraising and Teacher</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(./assets/0.jpeg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Adil Quettawala</p>
		                    <span class="position">Volunteer Teacher</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(./assets/zaynah-headshot.jpeg)"></div>
                      <div class="pl-3">
                        <p class="name">Zaynah Bhanji</p>
                        <span class="position">Volunteer Teacher</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(./assets/Carolina-headshot.jpeg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Carolina Martinez</p>
		                    <span class="position">Chief of Marketing and Teacher</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">24</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2020</span>
              			<span class="mos">January</span>
              		</div>
              	</div>
              	<h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">24</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2020</span>
              			<span class="mos">January</span>
              		</div>
              	</div>
              	<h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">24</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2020</span>
              			<span class="mos">January</span>
              		</div>
              	</div>
              	<h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


    <!-- <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
      <div class="container">
        <div class="row d-flex justify-content-center">
        	<div class="col-lg-8 py-4">
        		<div class="row">
		          <div class="col-md-6 ftco-animate d-flex align-items-center">
		            <h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
		          </div>
		          <div class="col-md-6 d-flex align-items-center">
		            <form action="#" class="subscribe-form">
		              <div class="form-group d-flex">
		                <input type="text" class="form-control" placeholder="Enter email address">
		                <input type="submit" value="Subscribe" class="submit px-3">
		              </div>
		            </form>
		          </div>
	          </div>
          </div>
        </div>
      </div>
    </section> -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">STEM <span>SEED</span></a></h2>
              <p>Helping bridge the STEM gap one step at a time.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-linkedin "></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Classes</h2>
              <ul class="list-unstyled">
                <li><a href="./intro-to-programming.html" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Introduction to Programming (Scratch)</a></li>
                <li><a href="./senior-programming" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Senior Programming (Python)</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>English</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Mathematics</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Introduction to Business</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Debate and Public Speaking</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Contact information</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Ontario, Canada</span></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">team@stemseed.org</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <!-- <div class="col-md-6 col-lg">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Friday : 9am to 20 pm</span>
              		<span>Saturday : 9am to 17 pm</span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span>All Sunday Days</span>
              		<span>All Official Holidays</span>
              	</p>
              </div>
            </div>
          </div> -->
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

  </body>
</html>
