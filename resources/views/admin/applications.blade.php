@extends('layouts.app')
@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text-o"></i> All Application</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Applications</a></li>
  </ul>
</div>

<div class="tile user-settings">
  <h4 class="line-head"> Applications</h4>
  <section class="invoice">
    <div class="row mb-4">

    </div>
    <div class="row invoice-info">
      @if(count($application)<=0)
      <div class="col-12">
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
                <th>Decision</th>
                <th>Action</th>
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
                <td>
                  <a href="" class="badge badge-pill badge-primary">Admit</a>
                  <a href="" class="badge badge-pill badge-danger">Reject</a>
                  <a href="" class="badge badge-pill badge-info"><i class="fa fa-commenting-o"></i></a>
                   
                </td>
                <td><a href="{{route('review.pdf',$items->id)}}" class="badge badge-success btn-sm"><i class="fa fa-eye"></i> Review</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
      @endif
    </div>
    
  </section>
</div>

@endsection