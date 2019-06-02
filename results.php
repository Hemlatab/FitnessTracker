<?php ob_start();?>
<?php session_start();?>
<?php
  require_once "includes/db.php";
  include "includes/functions.php";

  if(logged_in()){

   echo "You are logged in, <br/>";
   echo "<strong>". $_SESSION['username'] ."</strong>";

  	} else {

    	echo "You are not logged in" ;
  }

  echo "<br/>";
  echo "<h1 style='color: maroon;'>Recommended Fitness Plan<h1/>";

  $age = $gender = $height = $currentweight = $desiredweight = $goal = $activities = "";

  if(isset($_POST['submit'])) {

      $error = array();//initialize error array
      $age           = $_POST['age'];
      $gender        = $_POST['gender'];
      $height        = $_POST['height'];
      $currentweight = $_POST['currentweight'];
      $desiredweight = $_POST['desiredweight'];
      $goal          = $_POST['goal'];
      $activities    = $_POST['activities'];

      if($_POST['age'] == "Select age"){

        echo '<p>You forgot to select your age<p/>';
        echo "<br/>";
      }

      if($_POST['gender'] == "Male"){

          $gender = $_POST['gender'];
           echo 'You forgot to select your gender';
           echo "<br/>";
      }
      if($_POST['gender'] == "Female"){

           echo $_POST['gender'];
           echo 'You forgot to select your gender';
      }
      if(empty($_POST['height'] == "")){

         echo "You forgot to select your height";
         echo "<br/>";
      }
      if($_POST['currentweight'] == ""){

         echo "You forgot your current weight";
      }
      if($_POST['desiredweight'] == ""){

         echo "You forgot to add your desired weight";
      }
      if($_POST['goal'] == "goal"){

         echo "You forgot to add your goal";
      }

      if($_POST['goal'] == "Lose weight"){


      echo "<a href='loseweight.php'>Lose Weight</a>";
      echo "<a href='ques_loseweight.php'>Lose Weight</a>";
      $goal = $_POST['goal'];

      }elseif($_POST['goal'] == "Lose 1 pound a week"){


     echo "<a href='loseapound.php'>Lose a pound</a>";

      echo "<a href='ques_loseapound.php'>Lose a pound</a>";
      $goal = $_POST['goal'];

      }else{


      echo "<a href='stayfit.php'>Stay fit</a>";
      echo "<a href='ques_stayfit.php'>Stay Fit</a>";
      $goal = $_POST['goal'];
      
      }  

  $save_profile_query = "INSERT INTO profile (age, gender, height, currentweight, desiredweight, goal, activities) VALUES ('$age','$gender','$height','$currentweight','$desiredweight','$goal','$activities') ";

  if(mysqli_query($conn, $save_profile_query)) {

    echo '<br/><div class="alert alert-success">Profile has been saved sucessfully</div>';
    header('Location: results.php');
    exit();

      } else {

    echo "Error:" . $save_profile_query ."<br>" .mysqli_error($conn);

      }    

}     

  echo "<h3>Here are your details<h3/>";
  echo "Height: ".$height."<br/>";
  echo "Current weight: ".$currentweight."<br/>";
  echo "Desired weight: ".$desiredweight."<br/>";
  echo "Goals to achieve: ".$goal."<br/>";
  echo "Daily Activities : ".$activities."<br/>";

    mysqli_close($conn);
?>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="styles.css">
      <style>body{ background-color:lightsteelblue;}</style>
</head>
<body>
  
</body>
</html>
