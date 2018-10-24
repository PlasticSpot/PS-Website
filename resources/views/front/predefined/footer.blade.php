<!-- Footer
    ============================================= -->
<footer id="footer" class="dark">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap pb-4 clearfix">

            <div class="row">

                <div class="col-md-4 col-sm-6 mb-0 mb-sm-4 mb-md-0">

                    <div class="widget clearfix">

                        <h4>About PlasticSpot</h4>

                        <p>Creating true value for the individual.</p>

                        <div style="background: url('{{ URL::asset('front/assets/images/world-map.png') }}') no-repeat left center; background-size: auto 100%;">
                            <p>
                                <strong>PlasticSpot is expanding.</strong><br>
                                <br>
                            </p>
                            <p>A different vision for the world.</p>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-6 mt-5 mt-sm-0">

                    <div class="widget clearfix">

                        <h4>Pages</h4>

                        <ul class="list-unstyled iconlist ml-0">
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Feedback</a></li>
                        </ul>

                    </div>

                </div>

                <div class="col-md-3 col-6 mt-5 mt-sm-0">

                    <div class="widget clearfix">

                        <h4>Follow us</h4>

                        <ul class="list-unstyled iconlist">
                            <li><i class="icon-facebook"></i><a href="https://www.facebook.com/PlasticSpot-2184944568385551" target="_blank"> Facebook</a></li>
                            <li><i class="icon-twitter"></i><a href="https://twitter.com/PlasticSpot" target="_blank"> Twitter</a></li>
                            <li><i class="icon-instagram"></i><a href="https://www.instagram.com/plasticspotinc" target="_blank"> Instagram</a></li>
                            <li><i class="icon-youtube"></i><a href="https://www.youtube.com/channel/UC1CKnLGfdNTRFiPho3JqFJw" target="_blank"> YouTube</a></li>
                            <li><i class="icon-linkedin"></i><a href="https://www.linkedin.com/company/plasticspot/" target="_blank"> LinkedIn</a></li>
                            <li><i class="icon- fab fa-medium-m"></i><a href="https://medium.com/@plasticspot/" target="_blank"> Medium</a></li>
                            <li><i class="icon-github"></i><a href="https://github.com/PlasticSpot" target="_blank"> Github</a></li>
                            <li><i class="icon-reddit"></i><a href="https://reddit.com/r/PlasticSpot" target="_blank"> Reddit</a></li>
                            <li><i class="icon- far fa-comment"></i><a href="https://steemit.com/@plasticspot" target="_blank"> Steemit</a></li>



                        </ul>

                    </div>

                </div>

                <div class="col-md-2 col-sm-6 mt-4 mt-sm-0">

                    <div class="widget clearfix">

                        <h4>Spots</h4>

                        <ul class="list-unstyled iconlist ml-0">
                            <li><a href="{{ route('plastic.surgery.location', ['location' => 'vancouver']) }}">Plastic Surgery Vancouver</a></li>
                            <li><a href="{{ route('plastic.surgery.location', ['location' => 'calgary']) }}">Plastic Surgery Calgary</a></li>
                            <li><a href="{{ route('plastic.surgery.location', ['location' => 'toronto']) }}">Plastic Surgery Toronto</a></li>
                        </ul>

                    </div>

                </div>

            </div>

        </div><!-- .footer-widgets-wrap end -->

        <div class="line line-sm m-0"></div>

    </div>


    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" class="nobg">

        <div class="container clearfix">

            <div class="col_half">
                &copy; Copyright 2018 All Rights Reserved by PlasticSpot.<br>
            </div>

            <div class="col_half col_last tright">
                <div class="copyright-links"><a href="{{ route('terms') }}">Terms of Service</a> / <a href="{{ route('privacy') }}">Privacy Policy</a></div>
            </div>


        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->