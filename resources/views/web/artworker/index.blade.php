@extends('web.layouts.master')
@section('content')
    <!-- content -->
    <main id="content">
        <header class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Artworker <small>Gallery</small></h1>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Library</a></li>
                            <li class="active">Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>

        <!-- portfolio -->
        <section class="pt-medium pb-medium rollover effect-zoe">
            <div class="container">
                <div class="row">
                    <!-- item -->
                    <div class="col-md-4">

                        <article class="mb">
                            <figure>
                                <img src="{{ url('images/portfolio/vign1.jpg')}}" alt="EDENA premium website template" class="full-width">
                                <figcaption>
                                    <h4>Full width image</h4>
                                    <div class="rollover-content">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.
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

                    </div>
                    <!-- / item -->
                    <!-- item -->
                    <div class="col-md-4">
                        <article class="mb">
                            <figure>
                                <img src="{{ url('images/portfolio/vign2.jpg')}}" alt="EDENA premium website template" class="full-width">
                                <figcaption>
                                    <h4>Full width image</h4>
                                    <div class="rollover-content">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.
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
                    </div>
                    <!-- / item -->
                    <!-- item -->
                    <div class="col-md-4">
                        <article class="mb">
                            <figure>

                                <img src="{{ url('images/portfolio/vign3.jpg')}}" alt="EDENA premium website template" class="full-width">
                                <figcaption>
                                    <h4>Video youtube</h4>
                                    <div class="rollover-content">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.
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
                    </div>
                    <!-- / item -->
                    <!-- item -->
                    <div class="col-md-4">
                        <article class="mb">
                            <figure>

                                <img src="{{ url('images/portfolio/vign4.jpg')}}" alt="EDENA premium website template" class="full-width">
                                <figcaption>
                                    <h4>Full width video vimeo</h4>
                                    <div class="rollover-content">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.
                                        </p>
                                        <p class="icon-links">
                                            <a href="http://vimeo.com/35010096" class="image-iframe tips" title="zoom" data-placement="left">
                                                <span class="icon-glyph-16"></span>
                                            </a>
                                            <a href="portfolio-project-fullwidth-video.html"  class="tips" title="view more" data-placement="left">
                                                <span class="icon-glyph-61"></span>
                                            </a>
                                        </p>
                                    </div>
                                </figcaption>

                            </figure>

                        </article>
                    </div>
                    <!-- / item -->
                    <!-- item -->
                    <div class="col-md-4">
                        <article class="mb">
                            <figure>
                                <img src="{{ url('images/portfolio/vign5.jpg')}}" alt="EDENA premium website template" class="full-width">
                                <figcaption>
                                    <h4>Full width Gallery</h4>
                                    <div class="rollover-content">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.
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
                    </div>
                    <!-- / item -->
                    <!-- item -->
                    <div class="col-md-4">
                        <article class="mb">
                            <figure>

                                <img src="{{ url('images/portfolio/vign6.jpg')}}" alt="EDENA premium website template" class="full-width">
                                <figcaption>
                                    <h4>Gallery</h4>
                                    <div class="rollover-content">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.
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
                    </div>
                    <!-- / item -->
                    <!-- item -->
                    <div class="col-md-4">
                        <article class="mb">
                            <figure>
                                <img src="{{ url('images/portfolio/vign7.jpg')}}" alt="EDENA premium website template" class="full-width">
                                <figcaption>
                                    <h4>Image</h4>
                                    <div class="rollover-content">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.
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
                    </div>
                    <!-- / item -->
                    <!-- item -->
                    <div class="col-md-4">
                        <article class="mb">
                            <figure>
                                <img src="{{ url('images/portfolio/vign8.jpg')}}" alt="EDENA premium website template" class="full-width">
                                <figcaption>
                                    <h4>Image</h4>
                                    <div class="rollover-content">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.
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
                    </div>
                    <!-- / item -->
                    <!-- item -->
                    <div class="col-md-4">

                        <article class="mb">
                            <figure>
                                <img src="{{ url('images/portfolio/vign9.jpg')}}" alt="EDENA premium website template" class="full-width">
                                <figcaption>
                                    <h4>Image</h4>
                                    <div class="rollover-content">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.
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
                    </div>
                    <!-- / item -->
                </div>
            </div>
        </section>
        <!-- / portfolio -->
    </main>
    <!-- / content -->
@endsection
