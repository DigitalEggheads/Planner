
<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 p-1"><img class="img-responsive mw-100" src="img/Branding/FooterLogo.png" alt="Footer Logo"></div>
                    <div class="col-md-6 p-1"><img class="img-responsive mw-100" src="img/Branding/Al-Sahlah-Logo.png" alt="Al-Sahlah-Logo"></div>
                </div>
                <br/>
                <br/>
                <p class="Footer-About">Shirkat ul Ras is reliable name for religious tourism. Our professional team is always ready to guide the zaireen on their trips to Iran, Iraq, Syria and Saudia Arabia. We are extending the religious tourism to make traveling easier to dedicated location.</p>

                <div id="social_footer">
                    <ul>
                        <li><a href="https://www.facebook.com/ShirkatulRas/"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                </div>
                
            </div>
            
            <div class="col-md-3">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="hotels.php">Hotels</a></li>
                    <li><a href="#">Trip Planner</a></li>
                </ul>
                <h3>Destinations</h3>
                <ul>
                    <li><a href="iraq.php">Iraq</a></li>
                    <li><a href="iran.php">Iran</a></li>
                    <li><a href="syria.php">Syria</a></li>
                    <li><a href="ksa.php">Kingdom Of Saudi Arabia</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Need help?</h3>
                <p id="address" class="pt-0">
                Suite #1, Mezzanine Floor, Hanif Mansion, Opp. Nisthar Park, Soldier Bazar No.3, Karachi-Pakistan.
                </p>
                <a href="tel:+923018587645" id="phone">+92 301 8587645</a>
                <a href="mailto:info@shirkatulras.com" id="email_footer">info@shirkatulras.com</a>
            </div>
        </div><!-- End row -->
        <div class="row text-center">
            <div class="col-md-12 footer-copyrights">
                <p>© Copyright 2020 - <a href="http://shirkatulras.com/" style="color: #d3ba37;">Shirkat-ul-Ras</a>. Developed by: <a href="https://digitaleggheads.com/" target="_blank" style="color: #d3ba37;">Digital Eggheads</a></p>
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
    <script src="js/datepicker_advanced.js"></script>

    
    
    <!--Review modal validation -->
    <script src="assets/validate.js"></script>

<!-- Common scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- Specific scripts -->
    <script src="js/jquery.validate.js"></script>
   

<!-- Video header scripts -->
<script src="js/modernizr.js"></script>
<script src="js/video_header.js"></script>
<script>
  $(document).ready(function() {

     HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: false
    });

 });
</script>

<!-- Check box and radio style iCheck -->
    <script>
        $('input').iCheck({
           checkboxClass: 'icheckbox_square-grey',
           radioClass: 'iradio_square-grey'
         });
    </script>
    
     
    <!-- Date and time pickers -->
    <script>
        $("#booking_hotel").validate();
        $('input.date-pick').datepicker();
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


    

</body>
</html>





 

    
    
    
    
