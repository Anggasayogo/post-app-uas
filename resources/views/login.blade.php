<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="{{ url('templates') }}/image/png" sizes="16x16" href="{{ url('templates') }}/assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{ url('templates') }}/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="col-lg-12 col-md-4 bg-white">
                                <div class="p-3">
                                    <div class="text-center">
                                        <img src="{{ url('templates') }}/assets/images/big/icon.png" alt="wrapkit">
                                    </div>
                                    <h2 class="mt-3 text-center">Sign In</h2>
                                    <p class="text-center">Enter your email address and password to access admin panel.</p>
                                    <form class="mt-4" method="POST" action="{{ url('/autentication') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-dark" for="uname">Email</label>
                                                    <input name="email" class="form-control" id="uname" type="email" placeholder="enter your email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-dark" for="pwd">Password</label>
                                                    <input name="password" class="form-control" id="pwd" type="password" placeholder="enter your password">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                                <button type="submit" class="btn btn-block btn-dark">Sign In</button>
                                            </div>
                                            <div class="col-lg-12 text-center mt-5">
                                                Don't have an account? <a href="#" class="text-danger">Sign Up</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ url('templates') }}/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('templates') }}/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="{{ url('templates') }}/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>