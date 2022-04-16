<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh
        }

        .card {
            width: 400px;
            padding: 20px;
            border: none
        }

        .account {
            font-weight: 500;
            font-size: 17px
        }

        .contact {
            font-size: 13px
        }

        .form-control {
            text-indent: 14px
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #4a148c;
            outline: 0;
            box-shadow: none
        }

        .inputbox {
            margin-bottom: 10px;
            position: relative
        }

        .inputbox i {
            position: absolute;
            left: 8px;
            top: 12px;
            color: #dadada
        }

        .form-check-label {
            font-size: 13px
        }

        .form-check-input {
            width: 14px;
            height: 15px;
            margin-top: 5px
        }

        .forgot {
            font-size: 14px;
            text-decoration: none;
            color: #4A148C
        }

        .mail {
            color: #4a148c;
            text-decoration: none
        }

        .form-check {
            cursor: pointer
        }

        .btn-primary {
            color: #fff;
            background-color: #4A148C;
            border-color: #4A148C
        }
    </style>
</head>
<body>
    <div class="card">
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="text-center intro"> <img src="{{URL::asset('front/images/login-img.png')}}" width="160"> <span class="d-block account">Don't have account yet?</span> <span class="contact">Contact us at <a href="" class="mail">contact@bbbootstrap.com</a> and <br> we will take care of everything</span> </div>
            <div class="mt-4 text-center">
                <h4>Log In.</h4> <span>Login with your admin credentials</span>
                <div class="mt-3 inputbox">
                    <input  id="email"  type="email" name="email" :value="old('email')" required autofocus class="form-control" placeholder="Email">
                    <i class="fa fa-user"></i>
                </div>
                <div class="inputbox">
                    <input class="form-control" id="password"  type="password" name="password" required autocomplete="current-password" placeholder="Password">
                    <i class="fa fa-lock"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                @if (Route::has('password.request'))
                    <div>
                        <a href="{{ route('password.request') }}" class='forgot'>
                        {{ __('Forgot your password?') }}
                        </a>
                    </div>
                @endif
                <div class="form-check">
                    <input class="form-check-input" name="remember" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">{{ __('Remember me') }} </label>
                </div>

            </div>
            <div class="mt-2"> <button class="btn btn-primary btn-block">{{ __('Log in') }}</button> </div>


        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
