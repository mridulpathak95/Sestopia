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
	<style>
		p.discription,li{
			font-size:16px;
		}
	</style>
  
</head>


<body >
  <!-- ======= Header ======= -->
  <?php include 'header.html';?>
  <!-- End Header -->

  <!-- ======= Featured Services Section Section ======= -->
   


    <section id="featured-services">
      

   
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
            <img src="assets/img/web-scraping/scraping.png" class="img-fluid" alt="Web scraping" style="margin:30px 50px;height:450px" >

          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title"><a href="">Web Scraping</a></h4>
              <p class="description" style="font-size:16px">
			  Web scraping is the technique to extract data from websites. Web scraping software may access the World Wide Web directly using 
				  the Hypertext Transfer Protocol, or through a web browser. 
				  While web scraping can be done manually by a software user, the term 
				  typically refers to automated processes implemented using a bot or web crawler. 
			  </p>
              
            </div>
          
		
		  <div class="icon-box">
		  <div class="icon"><em class="bx bx-chevron-right"></em></div>
			<h6 class="title"><a href="">Classification of skill</a></h6>
              <p class="description"></p>
              <ul class="description">
				<li>Technical Skill</li>
				<li>Hard Skill</li>
			  </ul>
			 </div>
		  </div>
		  
        
		</div>
        
        <div class="row">
          
			
          <div class="col-lg-6 ">

            <div class="icon-box" style="margin:0 0 0 35px;">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title"><a href=""> Prerequisites</a></h4>
              <ul class="description">
				<li>Basic knowledge of web development(HTML, CSS, JavaScript)</li>
				<li>Entry-level experince in any of the scripting language.</li>
				<li>Knowledgenowledge of various file formats.</li>
				<li>Database management skills.</li>                
              </ul>
            </div>
            
          </div>
		  <div class="col-lg-6">

            <div class="icon-box" style="margin:0 0 0 35px;">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title"><a href=""> Related Software Engineering Areas:</a></h4>
			  <ul class="description">
                <li>Software Construction</li>
              </ul> 
            </div>
            

          </div>          
        </div>
		
		<br>
		<div class="row">
			<div class="col-lg-12 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title"><a href=""> Rationale for Skill </a></h4>
			  <p class="discription" style="margin:0 0px 13px 85px;"> Web scraping provides techniques to automate 
			  the extraction of data over Internet. Data is the core of many research and 
			  business strategies, and the biggest collection of data is <em>World Wide 
			  Web (www). </em>
			  This makes web scraping as one of the most in demand skills.
			  
			  It helps to structure data distributed over the web. This information can be 
			  later used to take business decisions, helps government to decide and organize 
			  resources, and used to one the recent emerging area, Machine Learning, and more.

			  Hence, it addresses the issue regarding <em>Availability of data</em>.
			  </p>
            </div>

          </div>
		</div>

        
        <div class="row">
         
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title"><a href=""> Roles for the Skill </a></h4>
              <p class="description" style="font-size:16px">
               Following roles expect an expertise or intermediate knowledge of 
			   managing data:
          
              </p>
              <ul class="description">
				 <li>Web scraper</li>
				 <li>Data Analyst</li>
				 <li>Data Engineer</li>
				 <li>Software developer</li>
				 <li>Data scientist</li>
				 <li>Security Engineer Investigator</li>

              </ul>

            </div>

          </div>
		  <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title"><a href=""> Tools Supporting the Skill </a></h4>
              <p class="description" style="font-size:16px">
               Following are some of the tools for extracting information through web:         
              </p>
              <ul class="description">
					<li>Programming IDE (for instance PyCharm for python)</li>
					<li>Scrapy</li>
					<li>Selenium</li>
					<li>Beautiful Soup</li>
					<li>requests</li>
              </ul>

            </div>

          </div>
        </div>

        <div class="row">
          

          <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title"><a href=""> Work related to the skill:</a></h4>
              <p class="description" style="font-size:16px">
				<strong>Data Mining</strong>: Data mining helps in extracting information 
				from data set and organizes it for future use. With the help of web scraping,
				dataset is created crawling information over the internet.
              </p>
			  <p class="description" style="font-size:16px">
				<strong>Web Developer</strong>: Web scraping involves crawling pages over the internet
				and requires a proper understanding of web components. 
              </p>
			  <p class="description" style="font-size:16px">
				<strong>Software developer</strong>: To automate the task of retriving desiserd information,
				it is useful to have enough knowledge of scripting languages. This closely resembles 
				to the role of software developer.
              </p>
			  <p class="description" style="font-size:16px">
				<strong>Big Data Engineer</strong>: The role of big data engineer is to create and manage 
				infrastructure that involves a very huge amount of data. It includes understanding
				of data minining in order collect and properly organize the data.
              </p>
			  <p class="description" style="font-size:16px">
				<strong>Data Scientist</strong>: The tasks of data scientist is to extract the information from 
				dataset and involves understanding of areas like data mining, machine learning and big data.
              </p>
			  
            </div>
            

          </div>
          
        </div>


        <div class="row">
          

         
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title"><a href=""> Examples: </a></h4>
              <p class="description" style="font-size:16px">
               Web scraping can be used in areas that invloves interaction with data.
			   To discuss a few, web scraping can be used by a browser and crawl through 
			   web pages and manages an index as key value pair with key being a word and
			   values will be associated pages with it. This way it provides an efficient 
			   way to create database for search engine. Google does similar job involving more
			   complex structure but the idea is the same. You can read more 
			   <a href="https://support.google.com/webmasters/answer/70897?hl=en#:~:text=Crawling%20is%20the%20process%20by,%2C%20bot%2C%20or%20spider).">
			   here</a>. Following video provides more insights towards the usage of web scraping.
          
              </p>

            </div>

          </div>
		  <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
             
				<img src="assets/img/web-scraping/scraping.png" class="img-fluid corners" alt="Web scraping">
				<a href="https://www.youtube.com/watch?v=2XfA0e4Bzkk" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" ></a>

            </div>

          </div>
        </div>
        <div class="row">
          

          <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><em class="bx bx-chevron-right"></em></div>
              <h4 class="title"><a href=""> Role of Academia or Industry in Cultivating the Skill</a></h4>
              <p class='description' style="font-size:16px">One of the basic requiremnets to learn this skill
			  is to have knowledge of web development and programming. Good curriculum
			  focusing on these requirements along with mini projects helps students 
			  to gain insights about the skill. 
			  
			  Events and Hackathons organized by industries provide creates opportunity
			  to learn and apply skill in real scenarios. Internship opportunities and 
			  collaborative research with academia helps students to learn practical 
			  aspects and also the security issues related to applying 
			  such skill. 
			  </p>
          </div>
          
        </div>
		
		<div class="col-lg-6 d-flex flex-column  p-5">

					<div class="icon-box">
					  <div class="icon"><em class="bx bx-chevron-right"></em></div>
					  <h4 class="title"><a href=""> Skill Self-Assessment:</a></h4>
					  <p class="description" style="font-size:16px">
					  I applied skill to this project to scrap data and index it 
					  to create dataset for search engine. It helped me understanding
					  elements to be more focused on, got familiarize with 
					  tools involved. So I will give myself a score of <strong> 8 out of 10</strong> 
					  for this skill.
					  
					  </p>
					</div>
				

			  </div>
		</div>

        <div class="row">
			  <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

				
				  
				  <h4 class="title"><a href="" style="color:black"> <strong>References</strong> </a></h4>             
				  <ul>
					<li>Shaon Barman, Sarah Chasins, Rastislav Bodik, and
						Sumit Gulwani. 2016. Ringer: Web Automation by
						Demonstration. In Proceedings of the 2016 ACM
						SIGPLAN International Conference on Object-Oriented
						Programming, Systems, Languages, and Applications
						(OOPSLA 2016). ACM, New York, NY, USA, 748–764.
						DOI:http://dx.doi.org/10.1145/2983990.2984020
					</li>
					<li>https://www.linkedin.com/jobs/search/?geoId=101174742&keywords=web%20scraping&location=Canada</li>
					<li>https://www.ziprecruiter.com/Jobs/Web-Scraping</li>
				  </ul>

			  </div>
		</div>

        
        

      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->
  <br>
  <br><br>
    <!-- ======= Footer ======= -->
  <?php include 'footer.html';?>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
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