<?php ob_start();?>
<? session_start();?>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="styles.css">
      <style>
        body{
          background-color: grey;
        }
      </style>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="header">
			<div id="logo">
				<a href="profile.php"><img src="images/logo.png"/></a>
				<a href="logout.php" style="float: right; padding: 10px; margin-right: 40px; text-decoration: none;font-weight: bold; margin-right: 40px; background-color:#3CB371; color:white; border-radius: 5px;">Logout<a/>
        <a href="index.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;font-weight: bold">Home<a/>
        <a href="profile.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;font-weight: bold">Profile</a>
        <a href="contact.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;font-weight: bold">Contact</a>
			</div>
	</div>
  <?php echo $_SESSION['username'];?>
		 <form action="" method="post">
		 	<div class="container">
		 		<h1 style="color: maroon;">Lose weight</h1>
 		 			<p>Meals to follow when losing weight. </p>
  		 		<div class="row">
  					<div class="col-sm-7">
  						<div class="table-responsive">
  							<table class="table">
    							<thead>
      								<tr>
        								<th>Nutrition</th>
      								</tr>
    							</thead>
    <tbody>      
      <tr class="success">
        <td>Meal 1 </td>
        <td>Oats meal</td>     
      </tr>
      <tr class="danger">
        <td>Meal 2 </td>
        <td>3 eggs white and 1 apple </td>   
      </tr>
      <tr class="info">
        <td>Meal 3 </td>
        <td>100g chicken breast and sweet potato(Lunch)</td/>       
      </tr>
      <tr class="warning">
        <td>Meal 4 </td>
        <td>mix berry smoothie </td>
      </tr>
      <tr class="active">
        <td>Meal 5 </td>
        <td>post workout protein</td>
      </tr>
         <tr class="success">
        <td>Meal 6  </td>
        <td>12 almonds with 1 cup of low fat milk (Dinner)</td>
      </tr>
    </tbody>
  </table>
</div>
 <h1 style="color: maroon;">Get Started with your workout!</h1><br/>
    <div class="col-sm-5"> 
   <a style="padding: 10px; margin-right: 40px; background-color:#3CB371;color:white;text-decoration: none; border-radius: 5px;" href="workoutplan1.php">Go to Workout Plan</a>
</div>
</form>
</div>
</div>
	<div class="container">
		<div class="row">
  			<div class="col-sm-7">
  <h2 style="color: maroon;">Supplementation</h2>
  <div class="well well-sm">Choose any one from these supplementation:<br/><br/>
    <ol>(1) Optimum nutrition gold standard Whey protein <a style="padding: 10px; margin-right: 50px; background-color: #3CB371; color:white;text-decoration: none; border-radius: 5px;" href= "optimum.php">Click here</a></ol><br/>
	<ol>(2) Impact whey protein <a style="padding: 10px; margin-right: 40px; background-color:#3CB371;color:white;text-decoration: none; border-radius: 5px;" href="whey.php">Click here</a></ol><br/>
	<ol>(3) PhD diet whey <a style="padding: 10px; margin-right: 40px; background-color:#3CB371;color:white;text-decoration: none; border-radius: 5px;" href="phddiet.php">Click here</a></ol>
</div>
</div>
</div>
</div>
</body>
</html>

