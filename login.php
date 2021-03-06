<?php  ob_start(); //ob start is storing the output in internal buffer?>
<?php
echo date("l, F d, Y h:i",time());
echo "<br>";
session_start();
require_once "includes/db.php";

$username = $user_password = "";

//if($_SERVER['REQUEST_METHOD'] == 'POST') {
if(isset($_POST['submit'])){

    $username 	   = $_POST['username'];
    $user_password = $_POST['user_password'];

 }
	$query = "SELECT username FROM users WHERE username ='$username' AND user_password = '$user_password' ";

	$select_user_query = mysqli_query($conn,$query);

	if ($select_user_query->num_rows > 0) {
   
    while($row = $select_user_query->fetch_assoc()) {

    	$_SESSION['username'] = $username;
    
        echo  $row['username'] . "<br/>";
        echo "<br/>";
        header('Location: dashboard.php');
        
    }
    
} else {
    echo '<div class="alert alert-danger">There is no such user</div>';
}
$conn->close();

ob_end_flush();//producing the content back on the page

?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>
		<link rel="stylesheet" type="text/css" href="styles.css">
	<body>
		<nav class="navbar">
				<a class="logo" href="index.php"><img src="images/logo.png"/></a>
			<ul>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="contact.php">Contact</a></li>	
			</ul>
		</nav>
		</div>
		</div>
	</div>
	<div id="wrapper">
	<form action="" method="post">
	  <div class="container-login">
	  <div class="row">
      <div class="col-sm-7 emailForm">
	  <h3 class="login-header">Enter your login details</h3>
	    <label><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="username" required>
	    <label><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="user_password" required>
	     <input type="checkbox" name="rememberme" />
	    <label>Remember me</label><br/><br/>    
	    <button type="submit" name="submit">Login</button>
	    	<p class="not-register">Not registered yet? <a href="register.php">Click here to Register</a></p>
	    </div>
	    </div>
	  </div>
	</form>
	</div>
	</body>
	</html>

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