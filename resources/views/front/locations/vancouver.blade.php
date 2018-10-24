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
    <title>Plastic Surgery in Vancouver | PlasticSpot</title>

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
                            <h1 class="text-white text-rotater mb-3" data-separator="," data-rotate="fadeIn" data-speed="3500">Plastic Surgery in Vancouver, British Columbia</h1>
                            <p>Find the best plastic surgery clinics in your spot!</p>
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
                                Welcome! Check out your options for plastic surgery in Vancouver on our website.
                                We've chosen the top clinics available for your city.
                                See their reviews and specialties, before booking an appointment with them.
                                PlasticSpot is totally transparent, and all of their credentials, contact information, and business details are listed in their company page.
                                Thanks for using our amazing website! We're excited to help you find the right professional for your dreams.

                                Vancouver plastic surgeons use modern technology to execute various plastic surgery treatments.
                                The technologies are leading-edge surgical technologies and techniques to produce plastic surgery results that are natural-looking.
                                Many clients have boasted of the results that change their look in a very impressive way.

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
                                <a href="https://i.imgur.com/mxGcqGO.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/mxGcqGO.png" alt="Fairview Plastic Surgery"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Fairview Plastic Surgery</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10414.706432927704!2d-123.1261338!3d49.2635752!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x93c278db10e8befa!2sFairview+Plastic+Surgery+Centre!5e0!3m2!1sen!2sca!4v1538979744032" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="http://www.fairviewplasticsurgery.com/" target="_blank"rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Welcome to Fairview Plastic Surgery. Fairview has treatments for both surgical and non-surgical practices.
                                            Their staff is highly committed to helping their clients become better.
                                            Fairview Plastic Surgery is located in downtown Vancouver with a large staff for their clients.
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
                                <a href="https://i.imgur.com/mxGcqGO.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/mxGcqGO.png" alt="Dr. Van Laeken"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Dr. Van Laeken</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.4956808003194!2d-123.12529718365124!3d49.28595267933156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548671810fbc6443%3A0x3a8ede7217b26d02!2sDr.+Nancy+Van+Laeken!5e0!3m2!1sen!2sca!4v1538980535676" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="https://vanlaeken.com/" target="_blank" rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Dr. Nancy Van Laeken is a plastic surgeon based in Vancouver.
                                            She is certified by the Royal College of Physicians and Surgeons.
                                            Dr. Laeken practices at several fully accredited private clinics, and works towards optimum safety and quality care for her clients.

                                            Her specialties include breast augmentation, facelift, abdominoplasty and liposuction.
                                            She is ranked as in Canada’s top 10 consumers of breast implants by Allergan, in addition to becoming part of Canada's top 10 doctors.
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
                                <a href="https://i.imgur.com/mxGcqGO.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/mxGcqGO.png" alt="Dr. Eric Pugash"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Dr. Eric Pugash</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83360.10882439192!2d-123.08938575216698!3d49.23842472974023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673dd079cf5bd%3A0xfdb6c3df0a107fa2!2sDr.+Eric+Pugash!5e0!3m2!1sen!2sca!4v1538981047053" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="https://www.vancouvercosmeticsurgery.ca/" target="_blank" rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Dr. Eric Pugash has been in practice since 1987. He produces great natural-like results, which people really want.
                                            He is constantly up-to-date with at the front line of plastic surgery by continuously striving to improve treatments and patient care techniques.
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
                                <a href="https://i.imgur.com/mxGcqGO.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/mxGcqGO.png" alt="Dr. Peter Lennox"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Dr. Peter Lennox</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10414.72525916709!2d-123.12151!3d49.263486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c3294a3bdd0b0c0!2sDr.+Peter+Lennox!5e0!3m2!1sen!2sca!4v1538983276263" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="https://www.vancouvercosmeticsurgery.ca/" target="_blank" rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Dr. Lennox is decorated among plastic surgeons in Vancouver. He has a great educational background in addition to his repertoire of experience.
                                            He is a part of Royal College of Physicians and Surgeons.
                                            His other positions include being a Clinical Associate Professor at the University of British Columbia, as well as current Head of the UBC Division of Plastic Surgery.
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
                                <a href="https://i.imgur.com/mxGcqGO.png" data-lightbox="image"><img class="image_fade" src="https://i.imgur.com/mxGcqGO.png" alt="Dr. Benjamin Gelfant"></a>
                            </div>
                            <div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Benjamin Gelfant MD</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i class="icon-star-half-full color"></i></li>
                                        <li><i class="icon-map-marker2"></i> <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10414.65295107407!2d-123.1342819!3d49.2638286!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x75711784e10ce4f7!2sBenjamin+Gelfant+MD!5e0!3m2!1sen!2sca!4v1538982973923" data-lightbox="iframe">View map</a></li>
                                        <li><i class="icon-home"></i> <a href="https://drgelfant.com/drben-gelfant/" target="_blank" rel="nofollow">Website</a></li>

                                    </ul>
                                    <div class="entry-content">
                                        <p class="nobottommargin">
                                            Dr. Benjamin Gelfant combines art and science in his practice.
                                            He sees every operation as a craft.
                                            Dr. Gelfant is a member of: Canadian Society for Aesthetic (Cosmetic) Plastic Surgery (CSAPS), American Society of Plastic Surgeons (ASPS), American Society For Aesthetic Plastic Surgery (ASAPS).
                                            Dr. Gelfant seeks to help everyone become a more confident version of themselves.
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