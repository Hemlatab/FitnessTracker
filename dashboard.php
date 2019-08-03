<?php 
ob_start();
session_start();
?>
<?php 
 include "includes/db.php";
 include "includes/functions.php";
 ?>
	
<html>
<head>
      <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php

 if (isset ($_SESSION['status_logged']) && $_SESSION['status_logged'] == true) {
        header('Location: dashboard.php');
    }
    else {
        $_SESSION['status_logged'] = false;
    }

$username = "";
$select_image = "SELECT image FROM users WHERE username ='$username' ";
$result= mysqli_query($conn,$select_image);
echo "<table>";
while ($rows = mysqli_fetch_assoc($result)) {

  echo "<tr>";
  echo "<td>";?><img src="<?php echo $row['image'];?>" height="100" width="100"/> <?php echo "</td>";
  echo "<td>"; echo $row['image']; echo "</td>";
  echo "</tr>";
  print $image;
}
echo "</table>";
?>

<div class="container_dashboard">
<header>
    <h4>Welcome to my Fitness and Awareness Web Application</h4>
</header>
<nav class="dashboard">
  <ul>
     <li><a href="index.php">Home</a></li>
     <li><a href="profile.php">Profile</a></li>
     <li><a href="logout.php">Logout</a></li>
  </ul>
</nav>

<article>
<p>Hi,<?php echo "<strong>". $_SESSION['username'] ."</strong>";?></p>
  
   <p>It is the most populous city in the  </p>
   <p>It is the most populous city in the  </p>
   <br>
   <br/>
   <p>It is the most populous city in the  </p>
   <p>It is the most populous city in the  </p>
   <p>It is the most populous city in the  </p>
   <p>It is the most populous city in the  </p>
   <p>It is the most populous city in the  </p>
   <p>It is the most populous city in the  </p>
   <p>It is the most populous city in the  </p>
      <br/>
      <br/>
         <br/>
            <br/>
               <br/>
                  <br/>
</article>
</div>
<footer>
<div class="footer">
  <p><small>Copyright&copy<?php echo date('Y');?></small></p>
  </div>
</footer>
</body>
</html>
