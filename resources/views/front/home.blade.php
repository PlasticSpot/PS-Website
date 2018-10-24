<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="PlasticSpot" />

    <!-- Stylesheets
     -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,400i,700|Istok+Web:400,700" rel="stylesheet" type="text/css" />



    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/components/ion.rangeslider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/responsive.css') }}" type="text/css" />
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>


    @include('front.predefined.hostingcss')
    @include('front.predefined.favicon')
    @include('front.predefined.fontawesome')
    @include('front.predefined.goog-analytics')


    <!--- Custom style for address bar -->
    <link rel="stylesheet" href="{{ URL::asset('front/assets/custom/style.css') }}" type="text/css" />

    <!-- Document Title
     -->
    <title>Plastic Surgery for the World | PlasticSpot</title>


</head>

<body class="stretched">

<!-- Document Wrapper
 -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
     -->
    <div id="top-bar" class="center dark" style="background-color: #15888a">
        <p class="mb-0 text-white" style="font-size: 14px;">Get clients for your practice.<a href="#" class="ml-2 font-primary t700 text-white"><u>Learn More</u> &#8250;</a></p>
    </div>

    <!-- Header
     -->
    <header id="header" class="full-header transparent-header dark" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                 -->

                <div id="logo">
                    <a href="{{ route('home') }}" class="standard-logo" data-dark-logo="{{ URL::asset('front/assets/custom/logo-2.png') }}"><img src="{{ URL::asset('front/assets/custom/logo-2-blue.png') }}" alt="PlasticSpot Logo"></a>
                    <a href="{{ route('home') }}" class="retina-logo" data-dark-logo="{{ URL::asset('front/assets/custom/logo-2.png') }}"><img src="{{ URL::asset('front/assets/custom/logo-2-blue.png') }}" alt="PlasticSpot Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                 -->
                <nav id="primary-menu" class="not-dark with-arrows">

                    <ul class="not-dark">
                        <li class="current"><a href="{{ route('home') }}"><div>Home</div></a></li>
                        <li><a href="{{ route('vision') }}"><div>Vision</div></a></li>
                        <li><a href="https://plasticspot.io/blog"><div>Blog</div></a></li>
                        <li><a href="#"><div>Plastic Surgeons</div></a></li>
                        <li><a href="#"><div>Support</div></a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <!-- Slider
     -->
    <section id="slider" class="slider-element bg-angle">

        <!-- Slider Background Map
         -->
        <img class="img-map parallax" src="{{ URL::asset('front/assets/demos/hosting/images/svg/map-light.svg') }}" alt="" data-0="opacity: 0.05;margin-top:0px" data-800="opacity: 0.5;margin-top:150px">

        <!-- Slider Background Cloud
         -->
        <div class="cloud-wrap">
            <div class="c1"><div class="cloud"></div></div>
            <div class="c2"><div class="cloud"></div></div>
            <div class="c3"><div class="cloud"></div></div>
            <div class="c4"><div class="cloud"></div></div>
            <div class="c5"><div class="cloud"></div></div>
        </div>

        <!-- Collect info -->


        <!-- Slider Titles-->
        
        <div class="vertical-middle ignore-header dark">
            <div class="container clearfix">
                <div class="row justify-content-between align-items-center">
                    <div class="clearfix center divcenter">
                        <div class="slider-title">
                            <h1 class="text-white text-rotater mb-3" data-separator="," data-rotate="fadeIn" data-speed="3500">Plastic Surgery for you.</h1>
                            <p>Welcome to PlasticSpot Canada!</p>
                        </div>

                        <div class="subscribe-widget" data-loader="button">
                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin" data-animate="fadeInUp">
                                <div class="input-group divcenter">
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control form-control-lg not-dark required email" placeholder="Postal Code or Address" style="border: 0; box-shadow: none; overflow: hidden;">
                                    <div class="input-group-append">
                                        <button href="#" class="button t400" type="submit" style="border-radius: 3px;">Start</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- #slider end -->

    <!-- Content  -->
    <section id="content">

        <div class="content-wrap nopadding">

            <div class="container clearfix">

                <!-- Slider negetive Box -->
                <div class="row justify-content-center slider-box-wrap clearfix">
                    <div class="col-10">
                        <div class="slider-bottom-box">
                            <div class="row align-items-center clearfix">
                                <div class="col-lg-4 mb-3 mb-lg-0">
                                    <h2 class="mb-3 h1 t300">Change, now.</h2>
                                    <p class="t400 text-muted mb-0">Change the way you look. </p>
                                    <p class="t400 text-muted mb-0">Change yourself.</p>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <ul class="iconlist m-0">
                                        <li><img src="{{ URL::asset('front/assets/demos/hosting/images/svg/checked.svg') }}" width="20" height="20" alt="" class="mr-2">Trusted plastic surgeons</li>
                                        <li class="pt-3"><img src="{{ URL::asset('front/assets/demos/hosting/images/svg/checked.svg') }}" width="20" height="20" alt="" class="mr-2">Open reviews</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <ul class="iconlist m-0">
                                        <li class="pt-3 pt-lg-0"><img src="{{ URL::asset('front/assets/demos/hosting/images/svg/checked.svg') }}" width="20" height="20" alt="" class="mr-2">Simple bookings</li>
                                        <li class="pt-3"><img src="{{ URL::asset('front/assets/demos/hosting/images/svg/checked.svg') }}" width="20" height="20" alt="" class="mr-2">In-depth research</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Section
                 -->
                <div class="heading-block center topmargin-lg divcenter nobottomborder clearfix" style="max-width: 700px">
                    <h2>Trust is everything.</h2>
                    <p>PlasticSpot connects you with the best surgeons in your location.</p>
                </div>
                <div class="clear"></div>
                <div class="row mt-4 clearfix">
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="feature-box not-dark fbox-small fbox-effect">
                            <div class="fbox-icon ">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h3 class="t500 text-dark">Personalized</h3>
                            <p class="t300">With a few questions, we will find the most specialized person for you.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="feature-box not-dark fbox-small fbox-effect">
                            <div class="fbox-icon ">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <h3 class="t500 text-dark">Trusted</h3>
                            <p class="t300">We're committed to providing you with the most transparency. Check the reviews.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="feature-box not-dark fbox-small fbox-effect">
                            <div class="fbox-icon ">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3 class="t500 text-dark">Simple</h3>
                            <p class="t300">A few easy questions, then show up. Change your life.</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Domain Section
             -->


            <div class="promo promo-light promo-full  bottommargin">
                <div class="container clearfix">
                    <h3>Ready to <span>transform</span> yourself?</h3>
                    <span>Transformation starts with action. Start now!</span>
                    <a href="#" class="button button-xlarge button-rounded">Start Now</a>
                </div>
            </div>


            <!-- Loaction Section
             -->
            <div class="section nomargin nobg">
                <div class="container clearfix">
                    <div class="heading-block center mt-0 divcenter nobottomborder clearfix" style="max-width: 700px">
                        <h2>Plastic Surgery for the world.</h2>
                        <p>We're bringing harmony to the world. Open borders with people. <br> Say goodbye to discrimination.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="heading-block mt-md-3 mt-0">
                                <div class="before-heading color">Current Cities</div>
                                <h3 class=" nott ls0">PlasticSpot Network</h3>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="iconlist ml-0">
                                        <li><img src="{{ URL::asset('front/assets/demos/hosting/images/flags/ca.png') }}" alt=""><a href="#">Canada</a></li>
                                        <li><a href="{{ route('plastic.surgery.location', ['location' => 'vancouver']) }}"><strong>Vancouver</strong></a></li>
                                        <li><a href="{{ route('plastic.surgery.location', ['location' => 'toronto']) }}"><strong>Toronto</strong></a></li>
                                        <li><a href="{{ route('plastic.surgery.location', ['location' => 'calgary']) }}"><strong>Calgary</strong></a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="iconlist ml-0">
                                        <li><img src="{{ URL::asset('front/assets/demos/hosting/images/flags/us.png') }}" alt=""><a href="#">United States</a></li>
                                        <li><a href="#">Coming soon!</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div id="hotspot-img" class="hotspot-img mt-2 responsive-hotspot-wrap">
                                <img src="{{ URL::asset('front/assets/demos/hosting/images/svg/map.png') }}" class="img-responsive" alt="">

                                <!-- Circle #1 -->
                                <div class="hot-spot" x="1970" y="830">
                                    <div class="circle"></div>
                                    <div class="tooltip"><p>singapore</p></div>
                                </div>
                                <!-- Circle #2 -->
                                <div class="hot-spot" x="330" y="522">
                                    <div class="circle"></div>
                                    <div class="tooltip"><p>San Fran</p></div>
                                </div>
                                <!-- Circle #3 -->
                                <div class="hot-spot" x="2350" y="1110">
                                    <div class="circle"></div>
                                    <div class="tooltip"><p>Sydney</p></div>
                                </div>
                                <!-- Circle #4 -->
                                <div class="hot-spot" x="1222" y="395">
                                    <div class="circle"></div>
                                    <div class="tooltip"><p>London</p></div>
                                </div>
                                <!-- Circle #5 -->
                                <div class="hot-spot" x="1800" y="760">
                                    <div class="circle"></div>
                                    <div class="tooltip"><p>Bangalore</p></div>
                                </div>
                                <!-- Circle #6 -->
                                <div class="hot-spot" x="2250" y="560">
                                    <div class="circle"></div>
                                    <div class="tooltip"><p>Tokyo</p></div>
                                </div>
                                <!-- Circle #7 -->
                                <div class="hot-spot" x="1366" y="1134">
                                    <div class="circle"></div>
                                    <div class="tooltip"><p>Cape Town</p></div>
                                </div>
                                <!-- Circle #8 -->
                                <div class="hot-spot" x="880" y="990">
                                    <div class="circle"></div>
                                    <div class="tooltip"><p>Brasilla</p></div>
                                </div>
                                <!-- Circle #8 -->
                                <div class="hot-spot" x="710" y="395">
                                    <div class="circle"></div>
                                    <div class="tooltip"><p>Toronto</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Section
             -->
            <div class="section bgcolor dark m-0">
                <div class="container">
                    <div class="row center justify-content-center">
                        <div class="col-md-8">
                            <h2 class="t700 text-white mb-3">Try PlasticSpot for free. </h2>
                        </div>
                        <div class="col-md-8">
                            <a href="#" class="button center bg-white color button-light button-rounded button-large ml-0">Start Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- #content end -->

    @include('front.predefined.footer')
</div><!-- #wrapper end -->

<!-- Go To Top
 -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
 -->




<script src="{{ URL::asset('front/assets/js/jquery.js') }}"></script>
<script src="{{ URL::asset('front/assets/js/plugins.js') }}"></script>

<script src="{{ URL::asset('front/assets/js/jquery.hotspot.js') }}"></script>
<script src="{{ URL::asset('front/assets/js/components/rangeslider.min.js') }}"></script>

<!-- Footer Scripts
 -->
<script src="{{ URL::asset('front/assets/js/functions.js') }}"></script>

<script>
    jQuery(window).on( 'load', function(){
        // For the map with cities
        $('#hotspot-img').hotSpot();
    });
</script>

</body>
</html>
