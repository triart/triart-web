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
                                                <a href="{{ url('/category/'.$category->id) }}">{{ $category->name }}</a>
                                            </li>
                                        @endforeach

                                            <li class="entry-comments">
                                                By : <a href="{{ url('/'.$art->artworker->username) }}">{{ $art->artworker->name }}</a>
                                            </li>

                                </ul>
                            </header>
                            <div class="post-pic">
                                <img src="{{ url($art->image_url) }}" alt="" class="responsive mb center-block"/>
                            </div>

                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                                <p class="description text-center">
                                    {{ $art->description }}
                                </p>
                            </div>
                            <div class="col-md-3">
                            </div>

                        </article>


                        <div class="col-md-12 text-center">
                            <br/><br/>
                            <ul class="social-icons dark-color squared social-hover">
                                <li>
                                    <a href="{{ $social_links->facebook->shareUrl }}" class="facebook" title="facebook"><i class="icon-glyph-320"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $social_links->twitter->shareUrl }}" class="twitter" title="twitter"><i class="icon-glyph-339"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $social_links->plus->shareUrl }}" class="gplus" title="gplus"><i class="icon-glyph-317"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $social_links->linkedin->shareUrl }}" class="linkedin" title="linkedin"><i class="icon-glyph-308"></i></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>

            </div>

        </section>

    </main>

@endsection