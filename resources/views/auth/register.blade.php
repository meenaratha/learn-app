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
            <div class="bg order-1 order-md-2" style="background-image: url('{{asset('frontend/auth/images/bg_1.jpg')}}');"></div>
            <div class="contents order-2 order-md-1">

              <div class="container">
                <div class="row align-items-center justify-content-center">
                  <div class="col-md-7">
                    <div class="mb-4" style="text-align:center;">

                       <span><img src="{{asset('frontend/images/logo@2x.png')}}" alt=""
                        style="width:150px; margin:20px; "></span>
                        <h5>Welcome back!</h5>
                      <p class="mb-4">Log in to continue learning</p>

                      <x-validation-errors class="mb-4" />
                     </div>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="form-group last mb-3 auth-input">
                        <label for="name">UserName</label>
                         <input id="name" class="form-control" type="text" placeholder=""
                         name="name" :value="old('name')" required autofocus autocomplete="name" />

                      </div>
                      <div class="form-group last mb-3 auth-input">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" placeholder=""
                        name="email" :value="old('email')" required autocomplete="" />
                      </div>
                      <div class="form-group last mb-3 auth-input">
                        <label for="phone">Phone</label>
                        <input id="phone" class="form-control" placeholder=""
                            type="number" name="phone" :value="old('phone')" required />
                      </div>
                      <div class="form-group last mb-3 auth-input">
                        <select id="role" name="role" class="form-control">
                            <option value="" disabled selected>{{ __('Are you Student/Trainer') }}</option>
                            <option class="" value="0">Student</option>
                            <option  class="" value="1">Trainer</option>
                            <!-- Add other role options as needed -->
                        </select>
                      </div>

                      <div class="form-group last mb-3 auth-input">

                        <label for="password">Password</label>

                        <input id="password" class="form-control" type="password" placeholder=""
                             name="password" required autocomplete="new-password" />
                      </div>
                      <div class="form-group last mb-3last mb-3 auth-input">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" class="form-control" type="password" placeholder=""
                        name="password_confirmation" required autocomplete="new-password" />
                      </div>

                      <div class="first">
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif
                    </div>


                      <div class="d-flex mb-5 align-items-center">

                        @if (Route::has('password.request'))
                        <span class="caption"><a class="" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a></span>
                    @endif
                        <span class="ml-auto">
                            <input type="submit" value="Register" class="btn btn-block btn-primary">
                            </span>
                      </div>

                      <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

                      <div class="social-login">
                        <a href="{{ url('auth/facebook') }}" class="facebook btn d-flex justify-content-center align-items-center">
                          <span class="icon-facebook mr-3"></span> Login with Facebook
                        </a>
                        <a href="#{{ url('auth/facebook') }}" class="twitter btn d-flex justify-content-center align-items-center">
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





















