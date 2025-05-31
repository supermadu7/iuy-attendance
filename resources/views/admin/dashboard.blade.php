@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
  <!-- Start::page-header -->
  <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
    <div>
      <h2 class="main-content-title fs-24 mb-1">Welcome To Dashboard</h2>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Project Dashboard</li>
      </ol>
    </div>
    <div class="d-flex">
      <button type="button" class="btn btn-white btn-icon-text my-2 me-2 d-inline-flex align-items-center">
        <i class="fe fe-download me-2 fs-14"></i> Import
      </button>
      <button type="button" class="btn btn-white btn-icon-text my-2 me-2 d-inline-flex align-items-center">
        <i class="fe fe-filter me-2 fs-14"></i> Filter
      </button>
      <button type="button" class="btn btn-primary my-2 btn-icon-text d-inline-flex align-items-center">
        <i class="fe fe-download-cloud me-2 fs-14"></i> Download Report
      </button>
    </div>
  </div>
  <!-- End::page-header -->

  <div class="row row-sm">
    <div class="col-sm-12 col-lg-12 col-xl-8">
      <!-- … (copy the original “row” blocks you want to show) … -->
    </div>

    <div class="col-sm-12 col-lg-12 col-xl-4 banner-img">
      <!-- … (copy the right‐hand column of cards) … -->
    </div>
  </div>
@endsection
