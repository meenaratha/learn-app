<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/auth/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/auth/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/auth/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('frontend/auth/css/style.css')}}">


    </head>
    <body>

        <div class="d-lg-flex half">
            <div class="bg order-1 order-md-2" style="background-image: url('{{asset('frontend/auth/images/bg_1.jpg')}}');
            background-size: cover;
            height: 100%;
            min-height: 100vh;">
           <!-- <div class="container-fluied">
                <h5>World's #1 online bootcamp</h5>
                <h2>Get started with your immersive learning experience</h2>
                <p>2M careers advanced</p>
                <p>2M careers advanced</p>
                <p>2M careers advanced</p>
            </div>-->
            </div>
            <div class="contents order-2 order-md-1">

              <div class="container">
                <div class="row align-items-center justify-content-center">
                  <div class="col-md-7">
                    <div class="mb-4" style="text-align:center;">

                       <span><img src="{{asset('frontend/images/logo@2x.png')}}" alt=""
                        style="width:150px; margin:20px; "></span>
                        <h5>Welcome back!</h5>
                      <p class="mb-4">Log in to continue learning</p>

                      <x-validation-errors  />

                      @if (session('status'))
                          <div class="error-msg" >
                              <p>{{ session('status') }}</p>
                          </div>
                      @endif
                     </div>
                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="form-group last mb-3 auth-input">
                        <label for="username">Email/Phone</label>
                        <input type="text" class="form-control" id="loginname"
                         name="loginname" :value="old('loginname')" required placeholder="">

                      </div>
                      <div class="form-group last mb-3 auth-input">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                        required autocomplete="current-password" placeholder="">

                      </div>

                      <div class="d-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                          <input type="checkbox" checked="checked" name="remember" id="remember_me"/>
                          <div class="control__indicator"></div>
                        </label>
                        <span class="ml-auto">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password</a>

                        @endif
                            </span>
                      </div>

                      <input type="submit" value="Log In" class="btn btn-block btn-primary">

                      <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

                      <div class="social-login">
                        <a href="{{ url('auth/facebook') }}" class="facebook btn d-flex justify-content-center align-items-center">
                          <span class="icon-facebook mr-3"></span> Login with Facebook
                        </a>
                        <a href="{{ url('auth/facebook') }}" class="twitter btn d-flex justify-content-center align-items-center">
                          <span class="icon-twitter mr-3"></span> Login with  Twitter
                        </a>
                        <a href="{{ url('auth/google') }}" class="google btn d-flex justify-content-center align-items-center">
                          <span class="icon-google mr-3"></span> Login with  Google
                        </a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>


        </div>



        <script src="{{asset('frontend/auth/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('frontend/auth/js/popper.min.js')}}"></script>
        <script src="{{asset('frontend/auth/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/auth/js/main.js')}}"></script>
    </body>
    </html>






















