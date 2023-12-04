@extends('layouts.wetdp_master')
@section('title', 'Home')

@section('main_content')
<section id="home">
    <h2 class="d-none">heading</h2>
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_one_page" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" class="banner-overlay">
                    <!-- MAIN IMAGE -->
                    <div class="overlay overlay-dark opacity-6"></div>
                    <img src="{{asset('static/media/website-images/banner-single-1.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"  data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme z-index-1 font-light2 text-capitalize whitecolor"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-140','-140']"
                         data-fontsize="['48','48','46','45']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">simple but
                    </div>
                    <div class="tp-caption tp-resizeme font-bold z-index-2 text-capitalize whitecolor"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-70','-70']"
                         data-fontsize="['48','48','46','45']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="1200" data-splitin="none" data-splitout="none">more powerful
                    </div>
                    <div class="tp-caption tp-resizeme z-index-3 font-xlight whitecolor text-capitalize"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','0','0']"
                         data-fontsize="['48','48','46','45']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">one page template
                    </div>
                    <div class="tp-caption"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['120','120','100','100']"
                         data-textalign="['center','center','center','center']"
                         data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
                         data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;"}]'>
                        <a href="javascript:void(0)" class="button btn-primary font-13">Get Started</a>
                    </div>
                </li>
                <!-- SLIDE 2  -->
                <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" class="banner-overlay">
                    <!-- MAIN IMAGE -->
                    <div class="overlay overlay-dark opacity-6"></div>
                    <img src="{{asset('static/media/website-images/banner-single-2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme z-index-5 font-xlight whitecolor text-capitalize"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-60','-60']"
                         data-fontsize="['32','32','30','28']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['right','right','right','center']"
                         data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="1200" data-splitin="none" data-splitout="none"
                         style="letter-spacing: 1px;">we're a design studio
                    </div>
                    <div class="tp-caption tp-resizeme z-index-6 font-normal whitecolor text-capitalize"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-10','-10']"
                         data-fontsize="['48','48','46','45']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['right','right','right','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">believes in
                    </div>
                    <div class="tp-caption tp-resizeme z-index-7 font-bold whitecolor text-capitalize"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['45','45','50','50']"
                         data-fontsize="['48','48','46','45']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['right','right','right','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1500" data-splitin="none" data-splitout="none"
                         style="line-height:30px">an innovation
                    </div>
                    <div class="tp-caption"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']"
                         data-textalign="['center','center','center','center']"
                         data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                         data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
                         data-type="button" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="javascript:void(0)" class="button btn-primary font-13 mr-2">Learn More</a>
                        <a href="javascript:void(0)" class="button btn-dark font-13">contact us</a>
                    </div>
                </li>
                <!-- SLIDE 3  -->
                <li data-index="rs-03" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" class="banner-overlay" >
                    <!-- MAIN IMAGE -->
                    <div class="overlay overlay-dark opacity-6"></div>
                    <img src="{{asset('static/media/website-images/banner-single-3.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme z-index-8 font-light2 whitecolor text-capitalize"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-140','-140']"
                         data-fontsize="['48','48','46','45']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">the ultimate
                    </div>
                    <div class="tp-caption tp-resizeme z-index-9 font-bold whitecolor text-capitalize"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-70','-70']"
                         data-fontsize="['48','48','46','45']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="1200" data-splitin="none" data-splitout="none"
                         style="letter-spacing: 1px;">next big thing
                    </div>
                    <div class="tp-caption tp-resizeme z-index-10 font-xlight whitecolor text-capitalize"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','0','0']"
                         data-fontsize="['48','48','46','45']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">in one page
                    </div>
                    <div class="tp-caption"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['120','120','100','100']"
                         data-textalign="['center','center','center','center']"
                         data-whitespace="nowrap" data-type="button" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                         data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
                         data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="javascript:void(0)" class="button btn-primary font-13">Get Started</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Main Slider ends -->
