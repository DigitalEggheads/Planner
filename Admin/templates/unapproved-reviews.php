<?php 

if(!isset($_SESSION))
    session_start();

  include_once "../../backend/admin.php";

  if (!isset($_SESSION["adminLogin"]) || !$_SESSION["adminLogin"] || isset($_POST["logout"])) {
    // session_destroy();
    destroyAdminSession();
    header("location: ../index.php");
  }



    $AllUnapprovedReviews = getAllUnapprovedReviews();


?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Shirkat-ul-Ras | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Approved Reviews</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Hotels</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">


              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Reviewer Name</th>
                  <th>Reviewer Email</th>
                  <th>Review Rating</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($AllUnapprovedReviews as $key => $value) { ?>
                    
                    <tr>
                      <td><?=$value["Hotel_Review_Name"]?></td>
                      <td><?=$value["Hotel_Review_Email"]?></td>
                      <td><?=

                            $Rating = $key["Hotel_Review_Reviews"];
                        
                         if($Rating = $value["Hotel_Review_Reviews"] == "5"){
                          echo "Excellent";
                        }
                        else if($Rating = $value["Hotel_Review_Reviews"] == "4"){
                          echo "Very Good";
                        }
                        else if($Rating = $value["Hotel_Review_Reviews"] == "3"){
                          echo "Good";
                        }
                        else if($Rating = $value["Hotel_Review_Reviews"] == "2"){
                          echo "Satisfactory";
                        }
                        else{
                          echo "Unstatisfactory";
                        }

                        ?>
                      </td>
                      <td>
                        <form method="post" action="approved.php">
                          <a href="./view-review.php?Review_Id=<?=$value["Hotel_Review_Id"]?>" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a> &nbsp;
                          <a href="./approved.php?Review_Id=<?=$value["Hotel_Review_Id"]?>" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a> &nbsp;
                          <a href="#" class="btn btn-sm btn-secondary"><i class="far fa-trash-alt"></i></a>  &nbsp;
                        </form>                       
                      </td>
                    </tr>

                  <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Reviewer Name</th>
                  <th>Reviewer Email</th>
                  <th>Review Rating</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
