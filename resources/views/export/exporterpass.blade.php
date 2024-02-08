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
                <h5 class="card-title">Exporter pdf Master</h5>
            </div>
            <div class="col-md-6">
                <span class="right-brd" style="padding-right:15x;">
                    <ul class="">
                        <li><a href="#">Goods</a></li>
                        <li>/</li>
                        <li class="active">Exporter pdf Master</li>

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
                            <a href="{{url('export/add-exporter-pass')}}" class="btn btn-outline-info mb-2">
                                    Add Pass
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
                                    <th>Reference Id</th>
                                    <th>Exporter Name</th>
                                    {{-- <th>Importer name</th> --}}
                                    <th>Goods</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @if(count($data) != 0)
                            <tbody>
                                @foreach ($data as $key => $val)
                                <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$val->reference_id}}</td>
                                  <td>{{$val->company->company_name}}</td>
                                  {{-- <td>{{$val->importername1->name}}</td> --}}
                                  <td>{{$val->goods->name}}</td>
                                  <td><a href="{{url('export/edit-pass-generate/')}}/{{$val->id}}"><i class="ti-pencil-alt"></i></a>
                                    <a href="{{url('export/export-pass-generate-pdf/')}}/{{$val->id}}" title="Generate pdf" class="ml-3" target="_blank"><i class="ti-book"></i></a>
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
