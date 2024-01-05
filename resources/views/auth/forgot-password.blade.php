<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('frontend/auth/style.css')}}">

        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <link rel="stylesheet" href="{{asset('frontend/stylesheets/custom.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Style -->
        <link rel="stylesheet" href="{{asset('frontend/auth/css/style.css')}}">


    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>
                        <img src="{{asset('frontend/images/logo@2x.png')}}"
                    style="width:130px; align-item:center;text-align:center; padding:5px;" alt="">
                    </header>
                        <div class="">

                            <div class="forget-head">
                                <p style="font-weight: 400; font-size:14px;">
                                    <span style="font-weight: 600; font-size:16px;">  Forgot your password?</span>
                                    &nbsp; &nbsp; No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                                </p>
                            </div>

                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-validation-errors class="mb-4" />
                        </div>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="field input-field">

                               <input id="email" class="block mt-1 w-full" type="email" placeholder="Enter Your Email"
                                name="email" :value="old('email')"
                                required autofocus autocomplete="username" />
                            </div>

                            <div class="form-link" style="margin-top:20px; justify-content:flex-start; ">
                                <input type="submit" value="{{ __('Email Password Reset Link') }}"  style="padding: 10px 20px;"
                                class="form-submit">
                            </div>

                        </form>

                </div>
            </div>
        </section>


    </body>
    </html>




















