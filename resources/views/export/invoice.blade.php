@extends('export.layouts.master')
@section('title')
Company Export Information
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
                <h5 class="card-title">Invoice</h5>
            </div>
            <div class="col-md-6">
                <span class="right-brd" style="padding-right:15x;">
                    <ul class="">
                        <li><a href="#">Export</a></li>
                        <li>/</li>
                        <li class="active">Invoice</li>

                    </ul>
                </span>
            </div>
        </div>
        <!-- Widgets  -->
        <div class="row">

            <div class="main-card">
                <div class="card">

                    <div class="card-header">
                        <div class="aply-lv">
                            <a href="{{route('add-invoice')}}" class="btn btn-outline-info mb-2">
                                    Add Invoice
                             </a>

                            </div>
                            @include('include.messages')
                        </div>

                    <br />
                    <div class="clear-fix">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Invoice No</th>
                                    <th>Exporter Name</th>
                                    <th>Importer name</th>
                                    <th>Date of Invoice</th>
                                    <th>Dispatch Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @if(count($data) != 0)
                                <tbody>
                                    @foreach ($data as $key => $val)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$val->invoice_no}}</td>
                                            <td>{{$val->exporter->company_name}}</td>
                                            <td>{{$val->importer->name}}</td>
                                            <td>{{$val->date_invoice}}</td>
                                            <td>{{$val->dispatch_date}}</td>
                                            <td><a href="#"><i class="ti-pencil-alt"></i></a>
                                                <a href="{{ route('invoice-pdf', ['id' => $val->id]) }}" title="Generate pdf" class="ml-3" target="_blank"><i class="ti-book"></i></a>
                                                {{-- <a href="{{url('export/export-pass-download-pdf/')}}/{{$val->id}}" title="Download pdf" class="ml-3"><i class="ti-download"></i></a> --}}
                                            </td>
                                        </tr>
                                @endforeach

                                </tbody>
                            @else
                                <tr><td colspan="25"><div class="alert alert-danger">No Data</div></td></tr>
                            @endif
                        </table>


                    </div>

                </div>

            </div>



        </div>
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
