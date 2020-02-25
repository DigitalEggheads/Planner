<?php

  if(!isset($_SESSION))
    session_start();

  include_once "../../backend/admin.php";

  if (!isset($_SESSION["adminLogin"]) || !$_SESSION["adminLogin"] || isset($_POST["logout"])) {
    // session_destroy();
    destroyAdminSession();
    header("location: ../index.php");
  }


$Hotel_Id = $_GET["Hotel_Id"];

$query = "select * from hotels where Hotel_Id = $Hotel_Id";

if ($result=mysqli_query($con,$query))
  {
  // Fetch one and one row
  $row=mysqli_fetch_row($result);
    
    $Hotel_Title = $row[1];
    $Hotel_Description = $row[2];
    $Hotel_Destination = $row[3];
    $Hotel_City = $row[4];
    $Hotel_Type = $row[5];
    $Hotel_Distance = $row[6];
    $Hotel_Rating = $row[7];
    $Hotel_Map_Iframe = $row[8];
    $Hotel_Featured_Image = $row[9];
    $Hotel_Price = $row[10];
    $Hotel_Gallery = $row[11];
    
  // Free result set
  mysqli_free_result($result);
}




?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Shirkat-ul-Ras | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Custom Stylesheets -->
  <link rel="stylesheet" href="dist/css/styles.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


<?php include_once "./Navigation.php"; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Hotels</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid bg-light">
                <!-- /.row -->
        <div class="row pb-4 mb-4">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-list-alt" style="color: #339af0;"></i>
                <?php echo $Hotel_Title; ?>
              </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 200px;"></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><label for="">Profile Picture</label></td>
                      <td><img class="placeholder-img" src="<?php echo $Hotel_Featured_Image; ?>" width="250px;" height="250px;"></td>
                    </tr>
                    <tr>
                      <td><label for="">Hotel Name</label></td>
                      <td><?php echo $Hotel_Title; ?></td>
                    </tr>
                    <tr>
                      <td><label for="">Description</label></td>
                      <td><?php echo $Hotel_Description; ?></td>
                    </tr>
                    <tr>
                      <td><label for="">Destination</label></td>
                      <td><?php echo $Hotel_Destination; ?></td>
                    </tr>
                    <tr>
                      <td><label for="">City</label></td>
                      <td><?php echo $Hotel_City; ?></td>
                    </tr>
                    <tr>
                      <td><label for="">Type</label></td>
                      <td><?php echo $Hotel_Type; ?></td>
                    </tr>
                    <tr>
                      <td><label for="">Price</label></td>
                      <td>$<?php echo $Hotel_Price; ?>/night</td>
                    </tr>
                    <tr>
                      <td><label for="">Distance</label></td>
                      <td><?php echo $Hotel_Distance; ?></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
          </div>
        </div>
        <!-- /.row -->


          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
        </div>
        <!-- /.row -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer text-center">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="#">Shirkat-ul-Ras</a>.</strong> All rights reserved. - Developed By: <strong><a href="https://digitaleggheads.com/" target="_blank"> Digital Eggheads</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- custom scripts -->
<script src="dist/js/script.js"></script>
</body>
</html>