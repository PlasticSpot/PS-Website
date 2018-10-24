<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="PlasticSpot" />

    <!-- Stylesheets
     -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/calendar.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('front.predefined.hostingcss')
    @include('front.predefined.favicon')
    @include('front.predefined.fontawesome')
    @include('front.predefined.goog-analytics')

    <!-- Document Title
     -->
    <title>Plastic Surgery in Calgary | PlasticSpot</title>

</head>

<body class="stretched">

<!-- Document Wrapper
 -->
<div id="wrapper" class="clearfix">

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

    <!-- Slider  -->
    <section id="slider" class="slider-element" style="height: 400px;">

        <!-- Slider Background Map
         -->
        <img class="img-map parallax" src="{{ URL::asset('front/assets/demos/hosting/images/svg/map-light.svg') }}" alt="" data-0="opacity: 0.05;margin-top:0px" data-800="opacity: 0.5; margin-top:150px">

        <!-- Slider Background Cloud  -->
        <div class="cloud-wrap">
            <div class="c1"><div class="cloud"></div></div>
            <div class="c2"><div class="cloud"></div></div>
            <div class="c3"><div class="cloud"></div></div>
            <div class="c4"><div class="cloud"></div></div>
            <div class="c5"><div class="cloud"></div></div>
        </div>

        <!-- Collect info -->


        <!-- Slider Titiles-->
        
        <div class="vertical-middle ignore-header dark">
            <div class="container clearfix">
                <div class="row justify-content-between align-items-center">
                    <div class="clearfix center divcenter">
                        <div class="slider-title">
                            <br />
                            <h1 class="text-white text-rotater mb-3" data-separator="," data-rotate="fadeIn" data-speed="3500">Plastic Surgery in Calgary, Alberta</h1>
                            <p>Find the best plastic surgeons in your area!</p>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Content
     -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="col_one_fourth nobottommargin">
                    <div class="feature-box fbox-effect fbox-center fbox-outline nobottomborder">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-calendar i-alt"></i></a>
                        </div>
                        <h3>Instant Bookings<span class="subtitle">Fully online</span></h3>
                    </div>
                </div>

                <div class="col_one_fourth nobottommargin">
                    <div class="feature-box fbox-effect fbox-center fbox-outline nobottomborder">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-map i-alt"></i></a>
                        </div>
                        <h3>Close to you<span class="subtitle">In your city</span></h3>
                    </div>
                </div>

                <div class="col_one_fourth nobottommargin">
                    <div class="feature-box fbox-effect fbox-center fbox-outline nobottomborder">
                        <div class="fbox-icon">
                            <a href="#"><i class="fas fa-rocket"></i></a>
                        </div>
                        <h3>Personalized<span class="subtitle">Just for you</span></h3>
                    </div>
                </div>

                <div class="col_one_fourth nobottommargin col_last">
                    <div class="feature-box fbox-effect fbox-center fbox-outline nobottomborder">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-info i-alt"></i></a>
                        </div>
                        <h3>Informative<span class="subtitle">Research & Experience</span></h3>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="divider divider-center"><i class="icon-circle-blank"></i></div>

                <div class="container clearfix">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <h3>Professional Listings</h3>
                            <p>
                                Welcome! There are tons of options for plastic surgery in Calgary are listed here. We have hand-picked the top choices for your city.
                                Check out their reviews, and book an appointment online with them.
                                Whether you're seeking to beautify a specific area, or are just exploring your options - we have the solution for you.
                                Each clinic has something different and unique to offer in terms of surgical operations.
                                PlasticSpot is totally transparent, and all of their credentials, contact information, and business details are listed in our pages.
                                Thanks for using our amazing website! We're excited to help you find the right professional for your dreams.

                                Plastic surgery involves the alteration, reconstruction or restoration of the human body. It is important to have the right expert to do it.
                                You’ll find a number of plastic surgery facilities in Calgary. Note that each facility is unique depending on the level and type of surgical operations they offer.
                                Here’s everything you need to know when seeking their services.

                            </p>
                        </div>

                    </div>
                </div>

                <div class="clear"></div>

                <div class="divider divider-center"><i class="icon-circle-blank"></i></div>


                <div id="posts" class="events small-thumbs">
                    <div class="entry clearfix">
                        <div class="row clearfix">
                            <div class="col-lg-4">
                                <a href="https://i.imgur.com/l9vLbCj.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/l9vLbCj.png" alt="Calgary Institute Of Plastic Surgery"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Calgary Institute Of Plastic Surgery</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.5980752727137!2d-114.06248978350432!3d51.042043679561125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716f1f0f4e45f3%3A0x5de169f463280180!2sCalgary+Institute+Of+Plastic+Surgery!5e0!3m2!1sen!2sus!4v1538452605567" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-credit"></i> <a href="https://www.medicard.com/provider-profile.php?id=7755" target="_blank">Medicard</a></li>
                                        <li><i class="icon-home"></i> <a href="https://www.calgarysurgery.com/plastic-surgeon/" target="_blank" rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Dr. Jonathan Lee is the founder of the Calgary Institute of Plastic Surgery.
                                            He is experienced, and well-versed in the art of cosmetic and reconstructive plastic surgery.
                                            Dr. Lee is certified by the Royal College of Physicians and Surgeons of Canada.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 center">
                                <a href="#" class="button button-rounded">Book Now</a>
                            </div>
                        </div>
                    </div>



                    <div class="entry clearfix">
                        <div class="row clearfix">
                            <div class="col-lg-4">
                                <a href="https://i.imgur.com/MU2v4cX.jpg" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/MU2v4cX.jpg" alt="Dr. Mark Haugrud"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Dr. Mark Haugrud</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10028.7692297611!2d-114.1592604!3d51.068!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d9ee394a62d30b1!2sDr.+Mark+Haugrud!5e0!3m2!1sen!2sca!4v1538468817217" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="http://markhaugrud.com/" target="_blank" rel="nofollow">Website</a></li>



                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Dr. Mark Haugrud grew up in Edmonton, and completed his medical studies at the University of Alberta.
                                            He practiced in Edmonton, and eventually came to Calgary.
                                            He is now the site chief for plastic surgery at the Rockyview Hospital.
                                            His memberships include the Royal College of Physicians and Surgeons, the Canadian Society of Plastic Surgeons, the Northwest Society of Plastic Surgeons.
                                            Dr. Haugrud also serves as a clinical professor for the University of Calgary.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 center">
                                <a href="#" class="button button-rounded">Book Now</a>
                            </div>
                        </div>
                    </div>


                    <div class="entry clearfix">
                        <div class="row clearfix">
                            <div class="col-lg-4">
                                <a href="https://i.imgur.com/QMKTcZ0.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/QMKTcZ0.png" alt="Ryan Frank"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Ryan Frank</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2509.182174664196!2d-114.07316078405037!3d51.03125597955976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537170182b091865%3A0x1c7ed8e356769491!2sRyan+Frank+MD!5e0!3m2!1sen!2snl!4v1538975784050" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="https://www.ryanfrankmd.com/" target="_blank" rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Ryan Frank is born and raised in Calgary.
                                            After finishing up medical school at the University of Calgary, he learned from a variety of amazing plastic surgeons at the University of California.
                                            There, he completed a pediatric and cosmetic surgical fellowship.
                                            At Queen's and Cornell University, he pursued an MBA degree.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 center">
                                <a href="#" class="button button-rounded">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="row clearfix">
                            <div class="col-lg-4">
                                <a href="https://i.imgur.com/mxGcqGO.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/mxGcqGO.png" alt="Dr. Elmor Engelbrecht"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Dr. Elmor Engelbrecht</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2507.2611078427426!2d-114.21266858404924!3d51.06672987956509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716df21f3e4d79%3A0x35cb285cdf63743c!2sSpringbank+Skin+Centre!5e0!3m2!1sen!2snl!4v1538975842832" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="https://ca.linkedin.com/in/dr-elmor-engelbrecht-083a6284" target="_blank" rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            He has a medical degree from the University of Stellenbosch in South Africa.
                                            As well, Dr. Elmor Engelbrecht has interned at the Kimberley Hospital Complex.
                                            Dr. Engelbrecht was awarded a Diploma in Dermatology with distinction from the Australian Institute of Dermatology.
                                            He attends industry workshops regularly to keep up to date with the latest treatments and products.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 center">
                                <a href="#" class="button button-rounded">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry clearfix">
                        <div class="row clearfix">
                            <div class="col-lg-4">
                                <a href="https://i.imgur.com/NYtko6K.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/NYtko6K.png" alt="Macleod Trail Plastic Surgery"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Paul Whidden</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2511.5794948029034!2d-114.07458798405185!3d50.986962779553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53717102b4ffcc5d%3A0x815d692d24bf7daf!2sDr.+Paul+Whidden!5e0!3m2!1sen!2snl!4v1538975873699" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="https://www.macleodtrailplasticsurgery.ca/about-us/our-surgeons/dr-whidden/" target="_blank" rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            He is a cosmetic and constructive plastic surgeon.
                                            Based in Calgary and board certified through the Royal College of Surgeons of Canada, Dr. Paul Whidden specializes in cosmetic and aesthetic surgery.
                                            He's an expert in areas of breast augmentations, tummy tucks, and rhinoplasty.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 center">
                                <a href="#" class="button button-rounded">Book Now</a>
                            </div>
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

<!-- Footer Scripts
 -->
<script src="{{ URL::asset('front/assets/js/functions.js') }}"></script>


</body>
</html>