<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Intro to Programming</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php session_start(); $teacherClasses = $_SESSION['teacherClasses'];$username = $_SESSION['username']; include './include.php'; ?>
    <div class="container pt-5 pb-4">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						<div class="col-md-6 text-center">
							<a class="navbar-brand" href="index.html">STEM<span>SEED</span></a>
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
            <li class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">About us</a></li>
            <li class="nav-item active"><a href="./index.php#online-class" class="nav-link">Online Classes</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Projects</a></li>
	          <li class="nav-item"><a href="./index.php#contact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


		<section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 py-5 order-md-last">
	          <div class="heading-section ftco-animate">
	          	<span class="subheading">Welcome <?php echo("$username")?></span>
	            <h2 class="mb-4">My Classes</h2>
	          </div>
    			</div>

    			<div class="col-lg-9 services-wrap px-4 pt-5">
    				<div class="row pt-md-3">
    				<?php
              for($x = 0; $x<count($teacherClasses);$x++) {

                $host = "localhost";
                $dbusername = "stemseed_zain";
                $dbpassword = "alza1302";
                $dbname = "stemseed_signupClasses";
                $classStudentList = array();
                // Create connection
                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

                if (mysqli_connect_error()){
                die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
                }
                else{
                  $sql = "SELECT grade FROM"."`$teacherClasses[$x]`"."WHERE id = '$username'";
                  if ($results = $conn->query($sql)){
                    $classGrade = mysqli_fetch_array($results);
                    $classGrade = $classGrade[0];
                    // $classList[] =  $classList['name'];
                    // print_r($classList);
                  }
                  else {
                    echo "no results";
                  }
                }


                echo "  <div class=\"col-md-4 d-flex align-items-stretch\">
                    <div class=\"services text-center\">
                      <div class=\"text\">
                        <h3>$teacherClasses[$x]</h3>
                        <p>Grade: $classGrade </p>
                      </div>
                    </div>
                  </div>";
              }
             ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">STEM <span>SEED</span></a></h2>
              <p>Helping bridge the STEM gap one step at a time.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.linkedin.com/company/stem-seed"><span class="icon-linkedin "></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/pages/category/Nonprofit-Organization/STEM-Seed-104947514202070/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/stemseedorg/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Classes</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Introduction to Programming (Scratch)</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Senior Programming (Python)</a></li>
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
