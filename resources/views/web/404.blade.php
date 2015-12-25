@extends('web.layouts.master')
@section('content')
<!-- content -->
<main id="content">
    <section class="pt-medium pb-medium ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="x-large"><span>Not Found</span>Error 404</h1>
                    <p class="pb">
                        The page you are looking for no longer exists. Perhaps you can return back to the site’s homepage and see if you can find what you are looking for.
                    </p>
                    <a href="{{url('/')}}" class="btn default">Home</a>

                </div>
            </div>
        </div>
    </section>
</main>
<!-- / content -->
@endsection