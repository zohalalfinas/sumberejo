<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>sumberejo </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('aznews/assets/img/logo/pemkab.png')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/ticker-style.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/style.css')}}">
        <style>
        .trend-bottom-cap h5{
            color:white;
            position: static;
            display:inline;
            color: #fff;
            background-color: #fc3f00;
            padding: 8px 15px;
            border-radius: 5px;
        }
        .trend-bottom-cap h5:hover{
            background-color:transparent;
            color:#fc3f00;
        }
        .trend-bottom-cap .cap{
            margin-top:3%;
        }
        .cap a:hover{
            color:black;
        }
        .carousel-item{
            height:500px;
        }
        .btn-custom{
            width: 100px;
            background-color: #f27420;
            border: none;
            height: 30px;
            border-radius: 5px;  
        }
        .btn-custom:hover{
            background-color:transparent;
            color: #f27420;
            cursor:pointer;
        }
        </style>
   </head>

   <body>
       
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <!-- navigation start -->
    @include('layouts.navigation')
    <!-- navigation end -->

    <!-- content start -->
    @yield('content')
    <!-- content end -->

   
    
   <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>                             
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('aznews/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('aznews/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('aznews/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('aznews/assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('aznews/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('aznews/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('aznews/assets/js/slick.min.js')}}"></script>
        <!-- Date Picker -->
        <script src="{{asset('aznews/assets/js/gijgo.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('aznews/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('aznews/assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('aznews/assets/js/jquery.magnific-popup.js')}}"></script>

        <!-- Breaking New Pluging -->
        <script src="{{asset('aznews/assets/js/jquery.ticker.js')}}"></script>
        <script src="{{asset('aznews/assets/js/site.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('aznews/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('aznews/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('aznews/assets/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('aznews/assets/js/contact.js')}}"></script>
        <script src="{{asset('aznews/assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('aznews/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('aznews/assets/js/mail-script.js')}}"></script>
        <script src="{{asset('aznews/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('aznews/assets/js/plugins.js')}}"></script>
        <script src="{{asset('aznews/assets/js/main.js')}}"></script>
        
    </body>
</html>