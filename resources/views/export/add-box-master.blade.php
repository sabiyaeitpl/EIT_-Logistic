@extends('export.layouts.master')

@section('title')
Export - Importer Information
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
            <h5 class="card-title">Add Box Master</h5>
</div>
<div class="col-md-6">

                           <span class="right-brd" style="padding-right:15x;">
                            <ul class="">
                                <li><a href="#">Export</a></li>

								<li>/</li>
                                <li><a href="#">Box Master List</a></li>

								<li>/</li>
                                <li class="active">Box Master Add</li>

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
                        <form action="{{ url('export/save-box-master') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row form-group">

                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Box/Bag <span>(*)</span></label>
                                    <input type="text" id="name" required name="box_name" class="form-control" >
                                    @if ($errors->has('box_name'))
                                    <div class="error" style="color:red;">{{ $errors->first('box_name') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Box Size (Inch) <span></span></label>
                                    <input type="text" id=""  name="box_size" class="form-control" >
                                    @if ($errors->has('box_size'))
                                    <div class="error" style="color:red;">{{ $errors->first('box_size') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">Box Weight (In-Kg) <span></span></label>
                                    <input type="text" id="" name="box_weight" class="form-control" >
                                    @if ($errors->has('box_weight'))
                                    <div class="error" style="color:red;">{{ $errors->first('box_weight') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">Box Price (INR) <span></span></label>
                                    <input type="text" id="boxInr" name="box_price" class="form-control" >
                                    @if ($errors->has('box_price'))
                                    <div class="error" style="color:red;">{{ $errors->first('box_price') }}</div>
                                    @endif
                                </div>
                                 <div class="col-md-4">
                                    <label for="email-input" class=" form-control-label">Box Price (USD) <span></span></label>
                                    <input type="text" id="boxUsd" name="box_price_usd" class="form-control" >
                                    @if ($errors->has('box_price'))
                                    <div class="error" style="color:red;">{{ $errors->first('box_price') }}</div>
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#boxInr').keyup(function(){
            var inrValue = $(this).val();
            var usdValue = inrValue * 0.012; // Assuming conversion rate, you can change this accordingly
            $('#boxUsd').val(usdValue.toFixed(2)); // Round to 2 decimal places
        });
    });
</script>



@endsection
