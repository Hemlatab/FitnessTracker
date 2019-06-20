<?php ob_start();?>
<? session_start();?>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="styles.css">
      <style> body{background-color: grey;} </style>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="header">
  <li class="header">
			<nav class="navbar">
				<a class="logo" href="index.php"><img src="images/logo1.png"/></a>
			<ul>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="contact.php">Contact</a></li>	
			</ul>
		</nav>
	</li>
    </div>
    <br/>
   <p>Hi,<?php echo "<strong>". $_SESSION['username'] ."</strong>";?></p>
<div class="container-1">
<div class="row">
<div class="col-sm-7">
<h1 style="color: maroon;">Workout Plan</h1>
 <div class="table-responsive">

  <table class="table">
  <h3 style="color: maroon;">Add note to your Work out plan</h3><a style="padding: 10px; margin-right: 40px; background-color:#3CB371;color:white;text-decoration: none; border-radius: 5px; float: left;" href="addnote.php">Add note</a>
    <thead>
      <tr>
        <th>Workout plan(Week 1)</th>
      </tr>
    </thead>
    <tbody>      
      <tr class="success">
        <td>Day 1 </td>
        <td>(Chest & 20 mins Cardio)</td>     
      </tr>
      <tr class="danger">
        <td>Day 2 </td>
        <td>(Back & 20 mins Cardio) </td>   
      </tr>
      <tr class="info">
        <td>Day 3 </td>
        <td>Arms & 20 mins Cardio</td/>       
      </tr>
      <tr class="warning">
        <td> Day 4 </td>
        <td>Shoulder & 20 mins Cardio </td>
      </tr>
      <tr class="active">
        <td> Day 5 </td>
        <td>Legs & 20 mins Cardio</td>
      </tr>
         <tr class="active">
        <td>Day 6 </td>
        <td>Rest</td>
      </tr>
          <tr class="active">
        <td>Day 7 </td>
        <td>Rest</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
<div class="container-1">
<div class="row">
<div class="col-sm-7">
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Workout plan(Week 2)</th>
      </tr>
    </thead>
    <tbody>      
      <tr class="success">
        <td>Day 1 </td>
        <td>(Chest & 20 mins Cardio)</td>     
      </tr>
      <tr class="danger">
        <td>Day 2 </td>
        <td>(Back & 20 mins Cardio) </td>   
      </tr>
      <tr class="info">
        <td>Day 3 </td>
        <td>Arms & 20 mins Cardio</td/>       
      </tr>
      <tr class="warning">
        <td> Day 4 </td>
        <td>Shoulder & 20 mins Cardio </td>
      </tr>
      <tr class="active">
        <td> Day 5 </td>
        <td>Legs & 20 mins Cardio</td>
      </tr>
         <tr class="active">
        <td>Day 6 </td>
        <td>Rest</td>
      </tr>
          <tr class="active">
        <td>Day 7 </td>
        <td>Rest</td>
      </tr>
    </tbody>
  </table>
 </div>
 </div>
 </div>
</div>
 <div class="container-1">
 <div class="row">
        <div class="col-sm-7">
 <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Workout plan(Week 3)</th>
      </tr>
    </thead>
    <tbody>      
      <tr class="success">
        <td>Day 1 </td>
        <td>(Chest & 20 mins Cardio)</td>     
      </tr>
      <tr class="danger">
        <td>Day 2 </td>
        <td>(Back & 20 mins Cardio) </td>   
      </tr>
      <tr class="info">
        <td>Day 3 </td>
        <td>Arms & 20 mins Cardio</td/>       
      </tr>
      <tr class="warning">
        <td> Day 4 </td>
        <td>Shoulder & 20 mins Cardio </td>
      </tr>
      <tr class="active">
        <td> Day 5 </td>
        <td>Legs & 20 mins Cardio</td>
      </tr>
         <tr class="active">
        <td>Day 6 </td>
        <td>Rest</td>
      </tr>
          <tr class="active">
        <td>Day 7 </td>
        <td>Rest</td>
      </tr>
    </tbody>
  </table>
</div>
</div></div>
</div>
  <div class="container-2">
  <div class="row">
   <div class="col-sm-7">
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Workout plan(Week 4)</th>
      </tr>
    </thead>
    <tbody>      
      <tr class="success">
        <td>Day 1 </td>
        <td>(Chest & 20 mins Cardio)</td>     
      </tr>
      <tr class="danger">
        <td>Day 2 </td>
        <td>(Back & 20 mins Cardio) </td>   
      </tr>
      <tr class="info">
        <td>Day 3 </td>
        <td>Arms & 20 mins Cardio</td/>       
      </tr>
      <tr class="warning">
        <td> Day 4 </td>
        <td>Shoulder & 20 mins Cardio </td>
      </tr>
      <tr class="active">
        <td> Day 5 </td>
        <td>Legs & 20 mins Cardio</td>
      </tr>
         <tr class="active">
        <td>Day 6 </td>
        <td>Rest</td>
      </tr>
          <tr class="active">
        <td>Day 7 </td>
        <td>Rest</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</div>
</div>
<br/><br/>
<footer>
<div class="footer">
<p><small>Copyright&copy<?php echo date('Y');?></small></p>
</div>
</footer>
</body>
</html>
