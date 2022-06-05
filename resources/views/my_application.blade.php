@extends('layouts.app')
@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text-o"></i> My Application</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Application</a></li>
  </ul>
</div>

<div class="tile user-settings">
  <h4 class="line-head">My Application</h4>
  <section class="invoice">
    <div class="row mb-4">

    </div>
    <div class="row invoice-info">
      @if(count($application)<=0)
      <div class="col-4">
        <p>No Application submitted yet </p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#applyModal">Submit Your Application Now</a>
      </div>
      @else
      <div class="col-12">
       <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Names</th>
                <th>Index No </th>
                <th>District</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($application as $items)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$items->firstname}} {{$items->middlename}} {{$items->lastname}}</td>
                <td>
                  {{$items->indexNo}}
                </td>
                
                <td>{{$items->district_name}}</td>
                
                <td>
                  @if($items->status==1)
                  <label class="badge badge-pill badge-dark">Pending</label>
                  @endif
                  @if($items->status==2)
                  <label class="badge badge-pill badge-info">Reviewing</label>
                  @endif
                  @if($items->status==3)
                  <label class="badge badge-pill badge-danger">Rejected</label>
                  @endif
                  @if($items->status==4)
                  <label class="badge badge-pill badge-success">Admitted</label>
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        
      </div>

      @endif
    </div>
    
  </section>
</div>

<div class="tile user-settings">
  <h4 class="line-head">Comments & Feedbacks</h4>
  <section class="invoice">
    <div class="row mb-4">

    </div>

    
  </section>
</div>
<!-- Modal address -->
<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Submit your Application</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <form method="POST" action="{{route('application.store')}}">
               @csrf
            <div class="form-group">
                  <input class="form-control" type="hidden" name="aID" value="{{$applicants->id}}">
                  <label class="control-label">Applicant</label>
                  <input class="form-control" type="text" name="aname" value="{{$applicants->firstname}} {{$applicants->middlename}} {{$applicants->lastname}}" disabled>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="control-label">Combination Choice 1</label>
                  <select class="form-control" name="choice1">
                    <option>--Select Combination--</option>
                      <option>MCB</option>
                      <option>MCE</option>
                      <option>MPG</option>
                      <option>MPC</option>
                      <option>MEG</option>
                      <option>PCB</option>
                      <option>PCM</option>
                  </select>
                  </div>
                  <div class="col">
                    <label class="control-label">Combination Choice 2</label>
                    <select class="form-control" name="choice2">
                      <option>--Select Combination--</option>
                      <option>MCB</option>
                      <option>MCE</option>
                      <option>MPG</option>
                      <option>MPC</option>
                      <option>MEG</option>
                      <option>PCB</option>
                      <option>PCM</option>
                    </select>
                  </div>
                </div>
                
                <br>
              <button class="btn btn-primary" type="submit"><i class="fa fa-floppy-o"></i>Submit</button>
        </form>
          </div>
  

      </div>
      
    </div>
  </div>
</div>

@endsection