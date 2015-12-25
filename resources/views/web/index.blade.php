@extends('web.layouts.master')

@section('revolution_slider_css')
    <link rel="stylesheet" type="text/css" href="{{url('js-plugins/rs-plugin/css/settings.css')}}" media="screen" />
    @endsection

    @section('content')
            <!-- content -->
    <main id="content">

     @if($enable_video)
          @include('web.layouts.main-youtube')
     @else
          @include('web.layouts.carousel')
     @endif



        <!-- Who we are -->
        <section class="light-color"  data-nekoanim="fadeInRight" data-nekodelay="300">
            <div class="container">
                <div class="row mb">
                    <div class="col-md-12 text-center pt-medium heading">
                        <h1><span>What is </span>Triartspace</h1>
                    </div>
                    <div class="col-md-12 text-center">
                        <p>{!! (isset($website_content)) ? nl2br(e($website_content->whatis)) : '' !!}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Who we are -->


        <!-- portfolio -->
        <section class="pb-medium rollover effect-zoe clearfix portfolio-mosaic mosaic5">
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

            <a name="clients"></a>
        </section>
        <!-- / portfolio -->

        <!-- references -->
        <section class="pt-medium pb-medium">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-medium text-center heading">
                        <h1><span>Our</span>Clients</h1>
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

    </main>
    <!-- / content -->
@endsection

@section('revolution_slider_js')
        <!-- Revolution slider -->
    <script type="text/javascript" src="{{url('js-plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js-plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

@endsection