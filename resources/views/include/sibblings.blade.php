<div class="tile user-settings">
  <h4 class="line-head">Sibblings</h4>
  <section class="invoice">
    <div class="row mb-4">

    </div>
    <div class="row invoice-info">
      @if($sibblings->isEmpty())
      <div class="col-4">
        <p><strong>No sibblings information added yet </strong></p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#sibblingModal">Add sibbling Details</a>
      </div>
      @else
      <div class="col-12">
               
          <table class="table">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Sex </th>
                <th>DOB</th>
                <th>School</th>
                <th>Fees</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($sibblings as $sibbling)
              <tr>
                <td>{{$sibbling->fullname}}</td>
                <td>{{$sibbling->sex}}</td>
                <td>{{$sibbling->dob}}</td>
                <td>{{$sibbling->school_attended}}</td>
                <td>{{$sibbling->fees}}</td>
                <td><a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#sibblingModal">Add Another</a>
      </div>

      @endif
    </div>
  </section>
</div>


<!-- Modal Sibbling -->
<div class="modal fade" id="sibblingModal" tabindex="-1" role="dialog" aria-labelledby="sibblingModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Your sister/brother details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

          <div class="tile">
            <form method="POST" action="{{route('storeSibbling')}}">
                @csrf
                <div class="form-group">
                  <input class="form-control" type="hidden" name="aID" value="{{$applicant_sib->id}}">
                  <label class="control-label">Applicant</label>
                  <input class="form-control" type="text" name="aname" value="{{$applicant_sib->firstname}} {{$applicant_sib->middlename}} {{$applicant_sib->lastname}}" disabled>
                </div>
                <div class="form-group">
                  <label class="control-label">Sibbling Full Name</label>
                  <input class="form-control" type="text" name="sname" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Sex</label>
                    <select class="form-control" name="sex">
                      <option>--- Select ---</option>
                      <option value="M">Male</option>
                      <option value="F">Female</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">DOB</label>
                    <input class="form-control" type="text" name="dob" placeholder="Enter dob">
                </div>
                <div class="form-group">
                  <label class="control-label">School</label>
                    <input class="form-control" type="text" name="school" placeholder="Enter school name">
                </div>
                <div class="form-group">
                  <label class="control-label">Fee Paid</label>
                    <input class="form-control" type="text" name="fee" placeholder="Enter fee paid">
                </div>
                <div class="form-group">
                  <label class="control-label">Have you ever had a sibling attend Gashora Girls Academy</label>
                    <input class="form-control" type="text" name="sibbling" placeholder="Enter her name">
                </div>


              <button class="btn btn-primary" type="submit"><i class="fa fa-floppy-o"></i>Save</button>
   
              </form>
          </div>
      </div>
      
    </div>
  </div>
</div>