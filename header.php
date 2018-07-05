<?php
  
    if(!isset($_SESSION)) 
    { 
        ob_start();
        session_start(); 
    } 
    
	require_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Feed Society</title>
	<link rel="icon" href="Assets/Images/logoW.gif" type="image/gif" sizes="16x16">

	<meta name="description" content="Feed Society">
    <meta name="author" content="Hadi Aamir">

	<!-- CSS STYLING -->
	<link rel="stylesheet" type="text/css" href="Assets/Style/index.css">
	<link rel="stylesheet" type="text/css" href="Assets/Style/category.css">
	<link rel="stylesheet" type="text/css" href="Assets/Style/user.css">
	<link rel="stylesheet" type="text/css" href="Assets/Style/terms.css">	
	<link rel="stylesheet" type="text/css" href="Assets/Style/responsive.css">	

	<!-- FONTS -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

      <script>(function(){var WebP=new Image();WebP.onload=WebP.onerror=function(){
if(WebP.height!=2){var sc=document.createElement('script');sc.type='text/javascript';sc.async=true;
var s=document.getElementsByTagName('script')[0];sc.src='js/webpjs-0.0.2.min.js';s.parentNode.insertBefore(sc,s);}};
WebP.src='data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';})();</script>
</head>

<header>
	
	<nav class="navbar">

		<!-- Responsive Navigation -->
		<div id="myNav" class="overlay">

		  <!-- Button to close the responsive navigation -->
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

			<!-- Navigation Content (mobile) -->
			<div class="overlay-content">

				<!-- Page links -->
			    <div class="res-nav">	
			    	<ul>
						<li><a href="fashion.php">Fashion</a></li>
						<li><a href="sneakers.php">Sneakers</a></li>
						<li><a href="music.php">Music</a></li>
						<li><a href="sports.php">Sports</a></li>
					</ul>
				</div>

				<hr>

				<!-- Term links -->
				<div class="footer-terms">	
					<ul>
						<a href="about.php">About Us</a>
						<a href="team.php">Our Team</a>
						<a href="contact.php">Contact Us</a>
						<a href="terms.php">Terms & Conditions</a>
						<a href="privacy.php">Privacy Policy</a>
					</ul>
				</div>

	 		 </div>

		</div>

		<!-- Setting logo as a link to the menu -->
		<span onclick="openNav()">
			<div id = "nav-logo" href="">
				<img src="Assets/Images/logoW.svg">
			</div>
		</span>

		<!-- Expanding menu -->
		<script>
			function openNav() 
			{
			    document.getElementById("myNav").style.width = "100%";
			}

			function closeNav() {
			    document.getElementById("myNav").style.width = "0%";
			}
		</script>

			<!-- Navbar Content (website) -->	
			<div class="navbar-options">
					<ul>
						<li><a href="fashion.php">Fashion</a></li>
						<li><a href="sneakers.php">Sneakers</a></li>
						<li><a href="music.php">Music</a></li>
						<li><a href="sports.php">Sports</a></li>
					</ul>
				</div>
			
			<!-- Login Menu -->
			<div class="dropdown">
			  	
			  	<!-- Login Menu Button -->
				<button class="dropbtn">
					<i  class="fas fa-user" style="font-size:2em; color:#fff"></i>
				</button>
				
			<?php 
				/*If user is logged in*/
				if (isset($_SESSION['user'])) 
				{
					/*Display logout option*/
					echo' <div class="dropdown-content">
							 <a method="POST" name="logout" href="logout.php">Logout<span>  →</span></a>
						  </div>';
				}
				else
				{	
					/*Display login/signup option*/
					echo' <div class="dropdown-content">
						 	<a href="login.php">Login<span>  →</span></a>
							<a href="register.php">Sign Up<span>  →</span></a>
						  </div>';
					}
			  ?>

			</div>

	</nav>

</header>