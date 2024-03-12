@extends('export.layouts.master')
@section('title')
Indent Information
@endsection
@section('sidebar')
@include('export.partials.sidebar')
@endsection
@section('header')
@include('export.partials.header')
@endsection
@section('content')
<link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        color: #000;
        font-size: 11px;
    }

    .container_main td {
        padding: 5px 5px;
        text-align: center!important;
    }
     .container_main td p{
      text-align: center!important;
      color:#000;
     }



    .container_main {
      width: 100%;
        /* width: 700px; */
        /* width: 95%; */
        /* height: 990.23622047px; */
        /* border: 1.5px solid #000; */
        margin: 0 auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin-top: 10px;
        font-size: 11px;
    }

    .container_main td {
        text-align: center!important;
        border: 0.5px solid #000000;
        border-collapse: collapse;

    }

    .container_main h1,
    .container_main h2,
    .container_main h3,
    .container_main h4,
    .container_main h5,
    .container_main h6,
    .container_main p {
        margin: 0;
        padding: 0px 0;
    }

    .container_main h1,
    .container_main h2,
    .container_main h3,
    .container_main h4,
    .container_main h5,
    .container_main h6 {
        font-size: 13px;
    }
    .container_main p {
      text-align:left;
    }
</style>

<!-- Content -->
<div class="content">
   <!-- Animated -->
   <div class="animated fadeIn">
      <div class="row" style="border:none;">
         <div class="col-md-6">
            <h5 class="card-title" style="font-size: 18px !important">Add Buyer Indent</h5>
         </div>
         <div class="col-md-6">
            <span class="right-brd" style="padding-right:15x;">
               <ul class="">
                  <li><a href="#">Export</a></li>
                  <li>/</li>
                  <li><a href="#">Buyer Indent</a></li>
                  <li>/</li>
                  <li class="active">Add Buyer Indent</li>
               </ul>
            </span>
         </div>
      </div>
      <!-- Widgets  -->
      <div class="row">
         <div class="main-card">
            <div class="card">
                <div class="card-body card-block">
                    <form action="{{ route('save-indent') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h4 class="text-uppercase">Buyer Indent</h4>
                        <div class="container_main">
                            <div>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align: center;">
                                    <tr>
                                        <td colspan="4" rowspan="4" style="vertical-align: top; text-align: left;">
                                            <div class="d-flex mb-1">
                                                <p class="mt-2" style="width:65%;">Exporter / Consignor :</p>
                                                <select class="form-select form-control" name="exporter" aria-label="Default select example">
                                                        <option selected>Select</option>
                                                        @foreach ($exporter as $exporters)
                                                        <option value="{{$exporters->id}}">{{$exporters->company_name}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="d-flex mb-1">
                                                <p class="mt-2" style="width:65%;">Importer :</p>
                                                <select class="form-select form-control" name="importer" aria-label="Default select example">
                                                    <option selected>Select</option>
                                                        @foreach ($importer as $importers)
                                                        <option value="{{$importers->id}}">{{$importers->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="d-flex">
                                                <p class="mt-2" style="width:65%;">Buyer Order No :</p>
                                                <input type="text" class="form-control" name="buyer_order_no" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Box">
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <p>Buyer's Order / PO.NO.</p>
                                        </td>
                                        <td colspan="4">
                                            <input type="text" class="form-control" name='po_no' id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Date of Packing.</p>
                                        </td>
                                        <td colspan="4">
                                            <input type="date" class="form-control" id="exampleInputEmail1" name="date_of_packing" aria-describedby="emailHelp">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Flight Date.</p>
                                        </td>
                                        <td colspan="4">
                                            <input type="date" class="form-control" name="flight_date" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Gross Weight</p>
                                        </td>
                                        <td colspan="4">
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="gross_weight" aria-describedby="emailHelp">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <div class="d-flex mb-1">
                                                <div class="mt-2" style="width: 120px; text-align: left;">Vessel:</div>
                                                <div><input type="text" class="form-control" id="exampleInputEmail1" name="vessel" placeholder="By Air"
                                                        aria-describedby="emailHelp"></div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="mt-2" style="width: 120px; text-align: left;">Flight No :</div>
                                                <div><input type="text" class="form-control" id="exampleInputEmail1" name="flight_no" placeholder="QR0541"
                                                        aria-describedby="emailHelp"></div>
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <p class="mb-2">Port of Discharge</p>
                                            <p><input type="text" class="form-control" id="exampleInputEmail1" name="port_discharge"placeholder="QR0541"
                                                    aria-describedby="emailHelp"></p>
                                        </td>
                                        <td colspan="2">
                                            <p class="mb-2">Final Destination</p>
                                            <p><input type="text" class="form-control" id="exampleInputEmail1" name="final_destination" placeholder="QR0541"
                                                    aria-describedby="emailHelp"></p>
                                        </td>
                                        <td colspan="3">
                                            <h4>BOX MARKING</h4>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="5%" style="">
                                            <p>SL. No.</p>
                                        </td>
                                        <td width="20%" style="">
                                            <p>Item Name / List</p>
                                        </td>
                                        <td width="10%" style="">
                                            <p>Box / Bag</p>
                                        </td>
                                        <td width="12%" style="">
                                            <p>No of Boxes <br /> / Bags</p>
                                        </td>
                                        <td width="12%" style="">
                                            <p>Packing Size <br /> (In Kgs)</p>
                                        </td>
                                        <td width="25%" style="">
                                            <p>Net Qty Packed <br /> (In Kgs)</p>
                                        </td>
                                        <td style="">
                                            <p style="width: 90px;">Box / Bag <br /> Weight (In Kgs)</p>
                                        </td>
                                        <td style="">
                                            <p style="width: 58px;">Gross Weight<br /> Box / Bag (In Kgs)</p>
                                        </td>
                                        <td style="">
                                            <p style="width: 58px;">Action</p>
                                        </td>

                                    </tr>
                                    <tbody class="productshow">
                                        <?php $tr_id = 0;?>
                                        <tr class="itemslotdoc" id="<?php echo $tr_id; ?>">
                                            <td>
                                                <P>0.</P>
                                            </td>
                                            <td>
                                                <select class="form-select form-control" name='product[]' aria-label="Default select example">
                                                    <option selected="">Select Item</option>
                                                    @foreach ($product as $products)
                                                        <option value="{{$products->id}}">{{$products->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control "  name='box[]'   placeholder="Box">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control no_of_box" name='no_of_box[]' id="no_of_box" oninput="calculateTotalNoOfBoxes()" aria-describedby="emailHelp" placeholder="No Of Box">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name='packing_size[]' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Packing Size">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control net_quantity" name='net_quantity[]' id="net_quantity"  aria-describedby="emailHelp" placeholder="Net Qty Packed">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name='box_weight[]' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Box Weight">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control box_gross_weight" name='box_gross_weight[]'id="box_gross_weight"  aria-describedby="emailHelp" placeholder="Gross Weight">
                                            </td>
                                            <td>
                                                <a id="addproduct<?php echo ($tr_id + 1); ?>" onClick="addnewproduct(<?php echo ($tr_id + 1); ?>)" data-id="<?php echo ($tr_id + 1); ?>">
                                                    <span class="material-symbols-outlined text-primary">add_circle</span>
                                                </a>
                                            </td>

                                        </tr>
                                    </tbody>
                                    <tr>
                                        <td colspan="3">
                                            <h3 ><strong>Total</strong></h3>
                                        </td>
                                        <td>
                                            <h3 ><strong id="total-no-of-boxes">00.00</strong></h3>
                                        </td>
                                        <td colspan="3">
                                            <h3 id="total-net-quantity"id="total-net-quantity"><strong>00.00</strong></h3>
                                        </td>
                                        <td>
                                            <h3 id="total-gross-weight"><strong>00.00</strong></h3>
                                        </td>
                                        <td>
                                            <h3></h3>
                                        </td>

                                    </tr>

                                </table>
                                <div class="text-center mt-4">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('scripts')
<script>
    function calculateTotalNoOfBoxes() {
        var total = 0;
        $('.no_of_box').each(function() {
            var value = parseFloat($(this).val());
            console.log(value);
            if (!isNaN(value)) {
                total += value;
            }
        });
        $('#total-no-of-boxes').text(total);
        
    }
    $(document).ready(function() {
        calculateTotalNoOfBoxes();
        $('.no_of_box').on('input', calculateTotalNoOfBoxes);
    });
</script>



<script>
        function addnewproduct(rowid){
            if (rowid != ''){
                    $('#addproduct'+rowid).attr('disabled',true);
            }
            $.ajax({
                url:'{{url('export/get-add-row-indent')}}/'+rowid,
                type: "GET",
                success: function(response) {
                    console.log(response);
                    $(".productshow").append(response);
                        function updateTotal() {
                            var total = 0;
                            $('.no_of_box').each(function() {
                            var val = parseFloat($(this).val()) || 0;
                            total += val;
                            });
                            $('#total-no-of-boxes').text(total);
                        }
                }
            });
        }
    // Delete row Product
    function delRowProduct(rowid) {
        var lastrow = $(".itemslotdoc:last").attr("id");
        var active_div = parseInt(lastrow, 10); // Convert to integer
            if (!isNaN(active_div)) {
            // If active_div is a valid number
                $('#add' + active_div).attr('disabled', false);
                $(document).on('click', '.deleteButton', function () {
                    $(this).closest("tr.itemslotdoc").remove();
                    // After removing the row, update the total amount
                    updateTotalAmount();
                });
            } else {
                console.log("Error: lastrow is not a valid number.");
            }
   }    
</script>




@include('export.partials.scripts')
@endsection
