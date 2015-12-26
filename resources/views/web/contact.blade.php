@extends('web.layouts.master')
@section('google-captcha')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
@section('content')
    <!-- content -->
    <main id="content" class="light-color">
        <header class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>We'd love to hear from you</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- contact form -->
        <section class="mt-medium">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h4>Email:</h4>
                        <address>
                            <p>
                                <a href="mailto:contact@triartspace.com">contact@triartspace.com</a>
                            </p>
                        </address>
                    </div>
                    <form method="POST" action="{{ url('contact') }}" id="contact-form" role="form" class="form-minimal">
                        {!! csrf_field() !!}
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"  title="Please enter your name (at least 2 characters)" required="required"/>
                                <div class="form-line"></div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address" required="required"/>
                                <div class="form-line"></div>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input name="phone" class="form-control required digits" type="tel" id="phone" size="30" value="" placeholder="Enter phone" title="Please enter a valid phone number (at least 10 characters)">
                                <div class="form-line"></div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="comments">Comments</label>
                                <textarea name="comments" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)" required="required"></textarea>
                                <div class="form-line"></div>
                            </div>

                            <fieldset class="clearfix securityCheck">
                                <div class="g-recaptcha" data-sitekey="6Ld4pxMTAAAAAMQcGRquuLXYYI4QKcO7YJul4ZL9"></div>
                            </fieldset>
                        </div>
                        <div class="col-md-8 col-md-offset-4">
                            <button name="submit" type="submit" class="btn large primary" id="submit"> Submit</button>
                            <div class="result"></div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
        <!-- / contact form -->
    </main>
    <!-- / content -->
@endsection
