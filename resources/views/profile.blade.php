
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
          	<form method="POST" action="{{route('store')}}">
          		 @csrf
            <div class="row">

              <div class="col-lg-6">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Given Name</label>                    
                    <input class="form-control" id="first_name" name="firstname" type="text" placeholder="Enter Given Name" value="{{ $applicants->firstname }}">
                  </div>
                  <div class="form-group">
                    <label for="family_name">Family Name</label>
                    <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Enter Family Name" value="{{$applicants->lastname}}"> 
                  </div> 

                  <div class="form-group">
                    <label for="email">Email</label>
                    
                    <input class="form-control" id="email" type="text" placeholder="Enter Given Name" value="{{$applicants->email}}">
                  
                  </div>
            
              </div>
              <div class="col-lg-4 offset-lg-1">
                
                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="disabledInput">Middle Name</label>
                      <input class="form-control" id="middle_name" type="text" placeholder="Middle Name" value="{{$applicants->middlename}}">
                    </fieldset>
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="disabledInput">Index No</label>
                      <input class="form-control" name="indexNo" type="text" placeholder="Enter Index No" value="{{$applicants->indexNo}}">
                    </fieldset>
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="dob">Date of Birth</label>
                      <input class="form-control" name="dob" type="date" placeholder="DOB" value="{{$applicants->dob}}">
                    </fieldset>
                  </div>
              </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-flopy-o"></i>Save Profile</button> 

            </div>
            @if(Session::has('success'))
                  <div class="alert alert-success">
                      {{Session::get('success')}}
                  </div>
               @endif
        </form>
          </div>
        </div>
      </div>
