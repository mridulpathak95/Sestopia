<?php session_start();?>
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

   
    <!-- ======= Why Us Section ======= -->
   <?php 
		$_SESSION['js'] = isset($_GET['js'])&&$_GET['js']=="0" ? "0":"1";
				$js = true;
		if(!isset($_SESSION['js'])||$_SESSION['js']==""){
		
				echo "<noscript><meta http-equiv='refresh' content='0;url=skills7.php?js=0'> </noscript>";
				
				

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
          
          <div class="col-lg-6">
            <img src="assets/img/prototyping/prototype.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h4 class="title"><a href="">Creating Low-fidelity Prototypes</a></h4>
              <p class="description">Low-fidelity prototypes are constructed during early phase of software development life cycyle. Low-fidelity prototypes serve a way to test functional requirements.
			  Bunch of tools such as Balsamiq Mockups, InVision, Webflow and so on is used. Basically, to see Software requirmenets in visual design, prototyping is used. 
              </p>
              <h6 class="title"><a href="">Classification</a></h6>
              <p class="description">Creating Low-fidelity Prototypes falls under the category of:</p>
              <ul class="description">
                <li>Non Technical skills</li>
                <li>Soft skills</li>
                <li>Cognitive skills</li>
              </ul>
            </div>
          </div>
        </div>

        
        <div class="row">
          

          <div class="col-lg-6">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"  aria-hidden="true"></i></div>
              <h4 class="title"><a href=""> Prerequisites</a></h4>
              <ul class="description">
				        <li>Interpretation of Software functional requirements.</li>
                <li>Empathizing with web user agents.</li>
                <li>To be able to work collaboratively with teams and web user agents.</li>
				<li>Excellent interpersonal and communication skills.</li>
                <li>Excellent interpersonal and communication skills.</li>
                <li>Inferred knowledge accumulation through years of experience in UI designing.</li>
                <li>Knowledge of rendering information in layout that is easy to grasp for humans.</li>
                
              </ul>
            </div>        


          </div>
		  <div class="col-lg-6">
			 <img src="assets/img/prototyping/collaboration.jpg" class="img-fluid" alt="" >
		  </div>
          
        </div>

        
        <div class="row">
          

          <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"  aria-hidden="true"></i></div>
              <h4 class="title"><a href=""> Related Software Engineering Areas:</a></h4>
			  <ul class="description">
                <li>Software Requirements </li>
                <li>Software Construction</li>
                <li>Software Testing</li>
              </ul> 
            </div>
            

          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"  aria-hidden="true"></i></div>
              <h4 class="title"><a href=""> Roles for the Skill </a></h4>
              <p class="description">
               Following roles require expertise or intermediate knowledge of Creating Low-fidelity Prototypes:
          
              </p>
              <ul class="description">
                <li>UI/UX designers: Individuals inherently responsible to provide seamless experience and who are more concerned with usability of the system.</li>
				        <li>UI/UX Graphics Designers: Individuals responsible for providing a nice look and feel of the website. ui/ux designers are expected to know the basics of graphic designing tools.</li>
                <li>Business analyst: Individuals are responsible to elicit requirements and build mockups, wireframes for usability testing.</li>
              </ul>

            </div>

          </div>
        </div>
		
		<div class="row">
			<div class="col-lg-12">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"  aria-hidden="true"></i></div>
              <h4 class="title"><a href=""> Rationale for Skill </a></h4>
              <p class="description">
               To validate software functional requirements, developing low-fidelity prototypes can make the process easier. Also, user feedback is collected by showing users prototype to make sure
			   we are on the right track. In Software industry where requirements are often unclear, vague, inconsistent and changing all the time, prototypes serve a way to gather user feedback and
			   avoid confusion right from the begining leading to customer satisafaction.
          
              </p>

              <p class="description">
                Requirements on paper mean little to users, what they want to see is visual design. Often users are able to communicate easily when displayed prototypes and sometimes new requirmenets are also 
				introduced. As changes to later in sofware development life cycle cost higher, it is useful to have solid user feedback right from the begining that will enhance usability of the system.
              </p>
            </div>

          </div>
		
		</div>
        <div class="row">
          

          <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"  aria-hidden="true"></i></div>
              <h4 class="title"><a href=""> Work related to the skill:</a></h4>
              <p class="description">
              UI/UX development: In the software industry, many times roles and responsibilities are assigned interchangeably. Business analysts elicit requirements and UI/Ux designers are responsible for building prototypes. Also, UI/UX designers are given job to develop user interfaces using front end technologies. In industry, for UI/UX designers it is expected to know front end technologies.
              </p>

              <p class="description">
              Technical documentation: Not only Ui design is implemented by UI/UX designers. But the whole process is documented if a certain software development life cycle such as waterfall is followed by a company.
              </p>

              <p class="description">
              Working  collaboratively: As Ui/ux designers work with business analysts, it is expected of a person that working in a team is his/her cup of tea. Also, the person is expected to have excellent interpersonal,communication, and writing skills.
              </p>
			  <p class="description">
              Prototyping: Prototyping requires reading in between the lines of a big pile of software requirements. Also, empathizing with a wide range of age groups of web user agents is also a concern for them and prototype design should reflect that Ui design is carefully done. 
				</p>
			</div>
            

          </div>
          
        </div>


        <div class="row">
          

         
          <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"  aria-hidden="true"></i></div>
              <h4 class="title"><a href=""> Real-World Example/Scenario of Skill: </a></h4>
              

					<img src="assets/img/m_low_fidel.jpg" class="img-fluid corners" alt="">
					<a href="https://www.youtube.com/watch?v=CDQzoLWKeHM" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" ></a>

			
			  

            </div>

          </div>
		  
		  <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"  aria-hidden="true"></i></div>
              <h4 class="title"><a href=""> Role of Academia or Industry in Cultivating the Skill:</a></h4>
              <p class="description">Use of prototyping is widely acknowledged in industry as well as academia. Academia prepares individuals by providing them projects. Some courses make students document the evolution of prototyping. Not only that, students go through literature before making decisions about the layout of web content, to use contrast colours, placement of buttons,menus, content and so on. I observed and have studied courses in academia where I have done documentation and prototyping.</p>
              <p class="description">In industry, prototyping is important as users provide early feedback to minimize errors,  helpful in usability testing and requirements validation. Also, UI/Ux designer and Business analyst jobs provide an example of the importance of prototyping.</p>
            </div>
            

          </div>
        </div>
        <div class="row">
          

          
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"  aria-hidden="true"></i></div>
              <h4 class="title"><a href=""> Tools Supporting the Skill </a></h4>
              <p class="description">
               List of popular Unit testing tools include:
               
          
              </p>
              <ul class="description">
                <li>Balsamiq Mockups</li>
                <li>InVision</li>
                <li>Axure</li>
                <li>Figma</li>
                <li>Webflow</li>
                <li>Pen and Paper</li>
                <li>Adobe Phptoshop</li>
              </ul>

            </div>

          </div>
		  <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"  aria-hidden="true"></i></div>
              <h4 class="title"><a href=""> Skill Self-Assessment:</a></h4>
              <p class="description">As previously disucssed a lot goes in building low fidelity prototypes from colour contrast to placing Ui elements on screen. As I am exploring how to learn empathizing with users, I would give myself a score of 6 out of 10 for creating low-fidelity prototypes.</p>
            </div>
            

          </div>
		  
        </div>

        <div class="row">
          

          
          <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right"  aria-hidden="true"></i></div>
              <h4 class="title"><a href=""> References </a></h4>
              <p class="description">
              https://businessanalystlearnings.com/blog/2014/7/29/the-role-of-bas-in-user-interface-design
              </p>
              <p class="description">
              https://uxplanet.org/user-experience-design-process-d91df1a45916
              </p>
              <p class="description">
              https://blog.zipboard.co/why-is-prototyping-important-13150d76abc4
              </p>
              <p class="description">
              https://sci-hub.st/https://journals.lww.com/optvissci/Fulltext/2014/03000/Blink_Patterns__Reading_from_a_Computer_Screen.9.aspx
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

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"  aria-hidden="true"></i></a>
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