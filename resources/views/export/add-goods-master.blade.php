@extends('export.layouts.master')

@section('title')
Export - Goods Information
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
            <h5 class="card-title">Add Goods Master</h5>
</div>
<div class="col-md-6">

                           <span class="right-brd" style="padding-right:15x;">
                            <ul class="">
                                <li><a href="#">Export</a></li>

								<li>/</li>
                                <li><a href="#">Goods Master List</a></li>

								<li>/</li>
                                <li class="active">Goods Master Add</li>

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
                          @include('include.messages')
                        </div>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{ url('export/save-goods-master') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{ isset($data) ? $data->id : '' }}">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="email-input" class=" form-control-label">Name <span>(*)</span></label>
                                    <input type="text" id="name" required name="name" class="form-control" >
                                    @if ($errors->has('name'))
                                    <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <fieldset>
                                        <table border="1" class="table table-bordered table-responsove" style="border-collapse:collapse;overflow-x:scroll;">
                                            <thead>
                                            <tr>
                                                <th>Sl.No.</th>
                                                <th>Product Name</th>
                                                <th>HS Code</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody id="productshow">
                                            <?php $tr_id = 0;?>
                                            <tr class="itemslotdoc" id="<?php echo $tr_id; ?>">
                                                <td>1</td>
                                                <td>
                                                   <input type="text" class="form-control" name="product[]" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="hscode[]" required>
                                                 </td>

                                                <td><button class="btn-success" type="button" id="addproduct<?php echo ($tr_id + 1); ?>" onClick="addnewproduct(<?php echo ($tr_id + 1); ?>)" data-id="<?php echo ($tr_id + 1); ?>"> <i class="ti-plus"></i> </button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </fieldset>
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
function addnewproduct(rowid){
    if (rowid != ''){
               $('#addproduct'+rowid).attr('disabled',true);

       }
       $.ajax({

               url:'{{url('export/get-add-row-product')}}/'+rowid,
               type: "GET",

               success: function(response) {

                   $("#productshow").append(response);

               }
           });
}
function delRowProduct(rowid)
   	{
   		var lastrowdoc = $(".itemslotdoc:last").attr("id");
           var active_div = (lastrowdoc-1);
           $('#addProduct'+active_div).attr('disabled',false);
           $(document).on('click','.deleteButtondoc',function() {
               $(this).closest("tr.itemslotdoc").remove();
           });

   	}
</script>
@endsection
