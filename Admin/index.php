<?php

  include_once "../backend/authentication.php";
  
  if(!isset($_SESSION))
    session_start();
  
  if (isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"]) {
    header("location: templates/dashboard.php");
  } else {
    // session_destroy();
    destroyAdminSession();
	}

  if (isset($_POST["submit"])) {
    $data = getRequestData(array("User_email", "User_Password"), "post");
    if (adminLogin($data)) {
      header("location: templates/dashboard.php");
    }
    else {
      echo "Error While Login";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login | Shirkat-ul-Ras</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="container mt-4">
		<form action="" class="form-signin">
			<img class="mx-auto d-block" src="img/Logo.png" alt="Shirkat-ul-Ras Logo">
			<h2 class="form-heading text-center">
				Admin Login Form
			</h2>
			<input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">

			<input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">

			<input type="submit" name="submit" class="btn btn-lg btn-dark btn-block" value="Login">
		</form>
		</div>

	</div>
</body>
</html>