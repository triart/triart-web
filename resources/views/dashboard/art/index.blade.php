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
                                <th>Featured</th>
                                <th style="width: 20%">#Edit</th>
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
                                        <p>{{ ($art->featured) ? 'Yes' : 'No' }}</p>
                                    </td>
                                    <td>
                                        <a href="{{ url('dashboard/art/'.$art->id.'/featured') }}" class="{{( $art->featured) ? 'btn btn-warning btn-xs'  : 'btn btn-primary btn-xs' }}"><i class="{{( $art->featured) ? "fa fa-minus-circle" : "fa fa-plug" }}"></i> {{ ($art->featured) ? 'Unfeatured' : 'Featured' }} </a>
                                        <a class="btn btn-info btn-xs" href="{{url('/dashboard/art/'.$art->id)}}"><i class="fa fa-pencil"></i>Edit</a>
                                        <a class="btn btn-danger btn-xs" href="#" data-href="{{ url('/dashboard/art/'.$art->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-times"></i> Delete</a>

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

        <!-- Small modal -->

        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        Delete confirmation
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this data?
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-default" data-dismiss="modal">Cancel</a>
                        <a class="btn btn-danger btn-ok">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /modals -->
    </div>

    @include('layouts.footercontent')


</div>
<!-- /page content -->
@endsection

@section('script')
    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    </script>
@endsection
