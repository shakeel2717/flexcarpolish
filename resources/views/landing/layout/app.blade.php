<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Workshop | Car Repair & Servicing HTML Template" />
    <meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
    <meta name="author" content="ThemeMascot" />
    <title>Workshop | Car Repair & Servicing HTML Template</title>
    <link href="{{ asset('assets/images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('assets/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('assets/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/css-plugin-collections.css') }}" rel="stylesheet" />
    <link id="menuzord-menu-skins" href="{{ asset('assets/css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/preloader.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/colors/theme-skin-color-set-1.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
</head>

<body class="">
    <div id="wrapper" class="clearfix">
        {{-- <div id="preloader">
    <div id="spinner">
      <img alt="" src="{{ asset('assets/images/preloaders/5.gif') }}">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> --}}
        <header id="header" class="header">
            <div class="header-top bg-theme-color-2 sm-text-center p-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
                            <div class="widget no-border m-0 mr-15 mr-sm-0 pull-right flip sm-pull-none sm-text-center">
                                <ul class="styled-icons icon-circled icon-sm">
                                    <li><a href="{{ env('APP_FACEBOOK') }}"><i
                                                class="fa fa-facebook text-white"></i></a></li>
                                    <li><a href="{{ env('APP_TWITTER') }}"><i
                                                class="fa fa-twitter text-white"></i></a></li>
                                    <li><a href="{{ env('APP_INSTAGRAME') }}"><i
                                                class="fa fa-instagram text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle p-0 bg-lightest xs-text-center">
                <div class="container pt-0 pb-0">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-6">
                            <div class="widget no-border m-0">
                                <a href="{{ route('index') }}"
                                    class="menuzord-brand pull-left flip xs-pull-center mt-10 mb-10"><img alt=""
                                        src="{{ asset('assets/images/brand/logo-dark.svg') }}"></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                                <ul class="list-inline">
                                    <li><i
                                            class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i>
                                    </li>
                                    <li>
                                        <a href="#" class="font-12 text-gray text-uppercase">Call us today!</a>
                                        <h5 class="font-14 m-0"> {{ env('APP_PHONE') }}</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                                <ul class="list-inline">
                                    <li><i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i>
                                    </li>
                                    <li>
                                        <a href="#" class="font-12 text-gray text-uppercase">We are open!</a>
                                        <h5 class="font-13 text-black m-0"> {{ env('APP_TIME') }}</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
                    <div class="container">
                        <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
                            <ul class="menuzord-menu">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a
                                        href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}">Whatsapp</a>
                                </li>
                            </ul>
                            <ul class="pull-right flip hidden-sm hidden-xs">
                                <li>
                                    <!-- Modal: Book Now Starts -->
                                    <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 mt-0 p-25 pr-15 pl-15"
                                        href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}">Book
                                        Now</a>
                                    <!-- Modal: Book Now End -->
                                </li>
                            </ul>
                            <div id="top-search-bar" class="collapse">
                                <div class="container">
                                    <form role="search" action="#" class="search_form_top" method="get">
                                        <input type="text" placeholder="Type text and press Enter..." name="s"
                                            class="form-control" autocomplete="off">
                                        <span class="search-close"><i class="fa fa-search"></i></span>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Start main-content -->
        <div class="main-content">

            <!-- Section: home -->
            @include('inc.slider')

            @yield('body')
        </div>

        <!-- Footer -->
        <footer id="footer" class="footer divider layer-overlay overlay-dark-8"
            data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}">
            <div class="container pt-70 pb-40">
                <div class="row border-bottom">
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <img class="mt-5 mb-20" alt=""
                                src="{{ asset('assets/images/brand/logo-light.svg') }}"
                                >
                            <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
                            <ul class="list-inline mt-5">
                                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a
                                        class="text-gray" href="#">123-456-789</a> </li>
                                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i>
                                    <a class="text-gray" href="#">contact@yourdomain.com</a>
                                </li>
                                <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a
                                        class="text-gray" href="#">www.yourdomain.com</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h4 class="widget-title line-bottom-theme-colored-2">Services</h4>
                            <ul class="list list-border">
                                <li><a href="#">Car Polish</a></li>
                                <li><a href="#">Car wash</a></li>
                                <li><a href="#">Mobile car wash</a></li>
                                <li><a href="#">Car Ceramic and Coating</a></li>
                                <li><a href="#">Hand Waxing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h4 class="widget-title line-bottom-theme-colored-2">Services</h4>
                            <ul class="list list-border">
                                <li><a href="#">Window Tinting</a></li>
                                <li><a href="#">Interior Cleaning</a></li>
                                <li><a href="#">Engine Oil Change</a></li>
                                <li><a href="#">Engine Oil Change</a></li>
                                <li><a href="#">& Many more</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
                            <div class="opening-hourse">
                                <ul class="list-border">
                                    <li class="clearfix"> <span> Mon - Tues : </span>
                                        <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li class="clearfix"> <span> Wednes - Thurs :</span>
                                        <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                                    </li>
                                    <li class="clearfix"> <span> Fri : </span>
                                        <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                                    </li>
                                    <li class="clearfix"> <span> Sun : </span>
                                        <div class="value pull-right"> Closed </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-md-6">
                        <div class="widget dark">
                            <h5 class="widget-title mb-10">Call Us Now</h5>
                            <div class="text-gray">
                                +61 3 1234 5678 <br>
                                +12 3 1234 5678
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget dark">
                            <h5 class="widget-title mb-10">Connect With Us</h5>
                            <ul class="styled-icons icon-bordered icon-sm">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-black-333">
                <div class="container pt-20 pb-20">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-11 text-black-777 m-0">Copyright &copy;{{ date('Y') }}
                                {{ env('APP_NAME') }}. All Rights Reserved
                            </p>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="widget no-border m-0">
                                <ul class="list-inline sm-text-center mt-5 font-12">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a
                                            href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}">Whatsapp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
</body>

</html>
