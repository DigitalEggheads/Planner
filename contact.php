<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Shirkat-ul-Ras">
    <meta name="digitaleggheads" content="Shirkat-ul-Ras">
    <title>Shirkat-ul-Ras | Contact</title>

    <!-- Favicons-->
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png"> -->

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Montserrat:300,400,700" rel="stylesheet">

    <!-- COMMON CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">
    
    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/skr-custom.css">

     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
</head>
<body>

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <?php include_once "./Navigation.php"; ?>

  <section class="parallax-window" data-parallax="scroll" data-image-src="img/Page-Title-Bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
      <div class="animated fadeInDown">
        <h1>Contact us</h1>
      </div>
    </div>
  </section>
  <!-- End Section -->

  <main>
    <div id="position">
      <div class="container">
        <ul>
          <li><a href="#">Home</a>
          </li>
          <li><a href="#" class="active">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- End Position -->

    <div class="container margin_60">
      <div class="row">
        <div class="col-md-8">
          <div class="form_title">
            <h3><strong><i class="icon-pencil"></i></strong>Leave us your query here</h3>
            <p>
              <!-- Mussum ipsum cacilds, vidis litro abertis. -->
            </p>
          </div>
          <div class="step">

            <div id="message-contact"></div>
            <form method="post" action="assets/contact.php" id="contactform">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" id="name_contact" name="First_Name" placeholder="Enter Name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="email_contact" name="Email_Id" class="form-control" placeholder="Enter Email">
                  </div>
                  
                </div>
              </div>
              <!-- End row -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" id="phone_contact" name="Contact_Number" class="form-control" placeholder="Enter Phone number">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" id="lastname_contact" name="Last_Name" placeholder="Enter Subject">
                  </div>
                  
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Message</label>
                    <textarea rows="5" id="message_contact" name="Message" class="form-control" placeholder="Write your message" style="height:200px;"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  
                  <input type="submit" value="Submit" class="btn_1" id="submit-contact" name="submit-contact">
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- End col-md-8 -->

        <div class="col-md-4">
          <div class="box_style_1">
            <span class="tape"></span>
            <h4>Address <span><i class="icon-pin pull-left"></i></span></h4>
            <p>
              Suite #1, Mezzanine Floor, Hanif Mansion, Opp. Nisthar Park, Soldier Bazar No.3, Karachi-Pakistan.
            </p>
            <hr>
            <h4>Follow us <span><i class="icon-follow pull-right"></i></span></h4>
            <!-- <p>
              Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie.
            </p> -->
          <div id="social_contact_sidebar">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                    </div>
          </div>
          <div class="box_style_4">
            <i class="icon_set_1_icon-57"></i>
            <h4>Need <span>Help?</span></h4>
            <a href="tel:+923018587645" class="phone">+923018587645</a>
          
          </div>
        </div>
        <!-- End col-md-4 -->
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->


    <div id="map_contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d226.22843035482398!2d67.0330093!3d24.875634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e4324062253%3A0xc71c7a63c66c6df3!2sHanif%20Mansion!5e0!3m2!1sen!2s!4v1581596489397!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    <!-- end map-->

    
    <!-- end map-->

  </main>
  <!-- End main -->

<?php include_once "./Footer.php"; ?>