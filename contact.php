<?php 

$error = "";
$result = "";

if (isset($_POST['submit'])){

    $result='<div class="alert alert-success">Form submitted</div>';
    if (!$_POST['name']){
        $error="<br/>Please enter name";
    }
    if (!$_POST['email']){
        $error.="<br/>Please enter email";
    }
    if (!$_POST['message']){
        $error.="<br/>Please enter your message";
    }
    
    if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
         $error.="<br/>Please enter a valid email address"; 
            } 

    if ($error){
        $result='<div class="alert alert-danger"><strong>There were error(s)</strong>'.$error.'</div>';
   
    }else{
        
        if (mail("zakqmul09@gmail.com>", "Comment from website!","Name: ".$_POST['name']."
            Email: ".$_POST['email']."
            Comment:".$_POST['message'])){
                
            $result='<div class="alert alert-success"><strong>Thank you</strong>'.$error.'</div>';
        
    }else{
              
            $result='<div class="alert alert-danger"><strong>There was an error sending your message</strong>'.$error.'</div>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
       <link rel="stylesheet" href="styles.css">
              <title>Contact Form</title>
    </head>
    <body>
    <div class="header">
	<header class="header">
			<nav class="navbar">
				<a class="logo" href="index.php"><img src="images/logo1.png"/></a>
			<ul>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			</div>
		</div>
		<br/>
       <div class="container-contact">
           <div class="row">
               <div class="col-md-6 col-md-offset-3 emailForm">
                   <h1 class="title">Contact Form</h1>
                   
                   <?php echo $result; ?>
                   
                   <p class="lead">Please get in touch</p>
                   <form method="post">
                       <div class="form-group">
                           <label for="name">Your name:</label>
                           <input type="text" name="name" class="form-control" placeholder="Name" >
                           <!-- value="<?php //echo $_POST['name'];?>" -->
                           <div class="form-group">
                           <label for="email">Your email:</label>
                           <input type="text" name="email" class="form-control" placeholder="Email">
                       </div>
                       <div class="form-group">
                           <label for="name">Your message:</label>
                           <textarea class="form-control" name="message"></textarea>
                       </div>
                       <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit">
                       </div>
                   </form>
               </div>
           </div>
       </div>    
       <br />           
        <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       <footer>
<div class="footer">
	<p><small>Copyright&copy<?php echo date('Y');?></small></p>
</div>
</footer>
    </body>  
</html>