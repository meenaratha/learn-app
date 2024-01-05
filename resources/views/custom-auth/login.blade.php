@extends('custom-auth.layout.master-layout')
@section('body')
<div class="page-wrappers" style="margin-left: 0px;
padding-top: 60px;
position: relative;">
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header" style=" background:#EFF0EF;margin-bottom:0px;padding:20px;">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Enter your Class</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Student </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    <div class="formbg">
<!-- Row -->
<div class="row" style="justify-content:center;width:100%; height:100vh;

margin:0px;padding:0px; align-items:center !important;
background-image: url('{{ asset('frontend/images/formbg.jpg') }}');
        /* Additional styles for background */
        background-size: cover;
        background-position: center;">
<div class="col-sm-6">
    <!-- Server Side Validation -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title mb-0">Enter your Class</h3>

        </div>
        <div class="card-body">

            @if ($errors->any())
            <ul>
                 <span style="color:#E62F2F; font-weight:600">Whoops! Something went wrong.</span>
                  {!! implode('',$errors->all('<li style="color:#E62F2F; background-color:#f5ccba;
                  padding:5px; border-radius:5px;">:message</li>'))!!}
            </ul>
            @endif
            <form method="post" action="{{ route('login.perform') }}">
                @csrf
                <div class="form-group">
                        <label for="validationServer01"> Email</label>
                        <input type="email" class="form-control " id="" name="email" placeholder=" Email" value="" required="required" >
                        @if ($errors->has('email'))
                        <div class="valid-feedback">
                           <span>{{ $errors->first('email') }}</span>
                        </div>
                        @endif
                </div>


                <div class="form-group">
                    <label for="validationServer01">Password</label>
                    <input type="password" class="form-control " id="" name="password" placeholder="Password" value="" required="required">
                    @if ($errors->has('password'))
                    <div class="valid-feedback">
                        <span>{{ $errors->first('password') }}</span>
                    </div>
                    @endif
                    </div>


                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>
    <!-- /Server Side Validation -->
</div>

</div>
 </div>



</div>


@endsection
