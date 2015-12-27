@extends('web.layouts.master')
@section('content')
<!-- The reason we are born -->
<section data-nekoanim="fadeInRight" data-nekodelay="300">
    <div class="container">
        <div class="row mb">
            <div class="col-md-12 text-center pt-medium heading">
                <h1><span>The Reason</span> We Are Born</h1>
            </div>
            <div class="col-md-12 text-justify">
                <p>{!! (isset($website_content)) ? nl2br(e($website_content->bornreason)) : '' !!}</p>
            </div>
        </div>
    </div>
</section>
<!-- The reason we are born -->

<!-- The reason we are born -->
<section class="light-color" data-nekoanim="fadeInRight" data-nekodelay="300">
    <div class="container">
        <div class="row mb">
            <div class="col-md-12 text-center pt-medium heading">
                <h1><span>Our</span> Strength</h1>
            </div>
            <div class="col-md-12 text-justify">
                <p>{!! (isset($website_content)) ? nl2br(e($website_content->strength)) : '' !!}</p>
            </div>
        </div>
    </div>
</section>
<!-- The reason we are born -->

@endsection