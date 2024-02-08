@extends('export.layouts.master')

@section('title')
Export - Company Information
@endsection

@section('sidebar')
@include('export.partials.sidebar')
@endsection

@section('header')
@include('export.partials.header')
@endsection

@section('scripts')
@include('export.partials.scripts')
@endsection
@section('content')

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
    <div class="row" style="border:none;">
            <div class="col-md-6">
            <h5 class="card-title">Edit Company Master</h5>
</div>
<div class="col-md-6">

                           <span class="right-brd" style="padding-right:15x;">
                            <ul class="">
                                <li><a href="#">Export</a></li>

								<li>/</li>
                                <li><a href="#">Company Master List</a></li>

								<li>/</li>
                                <li class="active">Company Master Edit</li>

                            </ul>
                        </span>
</div>
</div>
        <!-- Widgets  -->
        <div class="row">

            <div class="main-card">
                <div class="card">
                    <!-- <div class="card-header">
                        <strong>Edit Sub Caste Master</strong>
                    </div> -->
                    <div class="card-body card-block">
                        <form action="{{ url('masters/save-company-master') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{ isset($data) ? $data->id : '' }}">
                            <div class="row form-group">

                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Company Name <span>(*)</span></label>
                                    <input type="text" id="company_name" required name="company_name" class="form-control" value="{{ isset($data->company_name) ? $data->company_name : old('company_name') }}">
                                    @if ($errors->has('company_name'))
                                    <div class="error" style="color:red;">{{ $errors->first('company_name') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Address </label>
                                    <input type="text" id=""  name="address" class="form-control" value="{{ isset($data->address) ? $data->address : '' }}">
                                    @if ($errors->has('address'))
                                    <div class="error" style="color:red;">{{ $errors->first('address') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">Country </label>
                                    <input type="text" id=""  name="country" class="form-control" value="{{ isset($data->country) ? $data->country : '' }}">
                                    @if ($errors->has('country'))
                                    <div class="error" style="color:red;">{{ $errors->first('country') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">State </label>
                                    <input type="text" id=""  name="state" class="form-control" value="{{ isset($data->state) ? $data->state : '' }}">
                                    @if ($errors->has('state'))
                                    <div class="error" style="color:red;">{{ $errors->first('state') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">City </label>
                                    <input type="text" id=""  name="city" class="form-control" value="{{isset($data->city) ? $data->city : '' }}">
                                    @if ($errors->has('city'))
                                    <div class="error" style="color:red;">{{ $errors->first('city') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">Pin </label>
                                    <input type="text" id="" name="pin" class="form-control" value="{{ isset($data->pin) ? $data->pin : '' }}">
                                    @if ($errors->has('pin'))
                                    <div class="error" style="color:red;">{{ $errors->first('pin') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">IE Code </label>
                                    <input type="text" id=""  name="ie_code" class="form-control" value="{{ isset($data->ie_code) ? $data->ie_code : '' }}">
                                    @if ($errors->has('ie_code'))
                                    <div class="error" style="color:red;">{{ $errors->first('ie_code') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">GST </label>
                                    <input type="text" id=""  name="gst" class="form-control" value="{{ isset($data->gst) ? $data->gst : '' }}">
                                    @if ($errors->has('gst'))
                                    <div class="error" style="color:red;">{{ $errors->first('gst') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">CIN Number </label>
                                    <input type="text" id=""  name="cin" class="form-control" value="{{ isset($data->cin) ? $data->cin : '' }}">
                                    @if ($errors->has('cin'))
                                    <div class="error" style="color:red;">{{ $errors->first('cin') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Image <span>(*)</span></label>
                                    <input type="file" id="" name="image" class="form-control">
                                    @if (isset($data) && $data->image != '')
                                    <img src="{{ asset('storage/' . $data->image) }}" alt="no image" style="width: 60px;
                                    margin-top: 10px;">

                                    @endif
                                </div>


                            </div>


                            <button type="submit" class="btn btn-danger btn-sm">Submit
                            </button>

                        </form>
                    </div>



                </div>

            </div>

        </div>



    </div>
    <!-- /Widgets -->



</div>
<!-- .animated -->
</div>
<!-- /.content -->
<div class="clearfix"></div>
<?php //include("footer.php");
?>
</div>
<!-- /#right-panel -->






@endsection
