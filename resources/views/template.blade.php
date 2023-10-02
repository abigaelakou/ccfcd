<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CCFCD</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/ccfcd/logo.JPG') }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <!-- Bootstrap CSS============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Metarial Iconic Font CSS ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
    <!-- Plugin CSS============================================ -->
    <link rel="stylesheet" href="{{ asset('css/plugin.css') }}">
    <!-- Style CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Responsive CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <div class="loading">
        <div class="text-center middle">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!--Loading Area End-->
    <!--Main Wrapper Start-->
    <div class="as-mainwrapper">
        <!--Bg White Start-->
        <div class="bg-white">
            <!--Header Area Start-->
            <header>
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-12">
                                <span>Avez-vous une question ? +225 07 88 78 0130</span>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <div class="header-top-right">
                                    <span>Phone: +225 07 88 78 0130</span>
                                    <span>Email: ccfcdgonzagueville@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               @include('menu')

                <!-- Mobile Menu Area end -->
            </header>
            <!--End of Header Area-->
            @yield("banner")

    @yield("body")
            <footer>
                <!--Newsletter Area Start-->
                <div class="newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <div class="newsletter-content">
                                    <h3>SOUSCRIRE</h3>
                                    <h2>AU NEWSLETTER</h2>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="newsletter-form angle">
                                    <form
                                        action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                        class="mc-form footer-newsletter fix">
                                        <div class="subscribe-form">
                                            <input id="mc-email" type="email" autocomplete="off"
                                                placeholder="Entrez votre email ici">
                                            <button id="mc-submit" type="submit">SOUSCRIRE</button>
                                        </div>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre fix pull-right">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Newsletter Area-->
                <!--Footer Widget Area Start-->
                <div class="footer-widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-footer-widget">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="{{asset('img/ccfcd/logo.JPG')}}" style="width: 60px;" alt=""></a>
                                    </div>
                                    <p>La devise du CCFCD s’intitule comme suit : <br>
                                       <strong> «EDUQUER aujourd’hui les CITOYENS et les CITOYENNES de demain >></p></strong>
                                    <div class="social-icons">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        {{-- <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-footer-widget">
                                    <h3>Contact</h3>
                                    <a href="tel:07 88 78 0130"><i class="fa fa-phone"></i> 07 88 78 0130</a>
                                    <span><i class="fa fa-envelope"></i>ccfcdgonzagueville@gmail.com</span>
                                    <span><i class="fa fa-globe"></i>www.ccdcd.org</span>
                                   <a href="https://goo.gl/maps/XY37qmuEbwh3ZrjGA"><span><i class="fa fa-map-marker"></i>64R3+FWX, Gonzague, corridor, Abidjan</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Footer Widget Area-->
                <!--Footer Area Start-->
                <div class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-12">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> <a href="#">College Catholique des Frères Carmes Déchaux</a>. Tout droit reservé.
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Footer Area-->
            </footer>
        </div>
        <!--End of Bg White-->
    </div>
    <!--End of Main Wrapper Area-->



    <!-- jquery
                ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <!-- popper JS
                ============================================ -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstrap JS
                ============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- AJax Mail JS          ============================================ -->
    <script src="{{ asset('js/ajax-mail.js') }}"></script>
    <!-- plugins JS============================================ -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main JS ============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
