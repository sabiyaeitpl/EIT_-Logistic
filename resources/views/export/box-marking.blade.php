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
                <h5 class="card-title">Buyer Indent</h5>
            </div>
            <div class="col-md-6">
                <span class="right-brd" style="padding-right:15x;">
                    <ul class="">
                        <li><a href="#">Export</a></li>
                        <li>/</li>
                        <li class="active">Buyer Indent</li>

                    </ul>
                </span>
            </div>
        </div>
        <!-- Widgets  -->
        <div class="row">

            <div class="main-card">
                <div class="card">

                    <div class="card-header">
                        {{-- <div class="aply-lv">
                            <a href="{{route('add-indent')}}" class="btn btn-outline-info mb-2">
                                    Add Buyer Indent
                             </a>

                            </div>
                            @include('include.messages')
                        </div> --}}

                    <br />
                    <div class="clear-fix">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Product Name</th>
                                    <th>Bag / Box</th>
                                    <th>No of Boxes / Bags</th>
                                    <th>Packing Size(In Kgs)</th>
                                    <th>Net Qty Packed(In Kgs)</th>
                                    <th>Box / Bag Weight (In Kgs)</th>
                                    <th>Gross Weight(In Kgs)</th>
                                </tr>
                            </thead>

                                <tbody>
                                 @foreach($buyer_box as $key => $buyer_boxs)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{$buyer_boxs->name}}</td>
                                        <td>{{$buyer_boxs->box_or_bag}}</td>
                                        <td>{{$buyer_boxs->number_of_box}}</td>
                                        <td>{{$buyer_boxs->packing_size}}</td>
                                        <td>{{$buyer_boxs->net_quentity_packed}}</td>
                                        <td>{{$buyer_boxs->box_weight}}</td>
                                        <td>{{$buyer_boxs->box_gross_weight}}</td>
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

