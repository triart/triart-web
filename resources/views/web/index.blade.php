@extends('web.layouts.master')

@section('revolution_slider_css')
    <link rel="stylesheet" type="text/css" href="{{url('js-plugins/rs-plugin/css/settings.css')}}" media="screen" />
    @endsection

    @section('content')
            <!-- content -->
    <main id="content">
        <!--revolution slider -->
        <!--revolution slider -->
        <section id="rs-slider-elements" class="dark-color custom-neko-skin">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700"  >
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/rs/rs-elements/1-background.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="top center" data-bgrepeat="no-repeat">



                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption fade fadeout"
                                 data-x="center"
                                 data-hoffset="0"
                                 data-voffset="0"
                                 data-y="bottom"
                                 data-speed="1000"
                                 data-start="500"
                                 data-end="6000"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="500"
                                 style="z-index: 6">
                                <img src="images/slider/rs/rs-elements/1-woman.png" alt="" />
                            </div>

                            <!-- LAYER NR. 2 -->

                            <div class="tp-caption lfb"
                                 data-x="center"
                                 data-hoffset="0"
                                 data-voffset="0"
                                 data-y="bottom"
                                 data-speed="600"
                                 data-start="1300"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 style="z-index: 5"
                                    >
                                <img src="images/slider/rs/rs-elements/1-sun-rays.png" alt="" />
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sfb"
                                 data-x="center"
                                 data-y="center"
                                 data-hoffset="-250"
                                 data-voffset="250"
                                 data-speed="700"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><img src="images/slider/rs/rs-elements/1-stars-1.png" alt="" />
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfr"
                                 data-x="center"
                                 data-y="center"
                                 data-hoffset="250"
                                 data-voffset="0"
                                 data-speed="700"
                                 data-start="1700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><img src="images/slider/rs/rs-elements/1-stars-2.png" alt="" />
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption sft"
                                 data-x="center"
                                 data-y="bottom"
                                 data-hoffset="150"
                                 data-voffset="-50"
                                 data-speed="700"
                                 data-start="1900"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><img src="images/slider/rs/rs-elements/1-stars-3.png" alt="" />
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption sft"
                                 data-x="left"
                                 data-y="center"
                                 data-hoffset="0"
                                 data-voffset="0"
                                 data-speed="700"
                                 data-start="2000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><img src="images/slider/rs/rs-elements/1-edena-exagon.png" alt="" />
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption sfb"
                                 data-x="right"
                                 data-y="center"
                                 data-hoffset="0"
                                 data-voffset="-50"
                                 data-speed="700"
                                 data-start="2100"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><img src="images/slider/rs/rs-elements/1-made.png" alt="" />
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption sfb"
                                 data-x="right"
                                 data-y="center"
                                 data-hoffset="0"
                                 data-voffset="50"
                                 data-speed="700"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><img src="images/slider/rs/rs-elements/1-love.png" alt="" />
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption sfb"
                                 data-x="right"
                                 data-y="center"
                                 data-hoffset="0"
                                 data-voffset="150"
                                 data-speed="700"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><img src="images/slider/rs/rs-elements/1-little-neko.png" alt="" />
                            </div>
                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                            <!-- MAIN IMAGE -->
                            <img src="video/poster.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="top center" data-bgrepeat="no-repeat">


                            <!-- LAYERS -->
                            <div class="tp-caption sfb fullscreenvideo"
                                 data-autoplay="true"
                                 data-forceCover="1"
                                 data-nextslideatend="true"
                                 data-aspectratio="16:9"
                                 data-forcerewind="on"
                                 data-volume ="mute"
                                    >
                                <video class="video-js vjs-default-skin" preload="none" loop  controls
                                       poster="video/poster.jpg">
                                    <source src="video/explore.mp4" type='video/mp4' />
                                    <source src="video/explore.webm" type='video/webm' />
                                    <source src="video/explore.ogg" type='video/ogg' />
                                </video>
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfl "
                                 data-x="right"
                                 data-y="center"
                                 data-hoffset="-20"
                                 data-voffset="0"
                                 data-speed="700"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><h1 class="x-large text-light">Edena</h1>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfl "
                                 data-x="right"
                                 data-y="center"
                                 data-hoffset="-20"
                                 data-voffset="60"
                                 data-speed="700"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><h2 class="text-light">A Premium HTML5 website template</h2>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sfr slider-btn-wrapper"
                                 data-x="right"
                                 data-y="center"
                                 data-hoffset="-20"
                                 data-voffset="130"
                                 data-speed="1000"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><a class="btn default">Read more</a>
                            </div>
                        </li>

                        <!-- SLIDE 3 -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/rs/rs-fw-1.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="top center" data-bgrepeat="no-repeat">


                            <!-- LAYERS -->
                            <div class="tp-caption sfb"
                                 data-x="left"
                                 data-y="center"
                                 data-hoffset="20"
                                 data-voffset="0"
                                 data-speed="1000"
                                 data-start="500"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300"
                                 style="z-index: 6">
                                <h1 class="x-large text-light">Easy customization</h1>
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfl"
                                 data-x="left"
                                 data-y="center"
                                 data-hoffset="20"
                                 data-voffset="60"
                                 data-speed="700"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><h2 class="text-light">Fully featured website tool</h2>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr slider-btn-wrapper"
                                 data-x="left"
                                 data-y="center"
                                 data-hoffset="20"
                                 data-voffset="130"
                                 data-speed="1000"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><a href="#" class="btn default">Read more</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- / revolution slider -->

        <!-- / revolution slider -->





        <!-- services -->
        <section id="services" class="pt-medium pb-medium">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <article class="box-icon">
                            <a href="#">
                                <i class="icon-glyph-52 x-large"></i>
                                <h3>Clean design</h3>
                                <p>Elegant layouts that help you organize your content in the best way</p>
                            </a>
                        </article>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <article class="box-icon">
                            <a href="#">
                                <i class="icon-glyph-252 x-large"></i>
                                <h3>HTML5 &amp; CSS3</h3>
                                <p>Built with modern technologies like HTML5 and CSS3, SEO optimised</p>
                            </a>
                        </article>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <article class="box-icon">
                            <a href="#">
                                <i class="icon-glyph-72 x-large"></i>
                                <h3>Responsive layout</h3>
                                <p>Compatible with various desktop, tablet, and mobile devices.</p>
                            </a>
                        </article>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <article class="box-icon">
                            <a href="#">
                                <i class="icon-glyph-220 x-large"></i>
                                <h3>Customization</h3>
                                <p>Clear code and documentation, build with Bootstrap 3</p>
                            </a>
                        </article>
                    </div>

                </div>
            </div>
        </section>
        <!-- / services -->

        <!-- portfolio -->
        <section class="pb-medium rollover effect-zoe clearfix portfolio-mosaic mosaic5">

            <!-- item -->
            <article>
                <figure>
                    <img src="images/portfolio/vign1.jpg" alt="EDENA premium website template" class="full-width">
                    <figcaption>
                        <h5>Full width image</h5>
                        <div class="rollover-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet elit.
                            </p>
                            <p class="icon-links">
                                <a href="images/portfolio/zoom1.jpg" title="zoom" class="tips image-link" data-placement="left">
                                    <span class="icon-glyph-16"></span>
                                </a>
                                <a href="portfolio-project-fullwidth-image.html" title="view more" class="tips" data-placement="left">
                                    <span class="icon-glyph-61"></span>
                                </a>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <!-- / item -->
            <!-- item -->
            <article>
                <figure>
                    <img src="images/portfolio/vign2.jpg" alt="EDENA premium website template" class="full-width">
                    <figcaption>
                        <h5>Full width image</h5>
                        <div class="rollover-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet elit.
                            </p>
                            <p class="icon-links">
                                <a href="images/portfolio/zoom2.jpg"  title="zoom" class="tips image-link" data-placement="left">
                                    <span class="icon-glyph-16"></span>
                                </a>
                                <a href="portfolio-project-image.html"   title="view more" class="tips" data-placement="left">
                                    <span class="icon-glyph-61"></span>
                                </a>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <!-- / item -->
            <!-- item -->
            <article>
                <figure>
                    <img src="images/portfolio/vign3.jpg" alt="EDENA premium website template" class="full-width">
                    <figcaption>
                        <h5>Video youtube</h5>
                        <div class="rollover-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet elit.
                            </p>
                            <p class="icon-links">
                                <a href="https://www.youtube.com/watch?v=ZM80F_J-QHE"  class="tips image-iframe" title="zoom" data-placement="left">
                                    <span class="icon-glyph-16"></span>
                                </a>
                                <a href="portfolio-project-video.html"  class="tips" title="view more" data-placement="left">
                                    <span class="icon-glyph-61"></span>
                                </a>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <!-- / item -->
            <!-- item -->
            <article>
                <figure>
                    <img src="images/portfolio/vign4.jpg" alt="EDENA premium website template" class="full-width">
                    <figcaption>
                        <h5>Video Vimeo</h5>
                        <div class="rollover-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet elit.
                            </p>
                            <p class="icon-links">
                                <a href="http://vimeo.com/35010096" class="image-iframe tips" title="zoom" data-placement="left">
                                    <span class="icon-glyph-16"></span>
                                </a>
                                <a href="portfolio-project-image.html"  class="tips" title="view more" data-placement="left">
                                    <span class="icon-glyph-61"></span>
                                </a>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <!-- / item -->
            <!-- item -->
            <article>
                <figure>
                    <img src="images/portfolio/vign5.jpg" alt="EDENA premium website template" class="full-width">
                    <figcaption>
                        <h5>Full width Gallery</h5>
                        <div class="rollover-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet elit.
                            </p>
                            <p class="icon-links">
                                <a href="images/portfolio/zoom5.jpg" class="image-link tips" data-gallery="images/portfolio/zoom1.jpg,images/portfolio/zoom2.jpg" title="zoom" data-placement="left">
                                    <span class="icon-glyph-16"></span>
                                </a>
                                <a href="portfolio-project-fullwidth-carousel.html"  class="tips" title="view more" data-placement="left">
                                    <span class="icon-glyph-61"></span>
                                </a>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <!-- / item -->
            <!-- item -->
            <article>
                <figure>
                    <img src="images/portfolio/vign6.jpg" alt="EDENA premium website template" class="full-width">
                    <figcaption>
                        <h5>Gallery</h5>
                        <div class="rollover-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet elit.
                            </p>
                            <p class="icon-links">
                                <a href="images/portfolio/zoom6.jpg" class="image-link tips" data-gallery="images/portfolio/zoom1.jpg,images/portfolio/zoom2.jpg"  title="zoom" data-placement="left">
                                    <span class="icon-glyph-16"></span>
                                </a>
                                <a href="portfolio-project-carousel.html"  class="tips" title="view more" data-placement="left">
                                    <span class="icon-glyph-61"></span>
                                </a>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <!-- / item -->
            <!-- item -->
            <article>
                <figure>
                    <img src="images/portfolio/vign7.jpg" alt="EDENA premium website template" class="full-width">
                    <figcaption>
                        <h5>Image</h5>
                        <div class="rollover-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet elit.
                            </p>
                            <p class="icon-links">
                                <a href="images/portfolio/zoom1.jpg" class="image-link tips" title="zoom" data-placement="left">
                                    <span class="icon-glyph-16"></span>
                                </a>
                                <a href="portfolio-project-image.html"  class="tips" title="view more" data-placement="left">
                                    <span class="icon-glyph-61"></span>
                                </a>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <!-- / item -->
            <!-- item -->
            <article>
                <figure>
                    <img src="images/portfolio/vign8.jpg" alt="EDENA premium website template" class="full-width">
                    <figcaption>
                        <h5>Image</h5>
                        <div class="rollover-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet elit.
                            </p>
                            <p class="icon-links">
                                <a href="images/portfolio/zoom1.jpg" class="image-link tips" title="zoom" data-placement="left">
                                    <span class="icon-glyph-16"></span>
                                </a>
                                <a href="portfolio-project-image.html"  class="tips" title="view more" data-placement="left">
                                    <span class="icon-glyph-61"></span>
                                </a>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <!-- / item -->
            <!-- item -->
            <article>
                <figure>
                    <img src="images/portfolio/vign9.jpg" alt="EDENA premium website template" class="full-width">
                    <figcaption>
                        <h5>Image</h5>
                        <div class="rollover-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet elit.
                            </p>
                            <p class="icon-links">
                                <a href="images/portfolio/zoom1.jpg" class="image-link tips" title="zoom" data-placement="left">
                                    <span class="icon-glyph-16"></span>
                                </a>
                                <a href="portfolio-project-image.html"  class="tips" title="view more" data-placement="left">
                                    <span class="icon-glyph-61"></span>
                                </a>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <!-- / item -->
            <!-- item -->
            <article>
                <figure>
                    <img src="images/portfolio/vign1.jpg" alt="EDENA premium website template" class="full-width">
                    <figcaption>
                        <h5>Image</h5>
                        <div class="rollover-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet elit.
                            </p>
                            <p class="icon-links">
                                <a href="images/portfolio/zoom1.jpg" class="image-link tips" title="zoom" data-placement="left">
                                    <span class="icon-glyph-16"></span>
                                </a>
                                <a href="portfolio-project-image.html"  class="tips" title="view more" data-placement="left">
                                    <span class="icon-glyph-61"></span>
                                </a>
                            </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <!-- / item -->

        </section>
        <!-- / portfolio -->

        <!-- quote -->
        <section class="pb-medium pt-medium">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center heading">
                        <h1><span>Meet Little Neko</span>Who we are</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <nav class="sidebar-menu mb-sm">
                            <ul>
                                <li><a class="active" href="home-1.html" target="_blank">Edena HTML template</a></li>
                                <li><a href="home-17.html" target="_blank">Full page layout</a></li>
                                <li><a href="home-3.html" target="_blank">Clean & modern design</a></li>
                                <li><a href="home-4.html" target="_blank">Key features of Edena</a></li>
                                <li><a href="portfolio-project-image.html" target="_blank">Carefully crafted portfolio pages</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-12">
                                <h2><span>Our philosophy</span>Providing flexible website development solutions</h2>
                                <p class="lead">
                                    Build with customization in mind
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    Little Neko is a web design and development studio, providing top quality premium website templates since 2014. We build responsive HTML5 and CSS3 templates, integrating best web design practises and up-to-date web technologies to create great user experiences.
                                </p>
                            </div>

                            <div class="col-md-6">
                                <p>
                                    After two years of gathering user feedback and improving our products, we created an exclusive Neko CSS framework, adding awesome tools for you to express your creativity. Enjoy the power, versatility and simplicity of our web solutions, <a href="#">download Edena today!</a>
                                </p>

                            </div>
                        </div>

                    </div>
                </div><!-- row -->
            </div>
        </section>
        <!-- / quote -->

        <section class="pt-medium pb-medium light-color">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 text-center heading">
                        <h1><span>We are awesome</span>Meet our team</h1>
                    </div>
                </div>


                <div class="row mb-medium clearfix rollover effect-sarah">
                    <div class="col-sm-6 col-md-4" data-nekoanim="fadeIn" data-nekodelay="100">
                        <article class="text-center">
                            <figure class="dark-color">
                                <img src="images/team/team-corporate-1.jpg" alt="image" class="responsive">
                                <figcaption>
                                    <div class="rollover-content">

                                        <div class="description light-text">

                                            <h2>
                                                The question
                                            </h2>

                                            <p>
                                                The question I ask myself like almost every day is, ‘Am I doing the most important thing I could be doing?
                                            </p>

                                            <ul class="social-icons main-color circle">
                                                <li>
                                                    <a href="#" class="rss " title="rss"><i class="icon-glyph-342"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="facebook" title="facebook"><i class="icon-glyph-320"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="twitter" title="twitter"><i class="icon-glyph-339"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="gplus" title="gplus"><i class="icon-glyph-317"></i></a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </figcaption>

                            </figure>
                            <div class="pt-small">
                                <h2><small>Martin</small><br />
                                    Somerville<br>
                                    <small class="text-main-color"><strong>C.E.0</strong></small>
                                </h2>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-6 col-md-4" data-nekoanim="fadeIn" data-nekodelay="200">
                        <article class="text-center">
                            <figure class="dark-color">
                                <img src="images/team/team-corporate-2.jpg" alt="image" class="responsive">
                                <figcaption>
                                    <div class="rollover-content">
                                        <div class="description light-text">
                                            <h2>High expectations</h2>
                                            <p>
                                                High expectations are the key to absolutely everything.
                                            </p>
                                            <ul class="social-icons main-color circle">
                                                <li>
                                                    <a href="#" class="rss " title="rss"><i class="icon-glyph-342"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="facebook" title="facebook"><i class="icon-glyph-320"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </figcaption>
                            </figure>
                            <div class="pt-small">
                                <h2><small>Leona</small><br />
                                    Fibonacci<br>
                                    <small class="text-main-color"><strong>Sales</strong></small>
                                </h2>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-6 col-md-4" data-nekoanim="fadeIn" data-nekodelay="300">
                        <article class="text-center">
                            <figure class="dark-color">
                                <img src="images/team/team-corporate-3.jpg" alt="image" class="responsive">
                                <figcaption>
                                    <div class="rollover-content">
                                        <div class="description light-text">
                                            <h2>
                                                Passion
                                            </h2>
                                            <p>
                                                Without passion, you don’t have any energy, and without energy, you simply have nothing
                                            </p>

                                            <ul class="social-icons main-color circle">
                                                <li>
                                                    <a href="#" class="rss " title="rss"><i class="icon-glyph-342"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="facebook" title="facebook"><i class="icon-glyph-320"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="twitter" title="twitter"><i class="icon-glyph-339"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="gplus" title="gplus"><i class="icon-glyph-317"></i></a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>

                                </figcaption>

                            </figure>

                            <div class="pt-small">
                                <h2><small>Maria</small><br />
                                    Mitchell<br>
                                    <small class="text-main-color"><strong>Graphic designer</strong></small>
                                </h2>
                            </div>
                        </article>
                    </div>


                </div><!-- row -->
                <div class="row">
                    <div class="col-sm-6 mb-sm" data-nekoanim="fadeInUp" data-nekodelay="200">

                        <div class="owl-carousel neko-data-owl" data-neko_items="1" data-neko_singleitem="true" data-neko_paginationnumbers="true">
                            <img src="images/slider/carousel/corporate-mini-2.jpg" class="img-responsive" alt="EDENA premium website template"/>

                            <img src="images/slider/carousel/corporate-mini-3.jpg" class="img-responsive" alt="EDENA premium website template"/>

                            <img src="images/slider/carousel/corporate-mini-1.jpg" class="img-responsive" alt="EDENA premium website template"/>
                        </div>

                    </div>
                    <div class="col-sm-6" data-nekoanim="fadeInUp" data-nekodelay="200">
                        <h2 class="no-mt">Our mission</h2>
                        <p class="lead">
                            Consistently think across the full value chain, while our solid, multi-source, scoping technically strengthens the enabler
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>
                        <p>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </div>

                </div>
                <div class="row pt-medium" data-nekoanim="fadeIn" data-nekodelay="200">
                    <div class="col-sm-6 mb-sm">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <h2>Our skills</h2>
                        <!-- progressbar -->
                        <h3>Graphic design</h3>
                        <div class="progress progress-striped active">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                        <!-- progressbar -->
                        <h3>Web design</h3>
                        <div class="progress progress-striped active">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                        <!-- progressbar -->
                        <h3>Cooking</h3>
                        <div class="progress progress-striped active">
                            <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only">30% Complete</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- container -->
        </section>

        <!-- references -->
        <section class="pt-medium pb-medium">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-medium text-center heading">
                        <h1><span>Our clients</span>We worked for them</h1>
                    </div>
                </div>
                <div class="row mb" data-nekoanim="fadeInUp" data-nekodelay="200">
                    <div class="col-md-3 col-xs-6">
                        <div class="box light-color mb-xs mb-sm">
                            <img src="images/clients/logo1.png" alt="EDENA premium website template" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="box light-color mb-xs mb-sm">
                            <img src="images/clients/logo2.png" alt="EDENA premium website template" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="box light-color">
                            <img src="images/clients/logo3.png" alt="EDENA premium website template" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="box light-color">
                            <img src="images/clients/logo4.png" alt="EDENA premium website template" class="img-responsive"/>
                        </div>
                    </div>
                </div>
                <div class="row" data-nekoanim="fadeInUp" data-nekodelay="200">
                    <div class="col-md-3 col-xs-6">
                        <div class="box light-color mb-xs mb-sm">
                            <img src="images/clients/logo5.png" alt="EDENA premium website template" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="box light-color mb-xs mb-sm">
                            <img src="images/clients/logo6.png" alt="EDENA premium website template" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="box light-color">
                            <img src="images/clients/logo7.png" alt="EDENA premium website template" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="box light-color">
                            <img src="images/clients/logo8.png" alt="EDENA premium website template" class="img-responsive"/>
                        </div>
                    </div>
                </div>


            </div>

        </section>
        <!-- / references -->

        <!-- Call to action -->
        <section class="main-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="cta-box cta-box-2cols pb-medium pt-medium">
                            <div class="cta-box-text" data-nekoanim="fadeInUp" data-nekodelay="200">
                                <h1>
                                    EDENA Bootstrap Website Template
                                </h1>
                                <p>
                                    is perfect for clean presentation of your business.
                                </p>

                            </div>
                            <div class="cta-box-btn" data-nekoanim="fadeInDown" data-nekodelay="200">
                                <a class="btn primary large" title="" href="http://themeforest.net/item/edena-creative-multipurpose-bootstrap-template/9662339?ref=Little-Neko" target="_blank">
                                    <i class="icon-down-open-big"></i>download now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- / Call to action -->

    </main>
    <!-- / content -->
@endsection

@section('revolution_slider_js')
        <!-- Revolution slider -->
    <script type="text/javascript" src="{{url('js-plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js-plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

@endsection