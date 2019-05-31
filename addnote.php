<?php ob_start();?>
<? session_start();?>
<!DOCTYPE html>
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
      <div id="logo">
        <a href="profile.php"><img src="images/logo.png"/></a>
        <a href="logout.php" style="float: right; padding: 10px; margin-right: 40px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;font-weight: bold;">Logout<a/>
        <a href="index.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;font-weight: bold">Home<a/>
        <a href="profile.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;font-weight: bold">Profile</a>
        <a href="contact.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;font-weight: bold">Contact</a>
    </div>
    </div>
    <br/>
    <p>Hi,<?php echo $_SESSION['username'];?></p>
    <div class="container">
    <?php
  
    require_once "includes/db.php";

    $note = "";

    if(isset($_POST['submit'])){

    $note = $_POST['note'];

  }

    if(strlen($note) < 3){

     // echo '<br/><div class="alert alert-danger">Please add a note</div>';

    }else{

    $add_note = "INSERT INTO notes (note) VALUES ('$note')";

    if(mysqli_query($conn,$add_note)) {

    echo '<br/><div class="alert alert-success">Note has been saved in your dashboard</div>';

      }else{
        echo "add your note";
      }
    }
    mysqli_close($conn);
  ?>
    <div class="row">
    <div class="col-sm-7">
  <div class="table-responsive">
  <h2 style="color: maroon;">Add note</h2>
  <p>The form below contains a textarea for adding note to your workout plan:</p>
  <form method="post" action="">
    <div class="form-group">
      <label for="note">Add note:</label>
      <textarea class="form-control" rows="8" id="note" name="note"></textarea>   
      <button type="submit" name="submit">Submit</button>
    </div>
  </form>

  </div></div></div></div>
    </body>
    </html>