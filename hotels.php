<?php


include_once "./backend/hotels.php";

$search = array();

$data = getRequestData(array("range", "Hotel_Type","Hotel_City", "Hotel_Distance"), "get");

$allHotels = getAllHotels($data);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Shirkat-ul-Ras">
    <meta name="digitaleggheads" content="Shirkat-ul-Ras">
    <title>Shirkat-ul-Ras - Hotels</title>
<!-- Common scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
    <!-- Favicons-->
    <link rel="icon" href="img/Branding/Favicon.png" type="image/png">
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
                    <li><a href="./index.php">Home</a>
                    </li>
                    <li class="active">Hotels</li>
                </ul>
            </div>
        </div>


        <div class="container margin_60">

            <div class="row">
                <aside class="col-lg-3">


                    <div id="filters_col">
                        <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters</a>
                        <form class="collapse show" id="collapseFilters">
                            <div class="filter_type">
                                <h6>Price</h6>
                                <input type="text" id="range" name="range" value=""
                                    <?= isset($data["range"]) ? 'data-from="'.explode(";", $data["range"])[0].'"' : "" ?>
                                    <?= isset($data["range"]) ? 'data-to="'.explode(";", $data["range"])[1].'"' : "" ?>
                                >
                            </div>
                            <div class="filter_type">
                                <h6>Hotel Type</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Super Deluxe" <?= in_array("Super Deluxe", ifsetor($data["Hotel_Type"], array())) ? "checked" : "" ?> name="Hotel_Type[]">Super Deluxe
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Deluxe" <?= in_array("Deluxe", ifsetor($data["Hotel_Type"], array())) ? "checked" : "" ?> name="Hotel_Type[]">Deluxe
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Standard" <?= in_array("Standard", ifsetor($data["Hotel_Type"], array())) ? "checked" : "" ?> name="Hotel_Type[]">Standard
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Economical Plus" <?= in_array("Economical Plus", ifsetor($data["Hotel_Type"], array())) ? "checked" : "" ?> name="Hotel_Type[]">Economical Plus
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Economy" <?= in_array("Economy", ifsetor($data["Hotel_Type"], array())) ? "checked" : "" ?> name="Hotel_Type[]">Economy
                                        </label>
                                    </li>
                                </ul>
                            </div>


                            <div class="filter_type">
                                <h6>Iraq</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Karbala" <?= in_array("Karbala", ifsetor($data["Hotel_City"], array())) ? "checked" : "" ?> name="Hotel_City[]">Karbala
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Najaf" <?= in_array("Najaf", ifsetor($data["Hotel_City"], array())) ? "checked" : "" ?> name="Hotel_City[]">Najaf
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Kazmain" <?= in_array("Kazmain", ifsetor($data["Hotel_City"], array())) ? "checked" : "" ?> name="Hotel_City[]">Kazmain
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="filter_type">
                                <h6>Iran</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Qum" <?= in_array("Qum", ifsetor($data["Hotel_City"], array())) ? "checked" : "" ?> name="Hotel_City[]">Qum
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Mashhad" <?= in_array("Mashhad", ifsetor($data["Hotel_City"], array())) ? "checked" : "" ?> name="Hotel_City[]">Mashhad
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="filter_type">
                                <h6>KSA</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Makkah" <?= in_array("Super Deluxe", ifsetor($data["Hotel_City"], array())) ? "checked" : "" ?> name="Hotel_City[]">Makkah
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Madina" <?= in_array("Super Deluxe", ifsetor($data["Hotel_City"], array())) ? "checked" : "" ?> name="Hotel_City[]">Madina
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="filter_type">
                                <h6>Distance</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="0m to 100m" <?= in_array("0m to 100m", ifsetor($data["Hotel_Distance"], array())) ? "checked" : "" ?> name="Hotel_Distance[]">0m to 100m
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="100m to 500m" <?= in_array("100m to 500m", ifsetor($data["Hotel_Distance"], array())) ? "checked" : "" ?> name="Hotel_Distance[]">100m to 500m
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="Above 500m" <?= in_array("Above 500m", ifsetor($data["Hotel_Distance"], array())) ? "checked" : "" ?> name="Hotel_Distance[]">Above 500m
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- <form>

                                <input type="hidden" id="hiddenHotel_Type" name="in-Hotel_Type" />
                                <input type="hidden" id="hiddenHotel_City" name="in-Hotel_City" />
                                <input type="hidden" id="hiddenHotel_Distance" name="in-Hotel_Distance" />
                                
                                <input type="submit" value="Submit" />
                            </form> -->
                            <input type="submit" value="Submit" />

                        </form>
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
                        <?php while ($value = $page_result->fetch_assoc()): ?>
                            <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">


                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="img_list">
                                            <a href="hotel.php?Hotel_Id=<?= $value["Hotel_Id"] ?>"><img src="<?= $value["Hotel_Featured_Image"] ?>" alt="Image">
                                                <div class="short_info"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tour_list_desc">
                                            <div class="score"><?= $value["Hotel_City"] ?><span><i class="fa fa-building"></i></span>
                                            </div>
                                            <div><i class="fa fa-list-ul"></i> <?= $value["Hotel_Type"] ?>
                                            </div>
                                            <h3><strong> <a href="hotel.php?Hotel_Id=<?= $value["Hotel_Id"] ?>"> <?= $value["Hotel_Title"] ?> </a></strong></h3>
                                            <p> <?= $value["Hotel_Description"] ?> </p>
                                            <ul class="add_info">
                                                <li>
                                                    <span class="tooltip-1" data-placement="top" title="Wifi"><i class="icon_set_1_icon-86"></i></span>
                                                </li>
                                                <li>
                                                    <span class="tooltip-1" data-placement="top" title="Breakfast"><i class="icon_set_1_icon-59"></i></span>
                                                </li>
                                                <li>
                                                    <span class="tooltip-1" data-placement="top" title="Accessibiliy"><i class="icon_set_1_icon-13"></i></span>
                                                </li>
                                                <li>
                                                    <span class="tooltip-1" data-placement="top" title="Parking"><i class="icon_set_1_icon-27"></i></span>
                                                </li>
                                                <li>
                                                    <span class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2">
                                        <div class="price_list">
                                            <div><sup>$</sup><?= $value["Hotel_Price"] ?>*<span class="normal_price_list"></span><small>Per night</small>
                                                <p><a href="hotel.php?Hotel_Id=<?= $value["Hotel_Id"] ?>" class="btn_1">Details</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        <!--End strip -->
                        <?php endwhile; ?>
                    <?php } ?>


                    <hr>

                    <nav aria-label="Page navigation">
                        <?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
                            <ul class="pagination justify-content-center">
                                <?php if ($page > 1): ?>
                                    <li class="prev page-item">
                                        <a class="page-link" href="hotels.php?page=<?php echo $page-1 ?>">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                <?php endif; ?>


                                <?php if ($page > 3): ?>
                                    <li class="start page-item">
                                        <a class="page-link" href="hotels.php?page=1">
                                            1
                                        </a>
                                    </li>
                                <?php endif; ?>


                                <?php if ($page-2 > 0): ?>
                                    <li class="page page-item">
                                        <a class="page-link" href="hotels.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?>
                                        </a>
                                    </li>
                                <?php endif; ?>


                                <?php if ($page-1 > 0): ?>
                                    <li class="page page-item">
                                        <a class="page-link" href="hotels.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <li class="currentpage page-item">
                                    <a class="page-link" href="hotels.php?page=<?php echo $page ?>"><?php echo $page ?>
                                    </a>
                                </li>


                                <?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?>
                                    <li class="page page-item">
                                        <a class="page-link" href="hotels.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?>
                                        </a>
                                    </li>
                                <?php endif; ?>


                                <?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?>
                                    <li class="page page-item">
                                        <a class="page-link" href="hotels.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?>
                                        </a>
                                    </li>
                                <?php endif; ?>


                                <?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
                                    <li class="end page-item">
                                        <a class="page-link" href="hotels.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>">
                                            <?php echo ceil($total_pages / $num_results_on_page) ?>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
                                    <li class="next page-item">
                                        <a class="page-link" href="hotels.php?page=<?php echo $page+1 ?>">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>

                        <!--
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
-->

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

    <!-- <script>
        // $(".filter_type input[type=checkbox]").click(function() {
        $(".filter_type label").click(function() {
            setTimeout(() => {
                
                var value = $("#hidden" + $(this).find("input").attr("name")).val();

                value = value ? value.split(",") : [];
    
                if ($(this).find("input").prop("checked")) {
                    value.push($(this).find("input").val());
                } else {
                    var index = value.indexOf($(this).find("input").val());
                    if (index != -1) {
                        value.splice(index, 1);
                    }
                }
                $("#hidden" + $(this).find("input").attr("name")).val(value.join(","));
            }, 100);

        });
    </script> -->

    <?php include_once "./Footer.php"; ?>