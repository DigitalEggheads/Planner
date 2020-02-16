<?php 

if(!isset($_SESSION))
    session_start();

  include_once "../../backend/admin.php";

  if (!isset($_SESSION["adminLogin"]) || !$_SESSION["adminLogin"] || isset($_POST["logout"])) {
    // session_destroy();
    destroyAdminSession();
    header("location: ../index.php");
  }



if (isset($_POST["AddHotel"])) {

$Hotel_Featured_Image = $_FILES["Hotel_Featured_Image"]["name"];
$target_dir = "HotelImages/";
$path = $target_dir.$Hotel_Featured_Image;


if(move_uploaded_file($_FILES["Hotel_Featured_Image"]["tmp_name"],$path))
{
  
  $data = getRequestData(array("Hotel_Featured_Image", "Hotel_Location", "Hotel_Title", "Hotel_Price", "Hotel_Destination", "Hotel_City", "Hotel_Type", "Hotel_Distance", "Hotel_Map_Iframe", "Hotel_Description", "Hotel_isTrashed", "Hotel_Id"), "post");

  // print_r($data);

  if (AddHotel($data)) {
    unset($data);
  }

  
}


  
  
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

  <title>Shirkat-ul-Ras | Add Hotel</title>

 <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

  <!-- foundation -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.4-rc1/css/foundation.css"> -->

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



    <style>
    
  
input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: #d3ba37;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: #000;
}
  </style>
  

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
            <h1>Add Hotels </h1>
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
                    <h3 class="card-title"><i class="fas fa-hotel"></i> &nbsp; Add New Hotel

                      <small>
                        <?php
                        print_r($data); 
                        print_r($Hotel_Galley_Image);
                        ?>

                      </small></h3>
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
                <form action="" id="img-upload-form" method="post" enctype="multipart/form-data">

                    <div class="card-body">
                          <!-- 1st row -->
                          <div class="row">
                            <!-- featured image -->
                            <input class="form-control required" name="Hotel_isTrashed" id="" type="hidden" value="0" readonly>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="featuredImage">Add Featured Image</label>
                                          <div class="ml-2">
                                          <img src="https://placehold.it/250x250" id="preview" class="img-thumbnail">
                                          </div>
                                          <input type="file" name="Hotel_Featured_Image" class="file" accept="image/*">
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
                                      <input type="text" class="form-control" id="hotel-title" placeholder="Hotel title" name="Hotel_Title">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="Title">Location</label>
                                      <input type="text" class="form-control" id="hotel-title" placeholder="Hotel title" name="Hotel_Location">
                                    </div>
                                </div>

                                <!-- hotel price -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="price">Price</label>
                                      <input type="text" class="form-control" id="hotel-price" placeholder="Hotel Price" name="Hotel_Price">
                                    </div>
                                </div>

                          </div>
                          <!-- 3rd row-->
                          <div class="row">

                                <!-- destinations -->
                              <div class="col-md-4">
                                  <!-- select -->
                                  <div class="form-group">
                                    <label>Destination</label>
                                    <select class="form-control cstm" name="Hotel_Destination">
                                      <option value="Iraq">Iraq</option>
                                      <option value="Iran">Iran</option>
                                      <option value="Syria">Syria</option>
                                      <option value="Kingdom Of Saudi Arabia">Kingdom Of Saudi Arabia</option>
                                    </select>
                                  </div>
                              </div>
                            
                              <!-- hotel cities -->
                              <div class="col-md-4">
                                  <!-- select -->
                                  <div class="form-group">
                                    <label>Cities</label>
                                    <select class="form-control cstm" name="Hotel_City">
                                      <option value="Karbala">Karbala</option>
                                      <option value="Najaf">Najaf</option>
                                      <option value="Kazmain">Kazmain</option>
                                      <option value="Mashad">Mashad</option>
                                      <option value="Qom">Qom</option>
                                      <option value="Damascus">Damascus</option>
                                      <option value="Makkah">Makkah</option>
                                      <option value="Madina">Madina</option>
                                    </select>
                                  </div>
                              </div>
                              
                              

                              <!-- hotel standard -->
                              <div class="col-md-4">
                                  <!-- select -->
                                  <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control cstm" name="Hotel_Type">
                                      <option value="Deluxe Supreme">Deluxe Supreme)</option>
                                      <option value="Deluxe">Deluxe</option>
                                      <option value="Standard">Standard</option>
                                      <option value="Economy Supreme">Economy Supreme</option>
                                      <option value="Economy">Economy</option>
                                    </select>
                                  </div>
                              </div>
                          </div>
                          <!-- 4th row -->
                          <div class="row">
                              <!-- Distance -->
                              <div class="col-md-4">
                                  <!-- select -->
                                  <div class="form-group">
                                    <label>Distance</label>
                                    <select class="form-control cstm" name="Hotel_Distance">
                                      <option value="0m to 100m From Haram">0m to 100m From Haram</option>
                                      <option value="100m to 500m From Haram">100m to 500m From Haram</option>
                                      <option value="Above 500m From Haram">Above 500m From Haram</option>
                                    </select>
                                  </div>
                              </div>

                              <!-- Map Iframe -->
                              <div class="col-md-8">
                                    <label for="Mapiframe">Map iframe</label>
                                    <!--Textarea with icon prefix-->
                                        <div class="md-form amber-textarea active-amber-textarea">
                                          <input type="text" id="locationMap" class="md-textarea form-control" rows="3" name="Hotel_Map_Iframe">
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
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="Hotel_Description">
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
                                    <div class="field" align="center">
                                      
                                      <input type="file" id="files" name="Hotel_Galley_Image[]" multiple />
                                    </div>

                                   
                                    
                                      
                                      <!-- <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                                      <p class="text-center pt-4">
                                        <label for="upload_imgs" class="button hollow HotelGalleryUploadButton">Select Your Images +</label>
                                        <input class="show-for-sr HotelGalleryUpload" type="file" id="upload_imgs" name="Hotel_Galley_Image" multiple/>
                                      </p> -->

                                      
                                      <!-- <p>
                                        <input class="button large expanded" type="submit" name="submit" value="Upload Images"/>
                                      </p> -->
                                   

                                  </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer bg-white text-right">
                          <button type="submit" class="btn btn-secondary btn-lg" name="AddHotel">Submit</button>
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
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- custom script -->
<script src="dist/js/script.js"></script>
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




<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<!-- Feature Image Preview -->
<script>
  $(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview").src = e.target.result;
  };
  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
});
</script>


<!-- IMAGE GALLERY  -->
<!-- <script>  

var imgUpload = document.getElementById('upload_imgs')
  , imgPreview = document.getElementById('img_preview')
  , imgUploadForm = document.getElementById('img-upload-form')
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUpload.addEventListener('change', previewImgs, false);
imgUploadForm.addEventListener('submit', function (e) {
  e.preventDefault();
  alert('Images Uploaded! (not really, but it would if this was on your website)');
}, false);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;
  
  if(!!totalFiles) {
    imgPreview.classList.remove('quote-imgs-thumbs--hidden');
    previewTitle = document.createElement('p');
    previewTitle.style.fontWeight = 'bold';
    previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
    previewTitle.appendChild(previewTitleText);
    imgPreview.appendChild(previewTitle);
  }
  
  for(var i = 0; i < totalFiles; i++) {
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    imgPreview.appendChild(img);
  }
}

</script> -->

<!--script for initializing gallery uploader-->
<script>    
    
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\"><i class='fas fa-times'></i></span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
    
    
</script>
</body>
</html>
