<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | UD. MAHMUDA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('style/images/favicon.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('style/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('style/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('style/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('style/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('style/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/secondmain.css')}}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{asset('style/images/img-01.png')}}" alt="IMG">
                </div>

                <form action="('postlogin')" method="post" class="login100-form validate-form">
                    {{ csrf_field() }}
                    <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                    <span class="login100-form-title">
                        @if ($type == 1)
                        Admin
                        @elseif($type == 2)
                        Supplier
                        @else
                        Sales
                        @endif Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: 123***">
                        <input class=" input100" type="text" name="username" placeholder="ID">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" href="/dashboard">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{asset('style/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('style/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('style/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('style/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('style/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <!--===============================================================================================-->
    <script>
        $('.js-tilt').tilt({
			scale: 1.1
		})
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('style/js/secondmain.js')}}"></script>

</body>

</html>