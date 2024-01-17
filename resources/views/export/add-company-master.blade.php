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
            <h5 class="card-title">Add Company Master</h5>
</div>
<div class="col-md-6">

                           <span class="right-brd" style="padding-right:15x;">
                            <ul class="">
                                <li><a href="#">Export</a></li>

								<li>/</li>
                                <li><a href="#">Company Master List</a></li>

								<li>/</li>
                                <li class="active">Company Master Add</li>

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
                                    <input type="text" id="company_name" required name="company_name" class="form-control" >
                                    @if ($errors->has('company_name'))
                                    <div class="error" style="color:red;">{{ $errors->first('company_name') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Address <span>(*)</span></label>
                                    <input type="text" id="" required name="address" class="form-control" >
                                    @if ($errors->has('address'))
                                    <div class="error" style="color:red;">{{ $errors->first('address') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">Country <span>(*)</span></label>
                                    <input type="text" id="" required name="country" class="form-control" >
                                    @if ($errors->has('country'))
                                    <div class="error" style="color:red;">{{ $errors->first('country') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">State <span>(*)</span></label>
                                    <input type="text" id="" required name="state" class="form-control" >
                                    @if ($errors->has('state'))
                                    <div class="error" style="color:red;">{{ $errors->first('state') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">City <span>(*)</span></label>
                                    <input type="text" id="" required name="city" class="form-control" >
                                    @if ($errors->has('city'))
                                    <div class="error" style="color:red;">{{ $errors->first('city') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">Pin <span>(*)</span></label>
                                    <input type="text" id="" required name="pin" class="form-control" >
                                    @if ($errors->has('pin'))
                                    <div class="error" style="color:red;">{{ $errors->first('pin') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">IE Code <span>(*)</span></label>
                                    <input type="text" id="" required name="ie_code" class="form-control" >
                                    @if ($errors->has('ie_code'))
                                    <div class="error" style="color:red;">{{ $errors->first('ie_code') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">GST <span>(*)</span></label>
                                    <input type="text" id="" required name="gst" class="form-control" >
                                    @if ($errors->has('gst'))
                                    <div class="error" style="color:red;">{{ $errors->first('gst') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">CIN Number <span>(*)</span></label>
                                    <input type="text" id="" required name="cin" class="form-control" >
                                    @if ($errors->has('cin'))
                                    <div class="error" style="color:red;">{{ $errors->first('cin') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Image <span>(*)</span></label>
                                    <input type="file" id="" required name="image" class="form-control">
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
