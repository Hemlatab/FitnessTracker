<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="styles.css">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		</nav>
	</header>
   
    </div>
    </div>
    <div class="container1">
    <?php
  
    require_once "includes/db.php";

    $fitness_goals = "";

    if(isset($_POST['submit'])){

    $fitness_goals = $_POST['fitness_goals'];

  }

    $add_goal = "INSERT INTO fitness_goals (fitness_goals) VALUES ('$fitness_goals')";

    if(mysqli_query($conn,$add_goal)) {

    echo '<br/><div class="alert alert-success">Fitness goals has been saved in your dashboard</div>';

      }
    
    mysqli_close($conn);
  ?>
    <div class="row">
    <div class="col-sm-7">
  <div class="table-responsive">
  <h2>Add fitness goals</h2>
  <p>The form below contains a textarea for adding note to your workout plan:</p>
  <form method="post" action="">
    <div class="form-group">
      <label for="note">Add fitness goals:</label>
      <textarea class="form-control" rows="8" id="note" name="fitness_goals"></textarea>   
      <button type="submit" name="submit">Submit</button>
    </div>
  </form>

  </div></div></div></div>
    </body>
    </html>