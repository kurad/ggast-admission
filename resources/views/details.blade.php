<div class="tile user-settings">
  <h4 class="line-head">Applicant</h4>
  <section class="invoice">
    <div class="row mb-4">

    </div>
    <div class="row invoice-info">
      @if($applicants->firstname==null)
      <div class="col-4">
        <p>No record found</p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#profileModal">Add your Details</a>
      </div>
      @else
      <div class="col-4">
        <address>
          <strong>Full Name:</strong> {{$applicants->firstname}} {{$applicants->middlename}} {{$applicants->lastname}}<br>
          <strong>Email:</strong> {{$applicants->email}}<br>
          <strong>Date of Birth:</strong> {{$applicants->dob}}<br>
          <strong>Index No:</strong> {{$applicants->indexNo}} 
        </address>
      </div>
      
      <div class="col-md-12">
            <a href="#home" class="btn btn-success" data-toggle="modal" data-target="#profileEditModal"><i class="fa fa-pencil"> Edit</i></a>
        </div>
      @endif
    </div>
    
  </section>
</div>


<!--
<div class="tile user-settings">
  <h4 class="line-head">Questions</h4>
  <section class="invoice">
    <div class="row mb-4">
      
    </div>
    <div class="row invoice-info">

      @if($questions->isEmpty())
      <div class="col-12">
        <p><strong>No answers added yet </strong></p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#questionModal">Add Answers</a>
      </div>
      @else
      <div class="col-12">
               @if(Session::has('message'))
                  <div class="alert alert-success">
                      {{Session::get('message')}}
                  </div>
               @endif
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Question 1</th>
                <th>Question 2</th>
                <th>Question 3</th>
                <th>Question 4</th>
                <th>Question 5</th>
                
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($questions as $question)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$question->question1}}</td>
                <td>{{$question->question2}}</td>
                <td>{{$question->question3}}</td>
                <td>{{$question->question4}}</td>
                <td>{{$question->question5}}</td>
                
                <td>
                  
                  <a href="{{route('viewAttachment',$question->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>View</a>
                  <a href="{{route('deleteAttachment',$question->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Remove</a>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#attachmentModal">Add Another</a>
      </div>

      @endif
    </div>
  </section>
</div>-->
<!-- Modal applicant -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add your Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

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
                      <input class="form-control" id="middlename" type="text" placeholder="Middle Name">
                    </fieldset>
                  </div>
                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="dob">Date of Birth</label>
                      <input class="form-control" id="dob" type="text" placeholder="DOB">
                    </fieldset>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
           
        </form>
          </div>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal edit applicant -->
<div class="modal fade" id="profileEditModal" tabindex="-1" role="dialog" aria-labelledby="profileEditModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit your Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

          <div class="tile">
            <form method="POST" action="{{route('store')}}">
               @csrf
            <div class="row">
              <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Given Name</label>
                    <input class="form-control" id="first_name" name="firstname" type="text" placeholder="Enter Given Name" value="{{$applicants->firstname}}">

                  </div>
                  <div class="form-group">
                    <label for="family_name">Family Name</label>
                    
                    <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Enter Family Name" value="{{$applicants->lastname}}">
                    
                  </div> 
              </div>
              <div class="col-lg-4 offset-lg-1">              
                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="disabledInput">Middle Name</label>
                      <input class="form-control" name="middlename" type="text" placeholder="Middle Name" value="{{$applicants->middlename}}">
                    </fieldset>
                  </div>
                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="dob">Date of Birth</label>
                      <input class="form-control" name="dob" type="date" placeholder="DOB" value="{{$applicants->dob}}">
                    </fieldset>
                  </div>
                  
              </div>
              <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="Index">Index No</label>
                      <input class="form-control" name="indexNo" type="text" placeholder="Index No" value="{{$applicants->indexNo}}">
                    </fieldset>
                  </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
           
        </form>
          </div>
      </div>
      
    </div>
  </div>
</div>


