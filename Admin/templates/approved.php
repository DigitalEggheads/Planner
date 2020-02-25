<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" content="noindex">
</head>
</html>


<?php

  if(!isset($_SESSION))
    session_start();

  include_once "../../backend/admin.php";

  if (!isset($_SESSION["adminLogin"]) || !$_SESSION["adminLogin"] || isset($_POST["logout"])) {
    // session_destroy();
    destroyAdminSession();
    header("location: ../index.php");
  }



$Review_Id = $_GET["Review_Id"];

$query = "select * from hotels_reviews where Hotel_Review_Id = $Review_Id";

if ($result=mysqli_query($con,$query))
  {
  // Fetch one and one row
  $row=mysqli_fetch_row($result);
    

    $Hotel_Review_isApproved = $row[7];
    
  // Free result set
  mysqli_free_result($result);
}






if ($Hotel_Review_isApproved == '0') {
  $query = "UPDATE hotels_reviews SET Hotel_Review_isApproved = 1 where Hotel_Review_Id = $Review_Id ";
$result=mysqli_query($con,$query);
header("location: unapproved-reviews.php");
}

else {
  $query = "UPDATE hotels_reviews SET Hotel_Review_isApproved = 0 where Hotel_Review_Id = $Review_Id ";
$result=mysqli_query($con,$query);
header("location: approved-reviews.php");
}


?>

<h1>
  
  <?php 
    echo $Hotel_Review_isApproved;
  ?>
</h1>