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
    <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Register</h3>
            <div class="tile-body">
              <form class="forms-sample" action="" method="POST">
                      @csrf
                     

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                         
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="First Name" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Middle Name" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                         
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Last Name" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Phone" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                         
                          <div class="col-sm-10">
                            <select  class="form-control" name="province_id" id="province">
                            <option value="" selected disabled>Select</option>
                              @foreach($provinces as $item)
                                <option value="{{$item->id}}"> {{$item->pro_name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          
                          <div class="col-sm-10">
                            <select  class="form-control" name="district_id" id="district">             
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                         
                          <div class="col-sm-10">
                            <select  class="form-control" name="sector_id" id="sector">                                
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          
                          <div class="col-sm-10">
                            <select  class="form-control" name="cell_id" id="cell">                                
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                        
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button ttype="submit" class="btn btn-primary me-2">Save</button>
                    </div>
                </form>
            </div>
          </div>
        </div>

@endsection