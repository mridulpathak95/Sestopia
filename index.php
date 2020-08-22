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

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script>

    var requirement = ["requirement" , "software" ,"elicitation" , "testing"];
    var engineering = ["engineering" , "software"];
    var maintenance = ["maintenance" , "software"];
    var testing = ["test" , "software"];


    function display(val) {
      var found = 0;
      document.getElementById("skill1").style.display = "none";
      document.getElementById("skill2").style.display = "none";
      document.getElementById("skill3").style.display = "none";
      document.getElementById("skill4").style.display = "none";
      document.getElementById("skill5").style.display = "none";
      document.getElementById("skill6").style.display = "none";
      // document.getElementById("search").style.display = "block";

      // var input = document.getElementById("search").value;
      var input = val
      for(var i=0;i<requirement.length;i++){

        var pos = input.search(requirement[i]);
        if(pos >= 0){
          document.getElementById("skill1").style.display = "block";
          found = 1;
          console.log("\n");
        }
      }

      for(var i=0;i<engineering.length;i++){

        var pos = input.search(engineering[i]);
        if(pos >= 0){
          document.getElementById("skill2").style.display = "block";
          found = 1;
          console.log("\n");
        }

      }

      for(var i=0;i<maintenance.length;i++){

        var pos = input.search(maintenance[i]);
        if(pos >= 0){
          document.getElementById("skill3").style.display = "block";
          found = 1;
          console.log("\n");
        }
      }

      for(var i=0;i<testing.length;i++){

        var pos = input.search(testing[i]);
        if(pos >= 0){
          document.getElementById("skill4").style.display = "block";
          found = 1;
          console.log("\n");
        }
      }

      if(found == 1){
        document.getElementById("search").style.display = "none";
        console.log("\n");
      }else{
        document.getElementById("search").style.display = "block";
        console.log("\n");
      }

    }

    function clearpage(){
        document.getElementById("main").style.display = "none"
        document.getElementById("intro").style.display = "none"
        document.getElementById("search").style.display = "block"
    }

    // function  outoffocus(){
    //     document.getElementById("main").style.display = "block"
    //     document.getElementById("intro").style.display = "block"
    //     document.getElementById("skill1").style.display = "none";
    //     document.getElementById("skill2").style.display = "none";
    //     document.getElementById("skill3").style.display = "none";
    //     document.getElementById("skill4").style.display = "none";
    //     document.getElementById("skill5").style.display = "none";
    //     document.getElementById("skill6").style.display = "none";
    //     document.getElementById("search").style.display = "none";
    //     document.getElementById("search").value = "";
    // }
  </script>
</head>

