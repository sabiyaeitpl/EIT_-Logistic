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
            <h5 class="card-title">Edit Importer Master</h5>
</div>
<div class="col-md-6">

                           <span class="right-brd" style="padding-right:15x;">
                            <ul class="">
                                <li><a href="#">Export</a></li>

								<li>/</li>
                                <li><a href="#">Importer List</a></li>

								<li>/</li>
                                <li class="active">>Edit Importer Master</li>

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
                        <form action="{{ route('update-importer-master')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $importer->id }}" name="id">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="company_name" class="form-control-label">Importer Name <span>(*)</span></label>
                                    <input type="text" id="company_name" required name="name" class="form-control" value="{{ $importer->name }}">
                                    @if ($errors->has('name'))
                                        <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-control-label">Address <span>(*)</span></label>
                                    <input type="text" id="address" required name="address" class="form-control" value="{{ $importer->address }}">
                                    @if ($errors->has('address'))
                                        <div class="error" style="color:red;">{{ $errors->first('address') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="crno" class="form-control-label">CR NO <span>(*)</span></label>
                                    <input type="text" id="crno" name="crno" class="form-control" value="{{ $importer->crno }}">
                                    @if ($errors->has('crno'))
                                        <div class="error" style="color:red;">{{ $errors->first('crno') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="pobox" class="form-control-label">P.O BOX <span>(*)</span></label>
                                    <input type="text" id="pobox" name="pobox" class="form-control" value="{{ $importer->pobox }}">
                                    @if ($errors->has('pobox'))
                                        <div class="error" style="color:red;">{{ $errors->first('pobox') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="gst" class="form-control-label">GST <span>(*)</span></label>
                                    <input type="text" id="gst" name="gst" class="form-control" value="{{ $importer->gst }}">
                                    @if ($errors->has('gst'))
                                        <div class="error" style="color:red;">{{ $errors->first('gst') }}</div>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-sm">Submit</button>
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
