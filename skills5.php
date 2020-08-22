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
            <br><br>
            <img src="assets/img/unit-testing/unit_intro.JPG" class="img-fluid" alt="Unit testing">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href="">Unit Testing</a></h2>
              <p class="description">Unit testing is a type of software testing in which individual units or components of a software system are tested.
              Unit is the smallest piece of code that can  be separated logically in a software system for example
              a function, a subroutine, a method, etc.  
              </p>
              <h3 class="title"><a href="">Classification</a></h3>
              <p class="description">Unit testing falls under the category of:</p>
              <ul class="description">
                <li>Technical skills</li>
                <li>Hard skills</li>
                <li>Knowledge based skills</li>
                <li>Functional/Transferable skills</li>

              </ul>
            </div>
          </div>
        </div>

        
        <div class="row">
          

          <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href=""> Prerequisites</a></h2>
              <ul class="description">
                <li>Basic understanding of Software Development Life Cycle (SDLC).</li>
                <li>Basic understanding of Software programming using any programming language</li>
                
              </ul>
            </div>
            <br>            <img src="assets/img/unit-testing/TDD.JPG" class="img-fluid" alt="Test driven development">


          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href=""> Rationale for Skill </a></h2>
              <p class="description">
               Unit tests help developers detect software bugs immediately, and quickly correct them.
               This helps in decreasing the number of resources spend in finding bugs, teams can move on to the next phase of
               development
          
              </p>

              <p class="description">
                In my experience as a full-stack developer- Java, I was asked to follow the principle of test-driven development and behavior-driven development along with unit testing. Unit testing is what.TDD is when, and BDD is how  In TDD, developers write unit tests first, then write the code. In BDD, the focus is not on expected results but on intended behavior I was introduced to unit testing during this phase and it gained my attention very quickly. Unit testing offers various benefits like refactoring, better code design, instant visual feedback. Because of all this and many more reasons, I am interested to gain expertise in Unit Testing.
              </p>
            </div>

          </div>
        </div>

        
        <div class="row">
          

          <div class="col-lg-6 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"> <i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href=""> Related Software Engineering Areas:</a></h2>
              <p class="description">Following are the related software engineering areas:</p>
              <ul class="description">
                <li>Software Development</li>
                <li>Software Testing</li>
                <li>Software engineering practices</li>
                <li>Software maintenance</li>
                <li>Software quality</li>
              </ul>
            </div>
            

          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"> <i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href=""> Roles for the Skill </a></h2>
              <p class="description">
               Following roles require expertise or intermediate knowledge of Unit testing:
          
              </p>
              <ul class="description">
                <li>Developers: In most of the cases, unit testing is done during the development phase by the developers.</li>
                <li>White box testers: Unit testing technique falls under white box testing.White box testing is also called as Transparent testing. In this, the tester knows the internal structure of the code and it can be tested against the design of the requirements.</li>
                <li>QA Engineers</li>
              </ul>

            </div>

          </div>
        </div>

        <div class="row">
          

          <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href=""> Work related to the skill:</a></h2>
              <p class="description">One of the most classic definition of Unit Testing is <em>"Unit Testing is the method of verifying the smallest piece of testable code against its purpose.” If the purpose or requirement failed then the unit test has failed.</em>
              </p>

              <div class="row">
          

                <div class="col-lg-7 d-flex flex-column  p-5">
      
                  <div class="icon-box">
                    <h3 class="title"style="font-size: medium";>Unit Testing: How to do unit testing?</h3>
                    <p class="description">
                      Most common type of testing is Automated testing. Software engineering as a process does not choose one over 
                      the other but automated testing is preferred. Whether performed manually or through automation tools,it follows a process.
                    </p> 
                    <h3 class="title" style="font-size: small;">General approach</h3>
                      <ul class="description">
                      <li>Creating and defining Unit Test Plans.</li>
                      <li>Unit Test Cases are designed based upon the Unit Test Plans.</li>
                      <li>Test cases are executed on the individual units.</li>  
                      <li>If any bugs are found, they are fixed and the unit is tested again.</li>
                      <li>Process of testing repeats itself until all the bugs are fixed.</li>
                      </ul>
                    
                  </div>

      
                  <br><br>            
      
      
                </div>

                
                <div class="col-lg-5 d-flex flex-column  p-5">
      
                  <div class="icon-box">
                    
                    <img style="border-radius: 10px;" src="assets/img/unit-testing/process.JPG" class="img-fluid" alt="Unit test process">                    
                    
                  </div>

      
                  <br><br>            
      
      
                </div>
                
              </div>

              <div class="row">
          

                <div class="col-lg-12  d-flex flex-column  p-5">
      
                  <div class="icon-box">
                    <h3 class="title"style="font-size: medium";>Unit Testing: Types </h3>
                    <p class="description">
                      There are three types of unit testing and each of this type ensures proper functioning of the software and serve to different requirement of the software.
                      Following are the different types of unit testing:
                      <ol class="description">
                        <li>Black Box Testing:In this, user interface of the software is tested, along with its input and output.</li>
                        <li>White Box Testing: It is used by developer to test the functional behaviour of the software and to validate the execution of the functions.</li>
                        <li>Gray Box Testing: It is used to test various test methods, perform risk assessment, and to execute test cases and test suite.</li>

                      </ol>
                      </p>
                      <img style="border-radius: 10px;" src="assets/img/unit-testing/types_testing.JPG" class="img-fluid" alt="Unit test types">  
                      <h3 class="title"style="font-size: medium";>Unit Testing: Techniques </h3>
                    <p class="description">
                      Following techniques assists execution of unit testing process:
                      <ol class="description">
                     <li>Functional Testing technique:
                       <ul>
                         <li>It is a black box testing technique.</li>
                         <li>Ensures that software behaves in the intended way.</li>
                         <li>Involves input domain testing, boundary value testing, syntax checking, equivalence partitioning etc</li>
                       </ul>
                     </li>
                     <li>Structural technique:
                       <ul>
                         <li>It is white box testing technique.</li>
                         <li>Performed by team of developers.</li>
                         <li>Requires in-depth knowledge of code.</li>
                         <li>Involves statement testing, branch testing, path testing, condition testing, expression testing, etc.</li>
                       </ul>
                     </li>
                     <li>Error based technique:
                      <ul>
                        <li>Identifies defects, bugs, and other discrepancies in the software.</li>
                        <li>Involves fault seeding, mutation testing, Historical test data.</li>
                      </ul>
                    </li>
                      </ol>
                      </p>                  

                  </div>
                </div>
              </div>


            </div>
            

          </div>
          
        </div>


        <div class="row">
          

         
          <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href=""> Examples: </a></h2>
              <p class="description">
              Mock objects are created to test sections of code that are not yet part of a complete application. Mock objects fill in for the missing parts of the program.
            For example, you might have a function that needs variables or objects that are not created yet. 
            In unit testing, those will be accounted for in the form of mock objects created solely for the purpose of the unit testing done on that section of code.
                <br>Following are few example of unit test case written in Java:<br><br><br>
                <div class="row">
          

                  <div class="col-lg-6 d-flex flex-column  p-5">
        
                    <div class="icon-box description">
                      Example 1: Function isPalindrome() of class Palindrome returns true if passed string is an palindrome. <br>
                      <code style="color: black;">
                        @Test<br>
                        public void testIsPalindrome(){<br>
                        string str="Dad";<br>
                        Palindrome palindrome=new Palindrome();<br>
                        boolean result=palindrome.isPalindrome(str);<br>
                        Assert.IsTrue(result);<br>
                        }<br>
                      </code>
                    </div>
                    
        
                  </div>
                  <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
        
                    <div class="icon-box description  ">
                      Example 2: Function add() of class Calculator returns addition of passed integers.<br>
                      <code style="color: black;">
                        @Test<br>
                        public void testAddition(){<br>
                        int res=4;<br>
                        Calculator cal=new Calculator();<br>
                        int result=cal.add(2,2);<br>
                        assertEquals(result,res);<br>
                        }<br>
                      </code>
        
                    </div>
        
                  </div>
                </div>
                
              </p>

            </div>

          </div>
        </div>
        <div class="row">
          

          <div class="col-lg-8 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href=""> Role of Academia or Industry in Cultivating the Skill:</a></h2>
              <br>
              <div class="description">
              <h3>Unit testing: Time consuming but Product saving</h3>
              <p >“Developing without unit tests is like being a trapeze artists without a safety net.” <br>— Marjan Venema.<br>Both Academia and Industry plays a signifacant role in cultivating a skill like unit testing.Unit testing offers various advantages like improving quality of code
                finding software bugs easily,facilitates changes, reduced cost and many more.<br>
                In recent times, Software industry has started adopting Test driven development approach along with Behaviour driven development.With 
                developement of agile methodologies like Extreme programming, unit testing has gained alot of importance, because of TDD.Test-driven development is a software development methodology in which unit tests are used to drive the development process.

              </p>
            </div>
            </div>
            

          </div>
          <div class="col-lg-4 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              
              <img style="border-radius: 10px;" src="assets/img/unit-testing/Academic-Industry-Interaction.jpg" class="img-fluid" alt="academia and industry diagram">                    

            </div>

          </div>
        </div>
        <div class="row">

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              
              <img style="border-radius: 10px;" src="assets/img/unit-testing/tools.JPG" class="img-fluid" alt="Unit test tools">                    

            </div>

          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href=""> Tools Supporting the Skill </a></h2>
              <p class="description">
               List of popular Unit testing tools include:
               
          
              </p>
              <ul class="description">
                <li>Java Framework - Junit</li>
                <li>PHP Framework - PHPunit</li>
                <li>C++ Framework - UnitTest++ and Google C++</li>
                <li>.NET Framework - NUnit</li>
                <li>Python Framework - py.test</li>
              </ul>

            </div>

          </div>
        </div>


        <div class="row">
          

          <div class="col-lg-8 d-flex flex-column  p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href=""> Skill Self-Assessment:</a></h2>
              <p class="description">Initial: 6/10. <br> Final: 8/10 <br><br>
              Rationale:
              since I have worked as a Java developer in the past, unit testing is not a new topic for me, but due to limited experience, I didn't have in-depth knowledge of the skill. Initially, I rated myself as 6 out of 10 because of limited experience. With the progression of the course and this project, I got the opportunity to learn about the skill in more detail by experiencing and performing the tasks which helped me to improve my skills a little bit.  
              </p>
            </div>
            

          </div>

          <div class="col-lg-4 d-flex flex-column  p-5">

            <div class="icon-box">
              <br><br>
              <img style="border-radius: 10px;" src="assets/img/unit-testing/self-assessment.jfif" class="img-fluid" alt="self assessment">                    

            </div>
            

          </div>

          <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-chevron-right" aria-hidden="true"></i></div>
              <h2 class="title"><a href=""> References </a></h2>
              <ul class="description">
                <li> Karac and B. Turhan, "What Do We (Really) Know about Test-Driven Development?," in IEEE Software, vol. 35, no. 4, pp. 81-85, July/August 2018, doi: 10.1109/MS.2018.2801554.</li>
                <li>Michael Olan. 2003. Unit testing: test early, test often. J. Comput. Sci. Coll. 19, 2 (December 2003), 319–328.
  
                </li>
                <li>Robert E. Noonan and Richard H. Prosl. 2002. Unit testing frameworks. SIGCSE Bull. 34, 1 (March 2002), 232–236. DOI:https://doi-org.lib-ezproxy.concordia.ca/10.1145/563517.563429</li>
                <li>https://www.guru99.com/unit-testing-guide.html#3</li>
                <li>https://www.tutorialspoint.com/software_testing/index.htm</li>
                <li>https://www.professionalqa.com/unit-testing</li>
                </ul>

            </div>

          </div>
        </div>

        
        

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">
    </section><!-- End Features Section -->
</section>
  </main><!-- End #main -->
  <br>
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