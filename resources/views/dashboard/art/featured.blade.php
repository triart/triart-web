@extends('layouts.master')

@section('content')
        <!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>{{ $page_title }}</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <form action="{{url('dashboard/art')}}" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Art title/artworker name..">
                              <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Search</button>
                        </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        @if (Session::has('alert-success'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        {{  Session::get('alert-success') }}
                    </div>
                </div>
            </div>
        @endif

        @if (Session::has('alert-error'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        {{  Session::get('alert-error') }}
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- start artworker list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th>Art Title</th>
                                <th>Art Image</th>
                                <th>Artworker</th>
                                <th style="width: 20%">#Featured/Unfeatured</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($arts as $i => $art)
                                <tr>

                                    <td>
                                        {{ $art->title }}
                                    </td>
                                    <td>
                                        <img src="{{ $art->thumbnail_url }}" width="100px" height="100px">
                                    </td>
                                    <td>
                                        <p>{{ $art->artworker['name'] }}</p>
                                    </td>

                                    <td>
                                        <a href="{{ url('dashboard/art/'.$art->id.'/featured') }}" class="{{( $art->featured) ? 'btn btn-danger btn-xs'  : 'btn btn-primary btn-xs' }}"><i class="{{( $art->featured) ? "fa fa-minus-circle" : "fa fa-plug" }}"></i> {{ ($art->featured) ? 'Take Out' : 'Featured' }} </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <!-- end project list -->
                        {!! $arts->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footercontent')


</div>
<!-- /page content -->
@endsection
