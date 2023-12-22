<style>
    .shape {
        background: #08263e;
        /* width: 300px;
    height: 150px; */
        overflow: hidden;
        position: relative;
    }

    .shape:before {
        content: '';
        width: 100%;
        height: 67%;
        background: #fff;
        position: absolute;
        top: -184px;
        right: 0;
        border-radius: 100%;
    }

    @media screen and (max-width: 965px) {
        .shape:before {
            height: 31%;
        }
    }

    @media screen and (max-width: 575px) {
        .shape:before {
            height: 33%;
        }
    }
</style>






<!-- Footer ==== -->
<footer class="footer-white shape">
    <div class="footer-top bt0">
        <div class="container">
            {{-- <div class="subscribe-box">
                <div class="subscribe-title">
                    <h4>Subscribe to recieve weekly news via email.</h4>
                </div>
                <div class="subscribe-form m-b20">
                    <form class="subscription-form"
                        action="http://educhamp.themetrades.com/html/demo/assets/script/mailchamp.php" method="post">
                        <div class="ajax-message"></div>
                        <div class="input-group">
                            <input name="email" required="required" class="form-control"
                                placeholder="Your Email Address" type="email">
                            <span class="input-group-btn">
                                <button name="submit" value="Submit" type="submit"
                                    class="btn radius-xl">Subscribe</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="widget footer_widget">
                        {{-- <h5 class="footer-title">Company</h5> --}}
                        <img src="{{ asset('frontend/assets/images/main_footer_logo.png') }}" class="foot_logo"
                            alt="">
                        <p>Discover your potential and embark on a transformative journey into the world of technology
                            with CodeX. We are more than just an educational institution; we are your partner in
                            realizing your dreams of a successful career in the IT industry.</p>
                        {{-- <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="about-1.html">About</a></li>
                            <li><a href="faq-1.html">FAQs</a></li>
                            <li><a href="contact-1.html">Contact</a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2  col-md-12 col-sm-12">
                    <div class="widget footer_widget">
                        <h5 class="footer-title">Quick Links</h5>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Training</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">
                    <div class="widget footer_widget">
                        <h5 class="footer-title">Our Courses</h5>
                        <ul>
                            <li><a href="">Ui Ux Design</a></li>
                            <li><a href="">Node Js</a></li>
                            <li><a href="">Web Development</a></li>
                            <li><a href="">App Development</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="widget footer_widget">
                        <h5 class="footer-title">Contact Us</h5>
                        <ul>
                            <li><a href="tel:+919938077783">+91 9938077783</a></li>
                            <li><a href="mailto:hello@codexdot.com">hello@codexdot.com</a></li>
                            <li><a href="https://maps.app.goo.gl/XcfHzAB3fLGW7BB96">Fortune Tower , Bhubaneswar, Odisha
                                    , Pin-751012</a></li>
                        </ul>
                        <div class="main">
                            <!-- Facebook Icon -->
                            <div class="icon fb"><a href="">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <span>Facebook</span></a>
                            </div>

                            <!-- Twitter Icon -->
                            {{-- <div class="icon twt"><a href="">
                                    <i class="fa-brands fa-twitter"></i>
                                    <span>Twitter</span></a>
                            </div> --}}

                            <!--instagram-->
                            <div class="icon igm"><a href="">
                                    <i class="fa-brands fa-instagram"></i>
                                    <span>Instagram</span></a>
                            </div>

                            <!-- Linkedin Icon -->
                            <div class="icon lnk"><a href="">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    <span>Linkedin</span></a>
                            </div>

                            <!-- GitHub Icon -->
                            {{-- <div class="icon git"><a href="">
                                    <i class="fa-brands fa-github"></i>
                                    <span>GitHub</span></a>
                            </div> --}}

                            <!-- YouTube Icon -->
                            {{-- <div class="icon yt"><a href="">
                                    <i class="fa-brands fa-youtube"></i>
                                    <span>YouTube</span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 col-lg-3 col-md-5 col-sm-6 footer-col-4">
                    <div class="widget widget_gallery gallery-grid-4">
                        <h5 class="footer-title">Our Gallery</h5>
                        <ul class="magnific-image">
                            <li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img
                                        src="assets/images/gallery/pic1.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img
                                        src="assets/images/gallery/pic2.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img
                                        src="assets/images/gallery/pic3.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img
                                        src="assets/images/gallery/pic4.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img
                                        src="assets/images/gallery/pic5.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img
                                        src="assets/images/gallery/pic6.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img
                                        src="assets/images/gallery/pic7.jpg" alt=""></a></li>
                            <li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img
                                        src="assets/images/gallery/pic8.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center"> © 2023 <span class="text-primary">CODEX.</span>
                    All Rights Reserved.</div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END ==== -->
<div class="whats zoomIn">
    <a href="https://api.whatsapp.com/send?phone=9938077783 " target="_blank" class="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
</div>
<button class="back-to-top fa fa-chevron-up"></button>
</div>
<script src="https://kit.fontawesome.com/b356ad9dc8.js" crossorigin="anonymous"></script>
<!-- External JavaScripts -->
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/counter/counterup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/masonry/masonry.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/masonry/filter.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('frontend/assets/js/functions.js') }}"></script>
<script src="{{ asset('frontend/assets/js/contact.js') }}"></script>
<!-- <script src='assets/vendors/switcher/switcher.js'></script> -->
<!-- Revolution JavaScripts Files -->
<script src="{{ asset('frontend/assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('frontend/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}">
</script>
<script src="{{ asset('frontend/assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
</script>
<script src="{{ asset('frontend/assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
</script>
<script
    src="{{ asset('frontend/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
</script>
<script src="{{ asset('frontend/assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}">
</script>
<script src="{{ asset('frontend/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
</script>
<script src="{{ asset('frontend/assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
</script>
<script src="{{ asset('frontend/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
</script>
<script src="{{ asset('frontend/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}">
</script>


<script>
    jQuery(document).ready(function() {
        'use strict';
        var ttrevapi;
        var tpj = jQuery;
        if (tpj("#rev_slider_14_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_14_1");
        } else {
            ttrevapi = tpj("#rev_slider_14_1").show().revolution({
                sliderType: "hero",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                particles: {
                    startSlide: "first",
                    endSlide: "last",
                    zIndex: "6",
                    particles: {
                        number: {
                            value: 100
                        },
                        color: {
                            value: "#ffffff"
                        },
                        shape: {
                            type: "circle",
                            stroke: {
                                width: 0,
                                color: "#ffffff",
                                opacity: 1
                            },
                            image: {
                                src: ""
                            }
                        },
                        opacity: {
                            value: 1,
                            random: true,
                            min: 0.25,
                            anim: {
                                enable: false,
                                speed: 3,
                                opacity_min: 0,
                                sync: false
                            }
                        },
                        size: {
                            value: 3,
                            random: true,
                            min: 0.5,
                            anim: {
                                enable: false,
                                speed: 40,
                                size_min: 1,
                                sync: false
                            }
                        },
                        line_linked: {
                            enable: false,
                            distance: 150,
                            color: "#ffffff",
                            opacity: 0.4,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 1,
                            direction: "top",
                            random: true,
                            min_speed: 1,
                            straight: false,
                            out_mode: "out"
                        }
                    },
                    interactivity: {
                        events: {
                            onhover: {
                                enable: true,
                                mode: "bubble"
                            },
                            onclick: {
                                enable: false,
                                mode: "repulse"
                            }
                        },
                        modes: {
                            grab: {
                                distance: 400,
                                line_linked: {
                                    opacity: 0.5
                                }
                            },
                            bubble: {
                                distance: 400,
                                size: 0,
                                opacity: 0.01
                            },
                            repulse: {
                                distance: 200
                            }
                        }
                    }
                },
                navigation: {},
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [768, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 400,
                    levels: [1, 2, 3, 4, 5, 10, 15, 20, 25, 46, 47, 48, 49, 50, 51, 55],
                },
                shadow: 0,
                spinner: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                }
            });
        }

        /*if($('.setResizeMargin').length > 0){
            var screenSize  = $( window ).width();
            var containerSize = $('.container').width();
            var getMargin = (screensize - containersize)/2;
            $('.setResizeMargin').css('margin-left',getMargin);
        }*/


    }); /*ready*/
</script>
</body>

</html>
