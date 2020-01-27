<?php
    
	include_once "./backend/authentication.php";
    include_once "./backend/hotel.php";

$AllReviews = getAllReviews();
$url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
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

if(empty($_GET['Hotel_Id'])) {
    header("Location: hotels.php");
    exit;
}


if (isset($_POST["signup"])) {

  $data = getRequestData(array("name", "gender", "lookingFor", "age", "email", "password"), "post");
  
  if (signup($data)) {
    unset($data);
  }
  
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Shirkat-ul-Ras">
    <meta name="digitaleggheads" content="Shirkat-ul-Ras">
    <title>Shirkat-ul-Ras | <?php echo $Hotel_Title; ?> </title>

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

    <section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $Hotel_Featured_Image;?>" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i></span>
                    <h1><?php echo $Hotel_Title; ?></h1>
                    <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                </div>
                <div class="col-md-4">
                    <div id="price_single_main" class="hotel">
                        from/per night <span><sup>$</sup><?php echo $Hotel_Price; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End section -->
	
	<main>
	<div id="position">
		<div class="container">
			<ul>
				<li><a href="./index.php">Home</a></li>
				<li><a href="./hotels.php">Hotels</a></li>
				<li><?php echo $Hotel_Title; ?></li>
			</ul>
		</div>
	</div>
	<!-- End Position -->

    
     <div class="collapse" id="collapseMap">
        <!-- <div id="map" class="map"></div> -->
        <div style="">
            <?php echo $Hotel_Map_Iframe; ?>
        </div>
    </div><!-- End Map -->
	
    <div class="container margin_60">
    <div class="row">
        <div class="col-lg-8" id="single_tour_desc">
					<div id="single_tour_feat">
						<ul>
							<li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
							<li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
							<li><i class="icon_set_2_icon-110"></i>Poll</li>
							<li><i class="icon_set_1_icon-59"></i>Breakfast</li>
							<li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
							<li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
							<li><i class="icon_set_1_icon-27"></i>Parking</li>
						</ul>
					</div>
					<p class="d-none d-md-block d-block d-lg-none"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</p>
					<!-- Map button for tablets/mobiles -->
					<div id="Img_carousel" class="slider-pro">
						<div class="sp-slides">

							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/1_medium.jpg" data-small="img/slider_single_tour/1_small.jpg" data-medium="img/slider_single_tour/1_medium.jpg" data-large="img/slider_single_tour/1_large.jpg" data-retina="img/slider_single_tour/1_large.jpg">
							</div>
							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/2_medium.jpg" data-small="img/slider_single_tour/2_small.jpg" data-medium="img/slider_single_tour/2_medium.jpg" data-large="img/slider_single_tour/2_large.jpg" data-retina="img/slider_single_tour/2_large.jpg">
							</div>

							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/3_medium.jpg" data-small="img/slider_single_tour/3_small.jpg" data-medium="img/slider_single_tour/3_medium.jpg" data-large="img/slider_single_tour/3_large.jpg" data-retina="img/slider_single_tour/3_large.jpg">
							</div>

							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/4_medium.jpg" data-small="img/slider_single_tour/4_small.jpg" data-medium="img/slider_single_tour/4_medium.jpg" data-large="img/slider_single_tour/4_large.jpg" data-retina="img/slider_single_tour/4_large.jpg">
							</div>

							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/5_medium.jpg" data-small="img/slider_single_tour/5_small.jpg" data-medium="img/slider_single_tour/5_medium.jpg" data-large="img/slider_single_tour/5_large.jpg" data-retina="img/slider_single_tour/5_large.jpg">
							</div>

							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/6_medium.jpg" data-small="img/slider_single_tour/6_small.jpg" data-medium="img/slider_single_tour/6_medium.jpg" data-large="img/slider_single_tour/6_large.jpg" data-retina="img/slider_single_tour/6_large.jpg">
							</div>

							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/7_medium.jpg" data-small="img/slider_single_tour/7_small.jpg" data-medium="img/slider_single_tour/7_medium.jpg" data-large="img/slider_single_tour/7_large.jpg" data-retina="img/slider_single_tour/7_large.jpg">
							</div>

							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/8_medium.jpg" data-small="img/slider_single_tour/8_small.jpg" data-medium="img/slider_single_tour/8_medium.jpg" data-large="img/slider_single_tour/8_large.jpg" data-retina="img/slider_single_tour/8_large.jpg">
							</div>

							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/9_medium.jpg" data-small="img/slider_single_tour/9_small.jpg" data-medium="img/slider_single_tour/9_medium.jpg" data-large="img/slider_single_tour/9_large.jpg" data-retina="img/slider_single_tour/9_large.jpg">
							</div>
						</div>
						<div class="sp-thumbnails">
							<img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/1_medium.jpg">
							<img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/2_medium.jpg">
							<img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/3_medium.jpg">
							<img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/4_medium.jpg">
							<img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/5_medium.jpg">
							<img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/6_medium.jpg">
							<img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/7_medium.jpg">
							<img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/8_medium.jpg">
							<img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/9_medium.jpg">
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-lg-3">
							<h3>Description</h3>
						</div>
						<div class="col-lg-9">
							<p>
								<?php echo $Hotel_Description; ?>
							</p>
							
						</div>
						<!-- End col-md-9  -->
					</div>
					<!-- End row  -->

					<hr>

					<div class="row">
						<div class="col-lg-3">
							<h3>Reviews</h3>
							<a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a review</a>
						</div>
						<div class="col-lg-9">
							<?php foreach ($AllReviews as $key => $value) { ?>

							<div class="review_strip_single">
								<img src="img/avatar1.jpg" alt="Image" class="rounded-circle">
								<small> - 10 March 2015 -</small>
								<h4><?=$value["Hotel_Review_Name"]?></h4>
								<p>
									"<?=$value["Hotel_Review_Details"]?>"
								</p>
								<div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
								</div>
							</div>
							<!-- End review strip -->

						<?php } ?>
							
						</div>
					</div>
				</div>
				<!--End  single_tour_desc-->
        
        <aside class="col-lg-4">

        <p class="d-none d-xl-block d-lg-block d-xl-none">
            <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
        </p>
        <div class="box_style_1 expose">

        <form id="" action="" method="post">
            <h3 class="inner">Booking</h3>
            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> Check in</label>
                                    <input class="form-control booking_date" id="bookingdate" type="text" data-lang="en" data-large-mode="true" data-large-default="true" data-min-year="2017" data-max-year="2020" data-disabled-days="11/17/2017,12/17/2017" name="Hotel_Query_Check_In">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> Check out</label>
                                    <input class="form-control booking_date" id="bookingdate" type="text" data-lang="en" data-large-mode="true" data-large-default="true" data-min-year="2017" data-max-year="2020" data-disabled-days="11/17/2017,12/17/2017" name="Hotel_Query_Check_Out">
                                </div>
                            </div>
                        </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Adults</label>
                        <div class="numbers-row">
                            <input type="text" value="0" id="adults_hotel" class="qty2 form-control required" name="Hotel_Query_Adult">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Children</label>
                        <div class="numbers-row">
                            <input type="text" value="0" id="children_hotels" class="qty2 form-control required" name="Hotel_Query_Children">
                        </div>
                    </div>
                </div>
                </div>
                 <hr>

                 <div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input class="form-control required" name="Hotel_Url" id="" type="hidden" value="<?php echo $url; ?>" readonly>
							<input class="form-control required" name="Hotel_Title" id="" type="hidden" value="<?php echo $Hotel_Title; ?>" readonly>
						</div>
					</div>
				</div>

                <div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Name</label>
							<input class="form-control required" name="Hotel_Query_Name" id="name_hotel_booking" type="text">
						</div>
					</div>
				</div>
               
				<div class="form-group" style="position:relative">
					<label>Email</label>
					<input class="form-control required" type="email" name="Hotel_Query_Email" id="email_hotel_booking">
				</div>
				<div class="form-group" style="position:relative">
					<label>Telephone</label>
					<input class="form-control required" type="text" name="Hotel_Query_Contact_Number" id="phone_hotel_booking">
				</div>
            <br>
            
            <button type="submit" class="btn_full" name="signup">Send</button>
            </form>
            
     
		<!-- END SEND MAIL SCRIPT -->   
        </div><!--/box_style_1 -->
        
        <div class="box_style_4">
            <i class="icon_set_1_icon-90"></i>
            <h4><span>Book</span> by phone</h4>
            <a href="tel://004542344599" class="phone">+45 423 445 99</a>
            <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>
        
        </aside>
    </div><!--End row -->
    </div><!--End container -->
    
    <div id="overlay"></div><!-- Mask on input focus --> 
    
    </main><!-- End main -->
	
<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/Branding/FooterLogo.png" style="width: 85px" alt="">
                <h3>Shirkat-ul-Ras</h3>
                <p>Shirkat ul Ras is all about making your dreams come alive. We arrange and facilitate trips for individuals and groups. Our fleet has a large number of hotels, transport and other facilities from which you can take advantage. Our plan is to extend the religious tourism and make travelling easier to dedicated locations</p>
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                </div>
                
            </div>
            
            <div class="col-md-3">
                <h3>Quick Links</h3>
                <ul>
                	<li><a href="#">Hotels</a></li>
                	<li><a href="#">Services</a></li>
                    <li><a href="#">Trip Planner</a></li>
                    <li><a href="#">Partners</a></li>
                </ul>
                <h3>Destinations</h3>
                <ul>
                    <li><a href="/planner/iraq.html">Iraq</a></li>
                    <li><a href="/planner/iran.html">Iran</a></li>
                    <li><a href="/planner/syria.html">Syria</a></li>
                    <li><a href="/planner/ksa.html">Kingdom Of Saudi Arabia</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Need help?</h3>
                <p id="address" class="pt-0"> Suite # 8, Al Murtaza Terrace, JM-2/198, Bahadur Yar Jang Road, Soldier Bazar # 3, Karachi-Pakistan.</p>
                <a href="tel:+923018587645" id="phone">+92 301 8587645</a>
                <a href="mailto:info@shirkatulras.com" id="email_footer">info@shirkatulras.com</a>
            </div>
        </div><!-- End row -->
        <div class="row text-center">
            <div class="col-md-12 footer-copyrights">
                <p>© <a href="#">Shirkat-ul-Ras</a> 2020 - Developed by: <a href="https://digitaleggheads.com/" target="_blank">Digital Eggheads</a></p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->


	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_set_1_icon-78"></i>
			</button>
		</form>
	</div><!-- End Search Menu -->
	
	
<!-- Modal Review -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myReviewLabel">Write your review</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div id="message-review">
				</div>
				<form method="post" action="assets/review_hotel.php" name="review_hotel" id="review_hotel">
                <input name="hotel_name" id="hotel_name" type="hidden" value="Mariott Hotel Paris">	
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input name="name_review" id="name_review" type="text" placeholder="Your name" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input name="lastname_review" id="lastname_review" type="text" placeholder="Your last name" class="form-control">
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input name="email_review" id="email_review" type="email" placeholder="Your email" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<select class="form-control" name="room_type_review" id="room_type_review">
									<option value="">Select room type</option>
									<option value="Single room">Single Room</option>
									<option value="Double Room">Double Room</option>
									<option value="King double room">King Double Room</option>
								</select>
							</div>
						</div>
					</div>
					<!-- End row -->
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Cleanliness</label>
								<select class="form-control" name="cleanliness_review" id="cleanliness_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Comfort</label>
								<select class="form-control" name="comfort_review" id="comfort_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Price</label>
								<select class="form-control" name="price_review" id="price_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Quality</label>
								<select class="form-control" name="quality_review" id="quality_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="form-group">
						<textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
					</div>
					<div class="form-group">
						<input type="text" id="verify_review" class=" form-control" placeholder="Are you human? 3 + 1 =">
					</div>
					<input type="submit" value="Submit" class="btn_1" id="submit-review">
				</form>
			</div>
		</div>
	</div>
</div><!-- End modal review -->

 <!-- Common scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

	<!-- Specific scripts -->
	<script src="js/jquery.validate.js"></script>
	<!-- Date and time pickers -->
	<script src="js/jquery.sliderPro.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function($) {
			$('#Img_carousel').sliderPro({
				width: 960,
				height: 500,
				fade: true,
				arrows: true,
				buttons: false,
				fullScreen: false,
				smallSize: 500,
				startSlide: 0,
				mediumSize: 1000,
				largeSize: 3000,
				thumbnailArrows: true,
				autoplay: false
			});
		});
	</script>
	<!-- Date and time pickers -->
	<script>
		$("#booking_hotel").validate();
		$('input.date-pick').datepicker();
	</script>
	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/map.js"></script>
	<script src="js/infobox.js"></script>
	<!-- Carousel -->
	<script>
		$('.carousel-thumbs-2').owlCarousel({
			loop: false,
			margin: 5,
			responsiveClass: true,
			nav: false,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 4,
					nav: false
				}
			}
		});
	</script>
	<!--Review modal validation -->
	<script src="assets/validate.js"></script>
	
  </body>
</html>