@extends('custom-auth.layout.master-layout')
@section('body')
<!-- Page Wrapper -->
<!-- Page Wrapper -->

<div class="page-wrappers" style="margin-left: 0px;
padding-top: 60px;
position: relative;">

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header" style=" background:#EFF0EF;margin-bottom:0px;padding:20px;">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Personal Details</h3>
                    <ul class="breadcrumb" >
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Student </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="formbg">
<!-- Row -->
<div class="row" style="justify-content:center;width:100%; height:100%;

margin:0px;padding:0px; align-items:center !important;
background-image: url('{{ asset('frontend/images/formbg.jpg') }}');
            /* Additional styles for background */
            background-size: cover;
            background-position: center;">
<div class="col-sm-6">
    	<!-- Server Side Validation -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">Personal Details</h3>

            </div>
            <div class="card-body">

              @if ($errors->any())
              <ul>
                   <span style="color:#E62F2F; font-weight:600">Whoops! Something went wrong.</span>
                    {!! implode('',$errors->all('<li style="color:#E62F2F; background-color:#f5ccba;
                    padding:5px; border-radius:5px;">:message</li>'))!!}
              </ul>

              @endif

                <form method="post" action="{{ route('register.perform') }}">
                    @csrf
                    <div class="form-group">
                            <label for="name"> Name</label>
                            <input type="text" class="form-control " id="" name="name" placeholder=" Name"  required="required" >

                            <div class="valid-feedback">
                               <span></span>
                            </div>

                    </div>
                    <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control " id=""  name="email" placeholder="email"  required="required" >

                            <div class="valid-feedback">
                                <span></span>
                            </div>

                    </div>

                            <div class="form-group">
                            <label for="phone">Phone No</label>
                            <input type="number" class="form-control " id="" name="phone" placeholder="Phone No"  required="required">

                            <div class="valid-feedback">
                                <span></span>
                            </div>

                            </div>


                    <div class="form-group">
                        <label for="validationServer01">Are you student or Trainer</label>
                        <select class="custom-select" required="required" name="position">
                            <option  disabled> Choose</option>
                            <option value="0">Student</option>
                            <option value="1">Trainer</option>

                        </select>

                        <div class="invalid-feedback">
                            <span></span>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control " id="" name="password" placeholder="Password"  required="required">

                        <div class="valid-feedback">
                            <span></span>
                        </div>

                        </div>

                        <div class="form-group">
                            <label for="validationServer01">Conform Password</label>
                            <input type="password" class="form-control " id="" name="password_confirmation" placeholder="Conform Password" required="required">

                            <div class="valid-feedback">
                                <span></span>
                            </div>

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






