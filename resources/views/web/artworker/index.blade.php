@extends('web.layouts.master')
@section('content')
    <!-- content -->
    <main id="content">
        <header class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-nekoanim="fadeIn" data-nekodelay="100">

                    <article class="feature-box media-left">
                        <div class="icon  x-large">
                            <img src="{{ isset($artworker->profile_picture) ? $artworker->profile_picture : url('images/profile_none.png') }}" alt="image" class="circle">
                        </div>

                        <div class="feature-box-content">
                            <h1>{{ $artworker->name }}<br>
                                <small>{{ $artworker->location }}</small>
                            </h1>
                            <p>{{ $artworker->description }}
                            </p>
                        </div>
                    </article>
                </div>


            </div>
            </div>
        </header>

        <!-- portfolio -->
        <section class="pt-medium pb-medium rollover effect-zoe">
            <div class="container">
                <div class="row">
                    <!-- item -->
                    @foreach($artworker->arts as $art)
                    <div class="col-md-4">

                        <article class="mb">
                            <figure>
                                <img src="{{ url($art->thumbnail_url)}}" alt="{{ $art->title }}" class="full-width">
                                <figcaption>
                                    <h6>{{ $art->title }}</h6>
                                    <div class="rollover-content">
                                        <p class="description">
                                            {{ $art->description }}
                                        </p>
                                        <p class="icon-links">
                                            <a href="{{ url($art->image_url)}}" title="zoom" class="tips image-link" data-placement="left">
                                                <span class="icon-glyph-16"></span>
                                            </a>
                                            <a href="{{ url('/@'.$artworker->username.'/'.$art->slug_url) }}" title="view more" class="tips" data-placement="left">
                                                <span class="icon-glyph-61"></span>
                                            </a>
                                        </p>
                                    </div>
                                </figcaption>
                            </figure>

                        </article>

                    </div>
                    @endforeach
                    <!-- / item -->

                    <!-- / item -->
                </div>
            </div>
        </section>
        <!-- / portfolio -->
    </main>
    <!-- / content -->
@endsection
