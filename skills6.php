<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        ul.a {
            list-style-type: circle;
        }
    </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sestopia Team H</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>


<body >
  <!-- ======= Header ======= -->
  <?php include 'header.html';?>
  <!-- End Header -->

  <!-- ======= Featured Services Section Section ======= -->
   


    <section id="featured-services">
      <br>
      <br>
      <br>

   
    <!-- ======= Why Us Section ======= -->
    <!--<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">-->
    <?php 
		$_SESSION['js'] = isset($_GET['js'])&&$_GET['js']=="0" ? "0":"1";
				$js = true;
		if(!isset($_SESSION['js'])||$_SESSION['js']==""){
			//	print_r('setting session...');
				echo "<noscript><meta http-equiv='refresh' content='0;url=skills6.php?js=0'> </noscript>";
				
				

			}elseif(isset($_SESSION['js'])&& $_SESSION['js']=="0"){
				$js = false;
				$_SESSION['js']="";

			}elseif(isset($_SESSION['js'])&& $_SESSION['js']=="1"){
				$js = true;
				$_SESSION['js']="";
			}
			
			if(!$js){
				echo "<section class='why-us section-bg' data-aos='fade-up' date-aos-delay='200'>";
				
			}
			else{
				echo "<section class='why-us section-bg'>";
			}
		
	?>
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/m_sq.png" class="img-fluid" alt="">
              <a href=""></a>
            <!--<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="https://www.iso.org/standard/20115.html">Software Quality Assurance</a></h4>
              <p class="description">Quality software is reasonably bug or defect free, delivered on time and within budget, meets requirements and/or expectations, and is maintainable. </p><p class="description">Software quality assurance (SQA) is a process which assures that all software engineering processes, methods, activities and work items are monitored and comply against the defined standards.These defined standards could be one or a combination of any like ISO 9000, CMMI model, ISO15504, etc. </p>
            </div>

          </div>
        </div>
          
        <div class="row">
          

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href=""> Prerequisites</a></h4>
              <p class="description">A software quality assurance engineer must have strong skills in a variety of categories:
               </p>
                <ul>
                    <li>Engineering and Technology</li>
                    <li>Math and Science</li>
                    <li>Verbal and Written Communication</li>
                    <li>Reasoning and Logic, and Practical Skills.</li>
                    <li>Prior practical experience can be valuable</li>
                    <li>A QA engineer should have a thorough understanding of QA testing environments and software development life cycles.</li>
                </ul>
            </div>

          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"></i></div>
              <h4 class="title"><a href=""> Rationale for Skill </a></h4>
              <p class="description">
                I particularlly have a interest in the field of software testing and mainatinability and to hone my skills, this seems like a apt opportunity/ experience
                </p>
            </div>

          </div>
        </div>
          
        <div class="row">
          

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href=""> Related Software Engineering Area's</a></h4>
              <p class="description">
                Some of the related engineering areas:
                </p>
                <ul>
                <li>Technical reviews and audits</li>
                <li>Software Engineering Standards</li>
                <li>Software Testing for Quality Control</li>
                </ul>
            </div>

          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"></i></div>
              <h4 class="title"><a href=""> Roles for Skill </a></h4>
              <p class="description">
                Diffrent Roles that can help with quality and maintainance of a software:
                </p>
                <ul>
                <li>Software Quality Assurance Engineer</li>
                <li>Computer Systems Analyst</li>
                <li>Software Engineer</li>
                </ul>
            </div>

          </div>
        </div>
        
          
        <div class="row">
          

<!--
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href=""> Real-World Examples:</a></h4>
              <p class="description">
                ....................404.........................
                </p>
            </div>

          </div>
-->
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"></i></div>
              <h4 class="title"><a href=""> Skill Self-Assessment: </a></h4>
              <p class="description">
                Initial: 6/10 <br>
                Final: 7/10
                </p>
                <p class="description">Rationalle: Because of lack of professional experience in the selected field, i scored myseld quite low but since i had some experience in working and managing simillar tasks in undergraduate and graduate projects it was not extremely low evaluation.
                <br>
                With the progression of the course and project, i had the opportunity to work on my skills and improve in the selected field by experiencng and performing the tasks first hand which helped me to improve my skills a little bit.  </p>
            </div>

          </div>
            
            
        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"></i></div>
              <h4 class="title"><a href=""> Quality: </a></h4>
              <p class="description">ISO 8402-1994 standard defines quality as  “the totality of features and characteristics of a product or service that bears its ability to satisfy stated or implied needs.” . SQA incorporates all software development processes starting from defining requirements to coding until release. Its prime goal is to ensure quality.</p>
            </div>

          </div>

        </div>

      </div>
    <!--</section><!-- End Why Us Section -->-->

    <!-- ======= Features Section ======= -->
        
        
    
        
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="section-title">
            <div class="row" data-aos="fade-up">
                
                <div class="col-md-7 pt-4">
          <h2>Key aspects of quality include:</h2>
          <p><ul>
            <li>Good design – looks and style</li>
            <li>Good functionality – it does the job well</li>
<li>Reliable – acceptable level of breakdowns or failure
Consistency</li>
<li>Durable – lasts as long as it should</li>
<li>Good after sales service</li>
<li>Value for money</li>
            </ul>
            </div>
          <div class="col-md-5">
            <img src="assets/img/m_soft_qual.JPG" class="img-fluid" alt="">
          </div>
          </div></div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Good design</h3>
            <p class="font-italic">
              The application or product should meet all the requirement specifications and at the same time it should be user friendly. 
            </p>
            <ul>
<!--
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
-->
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Good functionality</h3>
            <p class="font-italic">
              Along with the good looks of the application or the product it’s very important that the functionality should be intact. All the features and their functionality should work as expected. There should not be any deviation in the actual result and the expected result.
            </p>
            
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Reliable</h3>
            <p>After we have tested for all the features and their functionalities it also very important that the application or product should be reliable. </p>
            <ul>
<!--              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>-->
              
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-4.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Consistency</h3>
            <p class="font-italic">
              The software should have consistency across the application or product. Single software can be multi dimensional. It is very important that all the different dimensions should behave in a consistent manner.
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->
</section>
  </main><!-- End #main -->
  <br>
    <!-- ======= Footer ======= -->
  <?php include 'footer.html';?>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>