<?php  ob_start();?>
<?php session_start();?>
<?php include "includes/db.php";

	$username = $password = $confirm_password = $firstname = $lastname = $email = "";

	if($_SERVER['REQUEST_METHOD'] =='POST') {

	if($_POST['user_password'] == $_POST['confirm_password']){ 

	$username  = $_POST['username'];
	$password  = $_POST['user_password'];
	$confirm_password  = $_POST['confirm_password'];
	$firstname = $_POST['user_firstname'];
	$lastname  = $_POST['user_lastname'];
	$email 	   = $_POST['user_email'];
			
		}
	}

		if(strlen($username) < 3 ){

			//echo "Username is too short";

		}elseif(strlen($firstname) < 3 ){

			echo "Firstname is too short";

		}else if(strlen($lastname) < 3 ) {
		
			echo "Lastname is too short";

		}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

			echo "Please enter a valid email address";

		}else if(strlen($password)< 6 ){

			echo "Password must be greater than 6 characters";

		}else if($password !== $confirm_password){

				echo "Password does not match";
		}else{

	$query = "INSERT INTO users (username, user_password, user_firstname, user_lastname, user_email) VALUES ('$username','$password','$firstname','$lastname','$email') ";

	if(mysqli_query($conn, $query)) {

		echo '<br/><div class="alert alert-success">User has been created sucessfully</div>';
		header('Location: login.php');
		exit();

	} else {

		echo "Error:" . $query ."<br>" .mysqli_error($conn);
		}
}
	mysqli_close($conn);			
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
	<link rel="stylesheet" type="text/css" href="styles.css">
<body>
	<div class="navbar-register">
	<header class="header">
			<nav class="navbar">
				<a class="logo" href="index.php"><img src="images/logo.png"/></a>
			<ul>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="contact.php">Contact</a></li>	
			</ul>
		</nav>
	</header>
	</div>
</div>
<br />

<form action="register.php" method="post" enctype="multipart/form-data" autocomplete="off">
	<div class="register-container">	
		<div class="mx-auto col-6 emailForm">
        <h1 class="register-header">Register your details</h1> 
            <form method="post">
                <div class="form-group">
                    <label><b>Username</b></label>
    <input type="text" placeholder="Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="user_password" required>

     <label><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="confirm_password" required>

    <label><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="user_firstname" required>

    <label><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="user_lastname" required>

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="user_email" required>
 <br/>
    <div class="clearfix">
      <input type="submit" name="submit" value="Sign Up" class="signup-btn">
	</div>
            </div>
</form>
               
           </div>
                   
<footer>
<div class="footer">
<h2>Get Social</h2>
<div class="social">
<a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a>
<a href="https://www.twitter.com/" class="fa fa-twitter"></a>
<a href="https://www.google.com/" class="fa fa-google"></a>
</div>
<p><small>Copyright&copy<?php echo date('Y');?></small></p>
</div>
</footer>

</body>
</html>