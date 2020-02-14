<?php 

if(!isset($_SESSION))
    session_start();

  include_once "../../backend/admin.php";

  if (!isset($_SESSION["adminLogin"]) || !$_SESSION["adminLogin"] || isset($_POST["logout"])) {
    // session_destroy();
    destroyAdminSession();
    header("location: ../index.php");
  }


?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid text-center">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add Hotels</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-hotel"></i> &nbsp; Add New Hotel</h3>
                </div>
              <!-- /.card-header -->
            </div>
            <!-- /.card card-dark -->
          </div>
          <!-- /. col-md-12 -->
        </div>
        <!-- /.row -->

        <!--.Form Row starts here  -->
        <div class="row pb-4 bg-white">
            <div class="col-md-12">
                <form role="form">
                    <div class="card-body">
                          <!-- 1st row -->
                          <div class="row">
                            <!-- featured image -->
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="featuredImage">Add Featured Image</label>
                                          <div class="ml-2">
                                          <img src="https://placehold.it/250x250" id="" class="img-thumbnail">
                                          </div>
                                          <input type="file" name="img[]" class="file" accept="image/*">
                                          <div class="input-group my-3 col-md-4">
                                              <button type="button" class="browse btn btn-lg btn-secondary">Upload Image</button>
                                              <!-- <label class="browse custom-file-label" for="inputGroupFile01">Choose file</label> -->
                                             
                                          </div>
                                  </div>
                              </div>
                          </div>
                          <!-- 2nd row -->
                          <div class="row">
                                <!-- hotel name -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="Title">Title</label>
                                      <input type="text" class="form-control" id="hotel-title" placeholder="Hotel title">
                                    </div>
                                </div>

                                <!-- hotel price -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="price">Price</label>
                                      <input type="text" class="form-control" id="hotel-price" placeholder="Hotel Price">
                                    </div>
                                </div>

                                <!-- distance -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="distance">Distance</label>
                                      <input type="text" class="form-control" id="hotel-distance" placeholder="Hotel Distance">
                                    </div>
                                </div>
                          </div>
                          <!-- 3rd row-->
                          <div class="row">
                            
                              <!-- hotel cities -->
                              <div class="col-md-4">
                                  <!-- select -->
                                  <div class="form-group">
                                    <label>Cities</label>
                                    <select class="form-control cstm">
                                      <option>Karbala</option>
                                      <option>Najaf</option>
                                      <option>Kazmain</option>
                                      <option>Mashad</option>
                                      <option>Qom</option>
                                      <option>Damascus</option>
                                      <option>Makkah</option>
                                      <option>Madina</option>
                                    </select>
                                  </div>
                              </div>
                              
                                  <!-- destinations -->
                              <div class="col-md-4">
                                  <!-- select -->
                                  <div class="form-group">
                                    <label>Destination</label>
                                    <select class="form-control cstm">
                                      <option>Iraq</option>
                                      <option>Iran</option>
                                      <option>Syria</option>
                                      <option>Kingdom Of Saudi Arabia</option>
                                    </select>
                                  </div>
                              </div>

                              <!-- hotel standard -->
                              <div class="col-md-4">
                                  <!-- select -->
                                  <div class="form-group">
                                    <label>Standard</label>
                                    <select class="form-control cstm">
                                      <option>Deluxe Supreme (A*)</option>
                                      <option>Deluxe (A)</option>
                                      <option>Standard (B)</option>
                                      <option>Economy Supreme (C)</option>
                                      <option>Economy (D)</option>
                                    </select>
                                  </div>
                              </div>
                          </div>
                          <!-- 4th row -->
                          <div class="row">
                              <!-- rating -->
                              <div class="col-md-4">
                                  <!-- select -->
                                  <div><label>Rating</label></div>
                                  
                                  <div class="form-group rating">
                                    <label>
                                    <input type="radio" name="stars" value="1" />
                                    <span class="icon">★</span>
                                  </label>
                                  <label>
                                    <input type="radio" name="stars" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                  </label>
                                  <label>
                                    <input type="radio" name="stars" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>   
                                  </label>
                                  <label>
                                    <input type="radio" name="stars" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                  </label>
                                  <label>
                                    <input type="radio" name="stars" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                  </label>
                                  </div>
                              </div>

                              <!-- Map Iframe -->
                              <div class="col-md-8">
                                    <label for="Mapiframe">Map iframe</label>
                                    <!--Textarea with icon prefix-->
                                        <div class="md-form amber-textarea active-amber-textarea">
                                          <i class="fas fa-pencil-alt prefix"></i>
                                          <input type="text" id="locationMap" class="md-textarea form-control" rows="3">
                                        </div>
                              </div>

                          </div>
                          <!-- 5th row -->
                          <div class="row">
                              <div class="col-md-12">
                                  <label>Description:</label>
                                  <div class="pad">
                                      <div class="mb-3">
                                          <textarea class="textarea" placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                          </textarea>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- 6th row -->
                          <br/>
                          <div class="row">
                            <div class="col-md-12">
                              <label>Add Gallery Images:</label>
                              <div class="grid-x grid-padding-x">
                                  <div class="cell" id="bordered-div">
                                   
                                    <form action="upload_file.php" id="img-upload-form" method="post" enctype="multipart/form-data">
                                      
                                      <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                                      <p class="text-center pt-4">
                                        <label for="upload_imgs" class="button hollow">Select Your Images +</label>
                                        <input class="show-for-sr" type="file" id="upload_imgs" name="upload_imgs[]" multiple/>
                                      </p>
                                      <!-- <p>
                                        <input class="button large expanded" type="submit" name="submit" value="Upload Images"/>
                                      </p> -->
                                    </form>

                                  </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer bg-white text-right">
                          <button type="submit" class="btn btn-secondary btn-lg">Submit</button>
                    </div>
                </form>
            <!--/.Form  -->
            </div>
        <!-- /. col-md-12 -->
        </div>
        <!-- ./ form row ends here -->

      </div><!-- /.container-fluid -->
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