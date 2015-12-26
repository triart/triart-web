@extends('layouts.master')

@section('content')
        <!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Team</h3>
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
                        <a href="{{ url('dashboard/team/create') }}" class="btn btn-primary" role="button">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            Add Team Member
                        </a>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- start artworker list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Position</th>
                                <th>Description</th>
                                <th>First Skill</th>
                                <th>%</th>
                                <th>Second Skill</th>
                                <th>%</th>
                                <th>Third Skill</th>
                                <th>%</th>
                                <th style="width: 20%">#Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($teams as $i => $team)
                                <tr>

                                    <td>
                                       {{ $team->name }}
                                    </td>
                                    <td>
                                     <img src="{{ $team->image }}" width="100px" height="100px"/>
                                    </td>
                                    <td>
                                        {{ $team->position }}
                                    </td>
                                    <td>
                                       {{ substr($team->description, 0, 100).'...' }}
                                    </td>
                                    <td>
                                        {{ $team->first_strength }}
                                    </td>
                                    <td>
                                        <small>{{ $team->first_strength_bar }}</small>
                                    </td>

                                    <td>
                                        {{ $team->second_strength }}
                                    </td>
                                    <td>
                                        <small>{{ $team->second_strength_bar }}</small>
                                    </td>

                                    <td>
                                        {{ $team->third_strength }}
                                    </td>
                                    <td>
                                        <small>{{ $team->third_strength_bar }}</small>
                                    </td>
                                    <td>
                                        <a href="{{ url('dashboard/team/'.$team->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                        <a href="#" class="btn btn-danger btn-xs"  data-href="{{ url('dashboard/team/'.$team->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Delete </a>
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