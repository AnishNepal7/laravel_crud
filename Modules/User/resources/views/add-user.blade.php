@extends('user::layouts.app')
{{-- @extends('user::layouts.app') --}}

@section('styles')

<!-- Pick date -->
<link rel="stylesheet" href="{{url('vendor/pickadate/themes/default.css')}}">
<link rel="stylesheet" href="{{url('vendor/pickadate/themes/default.date.css')}}">
@endsection

@section('contents')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                    <div class="card-header">
                        <h5 class="card-title">Basic Info</h5>
                    </div>
                    <div class="card-body">
                        <form action="add-user" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="firstname" value='{{old("firstname")}}'>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="lastname" value='{{old("lastname")}}'>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Email Here</label>
                                        <input type="text" class="form-control" name="email" value='{{old("email")}}'>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="text" class="form-control" name="phone" value='{{old("firstname")}}'>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="confirmPassword">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Gender</label>
                                        <select class="form-control" name="gender" required>
                                            <option value="" >Gender</option>
                                            <option value="1" @if (old('gender')==1) selected @endif>Male</option>
                                            <option value="2" @if (old('gender')==2) selected @endif>Female</option>
                                            <option value="3" @if (old('gender')==3) selected @endif>Others </option>
                                        </select>
                                    </div>
                                </div>
                                
                                
                              
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Date of Birth</label>
                                        <input name="dob" class="datepicker-default form-control"
                                            id="datepicker1">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Education</label>
                                        <input type="text" class="form-control" name="education">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group fallback w-100">
                                        <input type="file" class="dropify" data-default-file="" name="image">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="content-body">
    helloworld
</div>
@endsection




@section('scripts')
<!-- pickdate -->
<script src="{{url('vendor/pickadate/picker.js')}}"></script>
<script src="{{url('vendor/pickadate/picker.time.js')}}"></script>
<script src="{{url('vendor/pickadate/picker.date.js')}}"></script>

<!-- Pickdate -->
<script src="{{url('js/plugins-init/pickadate-init.js')}}"></script>
@endsection