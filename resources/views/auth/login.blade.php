<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>

<body style="background:#f9f4eb;">

<div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        <div id="login" class="animate form">
            <section class="login_content">
            <!-- resources/views/auth/login.blade.php -->

            <form method="POST" action="/dashboard/auth/login">
                <h1>Login</h1>
                {!! csrf_field() !!}

                <div>
                    Email
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>

                <div>
                    Password
                    <input type="password" name="password" id="password">
                </div>

                <div>
                    <input type="checkbox" name="remember"> Remember Me
                </div>

                <div>
                    <button type="submit">Login</button>
                </div>

                <div class="clearfix"></div>
                <div class="separator">
                    <div class="clearfix"></div>
                    <br />
                    <div>
                        <img src="{{ url('images/logo/triart-logo.png')}}" alt="Triartspace"/>
                    </div>
                </div>

            </form>
            </section>
        </div>
    </div>
</body>
</html>