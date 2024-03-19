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
                <h5 class="card-title">Tentetive Paking List</h5>
            </div>
            <div class="col-md-6">
                <span class="right-brd" style="padding-right:15x;">
                    <ul class="">
                        <li><a href="#">Export</a></li>
                        <li>/</li>
                        <li class="active">Tentetive Paking List</li>

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
                            <a href="{{route('add-indent')}}" class="btn btn-outline-info mb-2">
                                    Add Buyer Indent
                             </a>

                            </div>
                            @include('include.messages')
                        </div>

                    <br />
                    <div class="clear-fix">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Exporter Name</th>
                                    <th>Importer name</th>
                                    <th>Buyer Order No</th>
                                    <th>Buyer Order date</th>
                                    <th>Box Marking</th>
                                    <th>Gross Weight</th>
                                    {{-- <th>Total Gross Weight</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>

                                <tbody>
                                @foreach($data as $key => $buyer_record)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{$buyer_record->exporter->company_name }}
                                        </td>
                                        <td>{{ $buyer_record->importer->name }}</td>
                                        <td>{{ $buyer_record->buyer_or_no }}</td>
                                        <td>{{ $buyer_record->buyer_or_date }}</td>
                                        <td>{{ $buyer_record->box_marking }}</td>
                                        <td>{{ $buyer_record->gross_weight_limit }}</td>
                                        {{-- <td>{{ $buyer_record->total_box_gross_weight }}</td> --}}
                                        <td> 
                                            <a href="{{url('export/edit-tentetive/')}}/{{ $buyer_record->id }}"><i class="ti-pencil-alt"></i></a>
                                            <a href="#" title="Delete"><i class="ti-trash text-danger"></i></a>
                                            <a href="{{ route('indent-pdf', ['id' => $buyer_record->id]) }}" title="Generate pdf"><i class="ti-book"></i></a>
                                            <a href="#" title="Downlode pdf"><i class="ti-download"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

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

