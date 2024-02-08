@extends('export.layouts.master')

@section('title')
Export - Pass Information
@endsection

@section('sidebar')
@include('export.partials.sidebar')
@endsection

@section('header')
@include('export.partials.header')
@endsection

@section('content')

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
    <div class="row" style="border:none;">
            <div class="col-md-6">
            <h5 class="card-title">Edit Exporter Pass</h5>
</div>
<div class="col-md-6">

                           <span class="right-brd" style="padding-right:15x;">
                            <ul class="">
                                <li><a href="#">Export</a></li>

								<li>/</li>
                                <li><a href="#">Exporter Pass List</a></li>

								<li>/</li>
                                <li class="active">Exporter Pass Edit</li>

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
                        <form action="{{ route('export.update.exporter.pass', ['id' => $pass->id]) }}" method="put" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row form-group">

                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Date <span>(*)</span></label>
                                    <input type="date" id="date" name="date" value="{{$pass->date}}" class="form-control" required readonly>
                                </div>

                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Reference Id <span>(*)</span></label>
                                    <input type="text" id="reference_id" name="reference_id" value="{{$pass->reference_id}}" class="form-control" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Exporter <span>(*)</span></label>
                                    <select name="exporter_id" id="exporter_id" class="form-control" required>
                                        <option value="">Select Exporter</option>
                                        @foreach ($exporter as $exporters)
                                                <option value="{{ $exporters->id }}"
                                                        {{ $pass->exporter_id == $exporters->id ? 'selected' : '' }}>
                                                    {{ $exporters->company_name }}
                                                </option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Importer-1 <span>(*)</span></label>
                                    <select class="form-control" name="importer_name1" required>
                                        <option value="">Slect Importer</option>
                                        @foreach ($importer as $importers)
                                        <option value="{{$importers->id}}" {{ $pass->importer_name1 == $importers->id ? 'selected' : '' }}>{{$importers->name}}</option>
                                        @endforeach
                                     </select>
                                </div>
                                {{-- <div class="col-md-8">
                                    <label for="email-input" class=" form-control-label">Address(Importer-1) <span>(*)</span></label>
                                    <textarea name="importer_address1" id="importer_address1" cols="4" rows="2" class="form-control" required>{{$pass->importer_address1}}</textarea>
                                </div> --}}
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Importer-2 </label>
                                    <select class="form-control" name="importer_name2" >
                                        <option value="">Slect Importer</option>
                                        @foreach ($importer as $importers)
                                        <option value="{{$importers->id}}" {{ $pass->importer_name2 == $importers->id ? 'selected' : '' }}>{{$importers->name}}</option>
                                        @endforeach
                                     </select>
                                </div>
                                <input type="hidden" name="importer_address2">
                                <input type="hidden" name="importer_address1">
                                {{-- <div class="col-md-8">
                                    <label for="email-input" class=" form-control-label">Address(Importer-2) </label>
                                    <textarea name="importer_address2" id="importer_address2" cols="4" rows="2" class="form-control">{{$pass->importer_address2}}</textarea>
                                </div> --}}
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Means of Transport <span>(*)</span></label>
                                    <input type="text" id=""  name="means_of_transport" value="{{$pass->means_of_transport}}"  class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Port of Loading<span>(*)</span></label>
                                    <input type="text" id="port_of_loading"  name="port_of_loading" value="{{$pass->port_of_loading}}" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Port of Discharge<span>(*)</span></label>
                                    <input type="text" id="port_of_discharge" value="{{$pass->port_of_discharge}}"   name="port_of_discharge" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Final Destination<span>(*)</span></label>
                                    <input type="text" id="final_destination" value="{{$pass->final_destination}}"  name="final_destination" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Mark & no of Packages <span>(*)</span></label>
                                    <input type="text" id="" name="marks_of_package" value="{{$pass->marks_of_package}}" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="email-input" class=" form-control-label">Total Packages <span>(*)</span></label>
                                    <input type="text" id="" name="total_package" value="{{$pass->total_package}}" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class="form-control-label">No of Kind of Packages <span>(*)</span></label>
                                    <select name="no_of_package" id="no_of_package" class="form-control">
                                        <option value="">Select Goods</option>
                                        @foreach ($goods as $good)
                                            <option value="{{ $good->id }}" {{ $good->id == $pass->no_of_package ? 'selected' : '' }}>
                                                {{ $good->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="email-input" class="form-control-label">Description of Goods </label>
                                    <textarea id="goods_description" cols="4" rows="5" class="form-control" readonly></textarea>
                                </div>

                                <div class="col-md-2">
                                    <label for="email-input" class=" form-control-label">Origin Criteria <span>(*)</span></label>
                                    <input type="text" id=""  name="origin_criteria" value="{{$pass->origin_criteria}}" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="email-input" class=" form-control-label">Type of Pkgs <span>(*)</span></label>
                                    <input type="text" id=""  name="type_of_packeg" value="{{$pass->type_of_packeg}}" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Gross Weight Quantity <span>(*)</span></label>
                                    <input type="text" id=""  name="gross_weight_quantity" value="{{$pass->gross_weight_quantity}}" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Net Weight Quantity <span>(*)</span></label>
                                    <input type="text" id=""  name="net_weight_quantity" value="{{$pass->net_weight_quantity}}" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="email-input" class=" form-control-label">Designation <span>(*)</span></label>
                                    <input type="text" id=""  name="designation"  value="{{$pass->designation}}" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Invoice No <span>(*)</span></label>
                                    <input type="text" id=""  name="invoice_no" value="{{$pass->invoice_no}}" class="form-control" required readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Export to <span>(*)</span></label>
                                    <input type="text" id=""  name="export_to" value="{{$pass->export_to}}" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Place <span>(*)</span></label>
                                    <input type="text" id=""  name="place" value="{{$pass->place}}" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-input" class=" form-control-label">Place Date <span>(*)</span></label>
                                    <input type="date" id=""  name="place_date" value="{{$pass->place_date}}" class="form-control" required>
                                </div>


                            </div>


                            <button type="submit" class="btn btn-danger btn-sm">Submit
                            </button>

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

@section('scripts')
@include('export.partials.scripts')
<script>
    $(document).ready(function() {
        $('#no_of_package').on('change', function() {
            var goodsId = $(this).val();

            if (goodsId) {
                $.ajax({
                    url: '{{ url("/get-goods-description/") }}' + '/' + goodsId,
                    type: 'GET',
                    success: function(response) {
                        var descriptions = response.descriptions.join('\n');
                        $('#goods_description').val(descriptions);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            } else {
                $('#goods_description').val('');
            }
        });
    });
</script>

@endsection
