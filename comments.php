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
        <a href="login.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;font-weight: bold">Login<a/>
        <a href="profile.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;font-weight: bold">Profile</a>
        <a href="contact.php" style="float: right; padding: 10px; margin-right: 10px; background-color:#3CB371; color:white; border-radius: 5px;text-decoration: none;font-weight: bold">Contact</a>
    </div>
    </div>
    <div class="container">
    <?php
  
    require_once "includes/db.php";

    $comments = "";

    if(isset($_POST['submit'])){

    $comments = $_POST['comments'];

  }

    if(strlen($comments) < 3){

      echo '<br/><div class="alert alert-danger">Please add a note</div>';

    }else{

    $add_comment = "INSERT INTO comments (comment) VALUES ('$comments')";

    if(mysqli_query($conn,$add_comment)) {

    echo '<br/><div class="alert alert-success">Comment has been saved in your dashboard</div>';

      }
    }
    mysqli_close($conn);
  ?>
    <div class="row">
    <div class="col-sm-7">
  <div class="table-responsive">
  <h2 style="color: maroon;">Add comment</h2>
  <p>The form below contains a textarea for adding note to your workout plan:</p>
  <form method="post" action="">
    <div class="form-group">
      <label for="note">Add comment:</label>
      <textarea class="form-control" rows="8" id="note" name="comments"></textarea>   
      <button type="submit" name="submit">Submit</button>
    </div>
  </form>

  </div></div></div></div>
    </body>
    </html>