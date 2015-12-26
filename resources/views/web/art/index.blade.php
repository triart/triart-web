@extends('web.layouts.master')
@section('content')
        <!-- content -->

    <main id="content">



        <section class="pt-medium pb-medium light-color">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <article class="post">
                            <header class="text-center mb">
                                <h2>{{ $art->title }}</h2>
                                <ul class="entry-meta">
                                        @foreach($categories as $i => $category)
                                            <li class="entry-category">
                                                <a href="#">{{ $category->name }}</a>
                                            </li>
                                        @endforeach

                                            <li class="entry-comments">
                                                By : {{ $art->artworker->name }}
                                            </li>

                                </ul>
                            </header>
                            <div class="post-pic">
                                <img src="{{ url($art->image_url) }}" alt="" class="responsive mb center-block"/>
                            </div>
                            <div class="text-center">
                                <p>
                                   {{ $art->description }}
                                </p>

                            </div>

                        </article>


                    </div>
                </div>

            </div>

        </section>

    </main>

@endsection