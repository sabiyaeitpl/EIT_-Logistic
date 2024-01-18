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
            <h5 class="card-title">Create Invoice</h5>
</div>
<div class="col-md-6">

                           <span class="right-brd" style="padding-right:15x;">
                            <ul class="">
                                <li><a href="#">Export</a></li>

								<li>/</li>
                                <li class="active">Create Invoice</li>

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
                        <form action="{{ route('save-invoice') }}" method="post" enctype="multipart/form-data">
                        
                        <div class="border_main">
                            <div class="border_bottom text-center p-2 text-uppercase"><h4 class="fw-bold">Commercial Invoice</h4>
                            </div>
                            <div style="display: flex;">
                                <div style="width: 50%; border-bottom:1px solid #000">
                                    <div style="padding: 5px; width:100%;">
                                        <h3 style="margin-bottom: 15px;">Exporter / Consignor:</h3>
                                        <input class="form-control" />
                                    </div>
                                    
                                </div>
                        <div style="position: relative;  width: 50%;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_col">
                                <tbody><tr>
                                    <td width="50%" style="border-top:0px;">
                                        <h3 class="p-2">Export Invoice No.</h3>
                                    </td>
                                    <td width="50%" style="border-top:0px;">
                                        <h3 class="p-2"><input class="form-control"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        <h3 class="p-2">Date of Invoice.</h3>
                                    </td>
                                    <td>
                                        <h3 class="p-2"><input class="form-control"></h3>
                                    </h3></td>
                                </tr>
                                <tr>
                                    <td >
                                        <h3 class="p-2">Despatch Date.</h3>
                                    </td>
                                    <td>
                                        <h3 class="p-2"><input class="form-control"></h3>
                                    </h3></td>
                                </tr>
                                <tr>
                                    <td >
                                        <h3 class="p-2" style="font-weight: normal;">Buyer's Order / PO.No.</h3>
                                    </td>
                                    <td>
                                        <h3 class="d-flex" style="font-weight: normal;"><span class="d-inline-block mt-3"> AMF/SE/</span> <input class="form-control m-2">
                                        </h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3 class="p-2">Order By Mail / WhatsApp - Dated</h3>
                                    </td>
                                    <td >
                                        <h3 class="p-2"><input class="form-control"></h3>
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>

                
            </div>
            <div style="display: flex;">
                                <div style="width: 50%;">
                                    <div style="padding: 5px; width:100%;">
                                        <h3 style="margin-bottom: 15px;">Exporter / Consignor:</h3>
                                        <input class="form-control">
                                    </div>
                                    
                                </div>
                        <div style="position: relative;  width: 50%;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_col">
                                <tbody>
                                <tr>
                                    <td class="p-2" style="border-top:0px;">
                                        <b>
                                            <p>Buyer(if other than Consignee)</p>
                                            <p class="d-flex text-center" >AWBNO: <input class="form-control w-50 ml-2"></p>
                                        </b>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="p-2" style="border-top:0px;">
                                        <p class="d-flex text-center" >GST NO: <input class="form-control w-50 ml-2"></p>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="p-2" style="border-bottom:0px;">
                                        <p>Buyer(if other than Consignee)</p>
                                        <input class="form-control w-50">
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>

                
            </div>
            <div class="border" style="border-top: 0px; border-bottom: 0px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_col table_col2">
                <tbody>
                    <tr class="text-center">
                    <td class="p-2" colspan="2" style="border-top: 0px; border-left: 0; border-bottom: 0px; border-right: 0;">
                        <p><b>Pre-Carriage By</b></p>
                        <p><input class="form-control"></p>
                    </td>
                    <td class="p-2" colspan="3" style="border-top: 0px; border-bottom: 0px; border-right: 0;" colspan="2">
                        <p><b>Place of Receipt by Pre-Carrier</b></p>
                        <p><input class="form-control"></p>
                    </td>
                    <td class="p-2" colspan="3" style="border-top: 0px; border-bottom: 0px; border-right: 0;" colspan="2">
                        <p><b>Country of Origin of Goods</b></p>
                        <p><input class="form-control"></p>
                    </td>
                    <td class="p-2" colspan="2" style="border-top: 0px; border-bottom: 0px; border-right: 0; border-right: 0;">
                        <p><b>Country of Final Destination</b></p>
                        <p><input class="form-control"></p>
                    </td>
                </tr>
                    <tr>
                    <td class="p-2"  colspan="2" style="border-right: 0px; border-left: 0px;">
                    <p class="d-flex mb-1">Vessel: <input class="form-control w-50 ml-2"></p>
                        <p class="d-flex mb-1">Flight No : <input class="form-control w-50 ml-2"></p>
                    </td>
                    <td class="p-2"  style=" border-right: 0px;">
                        <p>Port of Loading</p>
                        <p><input class="form-control"></p>
                    </td>
                    <td class="p-2"  colspan="2" style=" border-right: 0px;">
                        <p>Port of Discharge</p>
                        <p><input class="form-control"></p>
                    </td>
                    <td class="p-2"  colspan="2" style=" border-right: 0px; white-space: nowrap;">
                        <p>Final Destination</p>
                        <p><input class="form-control"></p>
                    </td>
                    <td class="p-2"  colspan="3" style=" border-right: 0px;">
                        <h3>
                            BOX MARKING
                        </h3>
                    </td>
                    <td class="p-2"  style=" border-right: 0px;">
                        <h1>ANSM</h1>
                    </td>
                </tr>

                <tr>
                    <td width="8%" style="border-left: 0px; border-right: 0px; border-top: 0px;">
                        <p>Counting</p>
                    </td>
                    <td width="10%" style="border-right: 0px; border-top: 0px;">
                        <p>BOX &amp; BAG</p>
                        <p>Dimention</p>
                    </td>
                    <td width="7%" style="border-right: 0px; border-top: 0px;">
                        <p>No of Box / Bag</p>
                    </td>
                    <td width="9%" style="border-right: 0px; border-top: 0px;">
                        <p>Type Box / Bag</p>
                    </td>
                    <td width="9%" style="border-right: 0px; border-top: 0px;">
                        <p>PKGS Size</p>
                    </td>
                    <td width="15%" style="border-right: 0px; border-top: 0px;">
                        <p>Description Of Goods <span style="text-decoration: underline;">VEGETABLE &amp; FRUITS</span></p>
                    </td>
                    <td width="8%" style="border-right: 0px; border-top: 0px;">
                        <p>HS CODE</p>
                    </td>
                    <td width="8%" style="border-right: 0px; border-top: 0px; white-space: nowrap;">
                        <p>Quantity (KGS)</p>
                    </td>
                    <td width="8%" style="border-right: 0px; border-top: 0px;">
                        <p>Rate</p>
                        <p>(USD/KGS)</p>
                    </td>
                    <td width="15%" style="border-right: 0px; border-top: 0px; white-space: nowrap;">
                        <p>AMOUNT (USD)</p>
                    </td>
                    <td width="15%" style="border-right: 0px; border-top: 0px; white-space: nowrap;">
                        <p>Action</p>
                    </td>
                </tr>

                <!-- loop end-->

                <tr>
                    <td style="border-left: 0px; border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                       <p class="p-1"><input class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: left;">
                       <p class="p-1"><input class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px;">
                        <p class="p-1"><input class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: right;">
                        <p class="p-1"><input class="form-control"></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: right;">
                        <p> Delete</p>
                    </td>
                </tr>

              
                <tr>
                    <td colspan="9" style="border-left: 0px; border-right: 0px; border-top: 0px;">
                        <p><b>Total Amount Payable in USD</b></p>
                    </td>
                    <td style="border-right: 0px; border-top: 0px; text-align: right;">
                        <p><b>$5, 179. 17</b></p>
                    </td>
                     <td style="border-right: 0px; border-top: 0px; text-align: right; border-left: 0px;">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="border-left: 0px; border-right: 0px; border-top: 0px;">
                        <p><b>Total Amount Payable in Words:-</b></p>
                    </td>
                    <td colspan="7" style="border-right: 0px; border-top: 0px; text-align: left; text-transform: uppercase;">
                        <p><b>Five Thousand one Hunderd Seventy Nine Dollar And Seventeen Cents</b></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="11" style="border-left: 0px; border-right: 0px; border-top: 0px; text-transform: uppercase;">
                        <p><b>Banking coordinates - Shalia export and import Private limited</b></p>
                    </td>
                </tr>
            </tbody></table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_col table_col2">
                <tbody><tr>
                    <td width="50%" style="border-left: 0px; border-top: 0px; text-transform: uppercase;">
                        <p><b>Bank 1 (ONE)</b></p>
                    </td>
                    <td style="border-left: 0px; border-right: 0px; border-top: 0px; text-transform: uppercase;">
                        <p><b>Bank 2 (Two)</b></p>
                    </td>
                </tr>
                <tr>
                    <td width="50%" style="border-left: 0px; border-top: 0px; text-transform: uppercase; height: 120px; vertical-align: top; text-align: left;">
                        <table class="Bank_section" width="100%" border="0">
                            <tbody><tr>
                                <td width="40%">
                                    <p style="margin-bottom: 10px;"><b>Bank Name:</b></p>
                                </td>
                                <td width="60%">
                                    <p style="margin-bottom: 10px;"><b>ICICI BANK LIMITED</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin-bottom: 10px;"><b>Account Name:</b></p>
                                </td>
                                <td>
                                    <p style="margin-bottom: 10px;"><b>SHALIA EXPORT &amp; IMPORT PRIVATE LIMITED</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Account nUMBER:</b></p>
                                </td>
                                <td>
                                    <p><b>260905500359</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Swift Code:</b></p>
                                </td>
                                <td>
                                    <p><b>ICIICINBBCTS</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>IFSC:</b></p>
                                </td>
                                <td>
                                    <p><b>ICIC0002609</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Authorized Dealer Code:</b></p>
                                </td>
                                <td>
                                    <p><b>6393450-1070394</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Branch Address:</b></p>
                                </td>
                                <td>
                                    <p><b>SHAHPUR, TARAKESWAR,HOOGHLY.</b></p>
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                    <td style="border-left: 0px; border-right: 0px; border-top: 0px; text-transform: uppercase; height: 120px; vertical-align: top; text-align: left">
                        <table class="Bank_section" width="100%" border="0">
                            <tbody><tr>
                                <td width="40%">
                                    <p style="margin-bottom: 10px;"><b>Bank Name:</b></p>
                                </td>
                                <td width="60%">
                                    <p style="margin-bottom: 10px;"><b>ICICI BANK LIMITED</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin-bottom: 10px;"><b>Account Name:</b></p>
                                </td>
                                <td>
                                    <p style="margin-bottom: 10px;"><b>SHALIA EXPORT &amp; IMPORT PRIVATE LIMITED</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Account nUMBER:</b></p>
                                </td>
                                <td>
                                    <p><b>260905500359</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Swift Code:</b></p>
                                </td>
                                <td>
                                    <p><b>ICIICINBBCTS</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>IFSC:</b></p>
                                </td>
                                <td>
                                    <p><b>ICIC0002609</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Authorized Dealer Code:</b></p>
                                </td>
                                <td>
                                    <p><b>6393450-1070394</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Branch Address:</b></p>
                                </td>
                                <td>
                                    <p><b>SHAHPUR, TARAKESWAR,HOOGHLY.</b></p>
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </div>
                        </div>


                            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row form-group">

                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Sample Input<span>(*)</span></label>
                                    <input type="text" id="name" required name="name" class="form-control" >
                                </div>




                            </div>


                            <button type="submit" class="btn btn-danger btn-sm">Submit
                            </button> -->

                            
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


<style>
    .border_main{
        border:1px solid #000;
    }
    .border_bottom{
        border-bottom:1px solid #000;
    }
    .fw-bold{
        font-weight:bold!important;
    }
    .table_col td {
  border-collapse: collapse;
  color: #000;
  border:1px solid #000;
}
.table_col td h3{
font-size: 16px;
}
.border_main h3{
    font-size: 16px;
}
.table_col p{
    text-align:left;
    margin:0;
    padding:0;
    color:#000;
    font-size: 14px!important;
}
.table_col span{
     color:#000!important;
}
.table_col2 p{text-align:center;}
</style>



@endsection