<!--Some Feature -->
<section id="our-feature" class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30">Lets take your <span class="defaultcolor">Business</span> to Next Level</h2>
                </div>
                <p class="bottom35">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus. </p>
                <a href="#our-team" class="button btnsecondary gradient-btn pagescroll mb-sm-0 mb-4">Learn More</a>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{asset('static/media/website-images/awesome-feature.png')}}"></div>
            </div>
        </div>
    </div>
</section>
<!--Some Feature ends-->
<!-- WOrk Process-->
<section id="our-process" class="padding bgdark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                    <span>Quisque tellus risus, adipisci </span>
                    <h2 class="font-normal">Our Work Process </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    <span class="pro-step bottom20">01</span>
                    <p class="fontbold bottom25">Concept</p>
                    <p class="mt-n2 mt-sm-0">Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                    <span class="pro-step bottom20">02</span>
                    <p class="fontbold bottom25">Plan</p>
                    <p class="mt-n2 mt-sm-0">Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                    <span class="pro-step bottom20">03</span>
                    <p class="fontbold bottom25">Design</p>
                    <p class="mt-n2 mt-sm-0">Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                    <span class="pro-step bottom20">04</span>
                    <p class="fontbold bottom25">Development</p>
                    <p class="mt-n2 mt-sm-0">Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                    <span class="pro-step bottom20">05</span>
                    <p class="fontbold bottom25">Quality Check</p>
                    <p class="mt-n2 mt-sm-0">Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--WOrk Process ends-->
<!-- Mobile Apps -->
<section id="our-apps" class="padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <span class="defaultcolor text-center text-md-left">Quisque tellus risus, adipisci viverra</span>
                    <h2 class="darkcolor font-normal text-center text-md-left">Mobile App Designs</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-center text-md-left">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. </p>
            </div>
        </div>
        <div class="row d-flex align-items-center" id="app-feature">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="text-center text-md-right">
                    <div class="feature-item mt-3 wow fadeInLeft" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
                        <div class="icon"><i class="fas fa-cog"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Theme Options</span>
                            </h3>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                    <div class="feature-item mt-5 wow fadeInLeft" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: fadeInLeft;">
                        <div class="icon"><i class="fas fa-edit"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Customization</span>
                            </h3>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="app-image top30">
                    <div class="app-slider-lock-btn"></div>
                    <div class="app-slider-lock">
                        <img src="{{asset('static/media/website-images/iphone-slide-lock.jpg')}}" alt="">
                    </div>
                    <div id="app-slider" class="owl-carousel owl-theme owl-loaded owl-drag">



                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-470px, 0px, 0px); transition: all 0s ease 0s; width: 1645px;"><div class="owl-item cloned" style="width: 235px;"><div class="item">
                            <img src="{{asset('static/media/website-images/iphone-slide2.jpg')}}" alt="">
                        </div></div><div class="owl-item cloned" style="width: 235px;"><div class="item">
                            <img src="{{asset('static/media/website-images/iphone-slide3.jpg')}}" alt="">
                        </div></div><div class="owl-item active" style="width: 235px;"><div class="item">
                            <img src="{{asset('static/media/website-images/iphone-slide1.jpg')}}" alt="">
                        </div></div><div class="owl-item" style="width: 235px;"><div class="item">
                            <img src="{{asset('static/media/website-images/iphone-slide2.jpg')}}" alt="">
                        </div></div><div class="owl-item" style="width: 235px;"><div class="item">
                            <img src="{{asset('static/media/website-images/iphone-slide3.jpg')}}" alt="">
                        </div></div><div class="owl-item cloned" style="width: 235px;"><div class="item">
                            <img src="{{asset('static/media/website-images/iphone-slide1.jpg')}}" alt="">
                        </div></div><div class="owl-item cloned" style="width: 235px;"><div class="item">
                            <img src="{{asset('static/media/website-images/iphone-slide2.jpg')}}" alt="">
                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                    <img src="{{asset('static/media/website-images/iphone.png')}}" alt="image">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="text-center text-md-left">
                    <div class="feature-item mt-3 wow fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                        <div class="icon"><i class="fas fa-code"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Powerful Code</span>
                            </h3>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                    <div class="feature-item mt-5 wow fadeInRight" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: fadeInRight;">
                        <div class="icon"><i class="far fa-folder-open"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Documentation </span>
                            </h3>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Mobile Apps ends-->
