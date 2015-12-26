@extends('layouts.master')
@section('content')
        <!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Add Team Member
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Team Member Info</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                        <div class="x_content">
                            <form action="<?php echo (!isset($team) ? '/dashboard/team' : '/dashboard/team/'.$team->id) ?>"
                                  class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

                                {!! csrf_field() !!}

                                <?php if(isset($team)): ?>
                                <input type="hidden" name="_method" value="PUT">
                                <?php endif ?>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" required="required"
                                               value="<?php echo isset($team)? $team->name : \Input::old('name') ?>">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Profile Picture
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="position">Position <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="position" required="required" type="text"
                                               value="<?php echo isset($team)? $team->position : \Input::old('position') ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea style="text-align: left;" class="form-control" id="description" name="description"><?php echo isset($team)? trim($team->description) : \Input::old('description') ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_strength">First Skill
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <input type="text" id="first_strength" name="first_strength" class="form-control"
                                               value="<?php echo isset($team)? $team->first_strength : \Input::old('first_strength') ?>">
                                    </div>
                                    <label class="control-label" for="first_strength_bar"> %
                                    </label>
                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                        <input type="number" min="0" max="100" id="first_strength_bar" name="first_strength_bar" class="form-control" class="form-control"
                                               value="<?php echo isset($team)? $team->first_strength_bar : \Input::old('first_strength_bar') ?>">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="second_strength">Second Skill
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <input type="text" id="second_strength" name="second_strength" class="form-control"
                                               value="<?php echo isset($team)? $team->second_strength : \Input::old('second_strength') ?>">
                                    </div>
                                    <label class="control-label" for="second_strength_bar"> %
                                    </label>
                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                        <input type="number" min="0" max="100" id="second_strength_bar" name="second_strength_bar" class="form-control" class="form-control"
                                               value="<?php echo isset($team)? $team->second_strength_bar : \Input::old('second_strength_bar') ?>">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="third_strength">Third Skill
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <input type="text" id="second_strength" name="third_strength" class="form-control"
                                               value="<?php echo isset($team)? $team->third_strength : \Input::old('third_strength') ?>">
                                    </div>
                                    <label class="control-label" for="third_strength_bar"> %
                                    </label>
                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                        <input type="number" min="0" max="100" id="third_strength_bar" name="third_strength_bar" class="form-control" class="form-control"
                                               value="<?php echo isset($team)? $team->third_strength_bar : \Input::old('third_strength_bar') ?>">
                                    </div>
                                </div>

                               <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="{{ url('/dashboard/team') }}" class="btn btn-primary">Cancel</a>
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script')
        <script src="{{ url('js/progressbar/bootstrap-progressbar.min.js') }}"></script>
@endsection
