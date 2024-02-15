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
                  <form action="{{ url('export/add-exporter-pass') }}" method="post" enctype="multipart/form-data">
                     <h4 class="text-uppercase">Buyer Indent</h4>
                     <div class="container_main">
        <div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align: center;">
                <tr>
                    <td colspan="4" rowspan="4" style="vertical-align: top; text-align: left;">
                        <div class="d-flex mb-1">
                            <p class="mt-2" style="width:65%;">Exporter / Consignor :</p>
                            <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">3</option>
                                </select>
                        </div>
                        <div class="d-flex mb-1">
                            <p class="mt-2" style="width:65%;">Importer :</p>
                            <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">3</option>
                                </select>
                        </div>
                        <div class="d-flex">
                            <p class="mt-2" style="width:65%;">Buyer Order No :</p>
                             <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                        </div>
                    </td>
                    <td colspan="2">
                        <p>Buyer's Order / PO.NO.</p>
                    </td>
                    <td colspan="4">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Date of Packing.</p>
                    </td>
                    <td colspan="4">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Flight Date.</p>
                    </td>
                    <td colspan="4">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Gross Weight</p>
                    </td>
                    <td colspan="4">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="d-flex mb-1">
                            <div class="mt-2" style="width: 120px; text-align: left;">Vessel:</div>
                            <div><input type="email" class="form-control" id="exampleInputEmail1" placeholder="By Air"
                                    aria-describedby="emailHelp"></div>
                        </div>
                        <div class="d-flex">
                            <div class="mt-2" style="width: 120px; text-align: left;">Flight No :</div>
                            <div><input type="email" class="form-control" id="exampleInputEmail1" placeholder="QR0541"
                                    aria-describedby="emailHelp"></div>
                        </div>
                    </td>
                    <td colspan="2">
                        <p class="mb-2">Port of Discharge</p>
                        <p><input type="email" class="form-control" id="exampleInputEmail1" placeholder="QR0541"
                                aria-describedby="emailHelp"></p>
                    </td>
                    <td colspan="2">
                        <p class="mb-2">Final Destination</p>
                        <p><input type="email" class="form-control" id="exampleInputEmail1" placeholder="QR0541"
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
                <tr>
                    <td>
                        <P>1.</P>
                    </td>
                    <td>
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected="">1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </td>
                    <td>
                        <a class="text-primary" href="#">
                            <span class="material-symbols-outlined text-primary">
                                add_circle
                            </span>
                        </a>
                        <a class="text-danger" href="#">
                            <span class="material-symbols-outlined text-danger">
                                delete
                            </span>
                        </a>
                    </td>

                </tr>
                <tr>
                    <td colspan="3">
                        <h3><strong>Total</strong></h3>
                    </td>
                    <td>
                        <h3><strong>293</strong></h3>
                    </td>
                    <td colspan="3">
                        <h3><strong>1168.00</strong></h3>
                    </td>
                    <td>
                        <h3><strong>1838.85</strong></h3>
                    </td>
                    <td>
                        <h3></h3>
                    </td>

                </tr>

            </table>
            <div class="text-center mt-4">
                <button type="button" class="btn btn-primary">Submit</button>
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
@include('export.partials.scripts')
@endsection
