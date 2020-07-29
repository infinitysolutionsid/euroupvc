<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Administrator - Euro UPVC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bintang Tobing" />
    <link rel="icon" type="image/png" href="auth/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="auth/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="auth/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="auth/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="auth/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="auth/css/util.css">
    <link rel="stylesheet" type="text/css" href="auth/css/main.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('auth/images/img-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{route('login.proses')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="login100-form-avatar">
                        <img src="auth/images/avatar-01.png" alt="Euro UPVC Logo">
                    </div>
                    <span class="login100-form-title p-t-20 p-b-20">
                        Welcome to system!
                    </span>
                    @if(session('gagal'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p>{{session('gagal')}}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password" required
                            pattern=".{8,}"
                            oninvalid="setCustomValidity('Minimal character password adalah 8 abjad/angka. ')"
                            onchange="try{setCustomValidity('')}catch(e){}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                        <span style="color: #fff !important;"><a href="/">Back to home</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="auth/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="auth/vendor/bootstrap/js/popper.js"></script>
    <script src="auth/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="auth/vendor/select2/select2.min.js"></script>
    <script src="auth/js/main.js"></script>

</body>

</html>
