
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
          	<form method="POST" action="{{route('store')}}">
          		 @csrf
            <div class="row">

              <div class="col-lg-6">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Given Name</label>
                    
                    <input class="form-control" id="first_name" name="firstname" type="text" placeholder="Enter Given Name" >

                  </div>
                  <div class="form-group">
                    <label for="family_name">Family Name</label>
                    
                    <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Enter Family Name">
                    
                  </div> 
            
              </div>
              <div class="col-lg-4 offset-lg-1">
                
                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="disabledInput">Middle Name</label>
                      <input class="form-control" id="middle_name" name="middlename" type="text" placeholder="Middle Name">
                    </fieldset>
                  </div>
                  <div class="col">
                    <label class="control-label">Index No(S3)</label>
                    <input class="form-control" type="text" name="indexNo" placeholder="Enter Index No (S3 only)">
                  </div>
                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="dob">Date of Birth</label>
                      <input class="form-control" id="dob" name="dob" type="date" placeholder="DOB">
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
