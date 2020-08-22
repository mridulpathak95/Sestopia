<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
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

   

<?php 
    $_SESSION['js'] = isset($_GET['js'])&&$_GET['js']=="0" ? "0":"1";
        $js = true;
    if(!isset($_SESSION['js'])||$_SESSION['js']==""){

        echo "<noscript><meta http-equiv='refresh' content='0;url=skills2.php?js=0'> </noscript>";
        
        

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
  



    <!-- ======= Why Us Section ======= -->

      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">

           <img src="assets/img/troubleshooting.jpg" class="img-fluid corners" alt="Troubleshooting">
            <a href="https://youtu.be/wNS8eURYsFs" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" >Troubleshooting</a>

          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-fingerprint"></em></div>
              <h4 class="title">Troubleshooting</h4>
              <p class="description">Troubleshooting is a process that helps people identify issues or problems occurring in a system. Troubleshooting tends to exist at a higher level than debugging and applies to many components of a system.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><em class="bx bx-gift"></em></div>
              <h4 class="title">Classification of skill</h4>
              <p class="description">Troubleshooting can be classifies as follows:<br>
                 <ul>

                <li>Hardware issues</li>
                <li> Software issues</li>
                <li> Environmental issues</li>

                </ul>
            </p>
            </div>

          </div>
        </div>




        <div class="row">
          

          <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title">Prerequisites</h4>
              <br>
             <ul class ="description">
                <li>Basic knowledge of internal software, tools and guides, to research customer issues</li>
                <li>Have preknowledge of how to document customer records with log of problems and solutions for use by other Technical Support Representatives.</li>
                <li>Should always identify opportunities to improve customer service levels</li>
                <li>Basic knowledge on how to provide feedback to leadership teams to improve environment</li>
              
                </ul>
            </div>
            <br><br>             <img src="assets/img/skill2/prerequisites.jpg" class="img-fluid corners" alt="Prerequisites Required for maintenance">


          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title">Rationale for Skill</h4>
              <p class="description">
               Have worked as technical support in a committee in my undergraduation.I feel change happens every moment and to maintain/upgade the system for the future. So troubleshooting is as important as building a new system.It helps maintain a critical software and avoids unwanted ageing.
              </p>
            </div>
<br><br>  <img src="assets/img/skill2/rationale.png" class="img-fluid corners" alt="Rationale">
          </div>
        </div>
        

        
        <div class="row">
          

          <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title">Related Software Engineering Areas</h4>
        <ul class="description">
               <li>Software Maintenance</li>
              <li>Software quality</li>
              <li>Software Engineering Management</li>
              <li>Software Engineering Professional Practice</li>
              </ul> 
            </div>
            <br><br> <img src="assets/img/skill2/areas.gif" class="img-fluid corners" alt="Roles That should have this skill">

          </div>


          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title">Roles for the Skill</h4>
              <ul class="description">
              <li>System Engineer</li>
              <li>Technical Support Respresentative</li>
              <li>Quality assurance Engineer.</li>
              </ul>

            </div>
<br><br> <img src="assets/img/skill2/roles.jpg" class="img-fluid corners" alt="Roles for skill">
          </div>
        </div>




<div class="row">
          

          <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title">Work related to the skill</h4>
              <br>
             <ul class="description">
              <li>Operations and maintenance Manual</li>
              <li>Information System risk Assessment</li>
              <li>Issues List</li>
              <li>Performance Test Plan and results</li>
            </ul>
            </div>
    


          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title">Role of Academia or Industry in Cultivating the Skill</h4>
             <p class="description">In the skill like TRoubleshooting both the Academia and Industry plays a very vital role.WE are currntly living in a digital era and we cannot deny the daily usage of different versatile technical platforms.While using some devices or platforms every individual needs to know the whereabouts.</p>
            </div>

          </div>
        </div>
        




        

        <div class="row">

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title">Tools Supporting the Skill </h4>
              <ul class="description">
                <li>Netstat</li>
              <li>Ping</li>
              <li>Nslookup</li>
              <li>Route</li>
              </ul>

            </div>
          </div>

          <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title"><a href=""> Skill Self-Assessment:</a></h4>
              <p class="description"> As a developer we need to constantly maintain the system that we use.Upgrade it to support new technologies and tools.So as a technical person we need troubleshooting every now and then.However ,I have given a bit less rating as exploration on a particular area never ends.<br></p>
                     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <span class="fa fa-star checked  "></span>
                      <span class="fa fa-star checked  "></span>
                      <span class="fa fa-star checked "></span>
                      <span class="fa fa-star checked "></span>
                      <span class="fa fa-star checked "></span>
                      <span class="fa fa-star checked  "></span>
                      <span class="fa fa-star checked "></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
            </div>
            
          </div>
        </div>

        <div class="row">
          

          
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title">References</h4>
              <p class="description">
              <ul class="description">
              <li>https://www.youtube.com/watch?v=i08A2uTDoa8</li>
              <li>https://www.examcollection.com/certification-training/network-plus-software-tools-to-troubleshoot-connectivity-issues.html</li>
              <li>https://youtu.be/wNS8eURYsFs</li>
              <li>https://documentation.commvault.com/commvault/v11/article?p=7573.htm></li>
              </ul>
          
              </p>

            </div>

          </div>
        </div>

        
        

      </div>
    </section><!-- End Why Us Section -->



    
  </main><!-- End #main -->
  <br>
    <!-- ======= Footer ======= -->
  <?php include 'footer.html';?>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><em class="fa fa-chevron-up"></em></a>
  <!-- Uncomment below i you want to use a preloader -->

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