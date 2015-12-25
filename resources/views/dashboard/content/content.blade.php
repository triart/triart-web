@extends('layouts.master')
@section('content')
        <!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Website Content
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">


                <div class="x_panel">
                    <div class="x_title">
                        <h2>Website Content</span></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                            <form action="{{ url('/dashboard/content') }}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

                                {!! csrf_field() !!}

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">What is Triartspace
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea style="text-align: left;" class="form-control" id="whatis" name="whatis"><?php echo isset($website_content)? $website_content->whatis : \Input::old('whatis') ?></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">The Reason We Are Born
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea style="text-align: left;" class="form-control" id="bornreason" name="bornreason"><?php echo isset($website_content)? $website_content->bornreason : \Input::old('bornreason') ?></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">The Vision of Three
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea style="text-align: left;" class="form-control" id="vision" name="vision"><?php echo isset($website_content)? $website_content->vision : \Input::old('vision') ?></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Our Strength
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea style="text-align: left;" class="form-control" id="strength" name="strength"><?php echo isset($website_content)? $website_content->strength : \Input::old('strength') ?></textarea>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </form>
                    </div>

                </div>


        </div>
    </div>
</div>
@endsection

