@extends('export.layouts.master')
@section('title')
Export Information
@endsection

@section('sidebar')
@include('export.partials.sidebar')
@endsection

@section('header')
@include('export.partials.header')
@endsection



@section('content')
<style>
    .right-panel {

    margin-top: 93px;
}
.card form {
    	padding: 19px 0 0 0;
        background:none;
	}
</style>
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row" style="border:none;">
            <div class="col-md-6">
                <h5 class="card-title">Dashboard</h5>
            </div>
            <div class="col-md-6">
                <span class="right-brd" style="padding-right:15x;">
                    <ul class="">
                        <li><a href="#">Dashboard</a></li>

                    </ul>
                </span>
            </div>
        </div>
        <!-- Widgets  -->
        {{-- <div class="row">

            <div class="main-card">
                <div class="card">
                    <br />
                    <div class="clear-fix">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Store Name.</th>
                                    <th>Barcode</th>
                                    <th>Stock Quantity</th>
                                    <th>ROL Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>


                                </tr>
                            </tbody>
                        </table>


                    </div>

                </div>

            </div>



        </div> --}}
        <!-- /Widgets -->



    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
<?php //include("footer.php");
?>
</div>
<!-- /#right-panel -->

@endsection
@section('scripts')
@include('export.partials.scripts')
@endsection