<body>

  <?php include 'header.html';?>

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">What is Sestopia ?</h2>
                <p class="animate__animated animate__fadeInUp">SESTOPIA is an information-intensive Web Application, accessible to anybody, anywhere, using any interactive device connected to the Internet. </p>
                <a href="shortnote.php" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/divya.png" class="testimonial-img" alt="">
            <h3>Divya Pandit</h3>
            <h4>Team Member &amp;Designer</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              I hope the product that we deliver named Sestopia helps students to transform themselves to successful future software engineers.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/kosha.jpg" class="testimonial-img" alt="">
            <h3>Koshaben Patel</h3>
            <h4>Team Member &amp;Designer</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/hitansh.jpeg" class="testimonial-img" alt="">
            <h3>Hitansh munjal</h3>
            <h4>Team Member &amp;Designer</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              An investment in knowledge pays the best interest. I hope SESTOPIA helps students to learn professional skills and  have a better future.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Raj Patel</h3>
            <h4>Team Member &amp;Designer</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/parth.jpg" class="testimonial-img" alt="">
            <h3>Parth Patel</h3>
            <h4>Team Member &amp;Designer</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Its not about winning, its more about not losing
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

            <div class="testimonial-item">
            <img src="assets/img/mridul.jpeg" class="testimonial-img" alt="">
            <h3>Mridul Pathak</h3>
            <h4>Team Member &amp;Designer</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              We wish to create a information-intensive website that inculcates our combined knowledge of our chosen skill area and enlightens the mind of the reader.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->
  </main><!-- End #main -->

  <section class="blog"  data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 entries">

            <article class="entry" id = "search">

                <div class="entry-img">
                    <img src="assets/img/m_low_fidel.jpg" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                    <a href="skills1.php">Search</a>
                </h2>

                <div class="entry-content">
                    <p>
                        Try Searching something</p>
                    <div class="read-more">
                        <a href="shortnote.php">Or explore here</a>
                    </div>
                </div>

            </article><!-- End blog entry -->

          <article class="entry" id = "skill1">

            <div class="entry-img">
              <img src="assets/img/m_low_fidel.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="skills1.php">Creating Low-fidelity Prototypes</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user" aria-hidden="true"></i> <a href="skills1.php">Koshaben
                  Patel</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock" aria-hidden="true"></i> <a href="skills1.php"><time datetime="2020-07-26">Jul 27, 2020</time></a></li>

              </ul>
            </div>

            <div class="entry-content">
              <p>
                Low-fidelity prototypes are constructed during early phase of software development life cycle and they serve a way to test the functional requirements.
              </p>
              <div class="read-more">
                <a href="skills1.php">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry" id = "skill2">

            <div class="entry-img">
              <img src="assets/img/m_trouble.jpeg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="skills2.php">Troubleshooting</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user" aria-hidden="true"></i> <a href="skills2.php">Divya
                  Pandit</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock" aria-hidden="true"></i> <a href="skills2.php"><time datetime="2020-07-27">Jul 27, 2020</time></a></li>

              </ul>
            </div>

            <div class="entry-content">
              <p>
                Troubleshooting is a process that helps people identify issues or problems occurring in a system. Troubleshooting tends to exist at a higher level than debugging and applies to many components of a system.
              </p>
              <div class="read-more">
                <a href="skills2.php">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry" id = "skill3">

            <div class="entry-img">
              <img src="assets/img/blog-post-3.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="skills3.php">Skill 3</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user" aria-hidden="true"></i> <a href="skills3.php">John
                  Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock" aria-hidden="true"></i> <a href="skills3.php"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>

              </ul>
            </div>

            <div class="entry-content">
              <p>
                Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et.
                Eum temporibus fugiat voluptate enim tenetur sunt omnis.
              </p>
              <div class="read-more">
                <a href="skills3.php">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry" id = "skill4">

            <div class="entry-img">
              <img src="assets/img/blog-post-4.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="skills4.php">Skill 4</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user" aria-hidden="true"></i> <a href="skills4.php">John
                  Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock" aria-hidden="true"></i> <a href="skills4.php"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>

              </ul>
            </div>

            <div class="entry-content">
              <p>
                Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum
                enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.

              </p>
              <div class="read-more">
                <a href="skills4.php">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry" id = "skill5">

            <div class="entry-img">
              <img src="assets/img/blog-post-2.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="skills5.php">Skill 5</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user" aria-hidden="true"></i> <a href="skills5.php">John
                  Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock" aria-hidden="true"></i> <a href="skills5.php"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>

              </ul>
            </div>

            <div class="entry-content">
              <p>
                Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo
                libero rerum voluptatem pariatur nam.
                Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia
                molestias laboriosam.
              </p>
              <div class="read-more">
                <a href="skills5.php">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry" id = "skill6">

            <div class="entry-img">
              <img src="assets/img/blog-post-2.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="skills6.php">Skill 6</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user" aria-hidden="true"></i> <a href="skills6.php">John
                  Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock" aria-hidden="true"></i> <a href="skills6.php"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>

              </ul>
            </div>

            <div class="entry-content">
              <p>
                Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo
                libero rerum voluptatem pariatur nam.
                Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia
                molestias laboriosam.
              </p>
              <div class="read-more">
                <a href="skills6.php">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry" id = "skill7">

            <div class="entry-img">
              <img src="assets/img/blog-post-2.jpg" alt="web scraping" class="center">
            </div>

            <h2 class="entry-title">
              <a href="skills7.php">Web Scraping</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user" aria-hidden="true"></i> <a href="skills7.php">Raj
                  Patel</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock" aria-hidden="true"></i> <a href="skills7.php"><time datetime="2020-07-27">July 27, 2020</time></a></li>

              </ul>
            </div>

            <div class="entry-content">
              <p>
                Web scraping is the process to extract data from one of the biggest data
                source, <i aria-hidden="true">"World Wide Web"</i>. It can be used as data preparation step to
                Natural Language Processing.
              </p>
              <div class="read-more">
                <a href="skills7.php">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

        </div><!-- End .row -->

      </div><!-- End .container -->

  </section><!-- End Blog Section -->

<?php include 'footer.html';?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>


  <!-- Vendor JS Files -->
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

 <script>
   document.getElementById("skill1").style.display = "none"
   document.getElementById("skill2").style.display = "none"
   document.getElementById("skill3").style.display = "none"
   document.getElementById("skill4").style.display = "none"
   document.getElementById("skill5").style.display = "none"
   document.getElementById("skill6").style.display = "none"
   document.getElementById("skill7").style.display = "none"
   document.getElementById("search").style.display = "none"

 </script>



</body>

</html>