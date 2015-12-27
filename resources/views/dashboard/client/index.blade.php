@extends('layouts.master')

@section('content')
        <!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Client List</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <form action="{{url('dashboard/client')}}" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search for...">
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
                        <a href="{{ url('dashboard/client/create') }}" class="btn btn-primary" role="button">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            Add New Client
                        </a>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- start category list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">ID</th>
                                <th>Client Name</th>
                                <th>Client Logo</th>
                                <th style="width: 20%">#Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($clients as $i => $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>
                                        {{ $client->name }}
                                    </td>
                                    <td>
                                        <img src="{{ $client->image }}" width="100px">
                                    </td>
                                    <td>
                                        <a href="{{ url('dashboard/client/'.$client->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                        <a href="#" class="btn btn-danger btn-xs"  data-href="{{ url('dashboard/client/'.$client->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Delete </a>
                                    </td>
                                </tr>
                                @endforeach

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
                            </tbody>
                        </table>
                        <!-- end project list -->
                        {!! $clients->render()  !!}
                    </div>
                </div>
            </div>
        </div>
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