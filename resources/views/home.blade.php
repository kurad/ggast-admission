@extends('layouts.app')
@section('content')
        
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text-o"></i> Applicant Dashboard</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <section class="invoice">
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="page-header">Welcome {{Auth::user()->name}}</h2><br>
            <p><strong>Go through all tabs to check if all required information is provided</strong></p>
          </div>
          <div class="col-6">
            <h5 class="text-right">{{date('d-m-Y');}}</h5>
          </div>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details"
            aria-selected="true">Applicant Details</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address"
            aria-selected="false">Address</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="parent-tab" data-toggle="tab" href="#parent" role="tab" aria-controls="parent"
            aria-selected="false">Parents/Guardian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#sibblings" role="tab" aria-controls="contact"
            aria-selected="false">Sibblings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="previous-school-tab" data-toggle="tab" href="#previous" role="tab" aria-controls="previous"
            aria-selected="false">Previous School</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#attachments" role="tab" aria-controls="attachments"
            aria-selected="false">Attachments</a>
          </li>
        </ul>

      </section>
    </div>
  </div>
</div>

<div class="row">
<div class="col-md-12">              
  <div class="tab-content" id="myTabContent">
   <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
    @include('details')
      </div>

   <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="col-lg-12 table-responsive">
      <h3>Profile</h3> <hr/>
      @include('profile')
    </div> 

  </div>

  <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
   <div class="tile-footer">
    @include('include.address')
  </div><br>
  <div class="col-12 table-responsive">
    <table class="table table-striped">

    </table>
  </div>
</div>
<div class="tab-pane fade" id="parent" role="tabpanel" aria-labelledby="parent-tab">
  <div class="tile-footer">
    
    @include('include.parents')
  </div>
</div>

<div class="tab-pane fade" id="sibblings" role="tabpanel" aria-labelledby="sibblings">
 <div class="tile-footer">
  @include('include.sibblings')
</div>
</div>

<div class="tab-pane fade" id="previous" role="tabpanel" aria-labelledby="previous-school-tab">
 <div class="tile-footer">
  @include('include.schools')
</div>
</div>
<div class="tab-pane fade" id="attachments" role="tabpanel" aria-labelledby="attachments">
 <div class="tile-footer">
  @include('include.attachments')
</div><br>

</div>
</div>
</div>
</div>
@endsection