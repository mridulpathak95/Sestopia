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
                    <img src="assets/img/elicitation/re.png" class="img-fluid" alt="Requirement Elicitation">
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title">Requirement Elicitation</h1>
                        <p class="description">Requirement Elicitation is process of gathering the requirements of system from users,customers and other stakeholders.It is also referred
                            to as sometime Requirement Gathering.</p>
                        <h2 class="title"><a href="">Classification</a></h2>
                        <p class="description"></p>
                        <ul class="description">
                            <li>Non Technical skills</li>
                            <li>Soft skills</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row">


                <div class="col-lg-6 d-flex flex-column  p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title"> Prerequisites</h1>
                        <ul class="description">
                            <li>Before beginning of the elicitation process we need to know the "what" and "why" of the product. Requirement elicitation
                            inclines to "Getting the Right System" rather than "Getting the Right Software",which is to be achieved by later phases of
                                development</li>
                            <li> One must have a clear understanding of the software needs. One must clearly understand the comprehensive and accurate understanding of the software needs. Because this can help the analyst to avoid from scope creep.
                            </li>
                            <li> He/she must have excellent communication skills: for talking to, and listening from diverse people.</li>

                        </ul>
                    </div>
                    <br><br>            <img src="assets/img/elicitation/image2.jpeg" class="img-fluid" alt="Requirement Elicitations" >


                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title"> Rationale for Skill</h1>
                        <p class="description">
                            Requirement acquisition or gathering is the first and most important part of software development. It plays a major role in understanding what the user actually wants from the software. Between changing user-demands and high probability of project failure, requirement elicitation plays a major role in success of project.
                            Since requirement gathering is a process which includes more of both synchronous and non-synchronous communication
                            , which is very important in any aspect of job. <br>
                            It is the first step towards development of any software or project.
                        </p>

                        <p class="description">
                            </p>
                    </div>

                </div>
            </div>


            <div class="row">


                <div class="col-lg-6 d-flex flex-column  p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title"> Related Software Engineering Areas:</h1>
                        <ul class="description">
                            <li>Software Requirements </li>
                            <li>Software Construction</li>
                            <li>Software Testing</li>
                        </ul>
                    </div>


                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title"> Roles for the Skill </h1>
                        <p class="description">
                        </p>
                        <ul class="description">
                            <li>Business Analyst</li>
                            <li>Application Manager/Architecture</li>
                            </ul>

                    </div>

                </div>
            </div>

            <div class="row">


                <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title"> Work related to the skill:</h1>
                        <p class="description">

                            <ul class="description" >
                            <h2 class="title">Main activities and roles related to skill are:</h2>
                                <li>Identify the stakeholders and create a diverse pool of stakeholders for elicitation.</li>
                                <li>Communicate with stakeholders efficiently to know exactly how user wants the software to behave.</li>
                                <li>To draw a straight line between ‘needs’ and ‘wants’ of user.</li>
                                <li>Get as much as information to explicit from implicit for software requirements.</li>
                                <li>Document this requirement in a proper and professional way such that it is easily accessible and clearly understandable by all members and all changes are easily traceable.</li>
                            </ul>
                            <ul class = "description">
                                <h2 class="title">There are two main techniques for requirement elicitation:</h2>

                            <li><strong style = "font-size: medium;">Artefact-driven elicitation techniques</strong></li>
                            <ul class = "description">
                                <li><strong>Stakeholder analysis:</strong>
                                The first step in elicitation process is stakeholder analysis. Knowing the people who are actually
                                involved with the product is very important. Since these people will have direct impact on product,
                                its very important to select a diverse group and this selection can be based on relevant position in
                                organisation, influence in system acceptance, level of domain expertise etc.</li>
                                <li><strong>Background Study:</strong>
                                This involves study and collection of data related to the organization, domain and the system-as-is.</li>
                                <li><strong>Questionnaires:</strong>
                                In this method a number of questions are given to stakeholders each with possible number of
                                answers in form of multiple choice questions.</li>
                                <li><strong>Scenarios and Story Boards:</strong>
                                In this technique stories or scenarios is presented using pictures, snapshots etc. to let stakeholder get
                                into the understanding of how the system-to-be work. In this technique the either the stakeholder can
                                contribute (Active mode) or the stakeholder are told(Passive mode) the story.</li></ul>

                            <strong style = "font-size: medium;"><li>Stakeholder-Driven Elicitation Techniques</li></strong>
                            <ul class = "description">
                                <li><strong>Interviews:</strong></li>
                                It’s the primary way of requirement gathering. An interview is conducted with a group of stakeholders and questions are asked. Answers for each question is recorded and documented properly for validation and future purposes. Interviews can be of two:
                                <ol class = "description" start="i">
                                    <li>	Structured – predetermined set of questions</li>
                                    <li>	Unstructured – no predetermined set of questions</li>
                                </ol>
                                <li><strong>Observations:</strong></li>
                                In this technique task are observed that are performed by stakeholders. 	The observation can be passive – no interference with the task and active – getting involved in the task. This helps to better understand the actual requirement and understand how the recent system-as-is actually works.

                                <li><strong>Group sessions</strong></li>
                                In this method regular workshops are conducted so that in each meeting follow-up is carried on. This can be as well structured and non-structured group sessions.
                            </ul>
                        </ul>
                        </p>
                    </div>


                </div>

            </div>


            <div class="row">



                <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title"> Examples: </h1>
                        <p class="description">

                        <h2 class="title"><a href = "https://youtu.be/lkfZwVPKbsE">Business Analyst <a href = "https://youtu.be/lkfZwVPKbsE">:<em style="font-size: 24px;color:red;" class = "fa fa-youtube-play"></em></a></h2>
                        <ul class="description">
                        One the most important role performed by Business Analyst includes requirement gathering.<br>
                        A Business Analyst is has following responsibilities:
                        <li>Perform requirements stakeholder analysis to identify impacted or influencing groups and stakeholder
                            requirements responsibilities.</li>
                        <li>Develop plans and accurate estimates for completion of requirements, continuously improving the level of
                            detail and accuracy of estimates.</li>
                        <li>Facilitate collaborative sessions with large and diverse business stakeholder groups to drive requirements discovery, analysis,
                            and review.</li>
                        <li>Build and maintain a repository of reusable requirements documentation to support future initiatives, following
                            the enterprise standards</li>
                        <li>Prepare requirements for review applying various communication techniques and lead
                            requirements walkthrough and sign off sessions</li>
                        <li>Review and provide input and/or approval on related project
                            artifacts for quality, consistency, and alignment to requirements</li>
                        </ul>
                        </p>

                    </div>

                </div>
            </div>
            <div class="row">


                <div class="col-lg-6 d-flex flex-column  p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title"> Role of Academia or Industry in Cultivating the Skill:</h1>
                        <p class="description">
                            <ul class="description">
                            <li>Academia plays as a starting step in cultivating this skill. Students usually take a course
                                which might include a small portion of their assessment in terms of project which sometimes
                                needs to conduct in group with other students. Since working with new students on different
                                projects opens door to exposure to diverse group of people. And this need indeed helps them to
                                cultivate the one and most required prerequisite is communication skills. Interacting with other
                                students and trying to understand what exactly they want to propose to team and what they actually
                                mean, adds to the skill as well.</li>
                            <li>In some courses, the project can be an individual one. In this practice, the student then
                                needs to communicate with professor and understand the exact requirements of project. This in
                                turn leads to learning the way of communication required in formal ways as well where elicitation
                                has to be performed in an organization, where a hierarchy of role system is followed.</li>

                            <li>In industry, as we are exposed to more and more projects and different diverse organisations
                                and team members, a ball of experience starts building up. The road from experience to expertise
                                comes with time and exposure. The more one goes through same process with different set of randomness
                                the distance between experience and expertise decreases.</li>
                            </ul>
                        </p>
                    </div>


                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title"> Tools Supporting the Skill </h1>
                        <p class="description">

                            There a number of tools available to support and ease the process of requirement elicitation.

                            <ul class="description">
                            <li><strong>Microsoft Visio:</strong> It is available as both a downloadable software and online version. It is a
                                diagramming software which helps to create from charts to flow diagrams to use case diagram. It
                                provides a vast collection of templates from which user can select. Since use case diagram(user stories)
                                are one of the most powerful techniques used for requirement gathering, Microsoft Visio provides proper
                                platform to facilitate the same.</li>
                                <br>
                            <li><strong>IBM Requirement Engineering Management DOORS Next</strong><a href = "https://youtu.be/P2KKdCrejFc"  style="color: #383d41">:<em style="font-size: 24px;color:red;" class = "fa fa-youtube-play"></em></a>  This software provides a variety of functionalities
                                from requirement management to risk management. Use of this tool enables the developers to gain
                                transparency between user’s expectation and actual product. Use of this kind of software enables
                                the development of team be clear visibility of changing requirements, capture all annotations and
                                access them easily.</li>
                            </ul>


                        </p>

                    </div>

                </div>
            </div>

            <div class="row">


                <div class="col-lg-6 d-flex flex-column  p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title">Skill Self-Assessment:</h1>
                        <p class="description">At current stage, I would give myself a score of 7 out of 10 for Requirement
                            Elicitation.<br>
                        Development of Sestopia saw a lot of ups and downs in the development. As a requirement gatherer it's very important to
                            know as much about the user needs since any changes in requirement can lead to huge cost in time as well as effort.
                            Somewhere during the changes made to system at different point of development, I realized that if only every aspect of
                            requirements was explored properly, the development might have gone more smoothly. Nonetheless the system was developed exactly
                            as per the requirements with required amount of time of effort and was deployed successfully.
                        </p>
                    </div>


                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><em class="bx bx-chevron-right"></em></div>
                        <h1 class="title">References </h1>
                        <p class="description">
                            <ol class="description">
                            <li>https://www.modernanalyst.com/Resources/Articles/tabid/115/ID/1427/An-Overview-of-Requirements-
                                Elicitation.aspx</li>
                            <li>https://medium.com/@dltlabs/requirement-elicitation-techniques-for-business-analysis-ed0a3d405910</li>
                            <li>https://qracorp.com/requirement-elicitation-techniques/</li>

                            <li>https://jazz.net/previews/?&_ga=2.108588992.390103519.1596857728-578458089.1596857728#dng</li>
                            <li>https://www.ibm.com/products/ibm-engineering-requirements-management-doors-next</li>
                            <li>Axel van Lamsweerde - Requirements Engineering_ From System Goals to UML Models to Software Specifications (2009, Wiley)</li>
                            <li>https://g.co/kgs/p5u42W</li>
                        </ol>
                        </p>

                    </div>

                </div>
            </div>




        </div>
    </section><!-- End Why Us Section -->

    </section><!-- End #main -->
    <br>
    <!-- ======= Footer ======= -->
    <?php include 'footer.html';?>
    <!-- End Footer -->

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