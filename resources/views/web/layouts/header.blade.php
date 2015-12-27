
    <!-- header -->
    <header class="menu-header navbar-fixed-top" role="banner">
        <section id="pre-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <ul class="quick-menu">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/artworker')}}">Artworkers</a></li>
                            <li><a href="#clients">Clients</a></li>
                            <li><a href="{{url('/team')}}">Meet Our Team</a></li>
                            <li><a href="{{url('/contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-xs-12 quick-contact">
                        <ul class="social-icons">
                            <li><a href="#" class="rss" title="rss"><i class="icon-glyph-342"></i></a></li>
                            <li><a href="#" class="facebook" title="facebook"><i class="icon-glyph-320"></i></a></li>
                            <li><a href="#" class="twitter" title="twitter"><i class="icon-glyph-339"></i></a></li>
                            <li><a href="#" class="gplus" title="gplus"><i class="icon-glyph-317"></i></a></li>
                            <li><a href="#" class="dribbble" title="dribbble"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#" class="linkedin" title="linkedin"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <!-- hamburger button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- / hamburger button -->

                    <!-- Logo -->
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{ url('images/logo/triart-logo.png')}}" alt="Triartspace"/></a>
                    <!-- /Logo -->
                </div>
                <div class="collapse navbar-collapse">
                    <!-- Main navigation -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="neko-mega-menu-trigger">
                            <a href="{{url('/')}}" class="has-sub-menu">Home</a>
                        </li>

                        <li>
                            <a href="#" class="has-sub-menu">Artworkers</a>
                            <ul class="sub-menu">
                                @foreach($nav_categories as $category)

                                <li>
                                    <a href="#">{{ $category->name }}</a>
                                    <ul class="sub-menu">
                                        @foreach($category->artworkers as $i => $artworker)
                                            @if ($i <= 10)
                                                <li><a href="{{ url('/'.strtolower($artworker->username)) }}">{{ $artworker->name }}</a></li>
                                            @endif
                                        @endforeach
                                        <li><a href="{{ url('/category/'.$category->id) }}">See More ..</a></li>
                                    </ul>
                                </li>
                                @endforeach

                            </ul>
                        </li>

                        <li>
                            <a href="#clients" class="has-sub-menu">Clients</a>
                        </li>

                        <li class="neko-mega-menu-trigger">
                            <a href="{{ url('/team') }}" class="has-sub-menu">Meet Our Team</a>
                        </li>

                        <li><a href="{{ url('/about') }}">About Us</a></li>

                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>


                    </ul>
                    <!-- / End main navigation -->
                </div>


            </nav>
        </div>

    </header>
    <!-- / header -->