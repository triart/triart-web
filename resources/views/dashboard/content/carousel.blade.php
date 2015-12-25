@extends('layouts.master')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>
                        Video and Carousel
                    </h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Video</span></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{ url('dashboard/carousel/video') }}"
                                  class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="enable_video">Switch to Video : </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        @if (isset($website_content))

                                            @if ($website_content->enable_video == 1)
                                                On
                                                <input type="radio" class="flat" name="enable_video" id="enable_video" value="1" checked="checked" required /> Off
                                                <input type="radio" class="flat" name="enable_video" id="enable_video" value="0" />
                                            @else
                                                On
                                                <input type="radio" class="flat" name="enable_video" id="enable_video" value="1" checked="" required /> Off
                                                <input type="radio" class="flat" name="enable_video" id="enable_video" value="0" checked="checked" />
                                            @endif
                                        @endif

                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="youtube_link">Youtube Link <span class="required">* : </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="youtube_link" name="youtube_link" class="form-control col-md-7 col-xs-12" required="required"
                                               value="<?php echo isset($website_content)? $website_content->youtube_link : \Input::old('youtube_link') ?>">
                                    </div>
                                </div>

                                <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="youtube_title">Title : </span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="youtube_title" name="youtube_title" class="form-control col-md-7 col-xs-12" required="required"
                                           value="<?php echo isset($website_content)? $website_content->youtube_title : \Input::old('youtube_title') ?>">
                                </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="youtube_subtitle">Subtitle : </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="youtube_subtitle" name="youtube_subtitle" class="form-control col-md-7 col-xs-12" required="required"
                                               value="<?php echo isset($website_content)? $website_content->youtube_subtitle : \Input::old('youtube_subtitle') ?>">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                             </div>
                            </form>
                        </div>
                    </div>

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
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th style="width: 20%">Subtitle</th>
                                        <th>Image</th>
                                        <th>Enable</th>
                                        <th style="width: 20%">#Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                @foreach ($carousels as $carousel)
                                <tr>
                                    <td>
                                        {{ $carousel->title }}
                                    </td>
                                    <td>
                                        {{ $carousel->subtitle }}
                                    </td>
                                    <td>
                                        <img src="{{ $carousel->thumbnail }}"/>
                                    </td>
                                    <td>
                                        {{ ($carousel->enable) ? 'Yes' : 'No' }}
                                    </td>
                                    <td>
                                        <a href="{{ url('dashboard/carousel/'.$carousel->id.'/enable') }}" class="{{( $carousel->enable) ? 'btn btn-danger btn-xs'  : 'btn btn-primary btn-xs' }}"><i class="{{( $carousel->enable) ? "fa fa-minus-circle" : "fa fa-plug" }}"></i> {{ ($carousel->enable) ? 'Disable' : 'Enable' }} </a>
                                        <a href="{{ url('dashboard/carousel/'.$carousel->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                @endforeach
                                    </tbody>
                                </table>

                        </div>

                    </div>


                </div>


            </div>
    </div>

@endsection

@section('script')
        <!-- dropzone -->
        <script src="{{ asset('js/dropzone/dropzone.js')}}"></script>
@endsection