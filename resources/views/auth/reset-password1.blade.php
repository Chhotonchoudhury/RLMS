<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/upcube/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2023 14:22:37 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | RLS -Rent Loan System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Rent Loan system" name="description" />
        <meta content="rental Mangement" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0 mt-5">
                <div class="card ">
                    <div class="card-body">

                        <!-- <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div> -->
    
                        <h3 class="text-muted text-center font-size-28"><b>SIGN IN</b></h3>

    
                        <div class="p-3">
                        <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                         @if($errors)<ul>
                            @foreach ($errors->all() as $error)
                            <li style="color:red; font-size: 18px;"><strong>{{ $error }}</strong></li>
                            @endforeach
                            </ul>
                         @endif
                            <!-- Password Reset Token -->
                          <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="email" name="email" value="{{ old('email', $request->email) }}" required="" placeholder="Enter email">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="password" required="" placeholder="Enter new Password">
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="password_confirmation"  required="" placeholder="Confirm Password">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Reset Password</button>
                                    </div>
                                </div>
    
                              
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>

<!-- Mirrored from themesdesign.in/upcube/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2023 14:22:37 GMT -->
</html>
