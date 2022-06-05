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
            
          </div>
          <div class="col-6">
            <h5 class="text-right">{{date('d-m-Y');}}</h5>
          </div>
        </div>
        </ul>

      </section>
    </div>
  </div>
</div>

<div class="row">
<div class="col-md-12">              
  <div class="tab-content" id="myTabContent">
   <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
    
      </div>

   <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="col-lg-12 table-responsive">
      <h3>Profile</h3> <hr/>
     
    </div> 

  </div>

  <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
   <div class="tile-footer">
    &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="button"><i class="fa fa-plus"></i>Add Address</button>
  </div><br>
  <div class="col-12 table-responsive">
    <table class="table table-striped">

    </table>
  </div>
</div>
<div class="tab-pane fade" id="parent" role="tabpanel" aria-labelledby="parent-tab">

  <div class="col-md-12"><br>
    <h4>Parents / Guardian Info</h4> <hr/>
    
  </div>
</div>
<div class="tab-pane fade" id="previous" role="tabpanel" aria-labelledby="previous-school-tab">
 <div class="tile-footer">
  &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="button"><i class="fa fa-plus"></i>Add Schools</button>
</div><br>

</div>

<div class="tab-pane fade" id="sibblings" role="tabpanel" aria-labelledby="sibblings">
 <div class="tile-footer">
  &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="button"><i class="fa fa-floppy-o"></i>Save info</button>
</div><br>

</div>

<div class="tab-pane fade" id="attachments" role="tabpanel" aria-labelledby="attachments">
 <div class="tile-footer">
  &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="button"><i class="fa fa-paperclip"></i>Attach</button>
</div><br>

</div>
</div>
</div>
</div>
@endsection