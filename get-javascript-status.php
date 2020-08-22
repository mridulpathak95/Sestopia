<?php 
session_start();
$_SESSION['js'] = isset($_GET['js'])&&$_GET['js']=="0" ? "0":"1";

if(isset($_SESSION['js'])){

	$_SESSION['flag'] = true;
	header('location: search.php');
}
else{
	echo "not set";
} 


?>