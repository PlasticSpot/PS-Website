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

    <link rel="stylesheet" href="{{ URL::asset('front/assets/css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    @include('front.predefined.hostingcss')
    @include('front.predefined.favicon')
    @include('front.predefined.fontawesome')
    @include('front.predefined.goog-analytics')


<!-- Document Title
     -->
    <title>Our Vision | PlasticSpot</title>

</head>

<body class="stretched">

<!-- Document Wrapper
 -->
<div id="wrapper" class="clearfix">

    <!-- Header
     -->
    <header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark">

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
                        <li><a href="{{ route('home') }}"><div>Home</div></a></li>
                        <li class="current"><a href="{{ route('vision') }}"><div>Vision</div></a></li>
                        <li><a href="https://plasticspot.io/blog"><div>Blog</div></a></li>
                        <li><a href="#"><div>Plastic Surgeons</div></a></li>
                        <li><a href="#"><div>Support</div></a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <!-- Page Title
     -->
    <section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('{{ URL::asset('front/assets/custom/vision-parallax-2.jpg') }}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

        <div class="container clearfix">
            <h1>Vision</h1>
            <span>Equality in an unfair world.</span>

        </div>

    </section><!-- #page-title end -->

    <!-- Content
     -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="col_one_third">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>Life is <span>unfair</span>.</h4>
                    </div>

                    <p>
                        The world is unfair. Even as human civilization advances with incredible technological breakthroughs,
                        we still judge others for their appearance. This must change. We must bring equality to the world.
                    </p>

                </div>

                <div class="col_one_third">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>The ideal <span>World</span>.</h4>
                    </div>

                    <p>
                        Everyone has the power to look any way they want.
                        Looks are be malleable, just like intelligence and personality.
                        People are judged for their true self, not by luck of the draw.
                    </p>
                </div>

                <div class="col_one_third col_last">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>Our <span>Mission</span>.</h4>
                    </div>

                    <p>
                        We strive to give everyone the opportunity to change their appearance as a form of self-expression.
                        We empower everyone who needs change.
                    </p>
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