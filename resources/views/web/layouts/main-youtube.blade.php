<!-- video -->
<section id="video" class="dark-main-color">
    <!-- video fullwidth -->
    <div id="video-bg" data-property="{videoURL:'{{ $youtube_url }}',containment:'self',startAt:0,mute:false,autoPlay:true,loop:true,opacity:1,printUrl:true,showYTLogo:false,showControls:false,vol:100}">
        <div class="container pt-large pb-large v-align-center text-white">
            <div class="row">
                <div class="col-md-12 text-right text-light youtube-text">
                    <h2>{{ !empty($website_content->youtube_title) ? $website_content->youtube_title : '' }}</h2>
                    <h4>{{ !empty($website_content->youtube_subtitle) ? $website_content->youtube_subtitle : '' }}</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- video fullwidth -->
</section>
<!-- / video -->