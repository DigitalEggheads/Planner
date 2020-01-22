<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Shirkat-ul-Ras</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- custom styles -->
 <link rel="stylesheet" href="dist/css/styles.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/credit/avatar.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/credit/avatar.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/credit/avatar.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/Branding/logo.png" alt="Shirkat-ul-Ras Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Shirkat-ul-Ras</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/default-avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Name</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <!-- Hotel Details and Management -->
          <li class="nav-item has-treeview menu-open">
            <a href="view-hotel.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Hotels
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-hotel.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Hotel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="managed-hotels.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Hotel</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash Hotel</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Manage Reviews -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Reviews
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aproved Reviews</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unapproved Hotel</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Emails -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Emails
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Email</p>
                </a>
              </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

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
                                          <img src="https://placehold.it/250x250" id="preview" class="img-thumbnail">
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
                                    <select class="form-control">
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
                                    <select class="form-control">
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
                                    <select class="form-control">
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
                              <div class="form-group">
                                  <div class="form-group">
                    <label for="">Images:</label>
                    <div class="field">
                        <div id="hotel_image_upload" class="dropzone dz-message needsclick dz-clickable">
                            <div class="dz-default dz-message"><span>Drop files here to upload</span>
                            </div>
                        </div>  
                        <style>
                            
                              
                        </style>
                    </div>
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
  <footer class="main-footer text-center">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="#">Shirkat-ul-Ras</a>.</strong> All rights reserved. - Developed By: <strong><a href="https://digitaleggheads.com/" target="_blank"> Digital Eggheads</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- custom script -->
<script src="dist/js/script.js"></script>

<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script type="text/javascript">
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

</body>
</html>
