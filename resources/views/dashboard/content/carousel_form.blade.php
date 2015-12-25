@extends('layouts.master')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>
                        Edit Carousel
                    </h3>
                </div>
            </div>
            <div class="clearfix"></div>


            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Carousel</span></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" method="POST" action="{{ url('dashboard/carousel/'.$carousel_id) }}" enctype="multipart/form-data">

                                {!! csrf_field() !!}
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="youtube_link">Title  <span class="required"> : </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="title" name="title" class="form-control col-md-7 col-xs-12"
                                               value="<?php echo isset($carousel)? $carousel->title : \Input::old('title') ?>">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subtitle">Subtile  <span class="required"> : </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="subtitle" name="subtitle" class="form-control col-md-7 col-xs-12"
                                               value="<?php echo isset($carousel)? $carousel->subtitle : \Input::old('subtitle') ?>">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subtitle">Image  <span class="required"> : </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="{{url('/dashboard/carousel')}}" class="btn btn-primary">Cancel</a>
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


         </div>
    </div>
@endsection