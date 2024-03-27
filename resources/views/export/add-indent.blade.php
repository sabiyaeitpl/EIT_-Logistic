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
                        @include('include.messages')
                        <div class="container_main">
                            <div>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align: center;">
                                    <tr>
                                        <td colspan="4" rowspan="4" style="vertical-align: top; text-align: left;">
                                            <div class="d-flex mb-1">
                                                <p class="mt-2" style="width:65%;">Exporter / Consignor :</p>
                                                <select class="form-select form-control" name="exporter_id" aria-label="Default select example" required>
                                                        <option value=""selected>Select</option>
                                                        @foreach ($exporter as $exporters)
                                                        <option value="{{$exporters->id}}">{{$exporters->company_name}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="d-flex mb-1">
                                                <p class="mt-2" style="width:65%;">Importer :</p>
                                                <select class="form-select form-control" name="importer_id" aria-label="Default select example" required>
                                                    <option value="" selected>Select</option>
                                                        @foreach ($importer as $importers)
                                                        <option value="{{$importers->id}}">{{$importers->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            {{-- <div class="d-flex mb-1">
                                                <p class="mt-2" style="width:65%;">Importer2 :</p>
                                                <select class="form-select form-control" name="importer_id2" aria-label="Default select example">
                                                    <option value="" selected>Select</option>
                                                        @foreach ($importer as $importers)
                                                        <option value="{{$importers->id}}">{{$importers->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div> --}}
                                             <div class="d-flex">
                                                <p class="mt-2" style="width:65%;">Buyer Order date :</p>
                                                <input type="date" class="form-control" name="buyer_or_date" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                @error('buyer_or_date')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                             <div class="d-flex mb-1">
                                                <p class="mt-2" style="width:65%;">Confirmation Type :</p>
                                                <select class="form-select form-control" name="confirmation_type" aria-label="Default select example" required>
                                                    <option value="" selected>Select</option>
                                                    <option value="WhatsAPP">WhatsAPP</option>
                                                    <option value="Verbal">Verbal</option>
                                                    <option value="Message">Message</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <p>Buyer's Order / PO.NO.</p>
                                        </td>
                                        <td colspan="4">
                                            <input type="text" class="form-control" name='po_no' id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Date of Packing.</p>
                                        </td>
                                        <td colspan="4">
                                            <input type="date" class="form-control" id="exampleInputEmail1" name="date_of_packing" aria-describedby="emailHelp" required>
                                            @error('date_of_packing')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Flight Date.</p>
                                        </td>
                                        <td colspan="4">
                                            <input type="date" class="form-control" name="flight_date" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            @error('flight_date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Gross Weight</p>
                                        </td>
                                        <td colspan="4">
                                            <input type="text" class="form-control"  name="gross_weight_limit" id="gross_weight" aria-describedby="emailHelp" required>
                                            @error('gross_weight_limit')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="1">
                                            <div class="d-flex mb-1">
                                                <div class="mt-2" style="width: 120px; text-align: left;">Means Of Transport:</div>
                                                <div><input type="text" class="form-control" id="exampleInputEmail1" name="vessel" 
                                                        aria-describedby="emailHelp"></div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="mt-2" style="width: 120px; text-align: left;">Flight No :</div>
                                                <div><input type="text" class="form-control" id="exampleInputEmail1" name="flight_no" 
                                                        aria-describedby="emailHelp"></div>
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <p>Port Of Loding</p>
                                            <input type="text" class="form-control" name="port_of_loding" required>
                                        </td>
                                        <td colspan="2">
                                            <p class="mb-2">Port of Discharge</p>
                                            <p><input type="text" class="form-control" id="exampleInputEmail1" name="port_of_discharge"
                                                    aria-describedby="emailHelp"></p>
                                        </td>
                                        <td colspan="2">
                                            <p class="mb-2">Final Destination</p>
                                            <p><input type="text" class="form-control" id="exampleInputEmail1" name="final_destination" 
                                                    aria-describedby="emailHelp" required></p>
                                        </td>

                                        <td colspan="2">
                                            <p>BOX MARKING</p>
                                            <input type="text" class="form-control" name="box_marking" required>
                                        </td>
                                    </tr>

                                    <tr>
                                        {{-- <td width="5%" style="">
                                            <p>SL. No.</p>
                                        </td> --}}
                                        <td width="20%" style="">
                                            <p>Item Name / List</p>
                                        </td>
                                        <td width="28%" style="">
                                            <p>Box / Bag</p>
                                        </td>
                                         <td width="10%" style="">
                                            <p>Box Weight (Kgs)</p>
                                        </td>
                                        <td width="12%" style="">
                                            <p>No of Boxes <br /> / Bags</p>
                                        </td>
                                        <td width="12%" style="">
                                            <p>Packing Size <br /> (In Kgs)</p>
                                        </td>
                                        <td width="12%" style="">
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
                                            {{-- <td>
                                                <P>1.</P>
                                            </td> --}}
                                            <td>
                                                <select class="form-select form-control" name='product_id[]' aria-label="Default select example">
                                                    <option value="" selected>Select Item</option>
                                                    @foreach ($product as $products)
                                                        <option value="{{$products->id}}">{{$products->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                {{-- <input type="text" class="form-control "  name='box[]'   placeholder="Box"> --}}
                                                 <select class="form-select form-control" name="box_or_bag[]" aria-label="Default select example" id="boxP" onChange="box()">
                                                        <option value="" selected>Select</option>
                                                        @foreach ($box as $boxs)
                                                        <option value="{{$boxs->id}}">{{$boxs->box_name}} / ({{$boxs->box_size}})</option>
                                                        @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control box_weight" name='box_weight[]' id="box_weight"  aria-describedby="emailHelp" >
                                            </td>
                                            <td>
                                                <input type="text" class="form-control no_of_box" name='no_of_box[]' id="no_of_box"  aria-describedby="emailHelp" >
                                            </td>
                                            <td>
                                                <input type="text" class="form-control packing_size" name='packing_size[]' id="packing_size" aria-describedby="emailHelp" >
                                            </td>
                                            <td>
                                                <input type="text" class="form-control net_quantity" name='net_quantity[]' id="net_quantity"  aria-describedby="emailHelp" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name='box_weight_kg[]' id="boxWeightKg" aria-describedby="emailHelp" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control box_gross_weight" name='box_gross_weight[]'id="box_gross_weight"  aria-describedby="emailHelp" readonly>
                                            </td>
                                            <td>
                                                <a id="addproduct<?php echo ($tr_id + 1); ?>" onClick="addnewproduct(<?php echo ($tr_id + 1); ?>)" data-id="<?php echo ($tr_id + 1); ?>">
                                                    <span class="material-symbols-outlined text-primary">add_circle</span>
                                                </a>
                                            </td>

                                        </tr>
                                    </tbody>
                                    <tr>
                                        <td colspan="2">
                                            <h3 ><strong>Total</strong></h3>
                                        </td>
                                        <td>
                                            <h3 ><strong id="total_box_weight" >00.00</strong></h3>
                                        </td>
                                        <td>
                                            <h3 ><strong id="total-no-of-boxes">00.00</strong></h3>
                                        </td>
                                         <td>
                                            <h3 ><strong id="total-packing_size">00.00</strong></h3>
                                        </td>
                                         <td>
                                            <h3 ><strong id="total-net_quantity" >00.00</strong></h3>
                                        </td>
                                        <td >
                                            <h3 id="total-boxWeightKg"><strong>00.00</strong></h3>
                                        </td>
                                        <td colspan="2">
                                            <h3 id="total-box_gross_weight" class="text-left"><strong>00.00</strong></h3>
                                            {{-- <h3><input class="form-control" id="total-box_gross_weight" name="total_box_weight" value="00.00"></h3> --}}
                                        </td>
                                       

                                    </tr>

                                </table>
                                <P id="gross_error" class="text-right"><strong class="text-dengar"></strong></P>
                                <div class="text-center mt-4">
                                    <button type="submit" name="submit" id="sbutton"class="btn btn-primary" >Submit</button>
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
    //this function show this id="box_weight" value initialy
     function box(){
        var selectedValue = document.getElementById('boxP').value;
        //console.log(selectedValue);
        $.ajax({
            url: "{{url('export/get-box-price')}}/" + selectedValue,
            type: "GET",
            success: function(response) {
                //console.log(response.box_weight);
                $('#box_weight').val(response.box_weight);
            },
            error: function(xhr, status, error) {
                console.error("AJAX request failed:", status, error);
            }
        });
    }

    //this function show this id="box_weight1",id="box_weight2",id="box_weight" and so on value that i get from controller
    function boxPP(idSuffix) {
        var selectedValue = document.getElementById('boxP' + idSuffix).value;
        //console.log(selectedValue);
        $.ajax({
            url: "{{url('export/get-box-price')}}/" + selectedValue,
            type: "GET",
            success: function(response) {
                $('#box_weight' + idSuffix).val(response.box_weight);
            },
            error: function(xhr, status, error) {
                console.error("AJAX request failed:", status, error);
            }
        });
    }
    // function box(){
    //     var selectedValue = document.getElementById('boxP').value;
    //     //console.log(selectedValue);
    //     $.ajax({
    //         url: "{{url('export/get-box-price')}}/" + selectedValue,
    //         type: "GET",
    //         success: function(response) {
    //             //console.log(response.box_weight);
    //             $('#box_weight').val(response.box_weight);
    //         },
    //         error: function(xhr, status, error) {
    //             console.error("AJAX request failed:", status, error);
    //         }
    //     });
    // }
    
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
            }
        });
    }

    function delRowProduct(rowid) {
        var lastrow = $(".itemslotdoc:last").attr("id");
        var active_div = parseInt(lastrow, 10); // Convert to integer
        if (!isNaN(active_div)) {
            // If active_div is a valid number
            $('#add' + active_div).attr('disabled', false);
            $(document).on('click', '.deleteButton', function () {
                $(this).closest("tr.itemslotdoc").remove();
                // After removing the row, update the total amount
                $(".itemslotdoc").each(function() {
                    calculateTotal(this); // Update total for each row after removing a row
                });
                checkGrossWeight(); // Check gross weight after removing a row
            });
        } else {
            console.log("Error: lastrow is not a valid number.");
        }
    }

    function calculateTotal(parentRow) {
        var boxWeightInput = parentRow.querySelector('[id^="box_weight"]');
        var numberOfBoxInput = parentRow.querySelector('[id^="no_of_box"]');
        var pakingSizeInput = parentRow.querySelector('[id^="packing_size"]');
        var boxWeightKgOutput = parentRow.querySelector('[id^="boxWeightKg"]');
        var netQuantityOutput = parentRow.querySelector('[id^="net_quantity"]');
        var grossWeightKgOutput = parentRow.querySelector('[id^="box_gross_weight"]');

        var boxWeight = parseFloat(boxWeightInput.value);
        var numberOfBox = parseFloat(numberOfBoxInput.value);
        var pakingSize = parseFloat(pakingSizeInput.value);

        if (!isNaN(boxWeight) && !isNaN(numberOfBox)&& !isNaN(pakingSize)) {
            var total = boxWeight * numberOfBox;
            var netQtyPacked = numberOfBox * pakingSize;
            var grossWeightKgs = total + netQtyPacked;
            boxWeightKgOutput.value = total.toFixed(2);
            netQuantityOutput.value = netQtyPacked.toFixed(2);
            grossWeightKgOutput.value = grossWeightKgs.toFixed(2);
        } else {
            console.log("Please enter valid numbers.");
        }

        // Calculate totals for other attributes
        var totalBoxWeightOutput = document.getElementById('total_box_weight');
        var totalNoOfBoxesOutput = document.getElementById('total-no-of-boxes');
        var totalPackingSizeOutput = document.getElementById('total-packing_size');
        var totalNetQuantityOutput = document.getElementById('total-net_quantity');
        var totalBoxWeightKgOutput = document.getElementById('total-boxWeightKg');
        var totalBoxGrossWeightOutput = document.getElementById('total-box_gross_weight');
        var totalBoxWeight = 0;
        var totalNoOfBoxes = 0;
        var totalPackingSize = 0;
        var totalNetQuantity = 0;
        var totalBoxWeightKg = 0;
        var totalBoxGrossWeight = 0;

        var boxWeightInputs = document.querySelectorAll('[id^="box_weight"]');
        boxWeightInputs.forEach(function(input) {
            var value = parseFloat(input.value);
            if (!isNaN(value)) {
                totalBoxWeight += value;
            }
        });

        var noOfBoxInputs = document.querySelectorAll('[id^="no_of_box"]');
        noOfBoxInputs.forEach(function(input) {
            var value = parseFloat(input.value);
            if (!isNaN(value)) {
                totalNoOfBoxes += value;
            }
        });

        var packingSizeInputs = document.querySelectorAll('[id^="packing_size"]');
        packingSizeInputs.forEach(function(input) {
            var value = parseFloat(input.value);
            if (!isNaN(value)) {
                totalPackingSize += value;
            }
        });

        var netQuantityInputs = document.querySelectorAll('[id^="net_quantity"]');
        netQuantityInputs.forEach(function(input) {
            var value = parseFloat(input.value);
            if (!isNaN(value)) {
                totalNetQuantity += value;
            }
        });

        var boxWeightKgInputs = document.querySelectorAll('[id^="boxWeightKg"]');
        boxWeightKgInputs.forEach(function(input) {
            var value = parseFloat(input.value);
            if (!isNaN(value)) {
                totalBoxWeightKg += value;
            }
        });

        var boxGrossWeightInputs = document.querySelectorAll('[id^="box_gross_weight"]');
        boxGrossWeightInputs.forEach(function(input) {
            var value = parseFloat(input.value);
            if (!isNaN(value)) {
                totalBoxGrossWeight += value;
            }
        });

        totalBoxWeightOutput.innerHTML  = totalBoxWeight.toFixed(2);
        totalNoOfBoxesOutput.innerHTML = totalNoOfBoxes.toFixed(2);
        totalPackingSizeOutput.innerHTML = totalPackingSize.toFixed(2);
        totalNetQuantityOutput.innerHTML = totalNetQuantity.toFixed(2);
        totalBoxWeightKgOutput.innerHTML = totalBoxWeightKg.toFixed(2);
        totalBoxGrossWeightOutput.innerHTML = totalBoxGrossWeight.toFixed(2);
    }

    function checkGrossWeight() {
        var grossWeightInput = document.getElementById('gross_weight');
        var totalBoxGrossWeightOutput = document.getElementById('total-box_gross_weight');
        var grossWeight = parseFloat(grossWeightInput.value);
        var totalBoxGrossWeight = parseFloat(totalBoxGrossWeightOutput.innerText);
        console.log(totalBoxGrossWeight);
        if (!isNaN(grossWeight) && !isNaN(totalBoxGrossWeight)) {
            // Calculate 2% of gross weight
            var threshold = grossWeight * 0.02;
            var threshold1 = grossWeight+threshold;
            var threshold4 = grossWeight * 0.05;
            var threshold5 = grossWeight+threshold4;
            if (totalBoxGrossWeight > threshold1) {
                //alert("Total box gross weight exceeds 2% of the gross weight!");
                document.getElementById("gross_error").innerText = "*** Note: The total box gross weight exceeds 2% of the gross weight. If you input more than 3%, this form will not be submitted.";

            }
            if (totalBoxGrossWeight > threshold5) {
                // window.location.reload();
                document.getElementById("sbutton").style.display = "none";
            } else {
                // Show the button
                document.getElementById("sbutton").style.display = "block"; // Or any other suitable display value
            }
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        var productshowTable = document.querySelector('.productshow');

        productshowTable.addEventListener("input", function(event) {
            var target = event.target;
            if (target.classList.contains("no_of_box") || target.id.startsWith("box_weight") || target.id.startsWith("no_of_box") || target.id.startsWith("packing_size")) {
                calculateTotal(target.closest('.itemslotdoc'));
                checkGrossWeight();
            }
        });
    });

</script>






@include('export.partials.scripts')
@endsection
