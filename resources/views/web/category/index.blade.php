@extends('web.layouts.master')
@section('content')

        <!-- content -->
<main id="content" class="mb">
    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ $category_name }}</small></h1>
                </div>
            </div>
        </div>
    </header>

    <!-- portfolio -->
    <section class="pt pb-medium">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <section class="clearfix free-wall caption-grid-layout neko-hover-2 img-hover" id="freewall" data-gutterx="20" data-guttery="20">

                        @foreach($arts as $art)
                        <article class="brick caption graphics">
                            <figure class="light-color">
                                <a href="{{ url('/@'.$art->artworker->username.'/'.$art->slug_url) }}">
                                    <img src="{{ $art->thumbnail_url }}" alt="" class="full-width">
                                </a>
                                <figcaption>
                                    <a href="{{ url('/@'.$art->artworker->username.'/'.$art->slug_url) }}"><h3>{{ $art->title }}</h3></a>
                                    <p class="hidden-xs">{{ substr($art->description, 0, 100) }}</p>
                                </figcaption>
                            </figure>
                        </article>
                        @endforeach


                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- / portfolio -->
</main>
<!-- / content -->


@endsection