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
<!-- Content -->
<div class="content">
   <!-- Animated -->
   <div class="animated fadeIn">
      <div class="row" style="border:none;">
         <div class="col-md-6">
            <h5 class="card-title">Add Indent Invoice</h5>
         </div>
         <div class="col-md-6">
            <span class="right-brd" style="padding-right:15x;">
               <ul class="">
                  <li><a href="#">Export</a></li>
                  <li>/</li>
                  <li><a href="#">Indent Invoice</a></li>
                  <li>/</li>
                  <li class="active">Indent Invoice Add</li>
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
                     {{-- design inside here --}}
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
