@extends('frontend.layout.main')

@push('title')
    <title>CODEX.</title>
@endpush

@section('main')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider">
            <div id="rev_slider_14_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="gravitydesign1"
                data-source="gallery" style="background:#1d2931;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_14_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul> <!-- SLIDE  -->
                        <li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('frontend/assets/images/slider/transparent.png') }}" data-bgcolor='#1d2931''
                                style='background:#1d2931' alt="" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme" id="slide-100-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                data-width="full-proportional" data-height="full-proportional" data-whitespace="nowrap"
                                data-type="image" data-basealign="slide" data-responsive_offset="on"
                                data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;">
                                <img src="{{ asset('frontend/assets/images/slider/slide3.jpg') }}" alt=""
                                    data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                    data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                    width="1920" height="1080" data-no-retina>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="slide-100-layer-2"
                                data-x="['left','left','left','left']" data-hoffset="['40','40','40','20']"
                                data-y="['top','top','top','top']" data-voffset="['220','100','350','200']"
                                data-fontsize="['26','18','18','18']" data-lineheight="['38','70','70','70']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":850,"speed":2000,"frame":"0","from":"sX:1.1;sY:1.1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 22px; line-height: 28px; font-weight: 500; color:#6b687a;font-family: 'Poppins', sans-serif;">
                                <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="2px"
                                    data-origin="50% 50%">Welcome To Codex</div>
                            </div>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="slide-100-layer-3"
                                data-x="['left','left','left','left']" data-hoffset="['40','40','40','20']"
                                data-y="['top','top','top','top']" data-voffset="['265','155','405','255']"
                                data-fontsize="['58','38','45','35']" data-lineheight="['75','48','48','48']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1300,"speed":2000,"frame":"0","from":"sX:2;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 205px; color:rgb(8 38 62); line-height: 240px; font-weight: 700; font-family: 'Poppins', sans-serif;">
                                <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="2px"
                                    data-origin="50% 50%">Own your future <br />learning new skills</div>
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-100-layer-6"
                                data-x="['right','right','right','right']" data-hoffset="['-100','-50','-100','-50']"
                                data-y="['top','top','top','top']" data-voffset="['50','-70','-100','-80']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":250,"speed":5000,"frame":"0","from":"y:100px;rZ:15deg;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;">
                                <div class="rs-looped rs-wave" data-speed="10" data-angle="0" data-radius="5px"
                                    data-origin="">
                                    <img src="{{ asset('frontend/assets/images/slider/codex_img.png') }}"
                                        class="slide-img-curve" alt=""
                                        data-ww="['991px','700px','700px','400px']"
                                        data-hh="['734px','451px','491px','281px']" width="1031" height="711"
                                        data-no-retina>
                                </div>
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption rs-parallaxlevel-2" target="_blank" id="slide-100-layer-7"
                                data-x="['left','left','left','left']" data-hoffset="['40','40','40','-40']"
                                data-y="['top','top','top','top']" data-voffset="['520','320','560','420']"
                                data-fontsize="['16','16','16','16']" data-lineheight="['20','20','20','20']"
                                data-width="['none','none','none','320']" data-height="none"
                                data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":250,"speed":5000,"frame":"0","from":"y:100px;rZ:15deg;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 12; font-size: 16px;">
                                <a href="#" class="btn button-md radius-xl">GET START</a>
                            </div>
                            <!-- LAYER NR. 8 -->

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" id="slide-100-layer-8"
                                data-x="['center','center','center','center']" data-hoffset="['-4','-4','-4','-4']"
                                data-y="['top','top','top','top']" data-voffset="['221','200','301','300']"
                                data-width="['390','390','390','180']" data-height="2" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"delay":"bytrigger","speed":500,"frame":"0","from":"sX:0;opacity:1;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"sX:0;opacity:1;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-lasttriggerstate="reset" style="z-index: 13;background-color:rgba(255,255,255,1);">
                            </div>

                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-5" id="slide-100-layer-11"
                                data-x="['left','left','left','left']" data-hoffset="['-250','250','50','-80']"
                                data-y="['middle','middle','middle','top']" data-voffset="['-100','200','-300','100']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":450,"speed":3000,"frame":"0","from":"y:150px;rZ:45deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 16;">
                                <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="2px"
                                    data-origin="50% 50%">
                                    <img src="{{ asset('frontend/assets/images/slider/img3.png') }}" alt=""
                                        data-ww="['186px','186px','186px','186px']"
                                        data-hh="['69px','69px','69px','69px']" width="50" height="50"
                                        data-no-retina>
                                </div>
                            </div>
                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-5" id="slide-200-layer-11"
                                data-x="['left','left','left','left']" data-hoffset="['-320','-120','-80','0']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-180','-180','-80','-90']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":450,"speed":3000,"frame":"0","from":"y:150px;rZ:45deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 16;">
                                <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="2px"
                                    data-origin="50% 50%">
                                    <img src="{{ asset('frontend/assets/images/slider/untitled-14.png') }}" alt=""
                                        data-ww="['783px','783px','783px','400px']"
                                        data-hh="['270px','270px','270px','138px']" width="50" height="50"
                                        data-no-retina>
                                </div>
                            </div>
                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-5" id="slide-300-layer-11"
                                data-x="['left','left','left','left']" data-hoffset="['-25','145','180','120']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-20','-20','80','10']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":450,"speed":3000,"frame":"0","from":"y:150px;rZ:45deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 16;">
                                <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="2px"
                                    data-origin="50% 50%">
                                    <img src="{{ asset('frontend/assets/images/slider/EDERE.png') }}" alt=""
                                        data-ww="['159px','159px','159px','100px']"
                                        data-hh="['129px','129px','129px','70px']" width="50" height="50"
                                        data-no-retina>
                                </div>
                            </div>
                            <!-- LAYER NR. 13 -->
                            {{-- <div class="tp-caption   tp-resizeme rs-parallaxlevel-5" id="slide-100-layer-12"
                                data-x="['center','center','center','center']" data-hoffset="['-200','200','50','-100']"
                                data-y="['middle','bottom','bottom','bottom']" data-voffset="['100','100','250','150']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":550,"speed":3000,"frame":"0","from":"y:150px;rZ:-125deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 17;">
                                <div class="rs-looped rs-wave" data-speed="5" data-angle="0" data-radius="4px"
                                    data-origin="50% 50%">
                                    <img src="{{ asset('frontend/assets/images/slider/untitled-85.png') }}" alt=""
                                        data-ww="['79px','79px','79px','45px']" data-hh="['79px','79px','79px','45px']"
                                        width="45" height="45" data-no-retina>
                                </div>
                            </div> --}}

                            <!-- LAYER NR. 15 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-100-layer-15"
                                data-x="['right','right','right','right']" data-hoffset="['-100','100','100','0']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','200','100']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":750,"speed":3000,"frame":"0","from":"y:150px;rZ:-125deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 19;">
                                <div class="rs-looped rs-wave" data-speed="7" data-angle="0" data-radius="6px"
                                    data-origin="50% 50%">
                                    <img src="{{ asset('frontend/assets/images/slider/FLOW1.png') }}" alt=""
                                        data-ww="['82px','82px','82px','82px']"
                                        data-hh="['115px','115px','115px','115px']" width="80" height="80"
                                        data-no-retina>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div><!-- END REVOLUTION SLIDER -->
        </div>
        <!-- Main Slider -->











        <div class="section-area ovpr-dark bg-fix appointment-box section-sp1 mb-70 popp" id="about"
            style="background-image:url(frontend/assets/images/background/bg1.jpg);">

            <div class="container" id="roadmap__container">
                <div style="padding-top: 20px;text-align:center;">
                    <h2 class="title-head about_codex">Welcome To CodeX.</h2>

                </div>
                <ul id="roadmap">
                    <div id="endpoint"></div>
                    {{-- <li class="__year">2019</li> --}}
                    <li class="__item __left">
                        <span class="connector"></span>
                        <div class="text">
                            <p class="text-justify">We are
                                thrilled to introduce a cutting-edge facility that is dedicated to providing top-tier hands
                                on
                                experience/pratical training for individuals of all backgrounds and skill levels. Our
                                premisis
                                is designed to be a
                                hub for learning, collaboration, and innovation in the ever-evolving world of technology.
                            </p>
                            {{-- <b>Q4 2019</b>
                            <br />
                            <span>Emergence of idea 'YOLO Coin'</span>
                            <hr />
                            <span>Analysis of the market and competitors have taken place during this period</span> --}}
                        </div>
                    </li>
                    <li class="right_year"><img src="{{ asset('frontend/assets/images/about/one.png') }}" alt="">
                    </li>
                    <li class="__item __right">
                        <span class="connector"></span>
                        <div class="text">
                            <p class="text-justify"> At CodeX, we are committed to offering a wide range of practical
                                experience that cater to the
                                diverse
                                needs of our students. Whether you are a beginner looking to build a solid foundation in
                                software development or a working professional seeking to enhance your skills, or an
                                entrepreneur
                                aiming to take your business to the next level, we have a program that is tailored just for
                                you.</p>
                            {{-- <b>Q1 2020</b>
                            <br />
                            <span>Oct-2017 Date of Pre ICO</span>
                            <hr />
                            <span>YOLOWORLD Coins was offered to the public</span> --}}
                        </div>
                    </li>
                    <li class="left_year"><img src="{{ asset('frontend/assets/images/about/two.png') }}" alt="">
                    </li>
                    <li class="__item __left">
                        <span class="connector"></span>
                        <div class="text">
                            <p class="text-justify"> What sets CodeX apart is our team of highly experienced profesionals
                                who are passionate about
                                sharing their knowledge and expertise with you all.
                                They bring both practical experience and theoretical understanding to the training, ensuring
                                that all our interns receive a well-rounded education that is relevant to the demands of the
                                industry.</p>
                            {{-- <b>Q2 2020</b>
                            <br />
                            <span>New Exchange WAVES Platform</span>
                            <hr />
                            <span>Transfer from YOLOWORLD wallet to WAVES was process to all ICO participants</span> --}}
                        </div>
                    </li>
                    <li class="right_year_1"><img src="{{ asset('frontend/assets/images/about/three.png') }}"
                            alt=""></li>
                    {{-- <li class="__year">2018</li> --}}
                    {{-- <li class="__item __goals">
                        <div class="__prettify"></div>
                        <img class="__coin" src="https://www.yoloworld.io/wp-content/uploads/2018/02/coin.png"
                            alt="">
                        <div class="__the_goals">
                            <b>Q1 GOALS 2018</b>
                            <br />
                            <ul>
                                <li>100,00 live users</li>
                                <li>Secure a user reach of 1 million</li>
                                <li>Live on major exchanges</li>
                                <li>Grow YOLO Team</li>
                                <li>Launch YOLO Wallet</li>
                            </ul>
                        </div>
                    </li> --}}
                    <li class="__item __right">
                        <span class="connector"></span>
                        <div class="text">
                            <p class="text-justify">
                                Our state-of-the-art facilities are equipped with the latest software and hardware,
                                providing
                                interns with an optimal learning environment that mirrors real-world industry . We
                                believe in hands-on, experiential learning, and our premisis is designed to facilitate
                                interactive sessions, workshops, and collaborative projects that encourage active
                                participation
                                and engagement.</p>
                            {{-- <b>Q1 2018</b>
                            <br />
                            <span>Re-branding of YOLO & YOLO Wallet launch</span>
                            <hr />
                            <span>Transfer from YOLOWORLD wallet to WAVES was process to all ICO participants</span>
                            <span class="__ongoing">AIRDROP!</span> --}}
                        </div>
                    </li>
                    <li class="left_year_1"><img src="{{ asset('frontend/assets/images/about/four.png') }}"
                            alt=""></li>
                    <li class="__item __left">
                        <span class="connector"></span>
                        <div class="text">
                            <p class="text-justify">In addition to our comprehensive curriculum and expert , we are
                                dedicated to
                                providing a supportive and inclusive learning experience. We understand that every student
                                is
                                unique, and we strive to create a nurturing environment that fosters growth, creativity, and
                                individual success. Our Intern support services are designed to offer guidance, mentorship,
                                and
                                resources that empower our students/Interns to excel in their academic and professional
                                endeavors.</p>
                            {{-- <b>Q2 2018</b>
                            <br />
                            <span>Listings on other Exchangers</span>
                            <hr />
                            <span>Video tutorials how to trade & more marketing promotion</span>
                            <span class="__ongoing">ON GOING PROJECT</span> --}}
                        </div>
                    </li>
                    <li class="right_year_2"><img src="{{ asset('frontend/assets/images/about/five.png') }}"
                            alt=""></li>
                    <li class="__item __right">
                        <span class="connector"></span>
                        <div class="text">
                            <p class="text-justify"> As we embark on this journey, we invite you to join us in shaping the
                                future of IT Industry.
                                Whether you are a prospective student, a technology enthusiast, or a business leader
                                looking to partner with us, we welcome you to explore all that our CodeX has to offer. </p>
                            {{-- <b>Q3 2018</b>
                            <br />
                            <span>CMC Listings | On going YOLO stores</span>
                            <hr />
                            <span>More product line in YOLO stores that fits within customer requirements</span>
                            <span class="__ongoing">ON GOING PROJECT</span> --}}
                        </div>
                    </li>
                    <li class="left_year_2"><img src="{{ asset('frontend/assets/images/about/six.png') }}"
                            alt=""></li>
                    <li class="__item __left">
                        <span class="connector"></span>
                        <div class="text">
                            <p class="text-justify">We
                                are confident that our commitment to excellence, innovation, and student success will make
                                our
                                CodeX the premier destination for internship.

                                Thank you for being a part of this exciting milestone, and we look forward to having you as
                                a
                                valued member of our vibrant community.</p>
                            {{-- <b>Q2 2018</b>
                            <br />
                            <span>Listings on other Exchangers</span>
                            <hr />
                            <span>Video tutorials how to trade & more marketing promotion</span>
                            <span class="__ongoing">ON GOING PROJECT</span> --}}
                        </div>
                    </li>
                    <li class="right_year_3"><img src="{{ asset('frontend/assets/images/about/seven.png') }}"
                            alt=""></li>
                    {{-- <li class="__item __left">
                        <span class="connector"></span>
                        <div class="text">
                            <b>Q4 2018</b>
                            <br />
                            <span>iPhone & Android App Integration
                                <br /> YOLO Debit Cards</span>
                            <hr />
                            <span>YOLO convience stores
                                <br />YOLO Debit Cards
                                <br />Bitcoin / YOLO ATM machines
                                <br />Eftpos Machines</span>
                            <span class="__ongoing">ON GOING PROJECT</span>
                        </div>
                    </li> --}}
                    {{-- <li class="__year">2019</li> --}}
                    {{-- <li class="__item __right">
                        <span class="connector"></span>
                        <div class="text">
                            <b>Q1 2019</b>
                            <br />
                            <span>YOLO Convenience Store Franchising
                                <br /> YOLO Eftpos machines</span>
                            <hr />
                            <span>YOLO convience stores
                                <br />YOLO Debit Cards
                                <br />Bitcoin / YOLO ATM machines
                                <br />Eftpos Machines</span>
                        </div>
                    </li> --}}
                    {{-- <li class="__item __left">
                        <span class="connector"></span>
                        <div class="text">
                            <b>Q2 2019</b>
                            <br />
                            <span>Bitcoin / YOLO ATM Machines</span>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>



























        <!-- Our Story ==== -->
        {{-- <div class="section-area bg-gradient section-sp1 our-story mb-70 popp" id="about">
            <div class="container">
                <div class="row align-items-center d-flex">
                    <div class="col-lg-7 col-md-12 heading-bx text-white style1">
                        <h2 class="title-head">Our Story</h2>
                        <h5 class="fw4">Welcome to CODEX</h5>
                        <p class="text-justify">Welcome to CodeX. We are
                            thrilled to introduce a cutting-edge facility that is dedicated to providing top-tier hands on
                            experience/pratical training for individuals of all backgrounds and skill levels. Our premisis
                            is designed to be a
                            hub for learning, collaboration, and innovation in the ever-evolving world of technology.

                            At CodeX, we are committed to offering a wide range of practical experience that cater to the
                            diverse
                            needs of our students. Whether you are a beginner looking to build a solid foundation in
                            software development or a working professional seeking to enhance your skills, or an
                            entrepreneur
                            aiming to take your business to the next level, we have a program that is tailored just for you.</p>

                           <p class="text-justify"> What sets CodeX apart is our team of highly experienced profesionals who are passionate about
                            sharing their knowledge and expertise with you all.
                            They bring both practical experience and theoretical understanding to the training, ensuring
                            that all our interns receive a well-rounded education that is relevant to the demands of the
                            industry.

                            Our state-of-the-art facilities are equipped with the latest software and hardware, providing
                            interns with an optimal learning environment that mirrors real-world industry . We
                            believe in hands-on, experiential learning, and our premisis is designed to facilitate
                            interactive sessions, workshops, and collaborative projects that encourage active participation
                            and engagement.</p>

                           <p class="text-justify"> In addition to our comprehensive curriculum and expert , we are dedicated to
                            providing a supportive and inclusive learning experience. We understand that every student is
                            unique, and we strive to create a nurturing environment that fosters growth, creativity, and
                            individual success. Our Intern support services are designed to offer guidance, mentorship, and
                            resources that empower our students/Interns to excel in their academic and professional
                            endeavors.

                            As we embark on this journey, we invite you to join us in shaping the future of IT Industry.
                            Whether you are a prospective student, a technology enthusiast, or a business leader
                            looking to partner with us, we welcome you to explore all that our CodeX has to offer. We
                            are confident that our commitment to excellence, innovation, and student success will make our
                            CodeX the premier destination for internship.

                            Thank you for being a part of this exciting milestone, and we look forward to having you as a
                            valued member of our vibrant community.</p>

                            Tag Line :: where learning knows no bounds!
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                    <div class="col-lg-7 col-md-12 heading-bx p-lr">
                        <div class="video-bx">
                            <img src="{{ asset('frontend/assets/images/about/pic1.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Our Story END -->

        <div class="content-block">
            <!-- Popular Courses -->
            <div class="section-area section-sp2 popular-courses-bx"
                style="background-image:url(frontend/assets/images/background/bg4.jpg); background-size:cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-bx style1 text-center">
                            <h2 class="title-head">Our Process</h2>
                            <p>Our Journey to Success</p>
                        </div>
                    </div>
                    <div class="row m-b50">
                        <div class="col-lg-4 col-md-6">
                            <div class="services-bx text-left m-b30">
                                <div class="feature-lg text-white m-b30">
                                    <span class="icon-cell"><i class="flaticon-exam"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Assessment Test</h5>
                                    <p>
                                        <li>Talent Examination</li>
                                        <li>To explore Your Ability.</li>
                                        <li>Our Question Partten <span class="question">(Click Here)</span></li>
                                    </p>

                                    {{-- <a href="#" class="readmore">Learn More <i class="la la-arrow-right"></i></a> --}}
                                </div>
                                <div class="service-no">01</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-bx text-left m-b30">
                                <div class="feature-lg text-white m-b30">
                                    <span class="icon-cell"><i class="flaticon-books"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Scholarship Assessment</h5>
                                    <p>
                                        <li>Scholarship on the basis of merit</li>
                                        <li>Career Counselling and Guidance</li>
                                    </p>
                                    {{-- <a href="#" class="readmore">Learn More <i class="la la-arrow-right"></i></a> --}}
                                </div>
                                <div class="service-no">02</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-bx text-left m-b30">
                                <div class="feature-lg text-white m-b30">
                                    <span class="icon-cell"><i class="flaticon-blackboard"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Training</h5>
                                    <p>
                                        <li>Regular Training with different module levels to archive</li>
                                        <li>Live project Allocation</li>
                                    </p>
                                    {{-- <a href="#" class="readmore">Learn More <i class="la la-arrow-right"></i></a> --}}
                                </div>
                                <div class="service-no">03</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-bx text-left m-b30">
                                <div class="feature-lg text-white m-b30">
                                    <span class="icon-cell"><i class="flaticon-professor"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Pre-Placement Program</h5>
                                    <p>
                                        <li>Interview Oriented Preparation</li>
                                        <li>Mock Interviews</li>
                                    </p>
                                    {{-- <a href="#" class="readmore">Learn More <i class="la la-arrow-right"></i></a> --}}
                                </div>
                                <div class="service-no">04</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-bx text-left m-b30">
                                <div class="feature-lg text-white m-b30">
                                    <span class="icon-cell"><i class="flaticon-student"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Placement</h5>
                                    <p>
                                        <li>Multiple Interviews , PPO</li>
                                        <li>Priorities In Job Openings</li>
                                    </p>
                                    {{-- <a href="#" class="readmore">Learn More <i class="la la-arrow-right"></i></a> --}}
                                </div>
                                <div class="service-no">05</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-bx text-left m-b30">
                                <div class="feature-lg text-white m-b30">
                                    <span class="icon-cell"><i class="flaticon-earth-globe"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="ttr-tilte">Post-Placement Community</h5>
                                    <p>
                                        <li>A community for all future problems to help</li>
                                    </p>
                                    {{-- <a href="#" class="readmore">Learn More <i class="la la-arrow-right"></i></a> --}}
                                </div>
                                <div class="service-no">06</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" id="training">
                    <div class="row">
                        <div class="col-md-12 heading-bx style1 text-center">
                            <h2 class="title-head">Our Trainings</h2>
                            {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since</p> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="courses-carousel-2 owl-carousel owl-btn-1 col-12 p-lr0 owl-none">
                            <div class="item">
                                <div class="cours-bx style1">
                                    <div class="action-box">
                                        <img src="{{ asset('frontend/assets/images/courses/ui_ux.png') }}"
                                            alt="">
                                        {{-- <a href="{{ url('/course_details') }}" class="btn">Read More</a> --}}
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#">UI/UX Design</a></h5>
                                        <span>Programming</span>
                                    </div>
                                    {{-- <div class="cours-more-info">
                                        <div class="review">
                                            <span>3 Review</span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del>₹190</del>
                                            <h5>₹120</h5>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="item">
                                <div class="cours-bx style1">
                                    <div class="action-box">
                                        <img src="{{ asset('frontend/assets/images/courses/PHP_LARVEL.png') }}"
                                            alt="">
                                        {{-- <a href="{{ url('/course_details') }}" class="btn">Read More</a> --}}
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#">PHP + Laravel Development</a></h5>
                                        <span>Programming</span>
                                    </div>
                                    {{-- <div class="cours-more-info">
                                        <div class="review">
                                            <span>3 Review</span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del>₹190</del>
                                            <h5>₹120</h5>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="item">
                                <div class="cours-bx style1">
                                    <div class="action-box">
                                        <img src="{{ asset('frontend/assets/images/courses/eere.png') }}" alt="">
                                        {{-- <a href="{{ url('/course_details') }}" class="btn">Read More</a> --}}
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="">Flutter Development</a></h5>
                                        <span>Programming</span>
                                    </div>
                                    {{-- <div class="cours-more-info">
                                        <div class="review">
                                            <span>3 Review</span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del>₹190</del>
                                            <h5>₹120</h5>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="item">
                                <div class="cours-bx style1">
                                    <div class="action-box">
                                        <img src="{{ asset('frontend/assets/images/courses/MERN_DEV5.png') }}"
                                            alt="">
                                        {{-- <a href="{{ url('/course_details') }}" class="btn">Read More</a> --}}
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#">Full Stack Development</a></h5>
                                        <span>Programming</span>
                                    </div>
                                    {{-- <div class="cours-more-info">
                                        <div class="review">
                                            <span>3 Review</span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del>₹190</del>
                                            <h5>₹120</h5>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="item">
                                <div class="cours-bx style1">
                                    <div class="action-box">
                                        <img src="{{ asset('frontend/assets/images/courses/HTMCSSS.png') }}"
                                            alt="">
                                        {{-- <a href="{{ url('/course_details') }}" class="btn">Read More</a> --}}
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#">Frontend Development</a></h5>
                                        <span>Programming</span>
                                    </div>
                                    {{-- <div class="cours-more-info">
                                        <div class="review">
                                            <span>3 Review</span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del>₹190</del>
                                            <h5>₹120</h5>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="item">
                                <div class="cours-bx style1">
                                    <div class="action-box">
                                        <img src="{{ asset('frontend/assets/images/courses/') }}" alt="">
                                        {{-- <a href="{{ url('/course_details') }}" class="btn">Read More</a> --}}
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#">Backend Development</a></h5>
                                        <span>Programming</span>
                                    </div>
                                    {{-- <div class="cours-more-info">
                                        <div class="review">
                                            <span>3 Review</span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del>₹190</del>
                                            <h5>₹120</h5>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Courses END -->


            {{-- <div class="section-area section-sp2"
                style="background-image:url(frontend/assets/images/background/bg4.jpg); background-size:cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 style1 text-center heading-bx">
                            <h2 class="title-head m-b0">Upcoming Events</h2>
                            <p class="m-b0">Upcoming Education Events To Feed Brain. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="event-bx style1">
                                <div class="action-box">
                                    <img src="{{ asset('frontend/assets/images/courses/pic10.jpg') }}" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour
                                                2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am
                                                    8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin,
                                                    Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                                <div class="event-time">
                                    <div class="event-date">29</div>
                                    <div class="event-month">October</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="event-bx style1">
                                <div class="action-box">
                                    <img src="{{ asset('frontend/assets/images/courses/pic13.jpg') }}" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour
                                                2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am
                                                    8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin,
                                                    Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                                <div class="event-time">
                                    <div class="event-date">02</div>
                                    <div class="event-month">August</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="event-bx style1">
                                <div class="action-box">
                                    <img src="{{ asset('frontend/assets/images/courses/pic12.jpg') }}" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour
                                                2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am
                                                    8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin,
                                                    Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                                <div class="event-time">
                                    <div class="event-date">30</div>
                                    <div class="event-month">March</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn">View All Event</a>
                    </div>
                </div>
            </div> --}}

            <!-- Our placements -->
            <div class="container-fluid mb-70" id="training">
                <div class="row">
                    <div class="col-md-12 heading-bx style1 text-center">
                        <h2 class="title-head">CODEX.
                            Have Cracked Their Dream Careers In</h2>

                    </div>
                </div>
                <div class="wrapper">
                    <div class="slider">
                        <div class="slide-track">
                            <!-- Img Code -->
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/tarun.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Tarun</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/hexaphor.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/aman.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Aman</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/ntspl_logo.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/pp.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Pratyarpita</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/ccyard.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/pradosh.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Prashosh</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/hexaphor.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/priyka.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Priyanka</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/ed_logo.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/tarun.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Tarun</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/hexaphor.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/aman.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Aman</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/ntspl_logo.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/pp.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Pratyarpita</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/ccyard.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/pradosh.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Prashosh</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/hexaphor.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/priyka.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Priyanka</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/ed_logo.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/tarun.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Tarun</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/hexaphor.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/aman.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Aman</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/ntspl_logo.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/pp.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Pratyarpita</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/ccyard.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/pradosh.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Prashosh</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/hexaphor.png') }}"
                                    class="company_logo" />
                            </div>
                            <div class="slide">
                                <img src="{{ asset('frontend/assets/images/placements/priyka.png') }}"
                                    class="candidate_img" />
                                <p class='candidate_name'>Priyanka</p>
                                <p>Placed at</p>
                                <img src="{{ asset('frontend/assets/images/companies/ed_logo.png') }}"
                                    class="company_logo" />
                            </div>
                            <!-- Img Code End -->
                        </div>
                    </div>
                </div>
                <!-- Our placements End -->
            </div>



            <!-- Our pricing -->
            <div class="section-area section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-bx text-center">
                            <h2 class="title-head text-uppercase m-b0">Set a plan, start learning and <br /> <span> unlock
                                    your potential</span></h2>
                            {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p> --}}
                        </div>
                    </div>
                    <div class="pricingtable-row">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3 m-b40">
                                <div class="pricingtable-wrapper">
                                    <div class="pricingtable-inner pricingtable-highlight">
                                        <div class="pricingtable-main">
                                            <div class="pricingtable-price">
                                                <span class="priceing-doller">₹</span>
                                                <span class="pricingtable-bx">9,000</span>
                                                <span class="pricingtable-type">Month</span>
                                            </div>
                                            <div class="pricingtable-title">
                                                <h2>Basic</h2>
                                                <p>Without Scholarship </p>
                                            </div>
                                        </div>
                                        <ul class="pricingtable-features">
                                            <li>0% Discount</li>
                                            <li>3 Month Training</li>
                                            <li>Hands On 20+ Live Projects</li>
                                            <li>Skill Devlopment</li>
                                            <li>Mock Interviews</li>
                                            <li>Scheduling Interviews</li>
                                        </ul>
                                        {{-- <div class="pricingtable-footer">
											<a href="contact-1.html" class="btn radius-xl">Get It Now</a>
										</div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3 m-b40">
                                <div class="pricingtable-wrapper">
                                    <div class="pricingtable-inner">
                                        <div class="pricingtable-main">
                                            <div class="pricingtable-price">
                                                <span class="priceing-doller">₹</span>
                                                <span class="pricingtable-bx">8100</span>
                                                <span class="pricingtable-type">Month</span>
                                            </div>
                                            <div class="pricingtable-title">
                                                <h2>Scholarship</h2>
                                                <p>Category-3</p>
                                            </div>
                                        </div>
                                        <ul class="pricingtable-features">
                                            <li>10% Discount</li>
                                            <li>3 Month Training</li>
                                            <li>Hands On 20+ Live Projects</li>
                                            <li>Skill Devlopment</li>
                                            <li>Mock Interviews</li>
                                            <li>Scheduling Interviews</li>
                                        </ul>
                                        {{-- <div class="pricingtable-footer">
											<a href="contact-1.html" class="btn radius-xl">Get It Now</a>
										</div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3 m-b40">
                                <div class="pricingtable-wrapper">
                                    <div class="pricingtable-inner pricingtable-highlight">
                                        <div class="pricingtable-main">
                                            <div class="pricingtable-price">
                                                <span class="priceing-doller">₹</span>
                                                <span class="pricingtable-bx">7200</span>
                                                <span class="pricingtable-type">Month</span>
                                            </div>
                                            <div class="pricingtable-title">
                                                <h2>Scholarship</h2>
                                                <p>Category-2</p>
                                            </div>
                                        </div>
                                        <ul class="pricingtable-features">
                                            <li>20% Discount</li>
                                            <li>3 Month training</li>
                                            <li>Hands On 20+ Live Projects</li>
                                            <li>Skill Devlopment</li>
                                            <li>Mock Interviews</li>
                                            <li>Scheduling Interviews</li>
                                        </ul>
                                        {{-- <div class="pricingtable-footer">
											<a href="contact-1.html" class="btn radius-xl">Get It Now</a>
										</div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3 m-b40">
                                <div class="pricingtable-wrapper">
                                    <div class="pricingtable-inner">
                                        <div class="pricingtable-main">
                                            <div class="pricingtable-price">
                                                <span class="priceing-doller">₹</span>
                                                <span class="pricingtable-bx">6300</span>
                                                <span class="pricingtable-type">Month</span>
                                            </div>
                                            <div class="pricingtable-title">
                                                <h2>Scholarship</h2>
                                                <p>Category-1</p>
                                            </div>
                                        </div>
                                        <ul class="pricingtable-features">
                                            <li>30% Discount</li>
                                            <li>3 Month Training</li>
                                            <li>Hands On 20+ Live Projects</li>
                                            <li>Skill Devlopment</li>
                                            <li>Mock Interviews</li>
                                            <li>Scheduling Interviews</li>
                                        </ul>
                                        {{-- <div class="pricingtable-footer">
											<a href="contact-1.html" class="btn radius-xl">Get It Now</a>
										</div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our pricing End -->




            <!-- Form -->
            <div class="section-area section-sp3 ovpr-dark bg-fix appointment-box" id="contact"
                style="background-image:url(frontend/assets/images/background/bg1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-bx style1 text-white text-center">
                            <h2 class="title-head">Enquiry</h2>
                            <p>Feel Free to Connect...</p>
                        </div>
                    </div>
                    <form class="contact-bx " action="{{ url('/contact_store') }}" method="POST">
                        @csrf
                        {{-- <div class="ajax-message"></div> --}}
                        <div class="row placeani">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Name</label>
                                        <input name="name" type="text" required
                                            class="form-control valid-character">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Email Address</label>
                                        <input name="email" type="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Phone</label>
                                        <input name="phone_number" type="tel" required
                                            class="form-control int-value">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Subject</label>
                                        <input name="subject" type="text" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Type Message</label>
                                        <textarea name="message" rows="4" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button name="submit" type="submit" value="Submit" class="btn button-md">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <img src="{{ asset('frontend/assets/images/background/appointment-bg.png') }}" class="appoint-bg"
                    alt="" />
            </div>
            <!-- Form END -->
            <!-- Testimonials -->
            <div class="section-area section-sp2"
                style="background-image:url(frontend/assets/images/background/bg7.jpg); background-size:cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-bx style1 text-center">
                            <h2 class="title-head">What People Say</h2>
                            <p>Some Words From Our Trainees </p>
                        </div>
                    </div>
                    <div class="testimonial-carousel-2 owl-carousel owl-btn-1 col-12 p-lr0 owl-none">
                        <div class="item">
                            <div class="testimonial-bx style1">
                                <div class="testimonial-thumb">
                                    <img src="{{ asset('frontend/assets/images/placements/aman.png') }}" alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Aman Mukhi</h5>
                                    <p>-Web Developer</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>Kudos to CodeX for the stellar Laravel training!Their hands-on approach and top-notch
                                        instructors made learning Laravel a breeze. Thrilled to share I've just landed a
                                        Laravel developer position, and I owe it all to the CodeX community. If you're
                                        serious about Laravel, this is the place to be !</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-bx style1">
                                <div class="testimonial-thumb">
                                    <img src="{{ asset('frontend/assets/images/placements/tarun.png') }}" alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Tarun Kumar Sahoo</h5>
                                    <p>-Software Trainee</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>I enrolled in the Web development course at Codex and it has been an exceptional
                                        learning journey. The comprehensive curriculum, expert instructors, and hands-on
                                        projects provided me with the skills and confidence needed to excel in the world of
                                        web development. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-bx style1">
                                <div class="testimonial-thumb">
                                    <img src="{{ asset('frontend/assets/images/placements/pp.png') }}" alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Pratyarpita Pattanaik</h5>
                                    <p>-Flutter Developer</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>Thanks to CodeX's Flutter Trainee, I not only mastered Flutter but also landed a job
                                        in mobile app development! The hands-on projects prepared me for real-world
                                        challenges, and the career support was instrumental in securing my dream position.
                                        CodeX, you've truly accelerated my career in Flutter development! </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-bx style1">
                                <div class="testimonial-thumb">
                                    <img src="{{ asset('frontend/assets/images/placements/pradosh.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Pradosh Pattanaik</h5>
                                    <p>-Flutter Developer</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>Grateful for CodeX's Flutter training – it propelled me into the world of mobile
                                        development. The practical projects honed my skills, and with their career support,
                                        I secured a Flutter job! CodeX, you're the catalyst for turning aspirations into
                                        achievements. Thank you for shaping my Flutter journey ! </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-bx style1">
                                <div class="testimonial-thumb">
                                    <img src="{{ asset('frontend/assets/images/placements/priyka.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Priyanka Das</h5>
                                    <p>-Web Developer</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>CodeX's Laravel course has been a game-changer for me! The hands-on learning and
                                        expert guidance have transformed my coding skills. I now feel confident working with
                                        Laravel, and it opened doors to exciting job opportunities. CodeX is the real deal
                                        for anyone serious about Laravel development ! </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-bx style1">
                                <div class="testimonial-thumb">
                                    <img src="{{ asset('frontend/assets/images/placements/rakesh.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Rakesh Kumar Subudhi</h5>
                                    <p>-Software Trainee</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>I highly recommend Codex to anyone looking to master Laravel and advance their career
                                        in web development. it's a launchpad for your success in the world of Web
                                        development.The supportive and collaborative learning environment fostered by Web,
                                        Codex is truly commendable. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-bx style1">
                                <div class="testimonial-thumb">
                                    <img src="{{ asset('frontend/assets/images/placements/POOJA.png') }}" alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Bhagabati Sahoo</h5>
                                    <p>-Web Developer</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>Choosing Codex was one of the best decisions I made for my career. The curriculum is
                                        both comprehensive and practical, offering a perfect blend of theoretical knowledge
                                        and hands-on experience. The instructors are not only experts in Laravel but also
                                        adept educators who guide you at every step. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials END -->
        </div>
        <!-- contact area END -->
    </div>



    {{-- <div id="popup6" class="popup-container popup-style-6">
        <div class="popup-content">
            <a href="#" class="close">&times;</a>
            <img>
            <h3>Popup 6</h3>
            <img src="{{ asset('frontend/assets/images/question_pattern.png') }}" alt="">
        </div>
    </div> --}}
    <div class="custom-model-main">
        <div class="custom-model-inner">
        <div class="close-btn">×</div>
            <div class="custom-model-wrap">
                <div class="pop-up-content-wrap">
                    <h3>Hello</h3>
                    <img src="{{ asset('frontend/assets/images/question_pattern.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="bg-overlay"></div>
    </div>




    <!-- Content END-->
    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/654e2d4e958be55aeaae6795/1hesm1v4g';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> --}}
    <!--End of Tawk.to Script-->
@endsection
