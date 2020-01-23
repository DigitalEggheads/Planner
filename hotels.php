<?php 


  include_once "./backend/hotels.php";

  


    $allHotels = getAllHotels();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Shirkat-ul-Ras">
    <meta name="digitaleggheads" content="Shirkat-ul-Ras">
    <title>Shirkat-ul-Ras | Hotels</title>

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

    <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <ul id="top_links_left">
                            <li>
                                <i class="icon-phone"></i><strong><a href="tel:92 301 8587645">+92 301 8587645</a></strong>
                            </li>
                            <li>
                                <i class="icon-email"></i><strong><a href="mailto:info@shirkatulras.com">info@shirkatulras.com</a></strong>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="col-6">
                        <ul id="top_links">
                            <li><a href="#youtube_link" id="youtube_link">Youtube</a></li>
                            <li><a href="#facebook_link" id="facebook_link">Facebook</a></li>
                            <li><a href="#instagram_link" id="instagram_link">Instagram</a></li>

                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                        <img src="img/Branding/logo.png" alt="Shirkat-ul-Ras" data-retina="true">
                        <h1></h1>
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/Branding/logo.png" alt="Shirkat-ul-Ras" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="index.html" class="show-submenu">Home</a>
                            </li>
                            <li class="submenu">
                                <a href="about.html" class="show-submenu">About Us<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Who We Are?</a></li>
                                    <li><a href="javascript:void(0);">Our Vision & Mission</a></li>
                                    <li><a href="team.html">Our Team</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="services.html" class="show-submenu">Services</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Destinations <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li class="third-level"><a href="javascript:void(0);">Iraq</a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Karbala</a></li>
                                            <li><a href="javascript:void(0);">Najaf</a></li>
                                            <li><a href="javascript:void(0)">Kazmain<</a></li>
                                        </ul>
                                    </li>

                                    <li class="third-level"><a href="javascript:void(0);">Iran</a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Mashhad</a></li>
                                            <li><a href="javascript:void(0);">Qom</a></li>
                                        </ul>
                                    </li>

                                    <li class="third-level"><a href="javascript:void(0);">Syria</a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Damascus</a></li>
                                        </ul>
                                    </li>
                                    <li class="third-level"><a href="javascript:void(0);">Kingdom of Saudi Arabia</a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Makkah</a></li>
                                            <li><a href="javascript:void(0);">Madina</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="hotels.html" class="show-submenu">Hotels</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Trip Planner</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Partners</a>
                            </li>
                            <li class="submenu">
                                <a href="contact.html" class="show-submenu">Contact Us</a>
                            </li>
                        </ul>
                    </div><!-- End main-menu -->
 <!--                    <ul id="top_tools">
                        <li>
                            <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i></a>
                        </li>
                    </ul> -->
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->
	<section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Hotels</h1>
				<p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
			</div>
		</div>
	</section>
	<!-- End section -->

	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#" class="active">Hotels</a></li>
				</ul>
			</div>
		</div>
		<!-- Position -->

		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- End Map -->

		<div class="container margin_60">

			<div class="row">
				<aside class="col-lg-3">
					<p>
						<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</p>

					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters</a>
						<div class="collapse show" id="collapseFilters">
                            <div class="filter_type">
                                <h6>Hotel Type</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">Super Deluxe
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Deluxe
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Standard
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Economical Plus
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Economy
                                        </label>
                                    </li>
                                </ul>
                            </div>

							<div class="filter_type">
                                <h6>Iraq</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">Karbala
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Najaf
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Kazmain
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="filter_type">
                                <h6>Iran</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">Qum
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Mashdad
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="filter_type">
                                <h6>KSA</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">Makkah
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Medina
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="filter_type">
                                <h6>Distance</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">0m to 100m
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">100m to 500m
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Above 500m
                                        </label>
                                    </li>
                                </ul>
                            </div>

						</div>
						<!--End collapse -->
					</div>
					<!--End filters col-->
					<div class="box_style_2">
						<i class="icon_set_1_icon-57"></i>
						<h4>Need <span>Assistance?</span></h4>
						<a href="tel:03018587645" class="phone">+92 301 8587645</a>
						<small>Monday to Friday 9.00am - 5.00pm</small>
					</div>
				</aside>
				<!--End aside -->

				<div class="col-lg-9">

					<div id="tools">
						<div class="row">
							<div class="col-md-3 col-sm-4 col-6">
								<div class="styled-select-filters">
									<select name="sort_price" id="sort_price">
										<option value="" selected>Sort by price</option>
										<option value="lower">Lowest price</option>
										<option value="higher">Highest price</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-4 col-6">
								<div class="styled-select-filters">
									<select name="sort_rating" id="sort_rating">
										<option value="" selected>Sort by ranking</option>
										<option value="lower">Lowest ranking</option>
										<option value="higher">Highest ranking</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-4 d-none d-sm-block text-right">
								<a href="#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_hotels_list.html" class="bt_filters"><i class=" icon-list"></i></a>
							</div>
						</div>
					</div>
					<!--End tools -->

                    <?php foreach ($allHotels as $key => $value) { ?>
					<div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="ribbon_3 popular"><span>Popular</span>
								</div>
								<div class="img_list">
									<a href="single_hotel.html"><img src="img/hotel_1.jpg" alt="Image">
										<div class="short_info"></div>
									</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="tour_list_desc">
									<div class="score">Superb<span>9.0</span>
									</div>
									<div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i>
									</div>
									<h3><strong> <?=$value["Hotel_Title"]?> </strong></h3>
									<p> <?=$value["Hotel_Description"]?> </p>
									<ul class="add_info">
										<li>
											<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
										</li>
										<li>
											<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
										</li>
										<li>
											<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
										</li>
										<li>
											<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
										</li>
										<li>
											<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-2">
								<div class="price_list">
									<div><sup>$</sup><?=$value["Hotel_Price"]?>*<span class="normal_price_list"></span><small>*From/Per night</small>
										<p><a href="single_hotel.html" class="btn_1">Details</a>
										</p>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!--End strip -->
                    <?php } ?>


					<hr>

					<nav aria-label="Page navigation">
						<ul class="pagination justify-content-center">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item active"><span class="page-link">1<span class="sr-only">(current)</span></span>
							</li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
					<!-- end pagination-->

				</div>
				<!-- End col lg-9 -->
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->
	</main>
	<!-- End main -->

	<footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                    <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
                </div>
                <div class="col-md-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                         <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Tour guide</a></li>
                        <li><a href="#">Wishlist</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <p>© Citytours 2018</p>
                    </div>
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
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<input id="remember-me" type="checkbox" name="check">
						<label for="remember-me">Remember Me</label>
					</div>
					<div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
				<div class="text-center">
					Don’t have an account? <a href="javascript:void(0);">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->

	<!-- Date and time pickers -->
	<script src="js/datepicker_advanced.js"></script>

	<!-- Common scripts -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>

	<!-- Date and time pickers -->
	<script src="js/datepicker_advanced.js"></script>

	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/map_hotels.js"></script>
	<script src="js/infobox.js"></script>
	
	<!-- Check box and radio style iCheck -->
	<script>
		$('input').iCheck({
		   checkboxClass: 'icheckbox_square-grey',
		   radioClass: 'iradio_square-grey'
		 });
	</script>
	
	<script>
		$('.carousel-thumbs-2').owlCarousel({
		loop:false,
		margin:5,
		responsiveClass:true,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4,
				nav:false
			}
		}
	});
	</script>

	<!--Review modal validation -->
	<script src="assets/validate.js"></script>

</body>

</html>