<!-- Counters -->
<section id="bg-counters" class="padding bg-counters parallax">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor  top10 bottom10">
                    <span class="count_nums font-light" data-to="2010" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Since We Started</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p class="whitecolor top20 bottom20 font-light title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor top10 bottom10">
                    <span class="count_nums font-light" data-to="895" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Since We Started</h3>
            </div>
        </div>
    </div>
</section>
<!-- Counters ends-->
<!-- Our Team-->
<section id="our-team" class="padding_top half-section-alt teams-border">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor text-center text-md-left">Quisque tellus risus, adipisci</span>
                    <h2 class="darkcolor font-normal text-center text-md-left">Meet Our Experts</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="ourteam-slider" class="owl-carousel">
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="{{asset('static/media/website-images/team-1.jpg')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="{{asset('static/media/website-images/team-2.jpg')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jason Wudex </h4>
                                <p>Designer</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box single">
                            <div class="image">
                                <img src="{{asset('static/media/website-images/team-3.jpg')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="{{asset('static/media/website-images/team-4.jpg')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Hayden Wood</h4>
                                <p>Marketing</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="{{asset('static/media/website-images/team-1.jpg')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Shania Jackson </h4>
                                <p>Print Media</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="{{asset('static/media/website-images/team-2.jpg')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="{{asset('static/media/website-images/team-3.jpg')}}" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Team ends-->
<!--Pricing Start-->
<section id="pricing" class="padding bglight">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title darkcolor wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor">Quisque tellus risus, adipisci </span>
                    <h2 class="font-normal bottom30"> Pricing Offers </h2>
                </div>
            </div>
            <div class="col-12 text-center ">
                <div class="price-toggle-wrapper heading_space">
                    <span class="Pricing-toggle-button month active">Monthly</span>
                    <span class="Pricing-toggle-button year">Yearly</span>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme no-dots" id="price-slider">
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="300ms" data-sale="60">
                        <h3 class="font-light darkcolor">Basic</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$9.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li class="price-not">40MB of storage space</li>
                            <li class="price-not">Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item sale wow fadeInUp animated" data-wow-delay="380ms" data-sale="40">
                        <h3 class="font-light darkcolor">Popular</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$19.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li class="price-not">Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="460ms" data-sale="30">
                        <h3 class="font-light darkcolor">Enterprise</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$29.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li>Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale" data-wow-deeay="400ms" data-sale="20">
                        <h3 class="font-light darkcolor">Ultimate</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$49.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li>Social media integration</li>
                            <li>10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Pricing ends-->
<!-- Gallery -->
<section id="gallery" class="position-relative padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                <div class="heading-title bottom30 darkcolor wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor">Explore </span>
                    <h2 class="font-normal darkcolor"> Our Gallery </h2>
                </div>
                <div class="col-md-8 offset-md-2 heading_space">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div id="mosaic-filter" class="cbp-l-filters bottom30 wow fadeIn text-center" data-wow-delay="350ms">
                    <div data-filter="*" class="cbp-filter-item">
                        <span>All</span>
                    </div>
                    <div data-filter=".digital" class="cbp-filter-item">
                        <span>Digital</span>
                    </div>
                    <div data-filter=".design" class="cbp-filter-item">
                        <span>Design</span>
                    </div>
                    <div data-filter=".brand" class="cbp-filter-item">
                        <span>Brand</span>
                    </div>
                    <div data-filter=".graphics" class="cbp-filter-item">
                        <span>Graphics</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat">
                    <!--Item 1-->
                    <div class="cbp-item brand graphics">
                        <img src="{{asset('static/media/website-images/gallery-1.jpg')}}" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="{{asset('static/media/website-images/gallery-1.jpg')}}" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="{{asset('static/media/website-images/gallery-1.jpg')}}" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Rainy Outdoor</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 2-->
                    <div class="cbp-item digital brand graphics design">
                        <img src="{{asset('static/media/website-images/gallery-4.jpg')}}" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="{{asset('static/media/website-images/gallery-4.jpg')}}" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Classic Interior</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 3-->
                    <div class="cbp-item design digital graphics">
                        <img src="{{asset('static/media/website-images/gallery-11.jpg')}}" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="{{asset('static/media/website-images/gallery-11.jpg')}}" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Shadow Smoke</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 4-->
                    <div class="cbp-item brand graphics">
                        <img src="{{asset('static/media/website-images/gallery-2.jpg')}}" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="{{asset('static/media/website-images/gallery-2.jpg')}}" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Eiffel Model</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 5-->
                    <div class="cbp-item brand graphics design design">
                        <img src="{{asset('static/media/website-images/gallery-7.jpg')}}" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="{{asset('static/media/website-images/gallery-7.jpg')}}" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Clean Bike</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 6-->
                    <div class="cbp-item brand digital design">
                        <img src="{{asset('static/media/website-images/gallery-9.jpg')}}" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="{{asset('static/media/website-images/gallery-9.jpg')}}" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Game Mode</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!--Load more itema from another html file using ajax-->
                    <div id="js-loadMore-mosaic" class="cbp-l-loadMore-button ">
{{--                        href="loadmore.html"--}}
                        <a href="#" class="cbp-l-loadMore-link button py-1 button gradient-btn whitecolor transition-3" rel="nofollow">
                            <span class="cbp-l-loadMore-defaultText">LOAD MORE (<span class="cbp-l-loadMore-loadItems">13</span>)</span>
                            <span class="cbp-l-loadMore-loadingText">LOADING <i class="fas fa-spinner fa-spin"></i></span>
                            <span class="cbp-l-loadMore-noMoreLoading d-none">NO MORE WORKS</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery ends -->
<!-- Partners-->
<section id="our-partners" class="padding bglight">
    <div class="container">
        <div class="row">
            <h2 class="d-none">Partners Carousel</h2>
            <div class="col-md-12 col-sm-12">
                <div id="partners-slider" class="owl-carousel">
                    <div class="item">
                        <div class="logo-item"> <img alt="" src="{{asset('static/media/website-images/logo-1.png')}}"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="{{asset('static/media/website-images/logo-2.png')}}"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="{{asset('static/media/website-images/logo-3.png')}}"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="{{asset('static/media/website-images/logo-4.png')}}"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="{{asset('static/media/website-images/logo-5.png')}}"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="{{asset('static/media/website-images/logo-1.png')}}"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="{{asset('static/media/website-images/logo-2.png')}}"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="{{asset('static/media/website-images/logo-3.png')}}"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="{{asset('static/media/website-images/logo-4.png')}}"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="{{asset('static/media/website-images/logo-5.png')}}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners ends-->
<!-- Testimonials -->
<section id="our-testimonial" class="bglight padding_bottom">
    <div class="parallax page-header testimonial-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 col-md-12 text-center text-lg-right">
                    <div class="heading-title wow fadeInUp padding_testi" data-wow-delay="300ms">
                        <span class="whitecolor">Quisque tellus risus, adipisci</span>
                        <h2 class="whitecolor font-normal">What People Say</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="owl-carousel" id="testimonial-slider">
            <!--item 1-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="{{asset('static/media/website-images/testimonial-1.jpg')}}" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">John Smith</a></h4>
                        <p>UPWORK, New York</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we boast a years and years of service.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 2-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="{{asset('static/media/website-images/testimonial-2.jpg')}}" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Hayden Wood</a></h4>
                        <p>FIVERR, Italy</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">Trax’s customer testimonial page is another beauty. Its simple design focuses on videos and standout quotes from customers. This approach is clean, straightforward, text that can be overwhelming and easy to skip.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="far fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 3-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="{{asset('static/media/website-images/testimonial-3.jpg')}}" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Kevin Miller</a></h4>
                        <p>ENVATO, Australia</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">Trax is a company that provides tools to help professional event planning and execution, and their customers are very happy folks! The thing I love about their customer testimonial page provides content formats.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 4-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="{{asset('static/media/website-images/testimonial-4.jpg')}}" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Alina Johanson</a></h4>
                        <p>INTEL, Sidney</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">Startup Institute is a career accelerator that allows professionals to learn new skills, take their careers in a different direction, and pursue a career they are passionate about that have completed the program.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="far fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonials Ends-->
<!--video part section-->
<section class="bglight">
    <h2 class="d-none">heading</h2>
    <div class="container-fluid bg-white">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 p-0 col-video">
                <div class="row mx-0">
                    <div class="col-md-10 offset-md-1 offset-sm-0 col-sm-12">
                        <div class="video-content-setting center-block text-center text-sm-left">
                            <h2 class="darkcolor font-normal text-capitalize mb-3">a creative design agency in east london.</h2>
                            <p class="darkcolor">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin.
                            </p>
                        </div>
                    </div>
                </div>
                <a data-fancybox="video" href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video-play-button position-absolute">
                    <i class="fas fa-play"></i>
                </a>
            </div>
            <div class="col-md-6 col-sm-12 p-0 col-video video-bg">
                <div class="image split-blog-scale transition-3">
                    <img alt="stats" src="{{asset('static/media/website-images/bg-video-section.jpg')}}" class="video-img-setting ">
                </div>
            </div>
        </div>
    </div>
</section>
<!--video part section end-->
<!--Blog-->
<section class="bglight padding" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-title bottom30 darkcolor wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <span class="defaultcolor">Read Our </span>
                    <h2 class="font-normal darkcolor"> Latest Blog </h2>
                </div>
                <div class="col-10 offset-1 text-center heading_space">
                    <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.</p>
                </div>
            </div>
        </div>
        <div id="blog-measonry" class="cbp">
            <div class="cbp-item">
                <div class="news_item shadow">
                    <a class="image" href="blog-detail.html">
                        <img src="{{asset('static/media/website-images/blog-measonry1.jpg')}}" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="blog-detail.html">Next Large Social Network</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>Jan 14</a></li>
                            <li><a href="#."> <i class="far fa-user"></i> Peter </a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i> 7</a></li>
                        </ul>
                        <p class="bottom35">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="blog-1.html" class="button gradient-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow">
                    <a class="image" href="blog-detail.html">
                        <img src="{{asset('static/media/website-images/blog-measonry4.jpg')}}" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="blog-detail.html">The Art of Finding Great Ideas</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>Feb 19</a></li>
                            <li><a href="#."> <i class="far fa-user"></i> John </a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>9 </a></li>
                        </ul>
                        <p class="bottom35">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="blog-1.html" class="button gradient-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow">
                    <a class="image" href="blog-detail.html">
                        <img src="{{asset('static/media/website-images/blog-measonry6.jpg')}}" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="blog-detail.html">3 Tips for Creating Your Own Blog</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>May 21</a></li>
                            <li><a href="#."> <i class="far fa-user"></i> David </a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>4 </a></li>
                        </ul>
                        <p class="bottom35">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="blog-1.html" class="button gradient-btn">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog ends-->
<!--contact us-->
<section id="contact" class="bglight position-relative noshadow">
    <div class="container whitebox padding_bottom">
        <div class="widget py-5">
            <div class="row">
                <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                    <div class="heading-title bottom25 darkcolor wow fadeInUp" data-wow-delay="300ms">
                        <h2 class="font-normal darkcolor"> Contact Us </h2>
                    </div>
                    <div class="col-md-8 offset-md-2 bottom35">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 order-sm-2 text-center text-md-left">
                    <div class="contact-meta px-2">
                        <div class="heading-title">
                            <span class="defaultcolor mb-3">Trax Agency Worldwide</span>
                            <h2 class="darkcolor font-normal mb-4"><span class="d-none d-md-inline-block">Our</span> Agency Office <span class="d-none d-md-inline-block">In London</span></h2>
                        </div>
                        <p class="bottom10">Address: 309, New Cavendish St, EC1Y 3WK</p>
                        <p class="bottom10">0800 214 5252</p>
                        <p class="bottom10"><a href="mailto:polpo@traxagency.co.au">polpo@traxagency.co.au</a></p>
                        <p class="bottom10">Mon-Fri: 9am-5pm</p>
                        <ul class="social-icons mt-4 mb-4 mb-sm-0 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-whatsapp"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="far fa-envelope"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="heading-title  wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                            <div class="row px-2">
                                <div class="col-md-12 col-sm-12" id="result1"></div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name1" class="d-none"></label>
                                        <input class="form-control" id="name1" type="text" placeholder="Name:" required="" name="userName">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email1" class="d-none"></label>
                                        <input class="form-control" type="email" id="email1" placeholder="Email:" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="message1" class="d-none"></label>
                                        <textarea class="form-control" id="message1" placeholder="Message:" required="" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" id="submit_btn1" class="button gradient-btn w-100">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="fas fa-mobile-alt"></i></span>
                        <p class="bottom0"><a href="tel:+14046000396">+14046000396</a></p>
                        <p class="d-block"><a href="tel:+43720778972">+43720778972</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="fas fa-map-marker-alt"></i></span>
                        <p class="bottom0">123 Street NYC , USA </p>
                        <p class="d-block">123 Street New Yolo , Austria </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="far fa-envelope"></i></span>
                        <p class="bottom0"><a href="mailto:admin@website.com">admin@website.com</a></p>
                        <p class="d-block"><a href="mailto:email@website.com">email@website.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="far fa-clock"></i></span>
                        <p class="bottom15">UTC−05:00 <span class="d-block">UTC+01:00</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact us end-->

<!--designer-->
<section id="designer" class="bglight position-relative noshadow">
    <div class="container whitebox padding_bottom">
        <div class="widget py-5">
            <div class="row">
                <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                    <div class="heading-title bottom25 darkcolor wow fadeInUp" data-wow-delay="300ms">
                        <h2 class="font-normal darkcolor"> Design Your Cards </h2>
                    </div>
                    <div class="col-md-8 offset-md-2 bottom35">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <a href="{{ route('view_designer_cards', ['type' => 'Business Card']) }}">
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100 ">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="fas fa-id-card"></i></span>
                        <p class="bottom0">Business Card</p>

                    </div>
                </div>
            </a>
            </div>

{{--            <div class="col-lg-3 col-md-3">--}}
{{--                <div class="widget text-center top60 w-100">--}}
{{--                    <div class="contact-box">--}}
{{--                        --}}{{--                        <span class="icon-contact defaultcolor"><i class="fas fa-mobile-alt"></i></span>--}}
{{--                        <p class="bottom0"><a href="{{ route('view_designer_cards', ['type' => 'Brochure Card']) }}">Brochure Card</a></p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

        <div class="row">

        </div>

    </div>
</section>
<!--designer-->

<!-- Stay connected US -->
<section id="stayconnect" class="bglight position-relative">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="300ms">
                        <h3 class="darkcolor bottom20">Stay Connected</h3>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result"></div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="userName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="First Name:" required id="userName" name="userName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="companyName" class="d-none"></label>
                                    <input class="form-control" type="tel" placeholder="Company Name"  id="companyName" name="companyName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email:" required id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button gradient-btn w-100" id="submit_btn">subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra_scripts')
@endsection
