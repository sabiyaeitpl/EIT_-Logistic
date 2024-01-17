@extends('export.layouts.master')
@section('title')
Product Master Information
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
                <h5 class="card-title">Product Master</h5>
            </div>
            <div class="col-md-6">
                <span class="right-brd" style="padding-right:15x;">
                    <ul class="">
                        <li><a href="#">Product</a></li>
                        <li>/</li>
                        <li class="active">Product Master</li>

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
                            <a href="{{url('export/add-goods-master')}}" class="btn btn-outline-info mb-2">
                                    Add Product
                             </a>

                            </div>
                            @include('include.messages')
                        </div>

                    <br />
                    <div class="clear-fix">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Goods Name</th>
                                        <th>Product Name(Hs Code)</th>
                                        <th>Action</th>
                                    </tr>
                                </tr>
                            </thead>
                            @if(count($data) != 0)
                            <tbody>
                                @foreach ($data as $good)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $good->name }}</td>
                                        <td>
                                            @foreach ($good->products as $product)
                                                {{ $product->name }} - ({{$product->hscode}})
                                                <br>
                                            @endforeach
                                        </td>
                                        <td><a href="{{url('export/edit-goods-master/')}}/{{$good->id}}"><i class="ti-pencil-alt"></i></a>
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
