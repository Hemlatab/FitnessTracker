<?php ob_start();?>
<? session_start();?>
<?php 
  require_once "includes/db.php";
  include "includes/functions.php";

  if(isset($_POST['submit'])) {

    header('Location: loseapound.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Questionaire</title>
	     <link rel="stylesheet" type="text/css" href="styles.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div>
   <?php echo "<strong>". $_SESSION['username'] ."</strong>";?>
<div class="header">
    <div id="logo">
      <a style="padding: 10px; margin-right: 40px; background-color:#1E90FF;color:white;text-decoration: none; border-radius: 5px; float: left;" href="loseapound.php">Continue to Lose a Pound Information page</a>
</div>
    </div><br/><br/>
 <a style="padding: 10px; margin-right: 40px; background-color:#3CB371;color:white;text-decoration: none; border-radius: 5px; float: left;" href="loseapound.php">Go back</a>
 </div><br/>
<div style='background-color: grey;' id="wrapper">
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
<h3>Questionnaires: About Fat loss program</h3>
<h4>Goal: Lose a pound</h4>
On scale of ( 1-5 )<br/>
1) How do you feel about your body right now?
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> 1
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> 2
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> 3
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> 4
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> 5
  </label>
</div>
<br/>
(2) How committed are you now about losing weight & reaching your body goals?
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> 1
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> 2
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" > 3
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> 4
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> 5
  </label>
</div><br/>
(3) what is your energy level right now?
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> 1
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> 2
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> 3
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> 4
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" > 5
  </label>
</div><br/>
(4) Activity level:
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> Lightly active
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">  Moderately active
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> Very active
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> Extra active
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> 5
  </label>
</div>
<br/>
(5) Did you train before to loss you body fat? 
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> Yes
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> No
  </label>
</div><br/>
(6) Do you have any medical issue? <div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> Yes
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> No
  </label>
</div>
 <div class="form-group">
    <label for="exampleTextarea">Describe your habit</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
 <div class="clearfix">
      <input type="submit" name="submit" value="Submit" style="background-color: #228B22; padding: 10px;font-weight: bold;">
    </div>
    </form>
</body>
</html>