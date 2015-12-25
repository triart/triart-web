      <!--revolution slider -->
        <!--revolution slider -->
        <section id="rs-slider-elements" class="dark-color custom-neko-skin">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>

                        @foreach($carousels as $carousel)

                        @if (!empty($carousel->image) and boolval($carousel->enable))
                        <!-- SLIDE 3 -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                            <!-- MAIN IMAGE -->
                            <img src="{{ url($carousel->image) }}"    alt="slidebg1"  data-bgfit="cover" data-bgposition="top center" data-bgrepeat="no-repeat">

                            @if (!empty($carousel->title))
                            <!-- LAYERS -->
                            <div class="tp-caption sfb"
                                 data-x="right"
                                 data-y="center"
                                 data-hoffset="20"
                                 data-voffset="0"
                                 data-speed="1000"
                                 data-start="500"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300"
                                 style="z-index: 6">
                                <h1 class="x-large text-light">{{$carousel->title}}</h1>
                            </div>
                            @endif

                            @if (!empty($carousel->subtitle))
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfl"
                                 data-x="right"
                                 data-y="center"
                                 data-hoffset="20"
                                 data-voffset="60"
                                 data-speed="700"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6"><h2 class="text-light">Artworkers Plattform</h2>
                            </div>
                            @endif
                        </li>
                        @endif
                        @endforeach

                    </ul>
                </div>
            </div>
        </section>

        <!-- / revolution slider -->

        <!-- / revolution slider -->