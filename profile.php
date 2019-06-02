<?php 
ob_start();
session_start();
?>
<?
//   mysqli_close($conn);$age = $gender = $height = $currentweight = $desiredweight = $goal = $activities ="";

// if($_SERVER['REQUEST_METHOD'] =='POST') {

//   $age            = $_POST['age'];
//   $gender         = $_POST['gender'];
//   $height         = $_POST['height'];
//   $currentweight  = $_POST['currentweight'];
//   $desiredweight  = $_POST['desiredweight'];
//   $goal           = $_POST['goal'];
//   $activities     = $_POST['activities'];

//   }

//   $query = "INSERT INTO profile (age, gender, height, currentweight, desiredweight,goal,activities) VALUES ('$age','$gender,'$height,$currentweight,'$desiredweight,'$goal','$activities') ";

//   if(mysqli_query($conn, $query)) {

//     echo '<br/><div class="alert alert-success" >Profile has been saved sucessfully</div>';
//     //echo "<a href='login.php'> <h3 style='color:maroon;'>Please login</h3>";
//     header('Location: results.php');
//     exit();

//       } else {

//     echo "Error:" . $query ."<br>" .mysqli_error($conn);

//       }
?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
    <link rel="stylesheet" type="text/css" href="styles.css">
  <body>
    <div class="header">
      <div id="logo">
        <a href="index.php"><img src="images/logo.png"/></a>
        <a href="logout.php" style="float: right; padding: 10px; margin-right: 40px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;">Logout<a/>
        <a href="index.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;">Home<a/>
        <a href="contact.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;">Contact</a>
      </div>
    <div>
  </div>  
    <form action="results.php" method="post">
      <p>Welcome, <?php echo "<strong>". $_SESSION['username'] ."</strong>";?></p>
    <div class="container">
    <div class="row">
    <div class="col-sm-7 emailForm">
    <div class="form-group">
    <legend for="title" style="color: maroon;">Tell us about yourself</legend>
    <div class="form-inline">
    <label for="age">Age group</label>
    <select class="form-control" id="age" name="age">
      <option>Select age</option>
      <option>18-25</option>
      <option>25-30</option>
      <option>30-35</option>
      <option>35-40</option>
      <option>40-45</option>
      <option>45-50</option>
      <option>50-55</option>
      <option>55-60</option>
      <option>60-65</option>
    </select>
  </div>
   <fieldset class="form-group">
    <label>Gender</label>
    <div  class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" id="gender" value="Male" checked>
       Male
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" id="gender" value="Female">
       Female 
      </label>
    </div>
    </div>
  </fieldset>
  
    <div class="form-inline">
    <label for="age">Height: </label>
    <select class="form-control" id="height" name="height">
      <option>Select height</option>
      <option>4 feet 8 inches    142</option>
      <option>4 feet 9 inches    144</option>
      <option>4 feet 10inches    147</option>
      <option>4 feet 11inches    149</option>
      <option>5 feet 0 inches    152</option>
      <option>5 feet 1 inches    154</option>
      <option>5 feet 2 inches    157</option>
      <option>5 feet 3 inches    160</option>
      <option>5 feet 4 inches    162</option>
      <option>5 feet 5 inches    165</option>
      <option>5 feet 6 inches    167</option>
      <option>5 feet 7 inches    170</option>
      <option>5 feet 8 inches    172</option>
      <option>5 feet 9 inches    175</option>
      <option>5 feet 10inches    177</option>
      <option>5 feet 11inches    180</option>
      <option>6 feet 0 inches    182</option>
      <option>6 feet 1 inches    185</option>
      </select>
        </div>
       <br>
    
    <div class="form-inline">
    <label for="currentweight">Current Weight: </label>
      <select class="form-control" id="currentweight" name="currentweight">
      <option>Select weight</option>
           <option>50-70kg</option>
           <option>71-80kg</option>
           <option>81-100kg</option>
           <option>101-120kg</option>
           <option>121-140kg</option>
           <option>141-160kg</option>
      </select>
   </div>
    <br>
    
    <div class="form-inline">
    <label for="desiredweight">Desired Weight: </label>
    <select class="form-control" id="desiredweight" name="desiredweight">
    <option>Select weight</option>
      <option>50-70 kg</option>             
      <option>71-80kg</option>
      <option>81-100kg</option>
      <option>101-120kg</option>
      <option>121-140kg</option>
      <option>141-160kg</option>
      </select>
   </div>
    <br>
     <div class="form-inline">
    <label for="goal">What is your goal</label>
    <select multiple class="form-control" id="goal" name="goal">
      <option>Lose weight</option>
      <option>Lose 1 pound a week</option>
      <option>Stay fit</option>
     </select>
   </div>
  <br>
    
   <fieldset class="form-group">
    <label>How do you describe your normal activities</label>
    <div class="form-check">
    <label class="form-check-label">
      <input type="radio" class="form-check-input" id="checkbox"  name= "activities" value="Sedentary sitting mostly">
      Sedentary sitting mostly
    </label>
      
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" id="checkbox" name ="activities" value="Active">
      Active
    </label>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" id="checkbox" name= "activities" value="Very active">
      Very active
    </label>
    </div>
   
  <button type="submit" class="btn" name="submit" style="background-color: #228B22; padding: 10px;font-weight: bold;">Submit</button></div></div>
</form>
 </div>
    </div><br/>
<footer>
<div class="footer">
  <p><small>Copyright&copy<?php echo date('Y');?></small></p>
</div>
</footer>
    