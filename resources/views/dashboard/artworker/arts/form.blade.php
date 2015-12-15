@extends('layouts.master')
@section('content')
        <!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Add new Art for {{ $artworker->name }}
                </h3>
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
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Art Info</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                        <div class="x_content">
                            @if(!isset($art))
                            <form action="{{ url('/dashboard/artworker/'.$artworker->id.'/art') }}"
                                  class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                            @else
                                    <form action="{{ url('/dashboard/art/'.$art->id) }}"
                                          class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                            @endif
                                {!! csrf_field() !!}

                                <?php if(isset($art)): ?>
                                    <input type="hidden" name="_method" value="PUT">
                                <?php endif ?>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="title" name="title" class="form-control col-md-7 col-xs-12" required="required"
                                               value="<?php echo isset($art)? $art->title : \Input::old('title') ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea style="text-align: left;" class="form-control" id="description" name="description"><?php echo isset($art)? trim($art->description) : \Input::old('description') ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="categories[]" name="categories[]" class="select2_multiple form-control" multiple="multiple">
                                            @foreach($categories as $category)
                                                @if(in_array($category->id, $selected_category))
                                                    <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="{{url('/dashboard/artworker/'.$artworker->id.'/art')}}" class="btn btn-primary">Cancel</a>
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
                <!-- image cropping -->
        <script src="{{ url('js/cropping/cropper.min.js')}}"></script>
        <script src="{{ url('js/cropping/main.js')}}"></script>
        <!-- select2 -->
        <script src="{{ url('js/select/select2.full.js') }}"></script>
        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "Select Category",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->

@endsection
