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

    <?php include_once "./Navigation.php"; ?>

	<section class="parallax-window parallax-window-h300" data-parallax="scroll" data-image-src="img/Page-Title-Bg.jpg" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Hotels</h1>
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
		

		<div class="container margin_60">

			<div class="row">
				<aside class="col-lg-3">
					

					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters</a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type">
								<h6>Price</h6>
								<input type="text" id="range" name="range" value="">
							</div>
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

                    <?php foreach ($allHotels as $key => $value) { ?>
					<div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="ribbon_3 popular"><span>Popular</span>
								</div>
								<div class="img_list">
									<a href="hotel.php?Hotel_Id=<?=$value["Hotel_Id"]?>"><img src="<?=$value["Hotel_Featured_Image"]?>" alt="Image">
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
									<h3><strong> <a href="hotel.php?Hotel_Id=<?=$value["Hotel_Id"]?>"> <?=$value["Hotel_Title"]?> </a></strong></h3>
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
									<div><small>Starting From</small>$<?=$value["Hotel_Price"]?>*<span class="normal_price_list"></span><small>*From/Per night</small>
										<p><a href="hotel.php?Hotel_Id=<?=$value["Hotel_Id"]?>" class="btn_1">Details</a>
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
<?php include_once "./Footer.php"; ?>

	

	