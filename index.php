<?php 	
		
		session_start();
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
		include "includes/db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fitness & Awareness Web Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./styles.css">
</head>	
<body>
	<div class="container">
		<header class="header">
			<nav class="navbar">
				<a class="logo" href="index.php"><img src="images/logo1.png"/></a>
			<ul>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="contact.php">Contact</a></li>	
			</ul>
		</nav>
	</header>
<div class="home-content">
<h2>Keep Track with Fitness & Awareness Web Application </h2>
<h2>The easiest way to keep fit</h2>
<br />

<a class="register-btn" href="register.php">Register Today</a>
<!-- <a  class="login" href="login.php">Login</h4> -->
</div>
	</div>
	
<div class="about">
<h1 class="home-goals">Reach your goals</h1>
<p>All through the vast majority of human history, the way our    bodies looked was controlled by our battle to survive, not by a cognisant decision to look a specific way. Not any longer. Today, we the way to shape our bodies as we see fit. So, the program is designed to improve your physique and help you build a body that actually worthy of history. Beside, this four week program will make you become more stronger, leaner, and more fit.</p>
<h1 class="home-goals">Develop healthy diets</h1>
<p>All through the vast majority of human history, the way our    bodies looked was controlled by our battle to survive, not by a cognisant decision to look a specific way. Not any longer. Today, we the way to shape our bodies as we see fit. So, the program is designed to improve your physique and help you build a body that actually worthy of history. Beside, this four week program will make you become more stronger, leaner, and more fit. anim id est laborum.</p>
</div>
<footer>
<div class="footer">
<h2 style="color: darkgrey;">Get Social</h2>
<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://www.twitter.com/" class="fa fa-twitter"></a>
<a href="https://www.google.com/" class="fa fa-google"></a>
<p><small>Copyright&copy<?php echo date('Y');?></small></p>
</div>
</footer>

</body>
</html>