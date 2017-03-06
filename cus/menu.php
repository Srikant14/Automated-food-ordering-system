<?php

//session_start();

$username = "";

if(isset($_POST['user'])){
    $username = $_POST['user'];
    //echo "Your registration is: ".$username.".";

}



?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MENU</title>
				<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" href="https://fonts.googleapis.com/css?family=Tangerine" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
					<div class="abso">
					<strong>BAYVIEW</strong>
					</div>
					<div class="absolute">

					<ul><a  href="bayview1.php">LOGOUT</a>
                    <a href="">CALL WAITER</a>
                    
                           <p style="font-size:15px; font-color: green;"><?php echo "Logged in as ".$username."."; ?> </p>
                            <!--<input  name="user" placeholder="Username"/>
                            <p> Username </p>-->
                      </div>      
                    </ul>
                    </div>
					</header> 

				<!-- Menu -->
				
				<!-- Banner -->
					<section id="banner" class="major">
					<div class="inner">
					<div class="image">
					<img src="steak.jpg" alt="" /></div>
								<ul class="actions">
									<ul><a href="#one" class="button next scrolly">Get Started</a></ul>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					

						<!-- One -->
							<section id="one" class="tiles">
								<article>
								
									<span class="image">
										<a href="indian.php"><img src="indian.jpg" alt="" /></a>
									</span>
									<header class="major">
										<h3><a href="indian.php" class="link">INDIAN</a></h3>
										
									</header>
									
								</article>
								<article>
									<span class="image">
										<a href="chinese.php"><img src="CHINESE.jpg" alt="" /></a>
									</span>
									<header class="major">
										<h3><a href="chinese.php" class="link">CHINESE</a></h3>
										
									</header>
								</article>
								<article>
									<span class="image">
										<a href="dessert.php"><img src="deserts.jpg" alt="" /></a>
									</span>
									<header class="major">
										<h3><a href="dessert.php" class="link">DESERTS</a></h3>
										
									</header>
								</article>
								<article>
									<span class="image">
										<a href="drinks.php"><img src="drinks.jpg" alt="" /></a>
									</span>
									<header class="major">
										<h3><a href="drinks.php" class="link">DRINKS</a></h3>
										
									</header>
								</article>
								
							</section>

						<!-- Two -->
			
				<!-- Contact -->


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>