@extends('layouts.master')
@section('content')

        <!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> {{ $artworker->name }} <small>art gallery</small> </h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <a href="{{url('/dashboard/artworker/'.$artworker->id.'/art/create')}}" class="btn btn-primary" role="button">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            Add New Art
                        </a>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        @if(count($artworker->arts) == 0)
                            <div class="row">
                                <h4>&nbsp;&nbsp;Whoops, this artworker doesn't have any art yet, to add click <a href="{{url('/dashboard/artworker/'.$artworker->id.'/art/create')}}">here</a></h4>
                                </div>
                        @endif

                        <div class="row">
                            @foreach($artworker->arts as $art)
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;" src="{{$art->image_url}}" alt="image" />
                                        <div class="mask">
                                            <p>{{ $art->description }}</p>
                                            <div class="tools tools-bottom">
                                                <a href="{{$art->image_url}}"><i class="fa fa-link"></i></a>
                                                <a href="{{url('/dashboard/art/'.$art->id)}}"><i class="fa fa-pencil"></i></a>
                                                <a href="#" data-href="{{ url('/dashboard/art/'.$art->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p>{{ $art->title }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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


                </div>
            </div>
        </div>


    </div>

    @include('layouts.footercontent')

</div>
<!-- /page content -->
</div>
@endsection

@section('script')
    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    </script>
@endsection