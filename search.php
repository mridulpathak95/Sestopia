<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Search Content</title>
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
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link href="assets/css/style.css" rel="stylesheet">
	
</head>


<body>
  <!-- ======= Header ======= -->
  <?php 
	
	include 'header.html';
	 
	class Search{
				
		/**
		 *Read json data 
		 *
		 *@return $json_data returns array containing json data
		 */
		function get_json_data(){
			return json_decode(file_get_contents("index.json"), true);
			
		}
		
		/**
		 *Check whether search button is pressed or not 
		 *
		 *@return bool returns true if search button is pressed else false
		 */
		function is_search_set(){
			if(isset($_POST['search']) || isset($_SESSION['name'])){
				return true;
			}
		}
		
		/**
		 *Read json data 
		 *
		 *@return bool returns true if javascript is enabled or false
		 */
		function set_js_session(){
			if(!isset($_SESSION['js'])||$_SESSION['js']==""){

				echo "<noscript><meta http-equiv='refresh' content='0;url=get-javascript-status.php?js=0'> </noscript>";
				$js = true;

			}elseif(isset($_SESSION['js'])&& $_SESSION['js']=="0"){
				$js = false;
				$_SESSION['js']="";

			}elseif(isset($_SESSION['js'])&& $_SESSION['js']=="1"){
				$js = true;
				$_SESSION['js']="";
			}
			return $js;
		}
		
		/**
		 * Check if the results are found or not 
		 *@param array $words words to search
		 *@param array $data json_data
		 *@return bool returns true if results are found else false
		 */
		function check_results($words, $data){
						
			if(sizeof($words) == 1){
				$word = $words[0];
				if(empty($data[$word])){

					return false;
						
				}

				return true;
			}

			return true;
			
		}
		
		/**
		 * Print results 
		 *@param array $js javascript is enabled or not
		 *@param bool $element page related to results
		 *@param string $title title of the page
		 *@param string $img image related to given page
		 */		
		function print_result($js,$element,$title,$img){
			if ($js) {
							
						//	try{
						echo "<section class='blog'  data-aos='fade-up' data-aos-easing='ease-in-out' data-aos-duration='500'>
								<div class='container'>

								<div class='row'>";
									
						echo " <article class='entry'>

								  <div class='entry-img'>
									<img src='$img' alt='' class='img-fluid'>
								  </div>

								  <h2 class='entry-title'>
									<a href='$element'>$title</a>
								  </h2>

								</article>
								
								</div>
							</div>
						</section>";
						
					}
					
					else{
									
						echo "<center><a href='$element'>$title</a></center>";
						echo "<br>";
						unset($_SESSION['js']);
						echo isset($_SESSION['js']);
						
					}
		
		}
		
		/**
		 * Get the pages related to each word 
		 *@param array $words words to search
		 *@param array $data dataset
		 *
		 *@return $array containing word with each page valuess
		 */		
		private function get_words($words, $data){
			
			foreach($words as $word){
						
				if(!empty($data[$word]) && (count($data[$word]) > 0)){
				
						foreach($data[$word] as $value){
							$array[$value] = 1;
						}					
				}
			}
			return $array;
		}
		
		/**
		 * Get the results 
		 *@param array $words words to search
		 *@param bool $js javascript is enabled or not
		 *@param array $data json_data
		 *
		 */
		function get_page($words, $js, $data){
				
			$title = array("Creating Low-fidelity Prototypes", "Troubleshooting", "Requirement Elicitation",
			"Unit Testing","Software Quality Assurance","Web Scraping","Sestopia - Home Page");
			$images = array("assets/img/m_low_fidel.jpg", "assets/img/m_trouble.jpeg",
			"assets/img/blog-post-4.jpg","assets/img/blog-post-2.jpg","assets/img/m_trouble.jpeg",
			"assets/img/blog-post-2.jpg","assets/img/blog-post-2.jpg");
			$array = $array = $this -> get_words($words, $data);
			
			echo "<br><br><br>";		
			
			if(!$js){
				echo "<br>";
				echo "<center><b>JavaScript is disabled. Content may not be 
						rendered in proper format.</b></center><br>";
				echo "<center><b>Search Results are:</b></center>";
			} 

			foreach($array as $element =>$value){
					// create style sheet to show content
				switch($element){
							 
						case "skills1.php": $title_ = $title[0];
												$img = $images[0];
												break;
						case "skills2.php": $title_ = $title[1];
												$img = $images[1];
												break;
						case "skills4.php": $title_ = $title[2];
												$img = $images[2];
												break;
						case "skills5.php": $title_ = $title[3];
												$img = $images[3];
												break;
						case "skills6.php": $title_ = $title[4];
												$img = $images[4];
												break;
						case "skills7.php": $title_ = $title[5];
												$img = $images[5];
												break;
						case "index.php": $title_ = $title[6];
												$img = $images[6];
												break;
						default:
									
									$element = "";
							 
				}
			
				if($element !== ""){
					$this -> print_result($js,$element,$title_,$img);
				}
			
			} 
		}
		
	}
	
	
	$search = new Search(); 
	
	if($search->is_search_set()){
		
		$data = $search->get_json_data();
		
		if(isset($_SESSION['name'])){

			$name = $_SESSION['name'];
		}
		else{
			$name = $_POST['search'];
			$_SESSION['name'] = $name;

		}
		
		$words = explode(" ", $name);
		
		$js = $search -> set_js_session();
		$res = $search -> check_results($words,$data);

		if($res){
			$search -> get_page($words, $js, $data);		
		}
		else{
			echo "<center><b>Results not found</b></center><br>";
			echo "<center><b>Please try again</b></center>";
		}
		session_destroy();

	}
	
?>


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