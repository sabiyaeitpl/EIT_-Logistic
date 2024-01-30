@extends('export.layouts.master')

@section('title')
Export - Bank Information
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
            <h5 class="card-title">Edit Bank Master</h5>
</div>
<div class="col-md-6">

                           <span class="right-brd" style="padding-right:15x;">
                            <ul class="">
                                <li><a href="#">Export</a></li>

                                <li>/</li>
                                <li><a href="#">Bank Master List</a></li>

								<li>/</li>
                                <li class="active">Edit Bank Master</li>
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
                        <form action="{{ url('export/update-bank-master') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="bank_id" value="{{ $bank->id }}">
                            <div class="row form-group">

                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Bank Name <span>(*)</span></label>
                                    <input type="text" id="bank_name"  name="bank_name"  class="form-control" value="{{ $bank->bank_name }}" required>
                                    @if ($errors->has('bank_name'))
                                    <div class="error" style="color:red;">{{ $errors->first('bank_name') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Account Name <span></span></label>
                                    <input type="text" id="account_name"  name="account_name" class="form-control" value="{{ $bank->account_name }}">
                                    @if ($errors->has('account_name'))
                                    <div class="error" style="color:red;">{{ $errors->first('account_name') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">Account Number <span></span></label>
                                    <input type="text" id="account_number" name="account_number" class="form-control" value="{{ $bank->account_number }}">
                                    @if ($errors->has('account_number'))
                                    <div class="error" style="color:red;">{{ $errors->first('account_number') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">Swift Code <span></span></label>
                                    <input type="text" id="swift_code" name="swift_code" class="form-control" value="{{ $bank->swift_code }}">
                                    @if ($errors->has('swift_code'))
                                    <div class="error" style="color:red;">{{ $errors->first('swift_code') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">IFSC Code <span></span></label>
                                    <input type="text" id="ifsc_code" name="ifsc_code" class="form-control" value="{{ $bank->ifsc_code }}">
                                    @if ($errors->has('ifsc_code'))
                                    <div class="error" style="color:red;">{{ $errors->first('ifsc_code') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">Dealer Code <span></span></label>
                                    <input type="text" id="dealer_code"  name="dealer_code" class="form-control" value="{{ $bank->dealer_code }}">
                                    @if ($errors->has('dealer_code'))
                                    <div class="error" style="color:red;">{{ $errors->first('dealer_code') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <label for="email-input" class=" form-control-label">Branch Address <span></span></label>
                                    <input type="text" id="address"  name="address" class="form-control" value="{{ $bank->address }}">
                                    @if ($errors->has('address'))
                                    <div class="error" style="color:red;">{{ $errors->first('address') }}</div>
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
