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
    <title>Plastic Surgery in Toronto | PlasticSpot</title>

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
                        <li class="current"><a href="#"><div>Home</div></a></li>
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
                            <h1 class="text-white text-rotater mb-3" data-separator="," data-rotate="fadeIn" data-speed="3500">Plastic Surgery in Toronto, Ontario</h1>
                            <p>Discover the best plastic surgeons in your area!</p>
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
                                Plastic surgery in Toronto is rapidly becoming popular due to the numerous benefits it can offer.
                                Gone are the days when you had to endure a low self-esteem.
                                Today, there are a lot of certified plastic surgeons all over the world who can offer plastic surgery with the aim to repair skin/tissue damage and improve the appearance of body parts.


                                Welcome! There are tons of options for plastic surgery in Toronto are listed here. We have hand-picked the top choices for your city.
                                Check out their reviews, and book an appointment online with them.
                                PlasticSpot is totally transparent, and all of their credentials, contact information, and business details are listed in their company page.
                                Thanks for using our amazing website! We're excited to help you find the right professional for your dreams.

                                Have you ever wondered if there are plastic surgery services in Toronto? And are the surgeons any good? Well, you are in luck!
                                Below is a guide that will inform you about everything you need to know about plastic surgery in Toronto.
                                You will be able to familiarize yourself with the types of plastic surgery available in Toronto, the reputation of Toronto plastic surgeons and amongst other relevant details.


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
                                <a href="https://i.imgur.com/mxGcqGO.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/mxGcqGO.png" alt="Toronto Cosmetic Surgery Institute"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Toronto Cosmetic Surgery Institute</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11548.420524285904!2d-79.380812!3d43.645981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba19aefa763e0a9!2sDr+6ix+Toronto+Cosmetic+Surgery+Institute!5e0!3m2!1sen!2sca!4v1538985068995" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="https://torontosurgery.com/" target="_blank" rel="nofollow">Website</a></li>



                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Welcome to the Toronto Cosmetic Surgery Institute.
                                            After Dr. Jugenburg obtained his undergrad degree at the University of Toronto, he trained at a Plastic and Reconstructive Surgery program in Winnipeg.
                                            He has learned from some of the best plastic surgeons in the United States.
                                            After returning to Toronto, he created the Toronto Cosmetic Surgery Institute.
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
                                <a href="https://i.imgur.com/mxGcqGO.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/mxGcqGO.png" alt="Avenue Plastic Surgery"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Avenue Plastic Surgery</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11532.185281249242!2d-79.4193346!3d43.7303646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2f0d5130eaed5a8f!2sAvenue+Plastic+Surgery+%7C+Tummy+Tuck+%E2%80%A2+Breast+Augmentation+Toronto!5e0!3m2!1sen!2sca!4v1538985201927" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="https://avenueplasticsurgery.ca/" target="_blank" rel="nofollow">Website</a></li>



                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Avenue Plastic Surgery provides surgical and non-surgical treatments.
                                            They specialize in treatments for the face, body, and breasts for anyone looking to improve their look.
                                            They have several experts to help clients achieve their desired younger look.
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
                                <a href="https://i.imgur.com/mxGcqGO.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/mxGcqGO.png" alt="Toronto Cosmetic Clinic"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Toronto Cosmetic Clinic</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11523.655460971428!2d-79.4147317!3d43.7746468!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d6d7518e5e60265!2sToronto+Cosmetic+Clinic!5e0!3m2!1sen!2sca!4v1538989948152" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="https://www.tcclinic.com/" target="_blank" rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            donerewrite
                                            The Toronto Cosmetic Clinic is a place dedicated to helping their clients look better, and feel better.
                                            They provide a variety of services - both sugical and non-surgical in order to enhance your appearance.

                                            The TTC also provides surgeons and professionals who specialize in many surgery types and areas of the body.
                                            They've been around for over twenty years, and have a solid reputation.
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
                                <a href="https://i.imgur.com/mxGcqGO.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/mxGcqGO.png" alt="Power Plastic Surgery"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Dr. Stephanie Power</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11542.678475493429!2d-79.3967508!3d43.6758405!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9b5352571a65e4b4!2sDr.+Stephanie+Power+-+Power+Plastic+Surgery!5e0!3m2!1sen!2sca!4v1538990117454" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="http://www.powerplasticsurgery.com/" target="_blank" rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Say hello to Dr. Stephanie Power, female plastic surgeon. She completed her undergrad with honors at Princeton.
                                            As well, she has certificates in artistic areas as well such as music and musical performance.
                                            As a result, she incorporates her artistic side into her plastic surgery practices.
                                            Her plastic surgery residency was done at the University of Western Ontario, along with her MD.
                                            Her specialty is reconstructive facial surgery.
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