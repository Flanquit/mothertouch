<!DOCTYPE html>

<html class="no-js" lang="zxx">
    <head>
        <?php 
            $title = "Contact Us";
            include 'inc/head.php';
        ?>
    </head>
    <body>
         <?php
            include 'inc/facebook.php';
        ?>
        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

        <!-- header area start -->
        <header id="sticker">
           <?php
            include 'inc/header.php';
            ?>
        </header>
        <!-- header area end -->
        <!-- page title area start -->
        <div class="page-title-area ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- page title start -->
                        <div class="page-title">
                            <h2>contact us</h2>
                        </div>
                        <!-- page title end -->
                        <!-- page title menu start -->
                        <div class="page-title-menu">
                            <ul>
                                <li><a href="index.php">Home</a> <span> / </span> </li>
                                <li><a href="contact.php">contact us</a></li>
                            </ul>
                        </div>
                        <!-- page title menu end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- page title area end -->
        <!-- google map area start -->
         <div class="google-map-area">
            <!-- google map start -->
            <div id="googleMap"></div>

            <!-- google map end -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <!-- contact box start -->
                        <div class="contact-box spacer">
                            <!-- contact address start -->
                            <div class="contact-info">
                                <!-- title -->
                                <h3 class="contact-title">contact address</h3>
                                <!-- single address start -->
                                <div class="single-address">
                                    <div class="icon"><i class="icofont icofont-location-pin"></i></div>
                                    <div class="icon-text">
                                        <p>2164 Tynwald South</p>
                                    <p>,Harare, Zimbabwe</p>
                                    </div>
                                </div>
                                <!-- single address end -->
                                <!-- single address start -->
                                <div class="single-address">
                                    <div class="icon"><i class="icofont icofont-phone"></i></div>
                                    <div class="icon-text">
                                        <p>Phone 1 : +263 242 216730    <br> Phone 2 :  +263 242 217313</p>
                                    </div>
                                </div>
                                <!-- single address end -->
                                <!-- single address start -->
                                <div class="single-address">
                                    <div class="icon"><i class="icofont icofont-envelope"></i></div>
                                    <div class="icon-text">
                                        <p>administrator@mothertouch.ac.zw</p>
                                        
                                    </div>
                                </div>
                                <!-- single address end -->
                            </div>
                            <!-- contact address end -->
                            <!-- contact form start -->
                            <div class="contact-form">
                                <form id="contact-form" action="mail.php" method="post">
                                    <!-- title -->
                                    <h3 class="contact-title">get in touch</h3>
                                    <!-- input name -->
                                    <input name="name" type="text" placeholder="Name*">
                                    <!-- input email -->
                                    <input name="email" type="email" placeholder="Email*">
                                    <!-- message -->
                                    <textarea name="message" cols="10" rows="1" placeholder="Your message"></textarea>
                                    <!-- send button -->
                                    <div class="shopping-button">
                                        <button type="submit">Send Message</button>
                                    </div>
                                    <p class="form-messege"></p>
                                </form>
                            </div>
                            <!-- contact form end -->
                        </div>
                        <!-- contact box end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- google map area end -->
        <div class="row" align="center" >
            <div class="col-md-12" style="margin-top:-400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15194.252227148305!2d30.942504!3d-17.812221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1a50fb70a4aa9904!2sMother+Touch+Group+of+Schools!5e0!3m2!1sen!2szw!4v1518783536823" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
        </div>
       
        <!-- google map area end -->

                <!-- footer area start -->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <!-- footer social start -->
                        <div class="footer-social">
                            <ul>
                               <div class="fb-like" data-href="https://www.facebook.com/Mother-Touch-Group-of-Schools-319338951496906/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                            </ul>
                        </div>
                        <!-- footer social end -->
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <!-- copyright text start -->
                        <div class="footer-copyright"> 
                            Copyright &copy; <?php echo $date;?> <a href="" style="text-transform: none;font-size: 15px;">Mother Touch Group of Schools </a> All rights reserved.
                        </div>
                        <div class="footer-copyright" align="center">
                             Designed By <a href="http://alpham.co.zw" target="_blank" style="text-transform: none; text-align: center;">alpham</a> 
                        </div>
                        <!-- copyright text end -->
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <!-- payment method start -->
                        <div class="footer-payment-method">
                            <img src="img/payment-method.png" alt="">
                        </div>
                        <!-- payment method end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- footer area end -->


        <!-- ============== All JS ================ -->
        <!-- jquery js
        =========================================== -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>

        <!-- bootstrap js
        =========================================== -->
        <script src="js/bootstrap.min.js"></script>

        <!-- meanmenu js
        =========================================== -->
        <script src="js/jquery.meanmenu.js"></script>

        <!-- scrollUp js
        =========================================== -->
        <script src="js/jquery.scrollUp.min.js"></script>

        <!-- wow js
        =========================================== -->
        <script src="js/wow.min.js"></script>

        <!-- owl.carousel js
        =========================================== -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- change-text js
        =========================================== -->
        <script src="js/change-text.js"></script>

        <!-- YTPlayer js
        =========================================== -->
        <script src="js/jquery.mb.YTPlayer.min.js"></script>

        <!-- textillate js
        =========================================== -->
        <script src="js/jquery.lettering.js"></script>
        <script src="js/jquery.textillate.js"></script>

        <!-- nivo.slider js
        =========================================== -->
        <script src="lib/js/jquery.nivo.slider.js"></script>
        <script src="lib/home.js"></script>

        <!-- ajax-mail js
        =========================================== -->
        <script src="js/ajax-mail.js"></script>

        <!-- plugins js
        =========================================== -->
        <script src="js/plugins.js"></script>

        <!-- google map
        =========================================== -->
       <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>-->
        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(24.751290,90.403457)
                };

                var map = new google.maps.Map(document.getElementById('googleMap'),
                                              mapOptions);


                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/location-indicator.png',
                    map: map
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <!-- main js
        =========================================== -->
        <script src="js/main.js"></script>
    </body>
</html>
