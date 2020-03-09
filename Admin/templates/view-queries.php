<?php

  if(!isset($_SESSION))
    session_start();

  include_once "../../backend/admin.php";

  if (!isset($_SESSION["adminLogin"]) || !$_SESSION["adminLogin"] || isset($_POST["logout"])) {
    // session_destroy();
    destroyAdminSession();
    header("location: ../index.php");
  }


$TP_Id = $_GET["TP_Id"];

$query = "select * from travel_planner where TP_Id = $TP_Id";

if ($result=mysqli_query($con,$query))
  {
  // Fetch one and one row
  $row=mysqli_fetch_row($result);
    
    $TP_Name = $row[1];
    $TP_Whatsapp_Number = $row[2];
    $TP_Email = $row[3];
    $TP_Dep_Country = $row[4];
    $TP_Dep_City = $row[5];
    $TP_Dep_Date = $row[6];
    $TP_Arr_Date = $row[7];
    $TP_Adults = $row[8];
    $TP_Children = $row[9];
    $TP_Arr_Country_Iraq = $row[10];
    $TP_Arr_Country_Iran = $row[11];
    $TP_Arr_Country_Syria = $row[12];
    $TP_Arr_Country_KSA = $row[13];
    $TP_Ticket_Assistance = $row[14];
    $TP_Visa_Assistance = $row[15];
    $TP_Guide_Assistance = $row[16];
    $TP_Transport = $row[17];
    $TP_Hotel_Type = $row[18];
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

  <title>Shirkat-ul-Ras | View Trip Planner Query</title>

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
              <li class="breadcrumb-item active">View Trip Planner Query</li>
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
                Query
              </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="text-align: center; background-color: #cfb737 !important; color:#ffffff;" colspan="4">Basic Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><label for="">Name</label></td>
                      <td><?php echo $TP_Name; ?></td>

                      <td><label for="">Whatsapp #</label></td>
                      <td><?php echo $TP_Whatsapp_Number; ?></td>
                    </tr>
                    <tr>
                      <td><label for="">Email</label></td>
                      <td colspan="3"><?php echo $TP_Email; ?></td>
                    </tr>
                    <tr>
                      <td><label for="">Departure Country</label></td>
                      <td><?php echo $TP_Dep_Country; ?></td>
                      <td><label for="">Departure City</label></td>
                      <td><?php echo $TP_Dep_City; ?></td>
                    </tr>
                  </tbody>
                </table>

                <table class="table">
                  <thead>
                    <tr>
                      <th style="text-align: center; background-color: #cfb737 !important; color:#ffffff;" colspan="4">Traveling Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><label for="">Date of Departure</label></td>
                      <td><?php echo $TP_Dep_Date; ?></td>

                      <td><label for="">Date of Arrival</label></td>
                      <td><?php echo $TP_Arr_Date; ?></td>
                    </tr>
                    <tr>
                      <td><label for="">Adults</label></td>
                      <td><?php echo $TP_Adults; ?></td>

                      <td><label for="">Children</label></td>
                      <td><?php echo $TP_Children; ?></td>
                    </tr>
                  </tbody>
                </table>

                <table class="table">
                  <thead>
                    <tr>
                      <th style="text-align: center; background-color: #cfb737 !important; color:#ffffff;" colspan="4">Select Country</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><label for="">Iraq</label></td>
                      <td><?php echo $TP_Arr_Country_Iraq; ?></td>

                      <td><label for="">Iran</label></td>
                      <td><?php echo $TP_Arr_Country_Iran; ?></td>
                    </tr>

                    <tr>
                      <td><label for="">Syria</label></td>
                      <td><?php echo $TP_Arr_Country_Syria; ?></td>

                      <td><label for="">KSA</label></td>
                      <td><?php echo $TP_Arr_Country_KSA; ?></td>
                    </tr>
                  </tbody>
                </table>

                <table class="table">
                  <thead>
                    <tr>
                      <th style="text-align: center; background-color: #cfb737 !important; color:#ffffff;" colspan="6">Need Assistance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><label for="">Ticket<br/>Assistance</label></td>
                      <td><?php echo $TP_Ticket_Assistance; ?></td>

                      <td><label for="">Visa<br/>Assistance</label></td>
                      <td><?php echo $TP_Visa_Assistance; ?></td>

                      <td><label for="">Religious / Tour<br/>Guide</label></td>
                      <td><?php echo $TP_Guide_Assistance; ?></td>
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